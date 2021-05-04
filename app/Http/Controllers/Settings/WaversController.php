<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\Waver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WaversController extends Controller
{

    public function index()
    {
        $table = Waver::orderBy('id', 'DESC')->get();
        return view('settings.waver')->with(['table' => $table]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191|unique:wavers,name',
            'amount' => 'required|numeric|max:99',
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

        try{

            $table = new Waver();
            $table->name = $request->name;
            $table->amount = $request->amount;
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191|unique:wavers,name,'.$id,
            'amount' => 'required|numeric|max:99',
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

        try{

            $table = Waver::find($id);
            $table->name = $request->name;
            $table->amount = $request->amount;
            $table->save();

        }catch (\Exception $ex) {
            return redirect()->back()->with(config('naz.db_error'))->withInput();
        }

        return redirect()->back()->with(config('naz.save'));
    }

    public function destroy($id)
    {
        try{
            Waver::destroy($id);
        }catch (\Exception $ex) {
            return redirect()->back()->with(config('naz.db_error'));
        }
        return redirect()->back()->with(config('naz.del'));
    }
}
