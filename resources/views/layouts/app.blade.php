<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Blog Laravel')</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="flex flex-col min-h-screen bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-gray-800 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <h1 class="text-xl font-semibold">Rebly Blogs</h1>
                </div>

                <!-- Menu Desktop -->
                <div class="hidden sm:flex space-x-4">
                    <a href="/posts" class="px-3 py-2 rounded-md text-sm font-medium bg-gray-900">Home</a>
                    <a href="" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">About</a>
                    <a href="#" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">Projects</a>
                    <a href="#" class="px-3 py-2 rounded-md text-sm font-medium hover:bg-gray-700">Contact</a>
                </div>

                <!-- Toggle Button (Mobile) -->
                <div class="sm:hidden flex items-center">
                    <button @click="open = !open" class="focus:outline-none">
                        <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-16 6h16" />
                        </svg>
                        <svg x-show="open" class="w-6 h-6 hidden" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="open" class="sm:hidden bg-gray-700 text-white">
            <a href="#" class="block px-4 py-2">Home</a>
            <a href="#" class="block px-4 py-2">About</a>
            <a href="#" class="block px-4 py-2">Projects</a>
            <a href="#" class="block px-4 py-2">Contact</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto flex-grow p-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center py-4 mt-6">
        <p>&copy; {{ date('Y') }} Rebly Blog. All rights reserved.</p>
    </footer>

</body>

</html>
