<?php

namespace App;

use App\Models_Overloaded\ModelHug;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class Comment extends ModelHug
{
    protected $table = 'comments';

    const DEFAULT_STATUS = 1;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function beforeSave()
    {
        $this->user_id = Auth::id();
        $this->status_id = self::DEFAULT_STATUS;
    }


	public function validate()
	{
		$attr = [
            'text' => ['required', 'string', 'max:1000', 'min:5'],
        ];
        $messages = [
            'text.required'     => 'Заполните пожалуйста поле для :attribute',
            'text.max'          => 'не слишком ли до****?',
        ];

        $validator = Validator::make($this->attributes, $attr, $messages);

        return $validator;
	}





}
