<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CandidatesModel;
use App\SkillsModel;
use Carbon;

class CandidatesController extends Controller
{
    public function save(Request $request){
       $validation = $request->validate([
           "email" => "required|email",
           "telepon" => "required|numeric"
       ]);
       
       $save = CandidatesModel::insert([
        "name" => $request->nama,
        "email" => $request->email,
        "phone" => $request->telepon,
        "year" => $request->tahunlahir,
        "created_at" => Carbon\Carbon::now(),
        "updated_at" => Carbon\Carbon::now()
       ]);

       if($save){
            $get_current_user = CandidatesModel::select("id")->where("email", $request->email)->first();
            $save_skills = SkillsModel::insert([
                "name" => $request->skillsets,
                "updated_at" =>  Carbon\Carbon::now(),
                "created_at" => Carbon\Carbon::now() 
            ]);

            if($save_skills){
                return redirect()->to("/")->with("success", "Anda telah mendaftarkan diri!");
            }
           
       }else{
           return redirect()->back()->withErrors("Registrasi anda gagal!");
       }
    }
}
