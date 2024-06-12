<x-layout>
    <section class=" max-w-[640px] mx-auto">
        <h3 class="text-2xl text-center pb-10 underline underline-offset-8">Register Form</h3>
        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="">
                <x-form.form-label class="form-label">Name</x-form.form-label>
                <x-form.form-input name="name" placeholder="Enter your name"></x-form.form-input>
                <x-form.form-error name="name"/>
            </div>
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
            <div class=" mt-4">
                <x-form.form-label class="form-label">Confirm Password</x-form.form-label>
                <x-form.form-input type="password" name="password_confirmation"></x-form.form-input>
                <x-form.form-error name="password_confirmation"/>
            </div>

            <div class=" py-6">
                <div class="border border-white/10"></div>
            </div>
            <div class="">
                <x-form.form-label class="form-label">Employer</x-form.form-label>
                <x-form.form-input name="employer"></x-form.form-input>
                <x-form.form-error name="employer"/>
            </div>
            <div class="mt-4">
                <x-form.form-label class="form-label">Logo</x-form.form-label>
                <x-form.form-input type="file" name="logo"></x-form.form-input>
                <x-form.form-error name="logo"/>
            </div>

            <div class=" text-center mt-5">
                <button type="submit" class="px-3 py-2 border border-blue-800 bg-blue-800 rounded-md hover:bg-blue-700" >Register</button>
            </div>
        </form>
    </section>
</x-layout>
