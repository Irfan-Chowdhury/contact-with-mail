<?php


namespace Irfan\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Irfan\Contact\Mail\ContactMailable;
use Irfan\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact_us');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        
        return redirect()->back();
    }
}
