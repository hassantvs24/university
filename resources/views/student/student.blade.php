@extends('layouts.master')
@extends('student.box.student')

@section('title')
    {{__('All Student')}}
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <x-card label="{{__('Student List')}}">
                <x-slot name="button">
                    <a class="btn btn-primary ml-1" href="{{route('student.create')}}"><i class="flaticon2-add-1"></i> {{__('Add new record')}}</a>
                </x-slot>
                <table class="table table-separate table-head-custom table-sm table-striped" id="kt_datatable">
                    <thead>
                    <tr>
                        <th>{{__('Photo')}}</th>
                        <th>{{__('ID')}}</th>
                        <th>{{__('Name')}}</th>
                        <th>{{__('Dob')}}</th>
                        <th class="text-right">{{__('Action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($table as $row)
                        <tr>
                            <td>
                                <div class="symbol symbol-20 symbol-lg-30 symbol-circle mr-3 overflow-hidden">
                                    <img alt="{{$row->name}}" src="{{asset($row->photo)}}" />
                                </div>
                            </td>
                            <td>{{$row->student->student_id ?? ''}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->student->dob ?? ''}}</td>
                            <td class="text-right">
                                <x-actions>

                                    <li class="navi-item">
                                        <a href="javascript:;" class="navi-link" data-toggle="modal" data-target="#ediModal" onclick="ediFn(this)"
                                           data-href="{{route('student.category.update', ['category' => $row->id])}}"
                                           data-name="{{$row->name}}"
                                        >
                                            <span class="navi-icon"><i class="la la-pencil-square-o text-success"></i></span>
                                            <span class="navi-text">{{__('Edit')}}</span>
                                        </a>
                                    </li>

                                    <li class="navi-item">
                                        <a href="javascript:;" data-href="{{route('student.category.destroy', ['category' => $row->id])}}" class="navi-link" onclick="delFn(this)">
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

        function ediFn(e){
            var link = e.getAttribute('data-href');
            var name = e.getAttribute('data-name');

            $('#ediModal form').attr('action', link);

            $('#ediModal [name=name]').val(name);
        }

        $('#kt_datatable').DataTable({
            order: [],//Disable default sorting
            columnDefs: [
                { orderable: false, "targets": [1] }//For Column Order
            ]
        });
    </script>
@endsection
