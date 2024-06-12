<x-layout>
    <section class=" max-w-[640px] mx-auto">
        <h3 class="text-2xl font-bold text-center pb-10 underline underline-offset-8">Post New Job</h3>
        <form action="{{ route('jobs.store') }}" method="POST">
            @method('POST')
            @csrf
            <div class="">
                <x-form.form-label class="form-label">Title</x-form.form-label>
                <x-form.form-input name="title" placeholder="Enter job title"></x-form.form-input>
                <x-form.form-error name="title" />
            </div>
            <div class="mt-4">
                <x-form.form-label class="form-label">Recruiting Candidates</x-form.form-label>
                <x-form.form-input name="recruiting_candidates" placeholder="M-1 or F-1 or M/F-1"></x-form.form-input>
                <x-form.form-error name="recruiting_candidates" />
            </div>
            <div class="mt-4">
                <x-form.form-label class="form-label">salary</x-form.form-label>
                <x-form.form-input type="number" name="salary" placeholder="180,000"></x-form.form-input>
                <x-form.form-error name="salary" />
            </div>
            <div class="mt-4">
                <x-form.form-label class="form-label">Location</x-form.form-label>
                <x-form.form-input name="location" placeholder="Yangon"></x-form.form-input>
                <x-form.form-error name="location" />
            </div>

            <div class=" mt-4">
                <x-form.form-label class="form-label">Choose Schedule</x-form.form-label>
                <div class="relative">
                    <select name="schedule"
                        class="custom-select px-4 py-3 rounded-md bg-white/10 border border-white/10 w-full mt-2">
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                    </select>
                    <x-form.form-error name="schedule" />
                </div>

                <x-form.form-error name="password_confirmation" />
            </div>

            <div class="mt-4">
                <x-form.form-label class="form-label">Job Descriptions</x-form.form-label>
                <div id="editor1" class="px-2 py-3  bg-white/10  w-full"></div>
                <textarea name="job_descriptions" id="hiddenContent1" style="display:none;"></textarea>
                <x-form.form-error name="job_descriptions" />
            </div>

            <div class="mt-4">
                <x-form.form-label class="form-label">Job Requirements</x-form.form-label>
                <div id="editor2" class="px-2 py-3  bg-white/10  w-full"></div>
                <textarea name="job_requirements" id="hiddenContent2" style="display:none;"></textarea>
                <x-form.form-error name="job_requirements" />
            </div>

            <div class="mt-4">
                <x-form.form-label class="form-label">Contact Number</x-form.form-label>
                <x-form.form-input type="number" name="contact_number" placeholder="09xxxxxxxxx"></x-form.form-input>
                <x-form.form-error name="contact_number" />
            </div>

            <div class=" py-6">
                <div class="border border-white/10"></div>
            </div>

            <div class="">
                <x-form.form-label class="form-label">Tags <span class=" text-sm text-white/50">(comma separated)</span></x-form.form-label>
                <x-form.form-input name="tags" placeholder=""></x-form.form-input>
                <x-form.form-error name="tags" />
            </div>

            <div class=" text-center mt-5">
                <button
                    class="px-3 py-2 border border-blue-800 bg-blue-800 rounded-md hover:bg-blue-700">Public</button>
            </div>
        </form>
    </section>
</x-layout>
<script>
    // Initialize the first Quill editor
    var quill1 = new Quill('#editor1', {
        theme: 'snow'
    });

    // Update the hidden textarea for the first editor
    quill1.on('text-change', function() {
        var html = quill1.root.innerHTML;
        document.getElementById('hiddenContent1').value = html;
    });

    // Initialize the second Quill editor
    var quill2 = new Quill('#editor2', {
        theme: 'snow'
    });

    // Update the hidden textarea for the second editor
    quill2.on('text-change', function() {
        var html = quill2.root.innerHTML;
        document.getElementById('hiddenContent2').value = html;
    });

    // Apply Tailwind classes to both toolbars
    var toolbars = document.querySelectorAll('.ql-toolbar');
    // .ql-container.ql-snow
    var aa = document.querySelectorAll('.ql-container.ql-snow');
    aa.forEach(function(a){
         a.style.border = '1px solid rgba(255, 255, 255, 0.1)';
        a.style.borderTop = 'none';
    })
    toolbars.forEach(function(toolbar) {
        toolbar.style.border = '1px solid rgba(255, 255, 255, 0.1)';
        toolbar.classList.add('bg-white/10', 'text-white', 'border', 'border-gray-700');
        var toolbarButtons = toolbar.querySelectorAll('button');
        toolbarButtons.forEach(function(button) {
            button.classList.add('text-white', 'border', 'border-black');
        });
        var toolbarPickers = toolbar.querySelectorAll('.ql-picker-label');
        toolbarPickers.forEach(function(picker) {
            picker.classList.add('text-white', 'border', 'border-black');
        });
        var toolbarPickerOptions = toolbar.querySelectorAll('.ql-picker-options');
        toolbarPickerOptions.forEach(function(pickerOptions) {
            pickerOptions.classList.add('text-black', 'border', 'border-black');
        });
    });
</script>
