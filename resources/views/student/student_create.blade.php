@extends('layouts.master')
@extends('student.box.student')

@section('title')
    {{__('Create Student')}}
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <x-card label="{{__('New Student Registration')}}">

                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="institute" value="University" />
                    <p class="bg-primary text-white"><i class="flaticon2-fast-next text-white"></i> <b>{{__('Basic Info')}}</b></p>
                    <div class="row">
                        <div class="col-md-4">
                            <x-ninput label="{{__('Student ID')}}" name="student_id" required="required" />
                            <x-nselect2 label="{{__('Admission In')}}" class="select2" name="admission_in" required="required" >
                                <option value="">{{__('Select Admission')}}</option>
                                <option value="Spring">{{__('Spring')}}</option>
                                <option value="Fall">{{__('Fall')}}</option>
                            </x-nselect2>
                            <p><b>{{__('Program')}}: </b><span id="program"></span></p>
                        </div>

                        <div class="col-md-4">
                            <x-ninput label="{{__('Form S/N')}}" name="from_no" required="required" />
                            <x-nselect2 label="{{__('Student Category')}}" class="select2" name="user_categories_id" required="required" >
                                <option value="">{{__('Select Category')}}</option>
                                @foreach($category as $row)
                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                @endforeach
                            </x-nselect2>
                            <p><b>{{__('Department')}}: </b><span id="department"></span></p>
                        </div>

                        <div class="col-md-4">
                            <x-ninput label="{{__('Photo')}}" type="file" name="photo" accept="image/png" required="required" />
                            <x-nselect2 label="{!!  __('Batch') !!}" id="batch" class="select2" name="user_categories_id" required="required" >
                                <option value="">{{__('Select Program & Batch')}}</option>
                                @foreach($batch as $row)
                                    <option
                                        data-program="{{$row->course->name}}"
                                        data-department="{{$row->department->name}}"
                                        data-years="{{$row->academicYear->years}}"
                                        value="{{$row->id}}"
                                    >{{$row->department->short_name ?? ''}} - {{$row->name}} ({{$row->course->name ?? ''}}-{{$row->academicYear->years ?? ''}})</option>
                                @endforeach
                            </x-nselect2>
                            <p><b>{{__('Year')}}: </b><span id="years"></span></p>
                        </div>
                    </div>

                    <p class="bg-primary text-white"><i class="flaticon2-fast-next text-white"></i> <b>{{__('Primary Info')}}</b></p>
                    <div class="row">
                        <div class="col-md-4">
                            <x-ninput label="{{__('Student Name')}}" name="name" required="required" />
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Student Email')}}" type="email" name="email" required="required" />
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Student Dob')}}" type="date" name="dob" required="required" />
                        </div>
                    </div>

                    <p class="bg-primary text-white"><i class="flaticon2-fast-next text-white"></i> <b>{{__('General Info')}}</b></p>
                    <div class="row">
                        <div class="col-md-4">
                            <x-ninput label="{{__('Student Name (Bangla)')}}" name="name" required="required" />
                            <x-nselect label="{{__('Gender')}}" name="gender" required="required" >
                                <option value="Male">{{__('Male')}}</option>
                                <option value="Female">{{__('Female')}}</option>
                                <option value="Not Specified">{{__('Not Specified')}}</option>
                            </x-nselect>
                            <x-ninput label="{{__('Nationality')}}" name="nationality"/>
                        </div>

                        <div class="col-md-4">
                            <x-ninput label="{{__('Contact Number')}}" name="contact" required="required" />
                            <x-nselect label="{{__('Marital Status')}}" name="marital_status" required="required" >
                                <option value="Single">{{__('Single')}}</option>
                                <option value="Married">{{__('Married')}}</option>
                            </x-nselect>
                            <x-ninput label="{{__('National ID')}}" name="nid"/>
                        </div>

                        <div class="col-md-4">
                            <x-ninput label="{{__('Birth Place')}}" name="birth_place"/>
                            <x-nselect label="{{__('Blood Group')}}" name="blood_group" required="required" >
                                <option value="A+">{{__('A+')}}</option>
                                <option value="A-">{{__('A-')}}</option>
                                <option value="B+">{{__('B+')}}</option>
                                <option value="B-">{{__('B-')}}</option>
                                <option value="O+">{{__('O+')}}</option>
                                <option value="O-">{{__('O-')}}</option>
                                <option value="AB+">{{__('AB+')}}</option>
                                <option value="AB-">{{__('AB-')}}</option>
                            </x-nselect>
                        </div>
                    </div>

                    <p class="bg-warning text-white"><i class="flaticon-home text-white"></i> <b>{{__('Present Address')}}</b></p>
                    <div class="row">
                        <div class="col-md-4">
                            <x-ninput label="{{__('House')}}" name="house"/>
                            <x-ninput label="{{__('Village/Town')}}" name="village"/>
                            <x-ninput label="{{__('Road')}}" name="road"/>
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Post Office')}}" name="po"/>
                            <x-ninput label="{{__('Post Code')}}" name="pc"/>
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Upazilla')}}" name="upazilla"/>
                            <x-ninput label="{{__('District')}}" name="district"/>
                        </div>
                    </div>

                    <p class="bg-warning text-white"><i class="flaticon-home-2 text-white"></i> <b>{{__('Permanent Address')}}</b></p>
                    <div class="row">
                        <div class="col-md-4">
                            <x-ninput label="{{__('House')}}" name="permanent_house"/>
                            <x-ninput label="{{__('Village/Town')}}" name="permanent_village"/>
                            <x-ninput label="{{__('Road')}}" name="permanent_road"/>
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Post Office')}}" name="permanent_po"/>
                            <x-ninput label="{{__('Post Code')}}" name="permanent_pc"/>
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Upazilla')}}" name="permanent_upazilla"/>
                            <x-ninput label="{{__('District')}}" name="permanent_district"/>
                        </div>
                    </div>

                    <p class="bg-primary text-white"><i class="flaticon2-fast-next text-white"></i> <b>{{__('Other Information')}}</b></p>
                    <div class="row">
                        <div class="col-md-4">
                            <x-ninput label="{{__('Sibling/Spouse Name')}}" name="rtm_student_name"/>
                            <x-ninput label="{{__('Sibling/Spouse ID')}}" name="rtm_student_id"/>
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Corporate Partner Name')}}" name="rtm_staff_name"/>
                            <x-ninput label="{{__('Corporate Partner ID')}}" name="rtm_staff_id"/>
                        </div>
                        <div class="col-md-4">
                            <x-nselect label="{{__('Know About RTM')}}" name="know_about" >
                                <option value="Staff">{{__('Staff')}}</option>
                                <option value="Student">{{__('Student')}}</option>
                                <option value="Friends">{{__('Friends')}}</option>
                                <option value="Newspaper">{{__('Newspaper')}}</option>
                                <option value="Social Medea">{{__('Social Medea')}}</option>
                                <option value="SMS">{{__('SMS')}}</option>
                                <option value="ADS">{{__('ADS')}}</option>
                                <option value="Other Source">{{__('Other Source')}}</option>
                            </x-nselect>
                        </div>
                    </div>

                </form>

            </x-card>
        </div>
    </div>

@endsection

@section('style')
    <link href="{{asset('assets/css/pages/wizard/wizard-2.css')}}" rel="stylesheet" type="text/css" />
@endsection


@section('script')
    <script src="{{asset('assets/js/pages/custom/wizard/wizard-2.js')}}"></script>
    <script type="text/javascript">
        $(function () {
            $('.select2').select2();

            $('#batch').change(function () {
                var batch_id = $(this).val();
                var program = $(this).find(':selected').attr('data-program');
                var department = $(this).find(':selected').attr('data-department');
                var years = $(this).find(':selected').attr('data-years');

                if(batch_id != ''){
                    $('#program').html(program);
                    $('#department').html(department);
                    $('#years').html(years);
                }else{
                    $('#program').html('');
                    $('#department').html('');
                    $('#years').html('');
                }
            });
        });
    </script>
@endsection
