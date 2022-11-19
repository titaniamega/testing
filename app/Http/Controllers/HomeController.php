<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JabatanModel;

class HomeController extends Controller
{
    public function index(){
        return view("home", ["jabatan" => JabatanModel::all()]);
    }
}
