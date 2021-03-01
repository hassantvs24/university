<!--begin::Card-->
<div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">{{ $attributes['title'] ?? '' }}</h3>
        </div>
        <div class="card-toolbar">
            <!--begin::Button-->
            {{$button ?? ''}}
            <!--end::Button-->
        </div>
    </div>
    <div class="card-body">
        <!--begin::Search Form-->
        <div class="mb-7">
            <div class="row align-items-center">
                <div class="col-lg-9 col-xl-8">
                    <div class="row align-items-center">
                        <div class="col-md-4 my-2 my-md-0">
                            <div class="input-icon">
                                <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                <span>
                                    <i class="flaticon2-search-1 text-muted"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end: Search Form-->
        <!--begin: Datatable-->
        {{$slot}}
        <!--end: Datatable-->
    </div>
</div>
<!--end::Card-->