<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{

    public function index()
    {
        $table = User::orderBy('id', 'DESC')->where('user_type', 'Student')->get();
        return view('student.student')->with(['table' => $table]);
    }


    public function create()
    {
        return view('student.student_create');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|string|max:30|unique:batches,code,'.$id,
            'name' => 'required|string|max:191',
            'price' => 'required|numeric',
            'department_id' => 'required|numeric',
            'academic_year_id' => 'required|numeric'
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
