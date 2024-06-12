@php
    // Get the latest 6 jobs
    $latestJobs = $jobs->take(6);

    // Get the remaining jobs
    $jobs = $jobs->slice(6);
@endphp

<x-layout>

    <div class=" space-y-10">
        <section class=" text-center pt-6">
            <h1 class=" text-4xl">Let's Find Your Next Job</h1>
            <form action="/search">
                @csrf
                <input type="text" name="q" class="mt-5 px-5 py-4 rounded-xl bg-white/10 border-white/10 w-full max-w-xl" placeholder="Web Developer..." value="{{ old('q') }}">
            </form>
        </section>

        <section class="pt-10">
            <x-section-header>Recent Jobs</x-section-header>

            <div class=" grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($latestJobs as $job)
                    <x-job-card :$job></x-job-card>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-header>Tags</x-section-header>

            <div class="mt-6   grid md:grid-cols-10 sm:grid-cols-5 gap-1 text-center grid-cols-3">
                @foreach ($tags as $tag)
                    <x-tag href="/tag/{{ strtolower($tag->name) }}">{{ $tag->name }}</x-tag>
                @endforeach
            </div>
        </section>

        <section class="pb-10">
            <x-section-header>Remaining Jobs</x-section-header>

            <div class=" mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :job="$job"></x-job-card-wide>
                @endforeach
            </div>
        </section>
    </div>

</x-layout>
