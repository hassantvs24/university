@section('box')

    <x-modals id="addModal" class="modal-sm" action="{{route('subject.type.store')}}" label="{{__('New Subject Type')}}">
        <x-ninput label="{{__('Name')}}" name="name" required="required" />
    </x-modals>

    <x-modals id="ediModal" class="modal-sm" action="#" label="{{__('Edit Subject Type')}}">
        @method('PUT')
        <x-ninput label="{{__('Name')}}" name="name" required="required" />
    </x-modals>

@endsection
