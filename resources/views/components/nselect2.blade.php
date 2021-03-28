<div class="form-group row">

    @php
        $set_id = $id ??  mt_rand();
    @endphp

    <label class="col-form-label col-md-12" for="{{$set_id}}">{{$label}} {!! isset($required) ? '<span class="text-danger">*</span>':'' !!}</label>
    <div class="col-md-12">
        <select id="{{$set_id}}" name="{{$name ?? ''}}" {{ $attributes->merge(['class' => 'form-control']) }} style="width: 100%;" {{isset($required) ? 'required':''}} >
            {{$slot}}
        </select>
    </div>

    @if(isset($name))
        @error($name)
        <span class="form-text text-danger">{{ $message }}</span>
        @enderror
    @endif

</div>
