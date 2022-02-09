<div class="form-group">

    @php
        $set_id = $id ??  mt_rand();
        $err_id = $title ??  mt_rand();
    @endphp

    <label for="{{$set_id}}">{{$label}} {!! isset($required) ? '<span class="text-danger">*</span>':'' !!}</label>
    <select id="{{$set_id}}" name="{{$name ?? ''}}" {{ $attributes->merge(['class' => 'form-control']) }} {{isset($required) ? 'required':''}} >
        {{$slot}}
    </select>

    <span class="form-text text-danger" id="{{ $err_id }}"></span>

    @if(isset($name))
        @error($name)
        <span class="form-text text-danger">{{ $message }}</span>
        @enderror
    @endif

</div>
