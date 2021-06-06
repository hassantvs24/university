@if ($table->count() > 0)
    <x-nselect label="{{__('Section')}}" name="section_id" required="required">
        <option value="">{{__('Select Batch Section')}}</option>
        @foreach($table as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>
        @endforeach
    </x-nselect>
@endif

