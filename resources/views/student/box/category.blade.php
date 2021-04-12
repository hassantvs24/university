@section('box')

    <x-modals id="addModal" action="{{route('student.category.store')}}" class="modal-sm" label="{{__('New Student Category')}}">
        <x-ninput label="{{__('Student Category Name')}}" name="name" required="required" />
    </x-modals>

    <x-modals id="ediModal" action="#" class="modal-sm" label="{{__('Edit Student Category')}}">
        @method('PUT')
        <x-ninput label="{{__('Student Category Name')}}" name="name" required="required" />
    </x-modals>

@endsection
