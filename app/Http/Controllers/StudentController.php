<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    public function index() {
        $data = Student::all();

        return response()->json($data);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $book = Student::create($data);

        return response()->json($book);
    }
}
