@section('box')
    <x-modals id="addModal" action="{{route('course.add_subject', ['id' => $table->id])}}" label="{{__('Add subject in this course')}}">
        @method('PUT')
        <x-nselect label="{{__('Semester')}}" name="semester_level" required="required">
            @for($k = 1; $k<= $table->semester; $k++)
                <option value="{{$k}}">{{__('Semester')}}-{{$k}}</option>
            @endfor
        </x-nselect>

        <x-nselect2 label="{{__('Subject Subject')}}" class="select2" name="subject_id" required="required" >
            <option value="">{{__('Select Subject')}}</option>
            @foreach($subjects as $row)
                <option value="{{$row->id}}">{{$row->code}} -- {{$row->name}}</option>
            @endforeach
        </x-nselect2>

        <x-ninput label="{{__('Credit Hour')}}" name="credit" type="number" step=".5" min="0" max="99" required="required" />

        <x-nselect2 label="{{__('Subject Dependency')}}" class="select2" name="dependency">
            <option value="">{{__('Select Dependent Subject')}}</option>
            @foreach($subjects as $row)
                <option value="{{$row->id}}">{{$row->code}} -- {{$row->name}}</option>
            @endforeach
        </x-nselect2>

        <x-ninput label="{{__('Course Group')}}- {{__('Ex:Program core courses')}}" name="name" />

    </x-modals>



    <x-modals id="ediModal" action="#" label="{{__('Edit subject in this course')}}">
        @method('PUT')
        <x-nselect label="{{__('Semester')}}" name="semester_level" required="required">
            @for($k = 1; $k<= $table->semester; $k++)
                <option value="{{$k}}">{{__('Semester')}}-{{$k}}</option>
            @endfor
        </x-nselect>

        <x-nselect2 label="{{__('Subject Subject')}}" class="select2" name="subject_id" required="required" >
            <option value="">{{__('Select Subject')}}</option>
            @foreach($subjects as $row)
                <option value="{{$row->id}}">{{$row->code}} -- {{$row->name}}</option>
            @endforeach
        </x-nselect2>

        <x-ninput label="{{__('Credit Hour')}}" name="credit" type="number" step=".5" min="0" max="99" required="required" />

        <x-nselect2 label="{{__('Subject Dependency')}}" class="select2" name="dependency">
            <option value="">{{__('Select Dependent Subject')}}</option>
            @foreach($subjects as $row)
                <option value="{{$row->id}}">{{$row->code}} -- {{$row->name}}</option>
            @endforeach
        </x-nselect2>

        <x-ninput label="{{__('Course Group')}}- {{__('Ex:Program core courses')}}" name="name" />
    </x-modals>



@endsection
