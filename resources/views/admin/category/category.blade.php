<x-layout>
    <x-setting heading="Publish New Post">
        <form method="POST" action="/admin/category" class="mt-10">
            @csrf

            <x-form.input name="name" required />
            <x-form.input name="slug" required />

            <div class="text-center space-y-3">
                <x-form.button type="submit">New Category</x-form.button>


            </div>
        </form>
    </x-setting>
</x-layout>