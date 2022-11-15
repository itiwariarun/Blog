@auth
<x-panel>
    <form method="POST" action="/posts/{{ $post->slug }}/comments">
        @csrf

        <header class="flex items-center ">
            <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" class="rounded-full" alt="" width="40" height="40"
                class="rounded-full">

            <h2 class="ml-4">Want to participate?</h2>
        </header>

        <div class="mt-6">
            <textarea name="body" class="w-full p-3 text-sm focus:outline-none focus:ring" rows="5"
                placeholder="Quick, thing of something to say!" required></textarea>

            @error('body')
            <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
            <x-form.button type="submit">Submit</x-form.button>
        </div>
    </form>
</x-panel>
@else
<div class="mt-6">
    <textarea name="body" class="w-full text-sm border-2 border-gray-300 rounded-2xl p-3 focus:outline-none focus:ring"
        rows="5" placeholder="Quick, thing of something to say!" required></textarea>


</div>

<div class="flex justify-end mt-2 pt-4 border-t border-gray-200">
    <a href="/login">
        <x-form.button type="submit">Login To Submit</x-form.button>
    </a>
</div>
@endauth