<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return "hello from index function";
    }

    public function create()
    {
        return "Hello from create function";
    }

    public function show($course)
    {
        return "hello from show function and the course is: $course";
    }
}
