<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Illuminate\Http\Request;

class BdsController extends Controller
{
    public function index(){
        try{
            $context = ['bbs'=>Bb::latest()->get(),'url'=>env('APP_URL', 'http://localhost:8199')];
        }catch (Exception $e){
            $context = ['bbs'=>[],'error'=>true,'message'=>$e->getMessage()];
        }

        return view('index',$context);
    }
    public function detail(Bb $bb) {
        return view('detail', ['bb' => $bb]);
    }
}
