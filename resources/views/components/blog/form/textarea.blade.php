@props(['name', 'placeholder', 'value'])

<textarea rows="5" required id="{{ $name }}" name='{{ $name }}' class="form-control border border-gray-300 rounded px-2" placeholder="{{ $placeholder }}">{{ $value }}</textarea>

@error($name)
<small class="text-danger">{{ $message }}</small>
@enderror