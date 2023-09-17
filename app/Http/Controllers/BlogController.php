<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            [
                "id" => 1,
                "title" => "Laravel Dersleri",
                "description" => "Nice Framework",
                "likeCount" => 50,
                "active" => true,
            ],
            [
                "id" => 2,
                "title" => "Django Dersleri",
                "description" => "Nice Framework",
                "likeCount" => 41,
                "active" => true,
            ],
            [
                "id" => 3,
                "title" => "React Dersleri",
                "description" => "Nice Framework",
                "likeCount" => 30,
                "active" => true,
            ],
        ];
        return view("blog.index", ["blogs" => $data]); // use square brackets because it is an array.?
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $data = [
            "id" => $id,
            "title" => "Laravel Dersleri",
            "description" => "Nice Framework",
            "likeCount" => 50,
            "active" => true,
        ];
        return view("blog.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
