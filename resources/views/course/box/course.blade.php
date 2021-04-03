@section('box')

    <x-modals id="addModal" action="{{route('course.store')}}" label="{{__('New Subject')}}">
        <x-ninput label="{{__('Course name')}}" name="name" required="required" />
        <x-ninput label="{{__('Total Semester')}}" name="semester" type="number" min="1" max="99" required="required" />
        <x-ninput label="{{__('Total Subject')}}" name="total_subject" type="number" min="1" max="999" required="required" />
        <x-ninput label="{{__('Total Credit')}}" name="total_credit" type="number" step="any" min="0" required="required" />

        <x-nselect2 label="{{__('Departments')}}" class="select2" name="department_id" required="required" >
            <option value="">{{__('Select Departments')}}</option>
            @foreach($departments as $row)
                <option value="{{$row->id}}">{{$row->short_name}} --{{$row->name}}</option>
            @endforeach
        </x-nselect2>

        <x-nselect2 label="{{__('Academic Year')}}" class="select2" name="academic_year_id" required="required" >
            <option value="">{{__('Academic Year')}}</option>
            @foreach($years as $row)
                <option value="{{$row->id}}">{{$row->name}} ({{$row->years}})</option>
            @endforeach
        </x-nselect2>

        <x-nselect label="{{__('Status')}}" name="status">
            <option value="Active">{{__('Active')}}</option>
            <option value="Inactive">{{__('Inactive')}}</option>
        </x-nselect>

    </x-modals>

    <x-modals id="ediModal" action="#" label="{{__('Edit Subject')}}">
        @method('PUT')
        <x-ninput label="{{__('Course name')}}" name="name" required="required" />
        <x-ninput label="{{__('Total Semester')}}" name="semester" type="number" min="1" max="99" required="required" />
        <x-ninput label="{{__('Total Subject')}}" name="total_subject" type="number" min="1" max="999" required="required" />
        <x-ninput label="{{__('Total Credit')}}" name="total_credit" type="number" step="any" min="0" required="required" />

        <x-nselect2 label="{{__('Departments')}}" class="select2" name="department_id" required="required" >
            <option value="">{{__('Select Departments')}}</option>
            @foreach($departments as $row)
                <option value="{{$row->id}}">{{$row->short_name}} --{{$row->name}}</option>
            @endforeach
        </x-nselect2>

        <x-nselect2 label="{{__('Academic Year')}}" class="select2" name="academic_year_id" required="required" >
            <option value="">{{__('Academic Year')}}</option>
            @foreach($years as $row)
                <option value="{{$row->id}}">{{$row->name}} ({{$row->years}})</option>
            @endforeach
        </x-nselect2>

        <x-nselect label="{{__('Status')}}" name="status">
            <option value="Active">{{__('Active')}}</option>
            <option value="Inactive">{{__('Inactive')}}</option>
        </x-nselect>

    </x-modals>

@endsection
