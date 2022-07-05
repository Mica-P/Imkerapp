<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
class ContactUsFormController extends Controller {
    // Create Contact Form
    public function createForm(Request $request) {
        return view('contact');
    }
    // Store Contact Form data
    public function ContactUsForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject'=>'required',
            'message' => 'required'
        ]);
        //  Store data in database
        Contact::create($request->all());
        //  Send mail to admin
        \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('6012520@mborijnland.nl', 'Admin')->subject($request->get('subject'));
        });
        return redirect('contact')
            ->with('success','Mail verzonden!');
    }
}
