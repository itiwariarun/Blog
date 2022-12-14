<!doctype html>

<title>Latest Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<style>
    html {
        scroll-behavior: smooth;
    }

    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>

<body style="font-family: Open Sans, sans-serif;" class="min-w-full bg-gray-100">

    <section class="px-6 py-4 ">
        <nav class="flex justify-between bg-[#0f172a] opacity-80 backdrop-blur-xl z-50 py-3 sticky top-0 items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.png" alt="blogs Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-0 flex items-center">
                @auth
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="text-xs font-bold uppercase">
                            Welcome, {{ auth()->user()->name }}!
                        </button>
                    </x-slot>

                    @admin
                    <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">
                        Dashboard
                    </x-dropdown-item>

                    <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">
                        New Post
                    </x-dropdown-item>
                    @endadmin

                    <x-dropdown-item href="#" x-data="{}"
                        @click.prevent="document.querySelector('#logout-form').submit()">
                        Log Out
                    </x-dropdown-item>

                    <form id="logout-form" method="POST" action="/logout" class="hidden">
                        @csrf
                    </form>
                </x-dropdown>
                @else
                <a href="/register"
                    class="text-xs font-bold uppercase {{ request()->is('register') ? 'text-blue-500' : '' }}">
                    Register
                </a>

                <a href="/login"
                    class="ml-6 text-xs font-bold uppercase {{ request()->is('login') ? 'text-blue-500' : '' }}">
                    Log In
                </a>
                @endauth


            </div>
        </nav>
        <main class="">

        {{ $slot }}</main>

        <footer id="newsletter"
            class="bg-gray-800 border border-black text-gray-200 border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/avatar.png" alt="" class="mx-auto " style="width: 145px;">

            <h5 class="text-3xl">Stay with us updated</h5>
            <p class="text-sm mt-3">Connect with us</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="/newsletter" class="lg:flex text-sm">
                        @csrf

                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <div>
                                <input id="email" value="{{ old('email') }}" name="email" type="text"
                                    placeholder="Your email address"
                                    class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">


                            </div>

                        </div>


                        <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            Subscribe
                        </button>

                    </form>

                </div>
                <div>@error('email')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </footer>
    </section>

    <x-flash />
</body>