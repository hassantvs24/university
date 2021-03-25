@extends('layouts.master')
@extends('settings.box.department')

@section('title')
    {{__('Department Setup')}}
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <x-card label="{{__('Department List')}}">
                <x-slot name="button">
                    <button class="btn btn-primary ml-1" data-toggle="modal" data-target="#addModal"><i class="flaticon2-add-1"></i> {{__('Add new record')}}</button>
                </x-slot>
                <table class="table table-separate table-head-custom table-sm table-striped" id="kt_datatable">
                    <thead>
                    <tr>
                        <th>{{__('Department Code')}}</th>
                        <th>{{__('Department Name')}}</th>
                        <th>{{__('Short Name')}}</th>
                        <th class="text-right">{{__('Action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($table as $row)
                        <tr>
                            <td>{{$row->code}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->short_name}}</td>
                            <td class="text-right">
                                <x-actions>

                                    <li class="navi-item">
                                        <a href="javascript:;" class="navi-link" data-toggle="modal" data-target="#ediModal" onclick="ediFn(this)"
                                           data-href="{{route('department.update', ['department' => $row->id])}}"
                                           data-name="{{$row->name}}"
                                           data-code="{{$row->code}}"
                                           data-small="{{$row->short_name}}"
                                        >
                                            <span class="navi-icon"><i class="la la-pencil-square-o text-success"></i></span>
                                            <span class="navi-text">{{__('Edit')}}</span>
                                        </a>
                                    </li>

                                    <li class="navi-item">
                                        <a href="javascript:;" data-href="{{route('department.destroy', ['department' => $row->id])}}" class="navi-link" onclick="delFn(this)">
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
            var code = e.getAttribute('data-code');
            var short_name = e.getAttribute('data-small');

            $('#ediModal form').attr('action', link);

            $('#ediModal [name=name]').val(name);
            $('#ediModal [name=code]').val(code);
            $('#ediModal [name=short_name]').val(short_name);
        }

        $('#kt_datatable').DataTable({
            order: [],//Disable default sorting
            columnDefs: [
                { orderable: false, "targets": [2] }//For Column Order
            ]
        });
    </script>
@endsection
