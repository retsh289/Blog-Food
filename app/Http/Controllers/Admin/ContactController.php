<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contact = Contact::paginate(10);
        return view('admin.contact.index', ['contact' => $contact]);
    }
    public function create(Request $request){
        $contact = new Contact;
        $contact -> name = $request -> name;
        $contact -> email = $request -> email;
        $contact -> subject = $request -> subject;
        $contact -> message = $request -> message;
        $contact -> createdAt = new \DateTime();
        $contact -> save();

        return redirect() -> route('contact');
    }
}
