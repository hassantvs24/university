@section('box')

    <x-modals id="addModal" class="modal-sm" action="{{route('section.store')}}" label="{{__('New Section')}}">
        <x-nselect2 label="{{__('Select Batch')}}" class="select2" name="batches_id" required="required" >
            <option value="">{{__('Select Batch')}}</option>
            @foreach($batches as $row)
                <option value="{{$row->id}}">{{$row->name}} ({{$row->department->short_name ?? ''}})</option>
            @endforeach
        </x-nselect2>
        <x-ninput label="{{__('Section Name')}}" name="name" required="required" />
    </x-modals>

    <x-modals id="ediModal" class="modal-sm" action="#" label="{{__('Edit Section')}}">
        @method('PUT')
        <x-nselect2 label="{{__('Select Batch')}}" class="select2" name="batches_id" required="required" >
            <option value="">{{__('Select Batch')}}</option>
            @foreach($batches as $row)
                <option value="{{$row->id}}">{{$row->name}} ({{$row->department->short_name ?? ''}})</option>
            @endforeach
        </x-nselect2>
        <x-ninput label="{{__('Section Name')}}" name="name" required="required" />
    </x-modals>

@endsection
