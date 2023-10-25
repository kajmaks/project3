<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function ShowUser(Request $req){
        $data = [
            'firstName' => $req -> input('firstName'),
            'lastName' => $req -> input('lastName'),
        ];

        return view('user', $data);
        
    }
}
