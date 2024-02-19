<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BdsController extends Controller
{
    public function index(){
        return response('Здесь будет какая-то информация...')->header('Content-Type','text/plain');
    }
}
