<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Batch;
use App\Models\Section;
use App\Models\Student;
use App\Models\StudentGuardian;
use App\Models\User;
use App\Models\UserCategory;
use App\Models\Waver;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
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
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|unique:users,email',
            'name' => 'required|string|max:191',
            'mother_name' => 'required|string|max:191',
            'father_name' => 'required|string|max:191',
            'father_contact' => 'required|string|min:11|max:11',
            'dob' => 'required|date',
            'gender' => 'required|in:Male,Female,Unknown',
            'contact' => 'required|string|min:11|max:11',
            'photo' => 'required|file',
            'signature' => 'sometimes|nullable|file'
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

        DB::beginTransaction();
        try {

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->user_type = 'Student';
            $user->institute = $request->institute;
            $user->password = date('dmY', strtotime($request->dob)); //Default Password Based on date of birth

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

            if ($request->has('signature')) {
                // Get image file
                $image = $request->file('signature');
                // Make a image name based on user name and current timestamp
                $name = Str::slug($request->input('name')) . '_' . time();
                // Define folder path
                $folder = '/uploads/signature/';
                // Make a file path where image will be stored [ folder path + file name + file extension]
                $filePathsig = $folder . $name . '.' . $image->getClientOriginalExtension();
                // Upload image
                $this->uploadOne($image, $folder, 'public', $name);
                // Set user profile image path in database to filePath
                $user->signature = $filePathsig;
            }
            $user->save();

            $user_id = $user->id;

            Student::create([
                'name' => $request->bn_name,
                'contact' => $request->contact,
                'form_no' => $request->form_no,
                'admission_in' => $request->admission_in,
                'user_categories_id' => $request->user_categories_id,
                'batches_id' => $request->batches_id,
                'dob' => Carbon::parse($request->dob)->format('Y-m-d'),
                'birth_place' => $request->birth_place,
                'height' => $request->height,
                'weight' => $request->weight,
                'blood_group' => $request->blood_group,
                'gender' => $request->gender,
                'nationality' => $request->nationality,
                'nid' => $request->id_type === 'NID' ? $request->id_number : null,
                'bc' => $request->id_type === 'Bc' ? $request->id_number : null,
                'passport' => $request->id_type === 'Passport' ? $request->id_number : null,
                'marital_status' => $request->marital_status,
                'house' => $request->house,
                'po' => $request->po,
                'pc' => $request->pc,
                'district' => $request->district,
                'road' => $request->road,
                'village' => $request->village,
                'upazilla' => $request->upazilla,
                'permanent_house' => $request->permanent_house,
                'permanent_po' => $request->permanent_po,
                'permanent_pc' => $request->permanent_pc,
                'permanent_district' => $request->permanent_district,
                'permanent_road' => $request->permanent_road,
                'permanent_village' => $request->permanent_village,
                'permanent_upazilla' => $request->permanent_upazilla,
                'rtm_student_name' => $request->rtm_student_name,
                'rtm_student_id' => $request->rtm_student_id,
                'spoken_score' => $request->spoken_score,
                'spoken_certificate_date' => Carbon::parse($request->spoken_certificate_date)->format('Y-m-d'),
                'rtm_staff_name' => $request->rtm_staff_name,
                'rtm_staff_id' => $request->rtm_staff_id,
                'extra_activity' => $request->extra_activity,
                'waver_id' => isset($request->waver_id) ? $request->waver_id : null,
                'waver' => Waver::find($request->waver_id)->amount ?? 0,
                'know_about' => $request->know_about,
                'is_expelled' => $request->is_expelled,
                'expelled_reason' => $request->expelled_reason,
                'description' => $request->description,
                'course_id' => isset($request->batches_id) ? Batch::find($request->batches_id)->course_id : null,
                'section_id' => isset($request->section_id) ? $request->section_id : null,
                'user_id' => $user_id,
                'upload_by' => Auth::id()
            ]);

            /**
             * Guardian Info
             */

             $guardians = [];

            if ($request->father_name != "" && $request->father_contact != "") {
                $father = [
                    'name' => $request->father_name,
                    'email' => $request->father_email,
                    'nid' => $request->father_nid,
                    'contact' => $request->father_contact,
                    'organization' => $request->father_organization,
                    'occupation' => $request->father_occupation,
                    'address' => $request->father_address,
                    'annual_income' => null,
                    'relation_type' => 'Father',
                    'user_id' => $user_id
                ];

                array_push($guardians, $father);
            }

            if ($request->mother_name != "") {
                $mother = [
                    'name' => $request->mother_name,
                    'email' => $request->mother_email,
                    'nid' => $request->mother_nid,
                    'contact' => $request->mother_contact,
                    'organization' => $request->mother_organization,
                    'occupation' => $request->mother_occupation,
                    'address' => $request->mother_address,
                    'annual_income' => null,
                    'relation_type' => 'Mother',
                    'user_id' => $user_id
                ];
                array_push($guardians, $mother);
            }

            if ($request->spouse_name != "") {
                $spouse = [
                    'name' => $request->spouse_name,
                    'email' => $request->spouse_email,
                    'nid' => $request->spouse_nid,
                    'contact' => $request->spouse_contact,
                    'organization' => $request->spouse_organization,
                    'occupation' => $request->spouse_occupation,
                    'address' => $request->spouse_address,
                    'annual_income' => null,
                    'relation_type' => 'Spouse',
                    'user_id' => $user_id
                ];
                array_push($guardians, $spouse);
            }

            if ($request->local_name != "") {
                $local = [
                    'name' => $request->local_name,
                    'email' => $request->local_email,
                    'nid' => $request->local_nid,
                    'contact' => $request->local_contact,
                    'organization' => $request->local_organization,
                    'occupation' => $request->local_occupation,
                    'address' => $request->local_address,
                    'annual_income' => null,
                    'relation_type' => 'Local Guardian',
                    'user_id' => $user_id
                ];
                array_push($guardians, $local);
            }

            if ($request->payer_name != "") {
                $payer = [
                    'name' => $request->payer_name,
                    'email' => $request->payer_email,
                    'nid' => $request->payer_nid,
                    'contact' => $request->payer_contact,
                    'organization' => $request->payer_organization,
                    'occupation' => $request->payer_occupation,
                    'address' => $request->payer_address,
                    'annual_income' => $request->annual_income,
                    'relation_type' => 'Payer',
                    'user_id' => $user_id
                ];
                array_push($guardians, $payer);
            }

            StudentGuardian::insert($guardians);

            /**
             * /Guardian Info
             */
        } catch (\Exception $ex) {
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
        try {
            User::destroy($id);
        } catch (\Exception $ex) {
            return redirect()->back()->with(config('naz.db_error'));
        }
        return redirect()->back()->with(config('naz.del'));
    }

    public function got_section($id)
    {
        $table = Section::orderBy('name')->where('batches_id', $id)->get();

        return view('student.box.batch_section')->with(['table' => $table]);
    }
}
