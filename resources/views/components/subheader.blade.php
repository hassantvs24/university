<!--begin::Subheader-->
<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">
            <!--begin::Page Heading-->
            <div class="d-flex align-items-baseline flex-wrap mr-5">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold my-1 mr-5">{{isset($title) ? $title : ''}}</h5>
            </div>
            <!--end::Page Heading-->
        </div>
        <!--end::Info-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
        <!--begin::Actions-->
        {{$slot}}
        <!--<a href="#" class="btn btn-light-primary font-weight-bolder btn-sm ml-1">Actions</a>-->
        </div>
        <!--end::Toolbar-->
    </div>
</div>
<!--end::Subheader-->