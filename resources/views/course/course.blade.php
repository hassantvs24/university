@extends('layouts.master')
@extends('course.box.course')

@section('title')
    {{__('Course List')}}
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <x-card label="{{__('Course List')}}">
                <x-slot name="button">
                    <button class="btn btn-primary ml-1" data-toggle="modal" data-target="#addModal"><i class="flaticon2-add-1"></i> {{__('Add new record')}}</button>
                </x-slot>
                <table class="table table-separate table-head-custom table-sm table-striped" id="kt_datatable">
                    <thead>
                    <tr>
                        <th>{{__('Course Name')}}</th>
                        <th>{{__('Semester')}}</th>
                        <th>{{__('Offer Subject')}}</th>
                        <th>{{__('Credit Offer')}}</th>
                        <th>{{__('Department')}}</th>
                        <th>{{__('Year')}}</th>
                        <th>{{__('status')}}</th>
                        <th class="text-right">{{__('Action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($table as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->semester}}</td>
                            <td>{{$row->total_subject}}</td>
                            <td>{{$row->total_credit}}</td>
                            <td title="{{$row->department->name ?? ''}}">{{$row->department->short_name ?? ''}}</td>
                            <td>{{$row->academicYear->years ?? ''}}</td>
                            <td>{{$row->status}}</td>
                            <td class="text-right">
                                <x-actions>

                                    <li class="navi-item">
                                        <a href="javascript:;" class="navi-link" data-toggle="modal" data-target="#ediModal" onclick="ediFn(this)"
                                           data-href="{{route('course.update', ['course' => $row->id])}}"
                                           data-name="{{$row->name}}"
                                           data-semester="{{$row->semester}}"
                                           data-subject="{{$row->total_subject}}"
                                           data-credit="{{$row->total_credit}}"
                                           data-department="{{$row->department_id}}"
                                           data-years="{{$row->academic_year_id}}"
                                           data-status="{{$row->status}}"
                                        >
                                            <span class="navi-icon"><i class="la la-pencil-square-o text-success"></i></span>
                                            <span class="navi-text">{{__('Edit')}}</span>
                                        </a>
                                    </li>

                                    <li class="navi-item">
                                        <a href="javascript:;" data-href="{{route('course.destroy', ['course' => $row->id])}}" class="navi-link" onclick="delFn(this)">
                                            <span class="navi-icon"><i class="la la-trash-o text-danger"></i></span>
                                            <span class="navi-text">{{__('Delete')}}</span>
                                        </a>
                                    </li>

                                </x-actions>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </x-card>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $('.select2').select2();
        });

        function ediFn(e){
            var link = e.getAttribute('data-href');
            var name = e.getAttribute('data-name');
            var semester = e.getAttribute('data-semester');
            var total_subject = e.getAttribute('data-subject');
            var total_credit = e.getAttribute('data-credit');
            var department_id = e.getAttribute('data-department');
            var academic_year_id = e.getAttribute('data-years');
            var status = e.getAttribute('data-status');

            $('#ediModal form').attr('action', link);

            $('#ediModal [name=name]').val(name);
            $('#ediModal [name=semester]').val(semester);
            $('#ediModal [name=total_subject]').val(total_subject);
            $('#ediModal [name=total_credit]').val(total_credit);
            $('#ediModal [name=department_id]').val(department_id).select2();
            $('#ediModal [name=academic_year_id]').val(academic_year_id).select2();
            $('#ediModal [name=status]').val(status);
        }

        $('#kt_datatable').DataTable({
            order: [],//Disable default sorting
            columnDefs: [
                { orderable: false, "targets": [7] }//For Column Order
            ]
        });
    </script>
@endsection
