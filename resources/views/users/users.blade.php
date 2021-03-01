@extends('layouts.master')
@extends('users.box.users')

@section('title')
    {{__('Users')}}
@endsection

@section('content')
    <div class="row">
        <div class="col">
    <x-card title="{{__('User List')}}">
        <x-slot name="button">
            <button class="btn btn-primary ml-1" data-toggle="modal" data-target="#addModal"><i class="flaticon2-add-1"></i> {{__('Add new record')}}</button>
        </x-slot>
        <table class="datatable datatable-bordered datatable-head-custom table-striped" id="kt_datatable">
            <thead>
            <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>User Role</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($table as $row)
                    @php
                        $role = $row->getRoleNames()->first();
                        if($role != null){
                            $role_id = $row->roles()->first()->id;
                        }
                    @endphp
                <tr>
                    <td><img src="{{asset($row->profile_photo_path ?? 'assets/media/users/blank.png')}}" style="height: 30px;" class="img-fluid img-thumbnail" /></td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$role ?? ''}}</td>
                    <td>
                        <x-actions>

                            <li class="navi-item">
                                <a href="javascript:;" class="navi-link" data-toggle="modal" data-target="#ediModal" onclick="ediFn(this)"
                                    data-href="{{route('users.update', ['user' => $row->id])}}"
                                    data-name="{{$row->name}}"
                                    data-email="{{$row->email}}"
                                    data-role="{{$role_id ?? ''}}"
                                    data-photo="{{asset($row->profile_photo_path ?? 'assets/media/users/blank.png')}}"
                                >
                                    <span class="navi-icon"><i class="la la-pencil-square-o text-success"></i></span>
                                    <span class="navi-text">{{__('Edit')}}</span>
                                </a>
                            </li>

                            <li class="navi-item">
                                <a href="javascript:;" data-href="{{route('users.destroy', ['user' => $row->id])}}" class="navi-link" onclick="delFn(this)">
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

        $('.select2').select2();

        function ediFn(e){
            var link = e.getAttribute('data-href');

            var email = e.getAttribute('data-email');
            var name = e.getAttribute('data-name');
            var photo = e.getAttribute('data-photo');
            var role_id = e.getAttribute('data-role');

            $('#ediModal form').attr('action', link);

            $('#ediModal [name=name]').val(name);
            $('#ediModal [name=email]').val(email);
            $('#ediModal [name=role_id]').val(role_id).select2();

            $('#ediModal .ediprofile_photo').css('background-image', 'url("' + photo + '")');
        }

        new KTImageInput('profile_photo');
        new KTImageInput('ediprofile_photo');

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
                            field: 'Photo',
                            sortable: false
                        },
                        {
                            field: 'Action',
                            sortable: false,
                            textAlign: 'center'
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