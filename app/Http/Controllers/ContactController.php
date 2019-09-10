<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Redirect,Response,DB,Config;
use Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request, [
            'contact_name' => 'required',
            'contact_email' => 'required|email',
            'contact_message' => 'required'
        ]);
 
        // ContactUs::create($request->all());
/*        
        Mail::send('emails.contactmail',
        array(
           'name' => $request->get('contact_name'),
           'email' => $request->get('contact_email'),
           'user_message' => $request->get('contact_message')
        ), function($message)
        {
            $message->from('techanical-atom@gmail.com');
            $message->to('user@example.com', 'Admin')
            ->subject('Contact Form Query');
        });
*/
        //$message = $this->contact($request);
        //Mail::to('dadomingues@gmail.com')->send($message);

        $data = array(
           'name' => $request->get('contact_name'),
           'email' => $request->get('contact_email'),
           'user_message' => $request->get('contact_message')
        );  

        $email = $request->get('contact_email');
        $username = $request->get('contact_name');
   
        Mail::send('emails.contactemail', $data, function($message) use ($email, $username) {
            $message->to('dadomingues@gmail.com', 'David Domingues')->subject
                ('Contact from Portfolio de '.$username);
            $message->from($email, $username);
        });

        if (Mail::failures()) {
            return back()->withError('error', 'Sorry! Please try again later');
        }else{
            return back()->with('success', 'Thanks for contacting us!');
        }
    }

    private function contact($request)
    {
        return 'Name:<br/>'.$request->get['contact_name'].'<br/>Email:<br/>'.$request->get['contact_email'].'<br/>Message:<br/>'.$request->get['contact_message'];
    }
}
