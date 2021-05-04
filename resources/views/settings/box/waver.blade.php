@section('box')

    <x-modals id="addModal" class="modal-sm" action="{{route('waver.store')}}" label="{{__('New Academic Year')}}">

        <x-ninput label="{{__('Waver Name')}}" name="name" required="required" />
        <x-ninput label="{{__('Amount (%)')}}" name="amount" type="number" step="any" min="0" max="99" required="required" />

    </x-modals>


    <x-modals id="ediModal" class="modal-sm" action="#" label="{{__('Edit Academic Year')}}">
        @method('PUT')

        <x-ninput label="{{__('Waver Name')}}" name="name" required="required" />
        <x-ninput label="{{__('Amount (%)')}}" name="amount" type="number" step="any" min="0" max="99" required="required" />

    </x-modals>

@endsection
