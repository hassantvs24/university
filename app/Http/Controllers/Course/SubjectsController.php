<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\SubjectCategory;
use App\Models\SubjectType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $table = Subject::orderBy('id', 'DESC')->get();
        $category = SubjectCategory::orderBy('name')->get();
        $types = SubjectType::orderBy('name')->get();
        return view('course.subject')->with(['table' => $table, 'types' => $types, 'category' => $category]);
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
            'code' => 'required|string|max:30|unique:subjects,code',
            'name' => 'required|string|max:191',
            'subject_type_id' => 'required|numeric',
            'subject_categorie_id' => 'required|numeric'
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

        try{

            $table = new Subject();
            $table->name = $request->name;
            $table->code = $request->code;
            $table->subject_type_id = $request->subject_type_id;
            $table->subject_categorie_id = $request->subject_categorie_id;
            $table->description = $request->description;
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
            'code' => 'required|string|max:30|unique:subjects,code,'.$id,
            'name' => 'required|string|max:191',
            'subject_type_id' => 'required|numeric',
            'subject_categorie_id' => 'required|numeric'
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

        try{

            $table = Subject::find($id);
            $table->name = $request->name;
            $table->code = $request->code;
            $table->subject_type_id = $request->subject_type_id;
            $table->subject_categorie_id = $request->subject_categorie_id;
            $table->description = $request->description;
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
            Subject::destroy($id);
        }catch (\Exception $ex) {
            return redirect()->back()->with(config('naz.db_error'));
        }
        return redirect()->back()->with(config('naz.del'));
    }
}
