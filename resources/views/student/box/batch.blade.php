@section('box')

    <x-modals id="addModal" action="{{route('batch.store')}}" label="{{__('New Batch')}}">
        <x-nselect2 label="{{__('Academic Year')}}" class="select2" name="academic_year_id" required="required" >
            <option value="">{{__('Select Year')}}</option>
            @foreach($academic_year as $row)
                <option value="{{$row->id}}">{{$row->name}} ({{$row->years}})</option>
            @endforeach
        </x-nselect2>

        <x-nselect2 label="{{__('Department')}}" class="select2" name="department_id" required="required" >
            <option value="">{{__('Select Department')}}</option>
            @foreach($department as $row)
                <option value="{{$row->id}}">{{$row->code}}. {{$row->name}} ({{$row->short_name}})</option>
            @endforeach
        </x-nselect2>

        <x-nselect2 label="{{__('Program')}}" class="select2" name="courses_id" required="required" >
            <option value="">{{__('Select Program')}}</option>
            @foreach($courses as $row)
                <option value="{{$row->id}}">{{$row->name}} ({{$row->academicYear->years ?? ''}})</option>
            @endforeach
        </x-nselect2>

        <x-ninput label="{{__('Batch Code')}}" name="code" type="number" min="1" max="999" required="required" />
        <x-ninput label="{{__('Batch Name')}}" name="name" required="required" />
        <x-ninput label="{{__('Hourly Rate')}}" name="price" type="number" step=".5" min="0" required="required" />

    </x-modals>

    <x-modals id="ediModal" action="#" label="{{__('Edit Batch')}}">
        @method('PUT')
        <x-nselect2 label="{{__('Academic Year')}}" class="select2" name="academic_year_id" required="required" >
            <option value="">{{__('Select Year')}}</option>
            @foreach($academic_year as $row)
                <option value="{{$row->id}}">{{$row->name}} ({{$row->years}})</option>
            @endforeach
        </x-nselect2>

        <x-nselect2 label="{{__('Department')}}" class="select2" name="department_id" required="required" >
            <option value="">{{__('Select Department')}}</option>
            @foreach($department as $row)
                <option value="{{$row->id}}">{{$row->code}}. {{$row->name}} ({{$row->short_name}})</option>
            @endforeach
        </x-nselect2>

        <x-nselect2 label="{{__('Program')}}" class="select2" name="courses_id" required="required" >
            <option value="">{{__('Select Program')}}</option>
            @foreach($courses as $row)
                <option value="{{$row->id}}">{{$row->name}} ({{$row->academicYear->years ?? ''}})</option>
            @endforeach
        </x-nselect2>

        <x-ninput label="{{__('Batch Code')}}" name="code" type="number" min="1" max="999" required="required" />
        <x-ninput label="{{__('Batch Name')}}" name="name" required="required" />
        <x-ninput label="{{__('Hourly Rate')}}" name="price" type="number" step=".5" min="0" required="required" />
    </x-modals>

@endsection
