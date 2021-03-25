<!--begin::Card-->
<div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">{{ $label ?? '' }}</h3>
        </div>
        <div class="card-toolbar">
            <!--begin::Button-->
        {{$button ?? ''}}
        <!--end::Button-->
        </div>
    </div>
    <div class="card-body">
    <!--begin: Datatable-->
    {{$slot}}
    <!--end: Datatable-->
    </div>
</div>
<!--end::Card-->

