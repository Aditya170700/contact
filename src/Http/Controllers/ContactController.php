<?php

namespace Adityaricki\Contact\Http\Controllers;

use Illuminate\Http\Request;
use Adityaricki\Contact\Models\Contact;
use Adityaricki\Contact\Mail\ContactMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        return view('contact::contact');
    }

    public function store()
    {
        Mail::to(config('contact.mail_to'))->send(new ContactMail($this->request));
        Contact::create($this->request->all());
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
