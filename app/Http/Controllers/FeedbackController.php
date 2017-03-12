<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use Session;

class FeedbackController extends Controller
{
    public function send_mail(Request $request)
    {
        $name = $request->name;
        $telephone = $request->telephone;
        
        $message = "\n";
        $message .= "Заявка";
        $message .= "\n";
        $message .= "\n";
        $message .= "Имя: " . $name;
        $message .= "\n";
        $message .= "телефон: " . $telephone;
        $message .= "\n";
        $message .= "\n";
        
        Mail::raw($message, function ($mail) use ($name, $telephone ) {
                
            $mail->from('test@ginnova.kz', 'Заявка' );
            $mail->to('em@ginnova.kz')->subject('window-fashion');
            $mail->to('tester@ginnova.kz')->subject('window-fashion');
        });

        Session::flash('mail', "Успешно отправлено!");

        return back();
           
    }

    public function send_contacts(Request $request)
    {
        $name = $request->name;
        $telephone = $request->telephone;
        
        $message = "\n";
        $message .= "Заявка";
        $message .= "\n";
        $message .= "\n";
        $message .= "Имя: " . $name;
        $message .= "\n";
        $message .= "телефон: " . $telephone;
        $message .= "\n";
        $message .= "телефон: " . $email;
        $message .= "\n";
        $message .= "\n";
        
        Mail::raw($message, function ($mail) use ($name, $telephone, $email ) {
                
            $mail->from('test@ginnova.kz', 'Заявка' );
            $mail->to('em@ginnova.kz')->subject('window-fashion');
            $mail->to('tester@ginnova.kz')->subject('window-fashion');
        });

        Session::flash('mail', "Успешно отправлено!");

        return back();
           
    }

    public function send_catalog(Request $request)
    {
        $name = $request->name;
        $telephone = $request->telephone;
        $product = $request->product;
        
        $message = "\n";
        $message .= "Заявка";
        $message .= "\n";
        $message .= "\n";
        $message .= "Имя: " . $name;
        $message .= "\n";
        $message .= "Телефон: " . $telephone;
        $message .= "\n";
        $message .= "Продукция: " . $product;
        $message .= "\n";
        $message .= "\n";

        Mail::raw($message, function ($mail) use ($name, $telephone, $product ) {
            $mail->from('test@ginnova.kz', 'Заявка' );
            $mail->to('em@ginnova.kz')->subject('window-fashion');
            $mail->to('tester@ginnova.kz')->subject('window-fashion');
        });

        Session::flash('mail', "Успешно отправлено!");
        
        return back();
    }
}
