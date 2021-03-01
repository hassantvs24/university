@extends('layouts.master')
@extends('users.box.roles')

@section('title')
    {{__('User Roles')}}
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6">
            <x-card title="{{__('User Roles List')}}">
                <x-slot name="button">
                    <button class="btn btn-primary ml-1" data-toggle="modal" data-target="#addModal"><i class="flaticon2-add-1"></i> {{__('Add new record')}}</button>
                </x-slot>
                <table class="datatable datatable-bordered datatable-head-custom table-striped" id="kt_datatable">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Number Of Permission</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($table as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>{{$row->getAllPermissions()->count()}}</td>
                            <td>
                                @if($row->name != 'Super Admin')

                                    @php
                                        $data = [];
                                        $old_permission = $row->getAllPermissions();
                                        foreach ($old_permission as $permit){
                                            $data[] = $permit->id;
                                        }
                                    @endphp

                                    <x-actions>

                                        <li class="navi-item" title="{{__('Assign Permission')}}">
                                            <a href="javascript:;" class="navi-link" data-toggle="modal" data-target="#permissionModal" onclick="perFn(this)"
                                               data-href="{{route('permissions', ['id' => $row->id])}}"
                                               data-permission="{{json_encode($data)}}"
                                            >
                                                <span class="navi-icon"><i class="la la-crown text-warning"></i></span>
                                                <span class="navi-text">{{__('Permission')}}</span>
                                            </a>
                                        </li>

                                        <li class="navi-item">
                                            <a href="javascript:;" class="navi-link" data-toggle="modal" data-target="#ediModal" onclick="ediFn(this)"
                                               data-href="{{route('roles.update', ['role' => $row->id])}}"
                                               data-name="{{$row->name}}"
                                            >
                                                <span class="navi-icon"><i class="la la-pencil-square-o text-success"></i></span>
                                                <span class="navi-text">{{__('Edit')}}</span>
                                            </a>
                                        </li>

                                        <li class="navi-item">
                                            <a href="javascript:;" data-href="{{route('roles.destroy', ['role' => $row->id])}}" class="navi-link" onclick="delFn(this)">
                                                <span class="navi-icon"><i class="la la-trash-o text-danger"></i></span>
                                                <span class="navi-text">{{__('Delete')}}</span>
                                            </a>
                                        </li>

                                    </x-actions>
                                @endif
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

        function perFn(e) {
            var link = e.getAttribute('data-href');
            var permission = e.getAttribute('data-permission');

            $('#permissionModal input:checkbox').prop('checked',false);

            $('#permissionModal form').attr('action', link);

            $.each(JSON.parse(permission), function( index, value ) {
                $('#permissionModal #checkedPerm'+value).prop('checked',true);
            });

        }


        var table = function() {
            // Private functions

            // demo initializer
            var demo = function() {

                $('#kt_datatable').KTDatatable({
                    data: {
                        saveState: {cookie: false},
                    },
                    search: {
                        input: $('#kt_datatable_search_query'),
                        key: 'generalSearch',
                    },
                    layout: {
                        class: 'datatable-bordered',
                    },
                    columns: [
                        {
                            field: 'Action',
                            sortable: false,
                            textAlign: 'right'
                        }
                    ],
                });

            };

            return {
                // Public functions
                init: function() {
                    // init dmeo
                    demo();
                },
            };
        }();

        jQuery(document).ready(function() {
            table.init();
        });
    </script>
@endsection