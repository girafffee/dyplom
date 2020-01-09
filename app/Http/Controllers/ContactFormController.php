<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.contact.index');
    }

    protected function validator(array $request)
    {
        $attr = [
            'subject' => ['required', 'string', 'max:10'],
            'message' => ['required', 'string', 'max:1000'],
        ];
        $messages = [
            'required'      => 'Заполните пожалуйста поле для :attribute',
            'subject.max'   => 'не слишком ли дохера?',
        ];
        if(!Auth::check())
        {
            $attr['email'] = 'required|email';
            $messages['email.email'] = $request['email'] . ' - не является email-адресом';
        }

        $validator = Validator::make($request, $attr, $messages);

        return $validator;
    }

    public function send(Request $request)
    {
        $form = new Feedback();
        $inputs = $request->all();

        $validator = $this->validator($inputs);

        if ($validator->fails()) {
            return redirect()->route('contact.index')
                ->withErrors($validator)
                ->withInput();
        }

        $form->message = $request->message;
        $form->subject = $request->subject;

        if(Auth::check())
        {
            $form->email = Auth::user()->email;
            $form->user_id = Auth::id();
        }
        else
        {
            $form->email = trim($request->email);
        }

        $form->save();

        return redirect()->route('contact.response');
    }
}
