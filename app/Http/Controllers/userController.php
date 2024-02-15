<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function studentData(){
        $students=DB::table('student')
                      ->select('student.*','cities.city_name')
                      ->join('cities','student.city','=','cities.id')
                     ->get();
                return view('welcome',compact('students'));

                    }
}
