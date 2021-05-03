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
                        </div>

                        <div class="col-md-4">
                            <x-ninput label="{{__('Form S/N')}}" name="from_no" required="required" />
                        </div>

                        <div class="col-md-4">
                            <x-ninput label="{{__('Photo')}}" type="file" name="photo" accept="image/png" required="required" />
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

    </script>
@endsection
