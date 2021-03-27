@section('box')

    <x-modals id="addModal" class="modal-sm" action="{{route('subject.category.store')}}" label="{{__('New Subject Category')}}">
        <x-ninput label="{{__('Name')}}" name="name" required="required" />
    </x-modals>

    <x-modals id="ediModal" class="modal-sm" action="#" label="{{__('Edit Subject Category')}}">
        @method('PUT')
        <x-ninput label="{{__('Name')}}" name="name" required="required" />
    </x-modals>

@endsection
