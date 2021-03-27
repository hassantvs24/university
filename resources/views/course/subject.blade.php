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
                            <td>{{$row->subjectType->name ?? ''}}</td>
                            <td title="{{$row->description}}">{{Str::limit($row->description, 20)}}</td>
                            <td class="text-right">
                                <x-actions>

                                    <li class="navi-item">
                                        <a href="javascript:;" class="navi-link" data-toggle="modal" data-target="#ediModal" onclick="ediFn(this)"
                                           data-href="{{route('subject.update', ['subject' => $row->id])}}"
                                           data-code="{{$row->code}}"
                                           data-name="{{$row->name}}"
                                           data-types="{{$row->subject_type_id}}"
                                           data-categorie="{{$row->subject_categorie_id}}"
                                           data-description="{{$row->description}}"
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

        function ediFn(e){
            var link = e.getAttribute('data-href');
            var code = e.getAttribute('data-code');
            var name = e.getAttribute('data-name');
            var subject_type_id = e.getAttribute('data-types');
            var subject_categorie_id = e.getAttribute('data-categorie');
            var description = e.getAttribute('data-description');

            $('#ediModal form').attr('action', link);

            $('#ediModal [name=code]').val(code);
            $('#ediModal [name=name]').val(name);
            $('#ediModal [name=subject_type_id]').val(subject_type_id);
            $('#ediModal [name=subject_categorie_id]').val(subject_categorie_id);
            $('#ediModal [name=description]').val(description);
        }

        $('#kt_datatable').DataTable({
            order: [],//Disable default sorting
            columnDefs: [
                { orderable: false, "targets": [4] }//For Column Order
            ]
        });
    </script>
@endsection
