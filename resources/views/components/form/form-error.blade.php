@props(['name'])

@error($name)
    <small class=" text-sm text-red-500">{{ $message }}</small>
@enderror
