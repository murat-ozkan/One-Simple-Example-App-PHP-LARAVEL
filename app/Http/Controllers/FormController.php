<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
                "course_content" => "required"
            ]
        );

        // dd($request);
        // return $request->get("course_title");
        // return $request->input("course_title");
        // echo $request->course_title;
        // return $request->all();
        // return $request->course_title;
        return $validatedData;
    }
}
