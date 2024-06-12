<x-layout>
    <section class=" max-w-[640px] mx-auto">
        <h3 class="text-2xl text-center pb-10 underline underline-offset-8">Login Form</h3>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mt-4">
                <x-form.form-label class="form-label">Email</x-form.form-label>
                <x-form.form-input type="email" name="email" placeholder="example@gmail.com"></x-form.form-input>
                <x-form.form-error name="email"/>
            </div>
            <div class="mt-4">
                <x-form.form-label class="form-label">Password</x-form.form-label>
                <x-form.form-input type="password" name="password"></x-form.form-input>
                <x-form.form-error name="password"/>
            </div>

            <div class=" py-6">
                <div class="border border-white/10"></div>
            </div>

            <div class=" text-center mt-5">
                <button type="submit" class="px-3 py-2 border border-blue-800 bg-blue-800 rounded-md hover:bg-blue-700" >Login</button>
            </div>
        </form>
    </section>
</x-layout>

