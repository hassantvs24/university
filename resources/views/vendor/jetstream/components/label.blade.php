@props(['value', 'req'])

<label {{ $attributes->merge(['class' => '']) }}>
    {{ $value ?? $slot }} {!!  isset($req) ? '<span class="text-danger">*</span>':''!!}
</label>
