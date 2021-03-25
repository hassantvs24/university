@section('box')

    <x-modals id="addModal" class="modal-sm" action="{{route('year.store')}}" label="{{__('New Academic Year')}}">

        <x-ninput label="{{__('Display Name')}}" name="name" required="required" />
        <x-ninput label="{{__('Year')}}" name="years" type="number" min="2020" max="2999" required="required" />

    </x-modals>


    <x-modals id="ediModal" class="modal-sm" action="#" label="{{__('Edit Academic Year')}}">
        @method('PUT')

        <x-ninput label="{{__('Visible Name')}}" name="name" required="required" />
        <x-ninput label="{{__('Year')}}" name="years" type="number" min="2020" max="2999" required="required" />

    </x-modals>

@endsection
