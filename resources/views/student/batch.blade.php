@extends('layouts.master')
@extends('student.box.batch')

@section('title')
    {{__('Batch Setup')}}
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <x-card label="{{__('Batch Setup')}}">
                <x-slot name="button">
                    <button class="btn btn-primary ml-1" data-toggle="modal" data-target="#addModal"><i class="flaticon2-add-1"></i> {{__('Add new record')}}</button>
                </x-slot>
                <table class="table table-separate table-head-custom table-sm table-striped" id="kt_datatable">
                    <thead>
                    <tr>
                        <th>{{__('Code')}}</th>
                        <th>{{__('Name')}}</th>
                        <th title="{{__('Number of Semester')}}">{{__('Semester')}}</th>
                        <th>{{__('Department')}}</th>
                        <th title="{{__('Academic Year')}}">{{__('A.Year')}}</th>
                        <th class="text-right">{{__('Action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($table as $row)
                        <tr>
                            <td>{{$row->code}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->price}}</td>
                            <td>{{$row->department->short_name ?? ''}}</td>
                            <td>{{$row->academicYear->name ?? ''}}</td>
                            <td class="text-right">
                                <x-actions>

                                    <li class="navi-item">
                                        <a href="javascript:;" class="navi-link" data-toggle="modal" data-target="#ediModal" onclick="ediFn(this)"
                                           data-href="{{route('batch.update', ['batch' => $row->id])}}"
                                           data-name="{{$row->name}}"
                                           data-code="{{$row->code}}"
                                           data-price="{{$row->price}}"
                                           data-department="{{$row->department_id}}"
                                           data-years="{{$row->academic_year_id}}"
                                        >
                                            <span class="navi-icon"><i class="la la-pencil-square-o text-success"></i></span>
                                            <span class="navi-text">{{__('Edit')}}</span>
                                        </a>
                                    </li>

                                    <li class="navi-item">
                                        <a href="javascript:;" data-href="{{route('batch.destroy', ['batch' => $row->id])}}" class="navi-link" onclick="delFn(this)">
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
            var code = e.getAttribute('data-code');
            var name = e.getAttribute('data-name');
            var price = e.getAttribute('data-price');
            var department_id = e.getAttribute('data-department');
            var academic_year_id = e.getAttribute('data-years');


            $('#ediModal form').attr('action', link);

            $('#ediModal [name=code]').val(code);
            $('#ediModal [name=name]').val(name);
            $('#ediModal [name=price]').val(price);
            $('#ediModal [name=academic_year_id]').val(academic_year_id).select2();
            $('#ediModal [name=department_id]').val(department_id).select2();
        }

        $('#kt_datatable').DataTable({
            order: [],//Disable default sorting
            columnDefs: [
                { orderable: false, "targets": [7] }//For Column Order
            ]
        });
    </script>
@endsection
