@extends('layouts.master')
@extends('course.box.subject')

@section('title')
    {{__('Subject')}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <x-card label="{{__('Subject List')}}">
                <x-slot name="button">
                    <button class="btn btn-primary ml-1" data-toggle="modal" data-target="#addModal"><i class="flaticon2-add-1"></i> {{__('Add new record')}}</button>
                </x-slot>
                <table class="table table-separate table-head-custom table-sm table-striped" id="kt_datatable">
                    <thead>
                    <tr>
                        <th>{{__('Code')}}</th>
                        <th>{{__('Title')}}</th>
                        <th>{{__('Subject Category')}}</th>
                        <th>{{__('Subject Type')}}</th>
                        <th>{{__('Status')}}</th>
                        <th>{{__('Description')}}</th>
                        <th class="text-right">{{__('Action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($table as $row)
                        <tr>
                            <td>{{$row->code}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->subjectCategory->name ?? ''}}</td>
                            <td>{{$row->subjectCategory->subjectType->name ?? ''}}</td>
                            <td>{{__($row->status)}}</td>
                            <td title="{{$row->description}}">{{Str::limit($row->description, 20)}}</td>
                            <td class="text-right">
                                <x-actions>

                                    <li class="navi-item">
                                        <a href="javascript:;" class="navi-link" data-toggle="modal" data-target="#ediModal" onclick="ediFn(this)"
                                           data-href="{{route('subject.update', ['subject' => $row->id])}}"
                                           data-code="{{$row->code}}"
                                           data-name="{{$row->name}}"
                                           data-categories="{{$row->subject_categories_id}}"
                                           data-description="{{$row->description}}"
                                           data-status="{{$row->status}}"
                                        >
                                            <span class="navi-icon"><i class="la la-pencil-square-o text-success"></i></span>
                                            <span class="navi-text">{{__('Edit')}}</span>
                                        </a>
                                    </li>

                                    <li class="navi-item">
                                        <a href="javascript:;" data-href="{{route('subject.destroy', ['subject' => $row->id])}}" class="navi-link" onclick="delFn(this)">
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
            var subject_categories_id = e.getAttribute('data-categories');
            var description = e.getAttribute('data-description');
            var status = e.getAttribute('data-status');

            $('#ediModal form').attr('action', link);

            $('#ediModal [name=code]').val(code);
            $('#ediModal [name=name]').val(name);
            $('#ediModal [name=subject_categories_id]').val(subject_categories_id).select2();
            $('#ediModal [name=description]').val(description);
            $('#ediModal [name=status]').val(status);
        }

        $('#kt_datatable').DataTable({
            order: [],//Disable default sorting
            columnDefs: [
                { orderable: false, "targets": [4] }//For Column Order
            ]
        });
    </script>
@endsection
