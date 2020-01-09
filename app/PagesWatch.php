<?php

namespace App;

use App\Http\Controllers\PostController;
use App\Models_Overloaded\ModelHug;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PagesWatch extends ModelHug
{
    protected $table = 'pages_watches';

    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function initNew($ip, $path, $object, $alias, $user_id = NULL)
    {
        $this->ip_user = $ip;
        $this->path = $path;
        $this->object_id = $object;
        $this->object_alias = $alias;
        $this->count = 1;
        $this->user_id = $user_id;
    }

    public function getMostReaded($limit)
    {
        $news = self::where('object_alias', PostController::ALIAS)
            ->select('')
            ->groupBy('object_id')
            ->limit($limit);
    }


    public function setWatch($request, $settings)
    {
        if(is_array($settings) && isset($settings['object_id']) && isset($settings['object_alias']))
        {
            $path = $request->path();
            $ip_user = $request->ip();

            $object_id = $settings['object_id'];
            $object_alias = $settings['object_alias'];

            $condition = [
                ['path', '=', $path],
                ['object_id', '=', $object_id],
                ['object_alias', '=', $object_alias],
                ['ip_user', '=', $ip_user]
            ];
            $query_watch = DB::table($this->table)
                ->where($condition);

            $auth = null;

            if(Auth::check())
            {
                $auth = Auth::user();

                $condition[] = ['user_id', $auth->id];
                $query_watch->orWhere($condition);
            }

            $watch_item = $query_watch->first();



            if($watch_item != NULL)
            {
                $updates = array();


                // Когда с того же ip просматривал пост без авторизации
                if($auth != NULL)
                {
                    $updates['count'] = ++$watch_item->count;

                    // сохраняем id'шку
                    if($watch_item->user_id == NULL)
                    {
                        $updates['user_id'] = $auth->id;
                    }
                    // Если зашел с того же ip, но под другой учеткой
                    else if((int)$watch_item->user_id != $auth->id)
                    {
                        $this->initNew($ip_user, $path, $object_id, $object_alias, $auth->id);
                        $this->save();
                    }
                    $query_watch->update($updates);
                }
                else if($watch_item->user_id == NULL)
                {
                    $updates['count'] = ++$watch_item->count;
                    $query_watch->update($updates);
                }


            }
            else
            {
                $this->initNew($ip_user, $path, $object_id, $object_alias);
                $this->save();
            }


        }
    }

}
