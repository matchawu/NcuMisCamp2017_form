<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class SignupController extends Controller
{
     public function index(){
        // $student=Student::all();
        return view('signup.index');
    }

     public function store(Request $request){
        
        $student = new Student;

        // section1 name=name fb school
        $student -> name = $request -> name;
        $student -> fb = $request -> fb;
        $student -> school = $request -> school;
        

        // section2 name=gender birth
        $student -> gender = $request -> gender;
        $student -> birth = $request -> birth;
        

        // section3 name=identity blood
        $student -> identity = $request -> identity;
        $student -> blood = $request -> blood;
        

        // section4 name=email cellphone phone address
        $student -> email = $request -> email;
        $student -> cellphone = $request -> cellphone;
        $student -> phone = $request -> phone;
        $student -> address = $request -> address;
        

        // section5 name=parentname parentphone relation
        $student -> parentname = $request -> parentname;
        $student -> parentphone = $request -> parentphone;
        $student -> relation = $request -> relation;
        

        // section6 name=size
        $student -> size = $request -> size;
        

        // section7 name=yesno groupname
        $student -> group = $request -> group;
        $student -> groupname = $request -> groupname;
        

        // section8 name=food
        $student -> food = $request -> food;
        

        // section9 name=illness
        $student -> illness = $request -> illness;
        

        
        

        // section11 name=selfintro
        $student -> selfintro = $request -> selfintro;
        

        // section12 name=motivation
        $student -> motivation = $request -> motivation;
        

        // section13 name=getnewsfrom
        $student -> getnewsfrom = $request -> getnewsfrom;
        
        $student->save();


        return redirect('/signup/finish');
  //    $input = Input::all();
  //    $post = new Post;
  //    $post->title = $input['title'];//方法一
  //    $post->content = Input::get('content');//方法二
  //    $post->save();
        // return Redirect::to('/');
    }

    public function finish(){
        return view('signup.finish');
    }



}
