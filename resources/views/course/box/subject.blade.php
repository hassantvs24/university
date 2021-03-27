@section('box')

    <x-modals id="addModal" action="{{route('subject.store')}}" label="{{__('New Subject')}}">
        <x-ninput label="{{__('Subject Code')}}" name="code" required="required" />
        <x-ninput label="{{__('Subject Title')}}" name="name" required="required" />

        <x-nselect label="{{__('Subject Category')}}" name="subject_categorie_id" >
            <option value="">{{__('Select Category')}}</option>
            @foreach($category as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
            @endforeach
        </x-nselect>

        <x-nselect label="{{__('Subject Types')}}" name="subject_type_id" >
            <option value="">{{__('Select Types')}}</option>
            @foreach($types as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
            @endforeach
        </x-nselect>

        <x-ninput label="{{__('Description')}}" name="description" />

    </x-modals>

    <x-modals id="ediModal" action="#" label="{{__('Edit Subject')}}">
        @method('PUT')
        <x-ninput label="{{__('Subject Code')}}" name="code" required="required" />
        <x-ninput label="{{__('Subject Title')}}" name="name" required="required" />

        <x-nselect label="{{__('Subject Category')}}" name="subject_categorie_id" >
            <option value="">{{__('Select Category')}}</option>
            @foreach($category as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
            @endforeach
        </x-nselect>

        <x-nselect label="{{__('Subject Types')}}" name="subject_type_id" >
            <option value="">{{__('Select Types')}}</option>
            @foreach($types as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
            @endforeach
        </x-nselect>

        <x-ninput label="{{__('Description')}}" name="description" />
    </x-modals>

@endsection
