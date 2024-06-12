@props(["employer","width" => "100"])

@if (file_exists(public_path('storage/' . $employer->logo)))
    <img src="{{ asset('storage/'.$employer->logo) }}" width="{{ $width }}" class="rounded-xl">
@else
    <img src="http://picsum.photos/seed/{{ rand(0, 10000) }}/{{ $width }}/{{ $width }}" alt="Placeholder Image" class="rounded-xl">
@endif
