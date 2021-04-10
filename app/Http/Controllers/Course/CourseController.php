<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\AcademicYear;
use App\Models\Course;
use App\Models\CourseItem;
use App\Models\Department;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $table = Course::orderBy('id', 'DESC')->get();
        $departments = Department::orderBy('name')->get();
        $years = AcademicYear::orderBy('name')->get();
        return view('course.course')->with(['table' => $table, 'departments' => $departments, 'years' => $years]);
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
            'name' => 'required|string|max:191',
            'semester' => 'required|numeric|max:99',
            'total_subject' => 'required|numeric|max:999',
            'total_credit' => 'required|numeric',
            'department_id' => 'required|numeric',
            'academic_year_id' => 'required|numeric',
            'status' => 'required|in:Active,Inactive'
        ]);
        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

        try{

            $table = new Course();
            $table->name = $request->name;
            $table->semester = $request->semester;
            $table->total_subject = $request->total_subject;
            $table->total_credit = $request->total_credit;
            $table->department_id = $request->department_id;
            $table->academic_year_id = $request->academic_year_id;
            $table->status = $request->status;
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $table = Course::find($id);
        $subjects = Subject::orderBy('code')->where('status', 'Active')->get();
        return view('course.add_subject')->with(['table' => $table, 'subjects' => $subjects]);
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
            'name' => 'required|string|max:191',
            'semester' => 'required|numeric|max:99',
            'total_subject' => 'required|numeric|max:999',
            'total_credit' => 'required|numeric',
            'department_id' => 'required|numeric',
            'academic_year_id' => 'required|numeric',
            'status' => 'required|in:Active,Inactive'
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

        try{

            $table = Course::find($id);
            $table->name = $request->name;
            $table->semester = $request->semester;
            $table->total_subject = $request->total_subject;
            $table->total_credit = $request->total_credit;
            $table->department_id = $request->department_id;
            $table->academic_year_id = $request->academic_year_id;
            $table->status = $request->status;
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
            Course::destroy($id);
        }catch (\Exception $ex) {
            return redirect()->back()->with(config('naz.db_error'));
        }
        return redirect()->back()->with(config('naz.del'));
    }

    public function add_subject_item(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'semester_level' => 'required|numeric',
            'subject_id' => 'required|numeric',
            'credit' => 'required|numeric',
            'dependency' => 'sometimes|nullable|not_in:'.$request->subject_id
        ]);
        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

        try{

            $table = new CourseItem();
            $table->name = $request->name;
            $table->semester_level = $request->semester_level;
            $table->subject_id = $request->subject_id;
            $table->credit = $request->credit;
            $table->dependency = $request->dependency;
            $table->course_id = $id;
            $table->save();

        }catch (\Exception $ex) {
            return redirect()->back()->with(config('naz.db_error'))->withInput();
        }

        return redirect()->back()->with(config('naz.save'));
    }

    public function edit_subject_item(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'semester_level' => 'required|numeric',
            'subject_id' => 'required|numeric',
            'credit' => 'required|numeric',
            'dependency' => 'sometimes|nullable|not_in:'.$request->subject_id
        ]);
        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

        try{

            $table = CourseItem::find($id);
            $table->name = $request->name;
            $table->semester_level = $request->semester_level;
            $table->subject_id = $request->subject_id;
            $table->credit = $request->credit;
            $table->dependency = $request->dependency;
            $table->save();

        }catch (\Exception $ex) {
            return redirect()->back()->with(config('naz.db_error'))->withInput();
        }

        return redirect()->back()->with(config('naz.edit'));
    }

    public function del_subject_item($id){
        try{
            CourseItem::destroy($id);
        }catch (\Exception $ex) {
            return redirect()->back()->with(config('naz.db_error'));
        }
        return redirect()->back()->with(config('naz.del'));
    }
}
