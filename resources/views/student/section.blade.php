@extends('layouts.master')
@extends('student.box.section')

@section('title')
    {{__('Student Section')}}
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <x-card label="{{__('Section List')}}">
                <x-slot name="button">
                    <button class="btn btn-primary ml-1" data-toggle="modal" data-target="#addModal"><i class="flaticon2-add-1"></i> {{__('Add new record')}}</button>
                </x-slot>
                <table class="table table-separate table-head-custom table-sm table-striped" id="kt_datatable">
                    <thead>
                    <tr>
                        <th>{{__('Section Name')}}</th>
                        <th>{{__('Batch')}}</th>
                        <th>{{__('Department')}}</th>
                        <th class="text-right">{{__('Action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($table as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->batch->name ?? ''}}</td>
                            <td>{{$row->batch->department->short_name ?? ''}}</td>
                            <td class="text-right">
                                <x-actions>

                                    <li class="navi-item">
                                        <a href="javascript:;" class="navi-link" data-toggle="modal" data-target="#ediModal" onclick="ediFn(this)"
                                           data-href="{{route('section.update', ['section' => $row->id])}}"
                                           data-batch="{{$row->batches_id}}"
                                           data-name="{{$row->name}}"
                                        >
                                            <span class="navi-icon"><i class="la la-pencil-square-o text-success"></i></span>
                                            <span class="navi-text">{{__('Edit')}}</span>
                                        </a>
                                    </li>

                                    <li class="navi-item">
                                        <a href="javascript:;" data-href="{{route('section.destroy', ['section' => $row->id])}}" class="navi-link" onclick="delFn(this)">
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
            var batches_id = e.getAttribute('data-batch');

            $('#ediModal form').attr('action', link);

            $('#ediModal [name=name]').val(name);
            $('#ediModal [name=batches_id]').val(batches_id).select2();
        }

        $('#kt_datatable').DataTable({
            order: [],//Disable default sorting
            columnDefs: [
                { orderable: false, "targets": [3] }//For Column Order
            ]
        });
    </script>
@endsection
