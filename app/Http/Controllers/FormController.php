<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function conForm(){
        return view('form.contoh-form');
    }
    public function eleForm(){
        return view('form.form-sample');
    }
}
