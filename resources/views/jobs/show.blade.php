<x-layout>
    <div class=" flex justify-between items-center">

        <a href="{{ url()->previous() }}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
            </svg>
        </a>
        {{-- <x-section-header></x-section-header> --}}
    </div>
    <div class=" mt-6 space-y-10 pb-20">
        <p class=" text-center underline underline-offset-8">We Are Hiring</p>
        <div class="mt-5 flex justify-between items-center">
            <p class=" font-bold text-xl">{{ $job->title }}</p>
            <span>( {{ $job->recruiting_candidates }} )</span>
        </div>
        <div class="">
            <span class="bg-yellow-400 text-black px-2 rounded mb-5">Job Description</span>
            <div id="job-descriptions">
                {!! $job->job_descriptions !!}
            </div>
        </div>
        <div class="">
            <span class="bg-yellow-400 text-black px-2 rounded mb-5 ">Job Requirments</span>
            <div id="job-requirments">
                {!! $job->job_requirements !!}
            </div>
        </div>
        <div>
            <div class="flex mb-2">
                <div class="w-24 font-bold">Type</div>
                <div> - <span>{{ $job->schedule }}</span></div>
            </div>
            <div class="flex mb-2">
                <div class="w-24 font-bold">Salary</div>
                <div> - <span class="text-green-500">{{ number_format($job->salary) }}</span> MMK</div>
            </div>
        </div>
        <p class=" text-center">Please send your resume to <a href= "mailto: {{ $job->employer->user->email }}"
                class="text-blue-500"> {{ $job->employer->user->email }} </a></p>
        <div class=" flex justify-between">
            <a class=" flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 bg-green-600 rounded">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                </svg>
                <span class=" ml-2">{{ $job->contact_number }}</span>
            </a>
            {{-- <div class=" font-bold text-green-600" title="This is a tooltip">{{ $job->employer->name }}</div> --}}
            <div class="relative group">
                <div class="cursor-pointer text-green-600">{{ $job->employer->name }}</div>
                <div
                    class="absolute bottom-full mb-2 hidden group-hover:block bg-blue-700 text-white text-xs rounded py-1 px-2">
                    {{ $job->employer->name }} Co., Ltd
                </div>
            </div>
            <div class=" flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 bg-green-600 rounded">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>
                <span class=" ml-2">{{ $job->location }}</span>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const jobDescriptions = document.getElementById('job-descriptions');
            const ulElements = jobDescriptions.getElementsByTagName('ul');
            for (let ul of ulElements) {
                ul.classList.add('list-disc', 'pl-5', 'mb-2');
                const liElements = ul.getElementsByTagName('li');
                for (let li of liElements) {
                    li.classList.add('mb-2');
                }
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const jobDescriptions = document.getElementById('job-requirments');
            const ulElements = jobDescriptions.getElementsByTagName('ul');
            for (let ul of ulElements) {
                ul.classList.add('list-disc', 'pl-5', 'mb-2');
                const liElements = ul.getElementsByTagName('li');
                for (let li of liElements) {
                    li.classList.add('mb-2');
                }
            }
        });
    </script>

</x-layout>
