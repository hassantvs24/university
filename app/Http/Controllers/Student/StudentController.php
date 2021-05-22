<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Batch;
use App\Models\Student;
use App\Models\User;
use App\Models\UserCategory;
use App\Models\Waver;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    use UploadTrait;

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
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|unique:users,email',
            'name' => 'required|string|max:191',
            'bn_name' => 'required|string|max:191',
            'student_id' => 'required|string|min:10|max:10|unique:students,student_id',
            'admission_in' => 'required|in:Spring,Fall,Winter',
            'from_no' => 'required|numeric|unique:students,from_no',
            'user_categories_id' => 'required|numeric',
            'dob' => 'required|date',
            'gender' => 'required|in:Male,Female,Not Specified',
            'contact' => 'required|string|min:11|max:11',
            'marital_status' => 'required|in:Single,Married',
            'spoken_certificate_date' => 'sometimes|nullable|date',
            'photo' => 'required|file',
            'batches_id' => 'required|numeric'
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

        DB::beginTransaction();
        try{

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->user_type = 'Student';
            $user->institute = $request->institute;
            $user->password = date('dmY', strtotime($request->dob));//Default Password Based on date of birth

            if ($request->has('photo')) {
                // Get image file
                $image = $request->file('photo');
                // Make a image name based on user name and current timestamp
                $name = Str::slug($request->input('name')) . '_' . time();
                // Define folder path
                $folder = '/uploads/user/';
                // Make a file path where image will be stored [ folder path + file name + file extension]
                $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
                // Upload image
                $this->uploadOne($image, $folder, 'public', $name);
                // Set user profile image path in database to filePath
                $user->photo = $filePath;
            }
            $user->save();

            $user_id = $user->id;

            $table = new Student();
            $table->name = $request->bn_name;
            $table->contact = $request->contact;
            $table->student_id = $request->student_id;
            $table->from_no = $request->from_no;
            $table->admission_in = $request->admission_in;
            $table->user_categories_id = $request->user_categories_id;
            $table->batches_id = $request->batches_id;
            $table->dob = Carbon::parse($request->dob)->format('Y-m-d');
            $table->birth_place = $request->birth_place;
            $table->blood_group = $request->blood_group;
            $table->gender = $request->gender;
            $table->nationality = $request->nationality;
            $table->nid = $request->nid;
            $table->marital_status = $request->marital_status;
            $table->house = $request->house;
            $table->po = $request->po;
            $table->pc = $request->pc;
            $table->district = $request->district;
            $table->road = $request->road;
            $table->village = $request->village;
            $table->upazilla = $request->upazilla;
            $table->permanent_house = $request->permanent_house;
            $table->permanent_po = $request->permanent_po;
            $table->permanent_district = $request->permanent_district;
            $table->permanent_road = $request->permanent_road;
            $table->permanent_pc = $request->permanent_pc;
            $table->permanent_village = $request->permanent_village;
            $table->permanent_upazilla = $request->permanent_upazilla;
            $table->rtm_student_name = $request->rtm_student_name;
            $table->rtm_student_id = $request->rtm_student_id;
            $table->spoken_score = $request->spoken_score;
            $table->spoken_certificate_date = Carbon::parse($request->spoken_certificate_date)->format('Y-m-d');
            $table->rtm_staff_name = $request->rtm_staff_name;
            $table->rtm_staff_id = $request->rtm_staff_id;
            $table->extra_activity = $request->extra_activity;
            if (isset($request->waver_id)) {
                $table->waver_id = $request->waver_id;
                $table->waver = Waver::find($request->waver_id)->amount ?? 0;
            }

            $table->know_about = $request->know_about;
            $table->is_expelled = $request->is_expelled;
            $table->expelled_reason = $request->expelled_reason;
            $table->description = $request->description;
            if (isset($request->batches_id)) {
                $table->course_id = Batch::find($request->batches_id)->course_id;
            }
            $table->user_id = $user_id;
            $table->save();

        }catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->back()->with(config('naz.db_error'))->withInput();
        }
        DB::commit();

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
        try{
            User::destroy($id);
        }catch (\Exception $ex) {
            return redirect()->back()->with(config('naz.db_error'));
        }
        return redirect()->back()->with(config('naz.del'));
    }
}
