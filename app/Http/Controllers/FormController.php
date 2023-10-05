<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function index()
    {
        return view('home/form');
    }

    public function formData(Request $request)
    {

        $validatedData = $request->validate(
            [
                "course_title" => "required",
                "course_content" => "required",
                "course_confirm" => "accepted"
            ]
        );

        // $validator = Validator::make(
        //     $request->all(),
        //     [
        //         "course_title" => "required",
        //         "course_content" => "required",
        //         "course_confirm" => "required"
        //     ]
        // );


        // Validation passed, so do something with the data
        // ...

        // dd($request);
        // return $request->get("course_title");
        // return $request->input("course_title");
        // echo $request->course_title;
        // return $request->all();
        // return $request->course_title;
        return $validatedData;
    }
}
