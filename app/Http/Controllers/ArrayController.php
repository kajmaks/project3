<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function ShowArray(){
        $data = [
            'firstName' => 'Jan',
            'lastName' => 'Nowak',
            'city' => 'Poznan',
            'hobby' => ['siatkówka', 'koszykówka', 'skoki narciarskie']
        ];
        return view('array', ['user' => $data]);
    }
}
