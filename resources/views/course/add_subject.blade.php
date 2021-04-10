@extends('layouts.master')
@extends('course.box.add_subject')
@section('title')
    {{$table->name}}: {{__('Subject List')}}
@endsection

@section('content')

    <div class="row">
        <div class="col">
            <x-card exclass="mb-5" label="{{$table->name}}">

                <x-slot name="button">
                    <a href="{{route('course.index')}}" class="btn btn-danger ml-1"><i class="flaticon2-back"></i> {{__('Back to course list')}}</a>
                </x-slot>

                @php
                    $total_credit = $table->courseItems()->sum('credit');
                @endphp

                <div class="row">
                    <div class="col">
                        <table class="table table-bordered">
                            <tr>
                                <th>{{__('Number of Semester')}}</th>
                                <td>{{$table->semester}}</td>
                            </tr>
                            <tr>
                                <th>{{__('Total Offer Subject')}}</th>
                                <td>{{$total_credit}}/{{$table->total_subject}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col">
                        <table class="table table-bordered">
                            <tr>
                                <th>{{__('Department')}}</th>
                                <td>{{$table->department->name ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>{{__('Year')}}</th>
                                <td>{{$table->academicYear->years ?? ''}}</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </x-card>

        </div>
    </div>

<div class="row">
    <div class="col">
        @for($i = 1; $i<= $table->semester; $i++)
            <x-card exclass="mb-5" label="{{__('Semester')}}-{{$i}}">

                <x-slot name="button">
                    <button class="btn btn-primary ml-1" data-semester="{{$i}}" data-toggle="modal" data-target="#addModal" onclick="addFn(this)"><i class="flaticon2-add-1"></i> {{__('Add new subject for')}} {{__('semester')}}-{{$i}}</button>
                </x-slot>

                    <table class="table table-separate table-head-custom table-sm table-striped">
                        <thead>
                            <tr>
                                <th>{{__('Course Code')}}</th>
                                <th>{{__('Course Title')}}</th>
                                <th>{{__('Credit Hour')}}</th>
                                <th>{{__('Group Tag')}}</th>
                                <th>{{__('Pre-Requirement')}}</th>
                                <th class="text-right">{{__('Action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $items = $table->courseItems()->where('semester_level', $i)->get();
                                $total = 0;
                            @endphp

                            @foreach($items as $row)
                                <tr>
                                    <td>{{$row->subject->code ?? ''}}</td>
                                    <td>{{$row->subject->name ?? ''}}</td>
                                    <td>{{$row->credit}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->depend->code ?? ''}}</td>
                                    <td class="text-right">
                                        <x-actions>

                                            <li class="navi-item">
                                                <a href="javascript:;" class="navi-link" data-toggle="modal" data-target="#ediModal" onclick="ediFn(this)"
                                                   data-href="{{route('course.edit_subject', ['id' => $row->id])}}"
                                                   data-subject="{{$row->subject_id}}"
                                                   data-name="{{$row->name}}"
                                                   data-credit="{{$row->credit}}"
                                                   data-semester="{{$row->semester_level}}"
                                                   data-dependency="{{$row->dependency}}"
                                                >
                                                    <span class="navi-icon"><i class="la la-pencil-square-o text-success"></i></span>
                                                    <span class="navi-text">{{__('Edit')}}</span>
                                                </a>
                                            </li>

                                            <li class="navi-item">
                                                <a href="javascript:;" data-href="{{route('course.del_subject', ['id' => $row->id])}}" class="navi-link" onclick="delFn(this)">
                                                    <span class="navi-icon"><i class="la la-trash-o text-danger"></i></span>
                                                    <span class="navi-text">{{__('Delete')}}</span>
                                                </a>
                                            </li>

                                        </x-actions>
                                    </td>
                                </tr>
                                @php
                                    $total += $row->credit;
                                @endphp
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2" class="text-right">{{__('Total Credit')}}: </th>
                                <th>{{$total}}</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
            </x-card>
        @endfor
    </div>
</div>

@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $('.select2').select2();
        });

        function addFn(e){
            var semester_level = e.getAttribute('data-semester');

            $('#addModal [name=semester_level]').val(semester_level);
        }

        function ediFn(e){
            var link = e.getAttribute('data-href');
            var name = e.getAttribute('data-name');
            var subject_id = e.getAttribute('data-subject');
            var credit = e.getAttribute('data-credit');
            var semester_level = e.getAttribute('data-semester');
            var dependency = e.getAttribute('data-dependency');

            $('#ediModal form').attr('action', link);

            $('#ediModal [name=name]').val(name);
            $('#ediModal [name=subject_id]').val(subject_id).select2();
            $('#ediModal [name=dependency]').val(dependency).select2();
            $('#ediModal [name=semester_level]').val(semester_level);
            $('#ediModal [name=credit]').val(credit);
        }

    </script>
@endsection
