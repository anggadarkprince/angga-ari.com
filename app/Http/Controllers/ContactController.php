<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show the form to submit contact.
     *
     * @return Response
     */
    public function form()
    {
        return view('statics.contact');
    }

    /**
     * Store a contact from visitor.
     *
     * @param  Request $request
     * @return Response
     */
    public function save(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required|max:50',
            'email' => 'required|email|max:50',
            'website' => 'max:50',
            'message' => 'required|max:1000',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->website = $request->website;
        $contact->message = $request->message;
        $contact->subject = 'Subject ' . uniqid();
        $contact->contact = 'Contact ' . uniqid();
        $contact->ip = $request->ip();

        if ($contact->save()) {
            return redirect()->back()->with([
                'status' => 'success',
                'message' => __('Your message was successfully sent')
            ]);
        }

        return redirect()->back()->with([
            'status' => 'danger',
            'message' => __('Something went wrong, try again later')
        ]);
    }
}
