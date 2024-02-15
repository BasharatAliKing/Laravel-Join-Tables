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
                    // Union of two tables...
    public function uniontables(){
        $teachers=DB::table('teachers')
                            ->join('cities','teachers.city','=','cities.id')
                            ->select('teachers.*','cities.city_name');

        $students=DB::table('student')
                            ->union($teachers)
                            ->join('cities','student.city','=','cities.id')
                            ->select('student.*','cities.city_name')
                            ->get();

        return view('welcome' ,compact('students'));
    }
    public function when(){
        $students=DB::table('student')
                         ->when(true, function($query){
                            $query->where('age','>','20');
                         })
                         ->get();
                         return $students;
    }
    public function chunk(){
        $students=DB::table('student')
                           ->orderBy('id')
                           ->chunk(3, function($students){
                            foreach($students as $student){
                                echo $student->name . "<br>";
                            }
                        });
    }
}
