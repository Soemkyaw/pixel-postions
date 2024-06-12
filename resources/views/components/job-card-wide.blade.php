@props(['job'])

<div class="bg-white/5 p-4 rounded-xl flex gap-x-6 border border-transparent hover:border-blue-700 group transition-colors duration-300">
    <div>
        <x-employer-log :employer="$job->employer" :width="100"></x-employer-log>
    </div>
    <div class=" flex-1 flex flex-col">
        <div class=" self-start text-sm text-gray-500">{{ $job->employer->name }}</div>
        <h3 class=" text-xl mt-3  group-hover:text-blue-700 transition-colors duration-300">{{ $job->title }}</h3>
        <p class="text-sm text-gray-400 mt-auto">{{  number_format($job->salary) }} MMK</p>
    </div>
    <div>
        @foreach ($job->tags as $tag)
            <x-tag href="/tag/{{ strtolower($tag->name) }}" size="small">{{ $tag->name }}</x-tag>
        @endforeach
    </div>
</div>
