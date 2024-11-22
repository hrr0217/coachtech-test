<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('index');
    }
    public function confirm(Request $request){
        $contact = $request->only(['name', 'gender', 'email', 'tel', 'address', 'building', 'category', 'content']);
        return view('confirm', ['contact' => $contact]);
    }
    public function thanks(){
        return view('thanks');
    }
}
