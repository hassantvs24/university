@extends('layouts.master')
@extends('settings.box.year')

@section('title')
    {{__('Academic Year')}}
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <x-card label="{{__('Academic Year List')}}">
            <x-slot name="button">
                <button class="btn btn-primary ml-1" data-toggle="modal" data-target="#addModal"><i class="flaticon2-add-1"></i> {{__('Add new record')}}</button>
            </x-slot>
            <table class="table table-separate table-head-custom table-sm table-striped" id="kt_datatable">
                <thead>
                <tr>
                    <th>{{__('Display Name')}}</th>
                    <th>{{__('Year')}}</th>
                    <th class="text-right">{{__('Action')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($table as $row)
                    <tr>
                        <td>{{$row->name}}</td>
                        <td>{{$row->years}}</td>
                        <td class="text-right">
                            <x-actions>

                                <li class="navi-item">
                                    <a href="javascript:;" class="navi-link" data-toggle="modal" data-target="#ediModal" onclick="ediFn(this)"
                                       data-href="{{route('year.update', ['year' => $row->id])}}"
                                       data-name="{{$row->name}}"
                                       data-years="{{$row->years}}"
                                    >
                                        <span class="navi-icon"><i class="la la-pencil-square-o text-success"></i></span>
                                        <span class="navi-text">{{__('Edit')}}</span>
                                    </a>
                                </li>

                                <li class="navi-item">
                                    <a href="javascript:;" data-href="{{route('year.destroy', ['year' => $row->id])}}" class="navi-link" onclick="delFn(this)">
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
            var years = e.getAttribute('data-years');

            $('#ediModal form').attr('action', link);

            $('#ediModal [name=name]').val(name);
            $('#ediModal [name=years]').val(years);
        }

        $('#kt_datatable').DataTable({
            order: [],//Disable default sorting
            columnDefs: [
                { orderable: false, "targets": [2] }//For Column Order
            ]
        });
    </script>
@endsection
