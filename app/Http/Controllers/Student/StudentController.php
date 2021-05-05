<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Batch;
use App\Models\Student;
use App\Models\User;
use App\Models\UserCategory;
use App\Models\Waver;
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
        $category = UserCategory::orderBy('name')->where('user_type', 'Student')->get();
        $batch = Batch::orderBy('id', 'DESC')->get();
        $waver = Waver::orderBy('id', 'DESC')->get();
        return view('student.student_create')->with(['category' => $category, 'waver' => $waver, 'batch' => $batch]);
    }


    public function store(Request $request)
    {
    //    dd($request->all());

        $validator = Validator::make($request->all(), [
            'code' => 'required|string|max:30|unique:batches,code,'.$id,
            'name' => 'required|string|max:191',
            'price' => 'required|numeric',
            'department_id' => 'required|numeric',
            'academic_year_id' => 'required|numeric'
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

        try{

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->user_type = 'Student';
            $user->password = date('dmY', strtotime($request->dob));
            $user->save();

            $table = new Student();
            $table->name = $request->name;
            $table->batches_id = $request->batches_id;
            $table->save();

        }catch (\Exception $ex) {
            return redirect()->back()->with(config('naz.db_error'))->withInput();
        }

        return redirect()->back()->with(config('naz.save'));



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
