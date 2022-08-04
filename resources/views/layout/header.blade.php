<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sahabat Kebaikan Rumah Zakat |{{ $title }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- css tailwind and Template Dashboard -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}" />
    <script src="{{asset('js/init-alpine.js')}}"></script>

    <!-- autocomplete js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- css autocomplete -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
</head>

<body>
    <div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        <aside class="z-20 hidden w-48 overflow-y-auto bg-gray-800  md:block flex-shrink-0">
            <div class="pb-4 text-gray-500 dark:text-gray-400">
                <div class="mb-4 bg-orange-1 rounded-b-lg  ">
                    <img src="/img/Logo Rumah Zakat DMID Putih-02.png  " class=" h-auto ">
                </div>
                <ul class="mt-6">
                    <li class="relative px-6 py-3">
                        <span class=" {{($title ==="Dashboard") ? 'absolute inset-y-0 left-0 w-1 bg-orange-1 rounded-tr-lg rounded-br-lg' : '' }}" aria-hidden="true"></span>
                        <a class="dekstopside" href="/dashboard">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                                <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                            </svg>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>

                    <li class="relative px-6 py-3">
                        <span class=" {{($title ==="Link Affiliator") ? 'absolute inset-y-0 left-0 w-1 bg-orange-1 rounded-tr-lg rounded-br-lg' : '' }}" aria-hidden="true"></span>
                        <a class="dekstopside" href="/affiliate">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                            </svg>
                            <span class="ml-4">Link Affiliator</span>
                        </a>
                    </li>

                    <li class="relative px-6 py-3">
                        <span class=" {{($title ==="Transaksi") ? 'absolute inset-y-0 left-0 w-1 bg-orange-1 rounded-tr-lg rounded-br-lg' : '' }}" aria-hidden="true"></span>
                        <a class="dekstopside" href="/transaksi">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                            <span class="ml-4">Transaksi</span>
                        </a>
                    </li>

                    <li class="relative px-6 py-3">
                        <span class=" {{($title ==="Donatur") ? 'absolute inset-y-0 left-0 w-1 bg-orange-1 rounded-tr-lg rounded-br-lg' : '' }}" aria-hidden="true"></span>
                        <a class="dekstopside" href="/donatur">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                            <span class="ml-4">Donatur</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li class="relative px-6 py-3">
                        <span class=" {{($title ==="Setting") ? 'absolute inset-y-0 left-0 w-1 bg-orange-1 rounded-tr-lg rounded-br-lg' : '' }}" aria-hidden="true"></span>
                        <a class="dekstopside" href="/settings">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                            <span class="ml-4">Settings Account</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <span class=" {{($title ==="changepassword") ? 'absolute inset-y-0 left-0 w-1 bg-orange-1 rounded-tr-lg rounded-br-lg' : '' }}" aria-hidden="true"></span>
                        <a class="dekstopside" href="/changepass">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                            <span class="ml-4">Change Password</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <button class="pages" @click="togglePagesMenu" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                </svg>
                                <span class="ml-4">Pages</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <template x-if="isPagesMenuOpen">
                            <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                                <li class="pdf">
                                    <a class="w-full" href="/faq">FAQ</a>
                                </li>
                                <li class="pdf">
                                    <a class="w-full" href="/fiqih">
                                        Fiqih Zakat
                                    </a>
                                </li>
                                <li class="pdf">
                                    <a class="w-full" href="/profile">
                                        Profile RZ
                                    </a>
                                </li>

                            </ul>
                        </template>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- Mobile sidebar -->
        <!-- Backdrop -->
        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
        <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-40 mt-16 overflow-y-auto bg-gray-800 dark:bg-gray-800 md:hidden" x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu" @keydown.escape="closeSideMenu">
            <div class="pb-4 text-gray-500 dark:text-gray-400">
                <div class="mb-4 bg-orange-1 rounded-b-lg  ">
                    <img src="/img/Logo Rumah Zakat DMID Putih-02.png  " class="max-w-full h-auto">
                </div>
                <ul class="mt-6">
                    <li class="relative px-6 py-3">
                        <span class=" {{($title ==="Dashboard") ? 'absolute inset-y-0 left-0 w-1 bg-orange-1 rounded-tr-lg rounded-br-lg' : '' }}" aria-hidden="true"></span>
                        <a class="mobileside  " href="/dashboard">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span class="ml-4">Dashboard</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <span class=" {{($title ==="Link Affiliator") ? 'absolute inset-y-0 left-0 w-1 bg-orange-1 rounded-tr-lg rounded-br-lg' : '' }}" aria-hidden="true"></span>
                        <a class="mobileside  " href="/affiliate">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                            </svg>
                            <span class="ml-4">Link Affiliator</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <span class=" {{($title ==="Transaksi") ? 'absolute inset-y-0 left-0 w-1 bg-orange-1 rounded-tr-lg rounded-br-lg' : '' }}" aria-hidden="true"></span>
                        <a class="mobileside  " href="/transaksi">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                            <span class="ml-4">Transaksi</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <span class=" {{($title ==="Donatur") ? 'absolute inset-y-0 left-0 w-1 bg-orange-1 rounded-tr-lg rounded-br-lg' : '' }}" aria-hidden="true"></span>
                        <a class="mobileside  " href="/donatur">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                            <span class="ml-4">Donatur</span>
                        </a>
                    </li>
                </ul>
                <ul>
                    <li class="relative px-6 py-3">
                        <span class=" {{($title ==="Setting") ? 'absolute inset-y-0 left-0 w-1 bg-orange-1 rounded-tr-lg rounded-br-lg' : '' }}" aria-hidden="true"></span>
                        <a class="mobileside" href="/settings">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                            <span class="ml-4">Setting Account</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <span class=" {{($title ==="changepassword") ? 'absolute inset-y-0 left-0 w-1 bg-orange-1 rounded-tr-lg rounded-br-lg' : '' }}" aria-hidden="true"></span>
                        <a class="dekstopside" href="/changepass">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                            <span class="ml-4">Change Password</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-3">
                        <button class="pages" @click="togglePagesMenu" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                </svg>
                                <span class="ml-4">Pages</span>
                            </span>
                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <template x-if="isPagesMenuOpen">
                            <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                                <li class="pdf">
                                    <a class="w-full" href="/faq">FAQ</a>
                                </li>
                                <li class="pdf">
                                    <a class="w-full" href="/fiqih">
                                        Fiqih Zakat
                                    </a>
                                </li>
                                <li class="pdf">
                                    <a class="w-full" href="/profile">
                                        Profile RZ
                                    </a>
                                </li>

                            </ul>
                        </template>
                    </li>
                </ul>

            </div>
        </aside>
        <div class="flex flex-col flex-1 w-full">
            <header class="z-10 py-4 bg-orange-1 shadow-md ">
                <div class="container flex  justify-between  sm:justify-end h-full px-6 mx-auto text-white dark:text-purple-300">
                    <!-- Mobile hamburger -->
                    <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple" @click="toggleSideMenu" aria-label="Menu">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul class="flex items-center flex-shrink-0 space-x-6 ">
                        <!-- Theme toggler -->
                        <!-- Profile menu -->
                        <li class="relative">

                            <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none" @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
                                <img class="object-cover w-8 h-8 rounded-full" src="img/user.png" alt="" aria-hidden="true" />
                            </button>
                            <template x-if="isProfileMenuOpen">
                                <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu" class="absolute -right-20 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700" aria-label="submenu">
                                    <li class="flex">
                                        <img class="object-cover w-8 h-8 rounded-full" src="img/user.png" alt="" aria-hidden="true" />
                                        <span class="px-5">{{ auth()->user()->username }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </template>
                        </li>
                        <li class="flex">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 ">
                                    <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                    </svg>
                                    <span>Log out</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </header>
            @yield('maincontent')
        </div>
    </div>
</body>

</html>