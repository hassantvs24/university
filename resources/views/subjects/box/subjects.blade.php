@section('box')

    <x-modals id="addModal" class="modal-sm" action="{{route('subjects.store')}}" title="{{__('Add new subject')}}">

        <x-ninput label="{{__('Subject Name')}}" name="name" required="required" />

    </x-modals>


    <x-modals id="ediModal" class="modal-sm" action="#" title="{{__('Edit subject')}}">
        @method('PUT')

        <x-ninput label="{{__('Subject Name')}}" name="name" required="required" />

    </x-modals>

@endsection
