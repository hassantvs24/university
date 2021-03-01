@extends('layouts.master')
@extends('packages.box.packages')

@section('title')
    {{__('Package')}}
@endsection

@section('content')

    <div class="row">
        <div class="col">
            <x-card title="{{__('Package List')}}">
                <x-slot name="button">
                    <button class="btn btn-primary ml-1" data-toggle="modal" data-target="#addModal"><i class="flaticon2-add-1"></i> {{__('Add new record')}}</button>
                </x-slot>
                <table class="datatable datatable-bordered datatable-head-custom table-striped" id="kt_datatable">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Hours</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Expire</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($table as $row)
                        <tr>
                            <td>{{$row->name}} <small class="text-danger">{{$row->isCoupon == true ? '*':''}}</small></td>
                            <td>{{$row->hours}}</td>
                            <td>{{$row->price}}</td>
                            <td>{{$row->description}}</td>
                            <td>{{date('d-M-Y - h:i A', strtotime($row->expire))}}</td>
                            <td>
                                <x-actions>

                                    <li class="navi-item">
                                        <a href="javascript:;" class="navi-link" data-toggle="modal" data-target="#ediModal" onclick="ediFn(this)"
                                           data-href="{{route('package.update', ['package' => $row->id])}}"
                                           data-name="{{$row->name}}"
                                            data-hours="{{$row->hours}}"
                                            data-price="{{$row->price}}"
                                            data-description="{{$row->description}}"
                                            data-expire="{{date('Y-m-d h:i A', strtotime($row->expire))}}"
                                            data-coupon="{{$row->isCoupon}}">
                                            <span class="navi-icon"><i class="la la-pencil-square-o text-success"></i></span>
                                            <span class="navi-text">{{__('Edit')}}</span>
                                        </a>
                                    </li>

                                    <li class="navi-item">
                                        <a href="javascript:;" data-href="{{route('package.destroy', ['package' => $row->id])}}" class="navi-link" onclick="delFn(this)">
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
            var hours = e.getAttribute('data-hours');
            var price = e.getAttribute('data-price');
            var description = e.getAttribute('data-description');
            var expire = e.getAttribute('data-expire');
            var coupon = e.getAttribute('data-coupon');


            $('#ediModal form').attr('action', link);

            $('#ediModal [name=name]').val(name);
            $('#ediModal [name=hours]').val(hours);
            $('#ediModal [name=price]').val(price);
            $('#ediModal [name=description]').val(description);

            if(coupon == 1){
                $('#checkCoupon').prop('checked', true);
            }else{
                $('#checkCoupon').prop('checked', false);
            }


            $('#ediModal [name=expire]').daterangepicker({
                timePicker: true,
                singleDatePicker: true,
                startDate: new Date(expire),
                locale: {
                    format: 'DD-MM-YYYY hh:mm A'
                }
            });

            $('#ediModal [name=expire]').val(expire);


        }

        $('#addModal [name=expire]').daterangepicker({
            timePicker: true,
            singleDatePicker: true,
            locale: {
                format: 'DD-MM-YYYY hh:mm A'
            }
        });

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
                            field: 'Hours',
                            type: 'number',
                        },
                        {
                            field: 'Price',
                            type: 'number',
                        },
                        {
                            field: 'Expire',
                            type: 'date',
                            format: 'DD-MM-YYYY hh:mm A',
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