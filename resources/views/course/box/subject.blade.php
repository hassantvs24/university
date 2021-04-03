@section('box')

    <x-modals id="addModal" action="{{route('subject.store')}}" label="{{__('New Subject')}}">
        <x-ninput label="{{__('Subject Code')}}" name="code" required="required" />
        <x-ninput label="{{__('Subject Title')}}" name="name" required="required" />

        <x-nselect2 label="{{__('Subject Category')}}" class="select2" name="subject_categories_id" required="required" >
            <option value="">{{__('Select Category')}}</option>
            @foreach($category as $row)
                <option value="{{$row->id}}">{{$row->name}} --{{$row->subjectType->name ?? ''}}</option>
            @endforeach
        </x-nselect2>

        <x-nselect label="{{__('Status')}}" name="status">
            <option value="Active">{{__('Active')}}</option>
            <option value="Inactive">{{__('Inactive')}}</option>
        </x-nselect>

        <x-ninput label="{{__('Description')}}" name="description" />

    </x-modals>

    <x-modals id="ediModal" action="#" label="{{__('Edit Subject')}}">
        @method('PUT')
        <x-ninput label="{{__('Subject Code')}}" name="code" required="required" />
        <x-ninput label="{{__('Subject Title')}}" name="name" required="required" />

        <x-nselect2 label="{{__('Subject Category')}}" name="subject_categories_id" required="required" >
            <option value="">{{__('Select Category')}}</option>
            @foreach($category as $row)
                <option value="{{$row->id}}">{{$row->name}} --{{$row->subjectType->name ?? ''}}</option>
            @endforeach
        </x-nselect2>


        <x-nselect label="{{__('Status')}}" name="status">
            <option value="Active">{{__('Active')}}</option>
            <option value="Inactive">{{__('Inactive')}}</option>
        </x-nselect>

        <x-ninput label="{{__('Description')}}" name="description" />
    </x-modals>

@endsection
