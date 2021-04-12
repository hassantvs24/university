<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\AcademicYear;
use App\Models\Batch;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $table = Batch::orderBy('id', 'DESC')->get();
        $academic_year = AcademicYear::orderBy('years', 'DESC')->get();
        $department = Department::orderBy('code')->get();
        return view('student.batch')->with(['table' => $table, 'department' => $department, 'academic_year' => $academic_year]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|string|max:30|unique:batches,code',
            'name' => 'required|string|max:191',
            'price' => 'required|numeric',
            'department_id' => 'required|numeric',
            'academic_year_id' => 'required|numeric'
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

        try{

            $table = new Batch();
            $table->code = $request->code;
            $table->name = $request->name;
            $table->price = $request->price;
            $table->department_id = $request->department_id;
            $table->academic_year_id = $request->academic_year_id;
            $table->save();

        }catch (\Exception $ex) {
            return redirect()->back()->with(config('naz.db_error'))->withInput();
        }

        return redirect()->back()->with(config('naz.save'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|string|max:30|unique:batches,code,'.$id,
            'name' => 'required|string|max:191',
            'price' => 'required|numeric',
            'department_id' => 'required|numeric',
            'academic_year_id' => 'required|numeric'
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

        try{

            $table = Batch::find($id);
            $table->code = $request->code;
            $table->name = $request->name;
            $table->price = $request->price;
            $table->department_id = $request->department_id;
            $table->academic_year_id = $request->academic_year_id;
            $table->save();

        }catch (\Exception $ex) {
            return redirect()->back()->with(config('naz.db_error'))->withInput();
        }

        return redirect()->back()->with(config('naz.edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try{
            Batch::destroy($id);
        }catch (\Exception $ex) {
            return redirect()->back()->with(config('naz.db_error'));
        }
        return redirect()->back()->with(config('naz.del'));
    }
}
