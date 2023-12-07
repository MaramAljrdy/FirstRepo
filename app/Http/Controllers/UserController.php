<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'MaramController';
    }

    public function sum($id){
        $id=$id+5;
        return 'MaramController with id '. $id;
    }
    public function maram(){
        return 'this is maram project';
    }
}
