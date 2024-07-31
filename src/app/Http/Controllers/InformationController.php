<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class InformationController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create(Request $request){
        $form = $request->all();
        return redirect('/confirm');
    }

    public function confirm()
    {
        $contacts = Contact::all();
        return view('confirm' ,['contacts' => $contacts]);
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function register ()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function admin()
    {
        return view('admin');
    }
}
