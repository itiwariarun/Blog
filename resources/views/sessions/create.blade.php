<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Log In!</h1>

                <form method="POST" action="/login" class="mt-10">
                    @csrf

                    <x-form.input name="email" type="email" autocomplete="username" required />
                    <x-form.input name="password" type="password" autocomplete="current-password" required />
                    <div class="text-center space-y-3">
                        <x-form.button type="submit">Log In</x-form.button>
                        <h2 class=" font-semibold text-xs">If you are new here <a
                                class="underline text-blue-500 hover:text-blue-700" href="/register">Join
                                Now</a></h2>

                    </div>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>