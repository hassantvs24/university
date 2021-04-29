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

                    <div class="row">

                        <div class="col-md-4">
                            <x-ninput label="{{__('Student Category Name')}}" name="name" required="required" />
                        </div>

                        <div class="col-md-4">
                            <x-ninput label="{{__('Student Category Name')}}" name="name" required="required" />
                        </div>

                        <div class="col-md-4">
                            <x-ninput label="{{__('Student Category Name')}}" name="name" required="required" />
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
