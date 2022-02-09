<div class="form-group">

    @php
        $set_id = $id ??  mt_rand();
        $err_id = $title ??  mt_rand();
    @endphp

    <label for="{{$set_id}}">{{$label}} {!! isset($required) ? '<span class="text-danger">*</span>':'' !!}</label>
    <input id="{{$set_id}}" name="{{$name ?? ''}}" type="{{$type ?? 'text'}}" {{ $attributes->merge(['class' => 'form-control']) }} placeholder="{{$label}}"
            {{isset($required) ? 'required':''}}

            @if(isset($name))
                @if(isset($type))

                    @if($type != 'password')
                        @if(empty(old($name)))
                        value="{{$value ?? ''}}"
                       @else
                       value="{{old($name) ?? ''}}"
                       @endif
                    @endif

                @else

                    @if(empty(old($name)))
                        value="{{$value ?? ''}}"
                    @else
                        value="{{old($name) ?? ''}}"
                    @endif

                @endif
            @endif
    />

    <span class="form-text text-danger" id="{{ $err_id }}"></span>

    @if(isset($name))
        @error($name)
            <span class="form-text text-danger">{{ $message }}</span>
        @enderror
    @endif

</div>
