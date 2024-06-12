<x-layout>
    <div>
        <div class=" grid md:grid-cols-2 sm:grid-cols-2 gap-2 ">
            <a href="{{ route('salaries',['min'=>180000,'max'=>300000]) }}"
                class="bg-white/5 p-4 rounded-xl text-sm flex justify-between items-center border border-transparent hover:border-blue-700 group transition-colors duration-300">
                <span class="text-green-500 ">180,000 MMK</span>
                between
                 <span class="text-green-500 ">300,000 MMK</span>
            </a>
            <a href="{{ route('salaries',['min'=>300000,'max'=>600000]) }}"
                class="bg-white/5 p-4 rounded-xl text-sm flex justify-between items-center border border-transparent hover:border-blue-700 group transition-colors duration-300">
                <span class="text-green-500 ">300,000 MMK</span>
                between
                 <span class="text-green-500 ">600,000 MMK</span>
            </a>
            <a href="{{ route('salaries',['min'=>600000,'max'=>1000000]) }}"
                class="bg-white/5 p-4 rounded-xl text-sm flex justify-between items-center border border-transparent hover:border-blue-700 group transition-colors duration-300">
                <span class="text-green-500 ">600,000 MMK</span>
                between
                 <span class="text-green-500 ">1000,000 MMK</span>
            </a>
            <a href="{{ route('salaries',['min'=>1000000,'max'=>0]) }}"
                class="bg-white/5 p-4 rounded-xl text-sm flex justify-between items-center border border-transparent hover:border-blue-700 group transition-colors duration-300">
                <span class="text-green-500 ">100,000 MMK</span>
                <span>+</span>
            </a>
        </div>
    </div>
</x-layout>
