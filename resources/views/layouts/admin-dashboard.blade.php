<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Posyandu</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

    <!-- js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #008cff; }
        .cta-btn { color: #0071b3; }
        .upgrade-btn { background: #0070cc; }
        .upgrade-btn:hover { background: #005ca7; }
        .active-nav-link { background: #0070cc; opacity: 100%;}
        .nav-item:hover { background: #005ca7; }
        .account-link:hover { background: #3d68ff; }
    </style>
</head>
<body class="bg-gray-100 font-family-karla flex">

    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="index.html" class="text-white text-xl font-semibold uppercase flex items-center hover:text-gray-300">
                <img class="w-16" src="{{ asset('img/healthcare2.png') }}" alt="PosKita">
                <p>Admin Posyadu</p>
            </a>

        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="{{route("dashboard")}}" class="{{(request()->routeIs('dashboard'))? 'active-nav-link' : ''}} flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="{{route("balita")}}" class="{{(request()->routeIs('balita'))? 'active-nav-link' : ''}} flex items-center text-white opacity-75 py-4 pl-6 nav-item">
                <i class="fas fa-baby mr-3"></i>
                Balita
            </a>
            <a href="{{route("ibuHamil")}}" class="{{(request()->routeIs('ibuHamil'))? 'active-nav-link' : ''}} flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-female mr-3"></i>
                Ibu Hamil
            </a>
            <a href="{{route("kader")}}" class="{{(request()->routeIs('kader'))? 'active-nav-link' : ''}} flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-id-badge mr-3"></i>
                Petugas Posyandu
            </a>
            <a href="{{route("statistikPosyandu")}}" class="{{(request()->routeIs('statistikPosyandu'))? 'active-nav-link' : ''}} flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-chart-line mr-3"></i>
                Statistik Posyandu
            </a>
            <a href="{{route("event")}}" class="{{(request()->routeIs('event'))? 'active-nav-link' : ''}} flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-calendar mr-3"></i>
                Event
            </a>
        </nav>
        <a href="#" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
            <i class="fas fa-arrow-circle-up mr-3"></i>
            Go to User Views
        </a>
    </aside>

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex z-10">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <i class="fas fa-user-circle w-full"></i>
                </button>
                <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                    <a href="#" class="text-center block px-4 py-2 account-link hover:text-white">Account</a>
                    <a href="#" class="text-center block px-4 py-2 account-link hover:text-white">Support</a>
                    <form class="" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full block px-4 py-2 account-link hover:text-white">Sign Out</button>
                    </form>
                </div>
            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="{{route("dashboard")}}" class="{{(request()->routeIs('dashboard'))? 'active-nav-link' : ''}} flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="{{route("balita")}}" class="{{(request()->routeIs('balita'))? 'active-nav-link' : ''}} flex items-center active-nav-link text-white py-2 pl-4 nav-item">
                    <i class="fas fa-baby mr-3"></i>
                    Balita
                </a>
                <a href="{{route("ibuHamil")}}" class="{{(request()->routeIs('ibuHamil'))? 'active-nav-link' : ''}} flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-female mr-3"></i>
                    Ibu Hamil
                </a>
                <a href="{{route("kader")}}" class="{{(request()->routeIs('kader'))? 'active-nav-link' : ''}} flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-id-badge mr-3"></i>
                    Petugas Posyandu
                </a>
                <a href="{{route("statistikPosyandu")}}" class="{{(request()->routeIs('statistikPosyandu'))? 'active-nav-link' : ''}} flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-chart-line mr-3"></i>
                    Statistik Posyandu
                </a>
                <a href="{{route("event")}}" class="{{(request()->routeIs('event'))? 'active-nav-link' : ''}} flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-calendar mr-3"></i>
                    Event
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-cogs mr-3"></i>
                    Support
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-user mr-3"></i>
                    My Account
                </a>
                <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Sign Out
                </a>
                <button class="w-full bg-white cta-btn font-semibold py-2 mt-3 rounded-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                    <i class="fas fa-arrow-circle-up mr-3"></i> Go to User Views
                </button>
            </nav>
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
        </header>

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-5">{{$header}}</h1>

                {{$slot}}
            </main>

            <footer class="w-full bg-white text-right p-4">
                Built by <a target="_blank" href="https://www.instagram.com/ptsuardana01" class="underline">ptsuardana01</a>.
            </footer>
        </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>
