<x-layout>
    <div class=" flex justify-between items-center">

        <a href="{{ url()->previous() }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-8 h-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
        </svg>
        </a>


        <x-section-header>Results</x-section-header>
    </div>
    <div class=" mt-6 space-y-6">
        @foreach ($jobs as $job)
            <x-job-card-wide :job="$job"></x-job-card-wide>
        @endforeach
    </div>
</x-layout>
