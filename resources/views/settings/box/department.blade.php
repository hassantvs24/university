@section('box')

    <x-modals id="addModal" class="modal-sm" action="{{route('department.store')}}" label="{{__('New Department')}}">

        <x-ninput label="{{__('Department Code')}}" name="code" type="number" min="10" max="99" required="required" />
        <x-ninput label="{{__('Department Name')}}" name="name" required="required" />
        <x-ninput label="{{__('Small Name')}}" name="short_name" required="required" />

    </x-modals>


    <x-modals id="ediModal" class="modal-sm" action="#" label="{{__('Edit Department')}}">
        @method('PUT')

        <x-ninput label="{{__('Department Code')}}" name="code" type="number" min="10" max="99" required="required" />
        <x-ninput label="{{__('Department Name')}}" name="name" required="required" />
        <x-ninput label="{{__('Small Name')}}" name="short_name" required="required" />

    </x-modals>

@endsection
