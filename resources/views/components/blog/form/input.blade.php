@props(['type' => 'text', 'name', 'placeholder', 'required' => 'true', 'value'])

<input value='{{ $value }}' {{ $required == 'true' ? 'required' : '' }} type="{{ $type }}" id="{{ $name }}" name='{{ $name }}' class="form-control border rounded px-2 border-gray-300 h-10" placeholder="{{ $placeholder }}">

@error($name)
<small class="text-red-500">{{ $message }}</small>
@enderror
