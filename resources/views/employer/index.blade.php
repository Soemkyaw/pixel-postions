<x-layout>
    <div class=" space-y-10">
        <x-section-header>Employers</x-section-header>
        <div class=" grid md:grid-cols-4 sm:grid-cols-3 gap-2 ">
            @foreach ($employers as $employer)
                <a href="/employers/{{ strtolower($employer->name) }}" class="bg-white/5 p-4 rounded-xl flex justify-between items-center border border-transparent hover:border-blue-700 group transition-colors duration-300">
                    <div class=" text-sm group-hover:text-blue-700 transition-colors duration-300">{{ $employer->name }}</div>
                    <div>
                        <x-employer-log :employer="$employer" :width="42"></x-employer-log>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-layout>
