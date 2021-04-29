@section('box')
    <x-modals id="addModal" class="modal-xl" action="{{route('section.store')}}" label="{{__('New Student')}}">

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="personal-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">{{__('Personal')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="academic-tab" data-toggle="tab" href="#academic" role="tab" aria-controls="academic" aria-selected="false">{{__('Academic')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="false">{{__('General')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="finance-tab" data-toggle="tab" href="#finance" role="tab" aria-controls="finance" aria-selected="false">{{__('Financial Aid')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="admission-tab" data-toggle="tab" href="#admission" role="tab" aria-controls="admission" aria-selected="false">{{__('Admission')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="other" aria-selected="false">{{__('Other')}}</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">

            </div>

            <div class="tab-pane fade" id="academic" role="tabpanel" aria-labelledby="academic-tab">...</div>
            <div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general-tab">...</div>
            <div class="tab-pane fade" id="finance" role="tabpanel" aria-labelledby="finance-tab">...</div>
            <div class="tab-pane fade" id="admission" role="tabpanel" aria-labelledby="admission-tab">...</div>
            <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">...</div>
        </div>

    </x-modals>

    <x-modals id="ediModal" class="modal-sm" action="#" label="{{__('Edit Section')}}">
        @method('PUT')
        <x-ninput label="{{__('Section Name')}}" name="name" required="required" />
    </x-modals>
@endsection
