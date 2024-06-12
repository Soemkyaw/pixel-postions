@props(['job'])

<div class="bg-white/5 p-4 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-700 group transition-colors duration-300">

    <div class=" self-start text-sm">{{ $job->employer->name }}</div>

    <div class=" py-8">
        <a href="/jobs/{{ strtolower($job->title) }}" class="font-bold text-xl group-hover:text-blue-700 transition-colors duration-300">{{ Str::ucfirst($job->title) }}</a>
         <p class=" text-sm mt-2 text-white/50">{{ $job->recruiting_candidates }}</p>
        <p class="text-sm mt-6">{{  number_format($job->salary) }} MMK</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag href="/tag/{{ strtolower($tag->name) }}" size="small">{{ $tag->name }}</x-tag>
            @endforeach
        </div>

        <x-employer-log :employer="$job->employer" :width="42"></x-employer-log>
    </div>
</div>

