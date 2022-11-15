<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Register!</h1>

                <form method="POST" action="/register" class="mt-10">
                    @csrf

                    <x-form.input name="name" required />
                    <x-form.input name="username" required />
                    <x-form.input name="email" type="email" required />
                    <x-form.input name="password" type="password" autocomplete="new-password" required />
                    <div class="text-center space-y-3">
                        <x-form.button type="submit">Sign Up</x-form.button>
                        <h2 class=" font-semibold text-xs">Already Registered <a
                                class="underline text-blue-500 hover:text-blue-700" href="/login">Login
                                Now</a></h2>

                    </div>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>