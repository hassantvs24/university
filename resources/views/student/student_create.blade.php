@extends('layouts.master')
@extends('student.box.student')

@section('title')
    {{__('Create Student')}}
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <x-card label="{{__('New Student Registration')}}">

                <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="institute" value="University" />
                    <!--Basic Info: Start-->
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
                            <p><b>{{__('Year')}}: </b><span id="years"></span></p>
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
                            <x-ninput label="{{__('Photo')}}" type="file" name="photo" accept="image/*" required="required" />
                            <x-nselect2 label="{!!  __('Batch') !!}" id="batch" class="select2" name="batches_id" required="required" >
                                <option value="">{{__('Select Program & Batch')}}</option>
                                @foreach($batch as $row)
                                    <option
                                        data-program="{{$row->course->name}}"
                                        data-department="{{$row->department->name}}"
                                        data-years="{{$row->academicYear->years}}"
                                        data-url="{{route('admin.get_section', ['id' => $row->id])}}"
                                        value="{{$row->id}}"
                                    >{{$row->department->short_name ?? ''}} - {{$row->name}} ({{$row->course->name ?? ''}}-{{$row->academicYear->years ?? ''}})</option>
                                @endforeach
                            </x-nselect2>

                            <div id="show_section">
                                <!-- Section Loaded -->
                            </div>

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
                    <!--Basic Info: End-->

                    <!--General Info: Start-->
                    <p class="bg-primary text-white"><i class="flaticon2-fast-next text-white"></i> <b>{{__('General Info')}}</b></p>
                    <div class="row">
                        <div class="col-md-4">
                            <x-ninput label="{{__('Student Name (Bangla)')}}" name="bn_name" required="required" />
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
                            <x-ninput label="{{__('Signature Scan')}}" type="file" name="signature" accept="image/*" />
                        </div>
                    </div>
                    <!--General Info: End-->

                    <!--Present Address: Start-->
                    <p class="bg-warning text-white"><i class="flaticon-home text-white"></i> <b>{{__('Present Address')}}</b></p>
                    <div class="row">
                        <div class="col-md-4">
                            <x-ninput label="{{__('House')}}" name="house"/>
                            <x-ninput label="{{__('Post Office')}}" name="po"/>
                            <x-ninput label="{{__('District')}}" name="district"/>
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Road')}}" name="road"/>
                            <x-ninput label="{{__('Post Code')}}" name="pc"/>
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Village/Town')}}" name="village"/>
                            <x-ninput label="{{__('Upazilla')}}" name="upazilla"/>

                        </div>
                    </div>
                    <!--Present Address: End-->

                    <!--Permanent Address: Start-->
                    <p class="bg-warning text-white"><i class="flaticon-home-2 text-white"></i> <b>{{__('Permanent Address')}}</b></p>
                    <div class="row">
                        <div class="col-md-4">
                            <x-ninput label="{{__('House')}}" name="permanent_house"/>
                            <x-ninput label="{{__('Post Office')}}" name="permanent_po"/>
                            <x-ninput label="{{__('District')}}" name="permanent_district"/>

                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Road')}}" name="permanent_road"/>
                            <x-ninput label="{{__('Post Code')}}" name="permanent_pc"/>
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Village/Town')}}" name="permanent_village"/>
                            <x-ninput label="{{__('Upazilla')}}" name="permanent_upazilla"/>

                        </div>
                    </div>
                    <!--Permanent Address: End-->

                    <!--Guardian Info: Start-->
                    <p class="bg-success text-white"><i class="flaticon2-avatar text-white"></i> <b>{{__('Father Info')}}</b></p>
                    <div class="row">
                        <div class="col-md-4">
                            <x-ninput label="{{__('Name')}}" name="father_name" required="required"/>
                            <x-ninput label="{{__('Email')}}" type="email" name="father_email"/>
                            <x-ninput label="{{__('NID')}}" name="father_nid"/>
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Mobile')}}" name="father_contact" required="required"/>
                            <x-ninput label="{{__('Organization')}}" name="father_organization"/>
                            <x-ninput label="{{__('Photo')}}" type="file" name="father_photo" accept="image/*" />
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Occupation')}}" name="father_occupation"/>
                            <x-ninput label="{{__('Address')}}" name="father_address"/>
                        </div>
                    </div>

                    <p class="bg-success text-white"><i class="flaticon2-avatar text-white"></i> <b>{{__('Mother Info')}}</b></p>
                    <div class="row">
                        <div class="col-md-4">
                            <x-ninput label="{{__('Name')}}" name="mother_name" required="required"/>
                            <x-ninput label="{{__('Email')}}" type="email" name="mother_email"/>
                            <x-ninput label="{{__('NID')}}" name="mother_nid"/>
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Mobile')}}" name="mother_contact"/>
                            <x-ninput label="{{__('Organization')}}" name="mother_organization"/>
                            <x-ninput label="{{__('Photo')}}" type="file" name="mother_photo" accept="image/*" />
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Occupation')}}" name="mother_occupation"/>
                            <x-ninput label="{{__('Address')}}" name="mother_address"/>
                        </div>
                    </div>

                    <p class="bg-success text-white"><i class="flaticon2-avatar text-white"></i> <b>{{__('Spouse Info')}}</b></p>
                    <div class="row">
                        <div class="col-md-4">
                            <x-ninput label="{{__('Name')}}" name="spouse_name"/>
                            <x-ninput label="{{__('Email')}}" type="email" name="spouse_email"/>
                            <x-ninput label="{{__('NID')}}" name="spouse_nid"/>
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Mobile')}}" name="spouse_contact"/>
                            <x-ninput label="{{__('Organization')}}" name="spouse_organization"/>
                            <x-ninput label="{{__('Photo')}}" type="file" name="spouse_photo" accept="image/*" />
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Occupation')}}" name="spouse_occupation"/>
                            <x-ninput label="{{__('Address')}}" name="spouse_address"/>
                        </div>
                    </div>

                    <p class="bg-success text-white"><i class="flaticon2-avatar text-white"></i> <b>{{__('Local Guardian Info')}}</b></p>
                    <div class="row">
                        <div class="col-md-4">
                            <x-ninput label="{{__('Name')}}" name="local_name"/>
                            <x-ninput label="{{__('Email')}}" type="email" name="local_email"/>
                            <x-ninput label="{{__('NID')}}" name="local_nid"/>
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Mobile')}}" name="local_contact"/>
                            <x-ninput label="{{__('Organization')}}" name="local_organization"/>
                            <x-ninput label="{{__('Photo')}}" type="file" name="local_photo" accept="image/*" />
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Occupation')}}" name="local_occupation"/>
                            <x-ninput label="{{__('Address')}}" name="local_address"/>
                        </div>
                    </div>

                    <p class="bg-success text-white"><i class="flaticon2-avatar text-white"></i> <b>{{__(' Person who will pay the fees')}}</b></p>
                    <div class="row">
                        <div class="col-md-4">
                            <x-ninput label="{{__('Name')}}" name="payer_name"/>
                            <x-ninput label="{{__('Email')}}" type="email" name="payer_email"/>
                            <x-ninput label="{{__('NID')}}" name="payer_nid"/>
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Mobile')}}" name="payer_contact"/>
                            <x-ninput label="{{__('Organization')}}" name="payer_organization"/>
                            <x-ninput label="{{__('Annual Income')}}" type="number" min="0" name="annual_income"/>
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Occupation')}}" name="payer_occupation"/>
                            <x-ninput label="{{__('Address')}}" name="payer_address"/>
                            <x-ninput label="{{__('Photo')}}" type="file" name="payer_photo" accept="image/*" />
                        </div>
                    </div>
                    <!--Guardian Info: End-->

                    <!--Other Info: Start-->
                    <p class="bg-primary text-white"><i class="flaticon2-fast-next text-white"></i> <b>{{__('Other Information')}}</b></p>
                    <div class="row">
                        <div class="col-md-4">
                            <x-ninput label="{{__('Sibling/Spouse Name')}}" name="rtm_student_name"/>
                            <x-ninput label="{{__('Sibling/Spouse ID')}}" name="rtm_student_id"/>
                            <x-ninput label="{{__('SAT / TOFEL / IELTS / GMAT Score')}}" name="spoken_score"/>
                            <x-ninput label="{{__('SAT / TOFEL / IELTS / GMAT Date Taken')}}" type="date" name="spoken_certificate_date"/>
                        </div>
                        <div class="col-md-4">
                            <x-ninput label="{{__('Corporate Partner Name')}}" name="rtm_staff_name"/>
                            <x-ninput label="{{__('Corporate Partner ID')}}" name="rtm_staff_id"/>
                            <x-ninput label="{{__('Skilled in sports and others')}}" name="extra_activity"/>
                            <x-nselect label="{{__('Given Waver (%)')}}" name="waver_id">
                                <option value="">{{__('Select Waver')}}</option>
                                @foreach($waver as $row)
                                    <option value="{{$row->id}}">{{$row->name}} ({{$row->amount}}%)</option>
                                @endforeach
                            </x-nselect>
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

                            <x-nselect label="{{__('Have Any dismissed/suspended/expelled?')}}" id="expelled" name="is_expelled" >
                                <option value="0">{{__('No')}}</option>
                                <option value="1">{{__('Yes')}}</option>
                            </x-nselect>

                            <div class="form-group" id="reason" style="display: none;">
                                <label for="reasonx">{{__('Reason for dismissed/suspended/expelled')}}</label>
                                <input id="reasonx" name="expelled_reason" type="text" class="form-control" value="{{old('expelled_reason') ?? ''}}" placeholder="{{__('Reason')}}"/>
                            </div>
                            <x-ninput label="{{__('Description')}}" name="description"/>
                        </div>
                    </div>
                    <!--Other Info: End-->

                    <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-2 text-center">
                            <button type="submit" class="btn btn-lg btn-success btn-block"><i class="flaticon-add text-white"></i> {{__('Submit')}}</button>
                        </div>
                        <div class="col-md-5"></div>
                    </div>

                    <div class="row mt-5">
                        <div class="col">
                            <p class="text-center text-danger font-size-h3 font-weight-bolder text-gray-500">Guardian, Academic & Job/Experience info will be added after submit</p>
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
                var url = $(this).find(':selected').attr('data-url');

                if(batch_id != ''){
                    $('#program').html(program);
                    $('#department').html(department);
                    $('#years').html(years);
                }else{
                    $('#program').html('');
                    $('#department').html('');
                    $('#years').html('');
                }

                $.get( url, function( data ) {
                    $( "#show_section" ).html( data );
                });
            });

            $('#expelled').change(function () {
                var expelled = $(this).val();
                if(expelled == 0){
                    $('#reason').hide();
                }else{
                    $('#reason').show();
                }
            });
        });
    </script>
@endsection
