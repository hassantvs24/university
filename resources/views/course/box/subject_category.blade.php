@section('box')

    <x-modals id="addModal" class="modal-sm" action="{{route('subject.category.store')}}" label="{{__('New Subject Category')}}">
        <x-nselect2 label="{{__('Subject Types')}}" class="select2" name="subject_type_id" required="required" >
            <option value="">{{__('Select Types')}}</option>
            @foreach($types as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
            @endforeach
        </x-nselect2>
        <x-ninput label="{{__('Name')}}" name="name" required="required" />
    </x-modals>

    <x-modals id="ediModal" class="modal-sm" action="#" label="{{__('Edit Subject Category')}}">
        @method('PUT')
        <x-nselect2 label="{{__('Subject Types')}}" class="select2" name="subject_type_id" required="required" >
            <option value="">{{__('Select Types')}}</option>
            @foreach($types as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
            @endforeach
        </x-nselect2>
        <x-ninput label="{{__('Name')}}" name="name" required="required" />
    </x-modals>

@endsection
