<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $table = Department::orderBy('id', 'DESC')->get();
        return view('settings.department')->with(['table' => $table]);
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
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'short_name' => 'required|string|max:10',
            'code' => 'required|numeric|min:10|max:99',
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

        try{

            $table = new Department();
            $table->name = $request->name;
            $table->short_name = $request->short_name;
            $table->code = $request->code;
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
            'name' => 'required|string|max:191',
            'short_name' => 'required|string|max:10',
            'code' => 'required|numeric|min:10|max:99',
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

        try{

            $table = Department::find($id);
            $table->name = $request->name;
            $table->short_name = $request->short_name;
            $table->code = $request->code;
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
            Department::destroy($id);
        }catch (\Exception $ex) {
            return redirect()->back()->with(config('naz.db_error'));
        }
        return redirect()->back()->with(config('naz.del'));
    }
}
