
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-4 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                </svg>
            </button>
            <a href="/dashboard" class="flex ml-2 md:mr-24">
                <img src="{{ asset('assets\img\dashboard\layout\silaboe2.png') }}" class="w-28 mr-3" alt="logo2" />
            </a>
        </div>
        <div class="flex items-center">
            <div class="flex items-center ml-3">
                <div>
                <button type="button" class="flex text-sm bg-white border rounded-full mr-5 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                    <span class="sr-only">Open user menu</span>
                    @if (session('data')['photo'])
                    <img class="w-8 h-8 rounded-full object-cover" src="{{ asset('storage/'.session('data')['photo']) }}" alt="user photo">
                    @else
                    <svg class="rounded-full text-gray-500 p-1.5 w-8 h-8" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    @endif
                </button>
                </div>
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                <div class="px-4 py-3" role="none">
                    <p class="text-sm text-gray-900 dark:text-white" role="none">
                    {{ session('data')['name'] }}
                    </p>
                    <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                    {{ session('data')['email'] }}
                    </p>
                </div>
                <ul class="py-1" role="none">
                    <li>
                        <a href="{{ route('profile.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Profile</a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Landing Page</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign Out</a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
    </nav>
  
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2  font-medium">
            <li>    
                <a href="{{ route('dashboard') }}" class="flex items-center py-2 px-5 text-gray-900 rounded-l-3xl dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group active">
                    <object class="flex-shrink-0 w-5 h-5" data="{{ asset('assets\img\dashboard\layout\beranda.svg') }}" type="image/svg+xml"></object>
                    <span class="flex-1 ml-3 whitespace-nowrap">Beranda</span>
                </a>
            </li>
            <li>
                <a href="{{ route('schedule.index') }}" class="flex items-center py-2 px-5 text-gray-900 rounded-l-3xl dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <object class="flex-shrink-0 w-5 h-5" data="{{ asset('assets\img\dashboard\layout\jadwal.svg') }}" type="image/svg+xml"></object>
                    <span class="flex-1 ml-3 whitespace-nowrap">Jadwal</span>
                </a>
            </li>
            <li>
                <button type="button" class="flex items-center w-full py-2 px-5 text-base text-gray-900 transition duration-75 rounded-l-3xl group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-asisten" data-collapse-toggle="dropdown-asisten">
                    <object class="flex-shrink-0 w-5 h-5" data="{{ asset('assets\img\dashboard\layout\asisten.svg') }}" type="image/svg+xml"></object>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Asisten</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <ul id="dropdown-asisten" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#" class="flex items-center w-full py-2 px-5 text-gray-900 transition duration-75 rounded-l-3xl pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Data Asisten</a>
                        </li>
                        @if (session('data')->getTable()=='lab_administrators')
                        <li>
                            <a href="#" class="flex items-center w-full py-2 px-5 text-gray-900 transition duration-75 rounded-l-3xl pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Presensi</a>
                        </li>
                        @endif
                        <li>
                            <a href="#" class="flex items-center w-full py-2 px-5 text-gray-900 transition duration-75 rounded-l-3xl pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Riwayat Presensi</a>
                        </li>
                </ul>
            </li>
            @if (session('data')->getTable()=='lab_administrators')
            <li>
                <a href="{{ route('reserve.index') }}" class="flex items-center py-2 px-5 text-gray-900 rounded-l-3xl dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <object class="flex-shrink-0 w-5 h-5"data="{{ asset('assets\img\dashboard\layout\peminjaman.svg') }}" type="image/svg+xml"></object>
                    <span class="flex-1 ml-3 whitespace-nowrap">Peminjaman Ruangan</span>
                </a>
            </li>
            @else
            
            <li>
                <button type="button" class="flex items-center w-full py-2 px-5 text-base text-gray-900 transition duration-75 rounded-l-3xl group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-reservasi" data-collapse-toggle="dropdown-reservasi">
                    <object class="flex-shrink-0 w-5 h-5" data="{{ asset('assets\img\dashboard\layout\peminjaman.svg') }}" type="image/svg+xml"></object>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Peminjaman Ruangan</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <ul id="dropdown-reservasi" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ route('reserve.create') }}" class="flex items-center w-full py-2 px-5 text-gray-900 transition duration-75 rounded-l-3xl pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Reservasi</a>
                            </li>
                            <li>
                            <a href="{{ route('reserve.history') }}" class="flex items-center w-full py-2 px-5 text-gray-900 transition duration-75 rounded-l-3xl pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Riwayat Peminjaman</a>
                        </li>
                </ul>
            </li>
            @endif
            <li>
                <button type="button" class="flex items-center w-full py-2 px-5 text-base text-gray-900 transition duration-75 rounded-l-3xl group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-proyek" data-collapse-toggle="dropdown-proyek">
                    <object class="flex-shrink-0 w-5 h-5" data="{{ asset('assets\img\dashboard\layout\proyek.svg') }}" type="image/svg+xml"></object>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Proyek</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <ul id="dropdown-proyek" class="hidden py-2 space-y-2">
                        @if(session('data')->getTable()=='lab_administrators')
                        <li>
                            <a href="{{ route('project.index') }}" class="flex items-center w-full py-2 px-5 text-gray-900 transition duration-75 rounded-l-3xl pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Pengajuan</a>
                        </li>
                        <li>
                            <a href="{{ route('announcement.index') }}" class="flex items-center w-full py-2 px-5 text-gray-900 transition duration-75 rounded-l-3xl pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Pengumuman</a>
                        </li> 
                        @else
                        <li>
                            <a href="{{ route('project.create') }}" class="flex items-center w-full py-2 px-5 text-gray-900 transition duration-75 rounded-l-3xl pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Pengajuan</a>
                        </li>
                        <li>
                            <a href="{{ route('project.index') }}" class="flex items-center w-full py-2 px-5 text-gray-900 transition duration-75 rounded-l-3xl pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Riwayat Proyek</a>
                        </li>
                        @endif
                        
                </ul>
            </li>
            @if (session('data')->getTable()=='lab_administrators')
            <li>    
                <a href="{{ route('inventory.index') }}" class="flex items-center py-2 px-5 text-gray-900 rounded-l-3xl dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <object class="flex-shrink-0 w-5 h-5" data="{{ asset('assets\img\dashboard\layout\inventaris.svg') }}" type="image/svg+xml"></object>
                    <span class="flex-1 ml-3 whitespace-nowrap">Inventaris</span>
                </a>
            </li>
            @endif
        </ul>
        <hr class="my-3">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('profile.index') }}" class="flex items-center py-2 px-5 text-gray-900 rounded-l-3xl dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <object class="flex-shrink-0 w-5 h-5" data="{{ asset('assets\img\dashboard\layout\profile.svg') }}" type="image/svg+xml"></object>
                    <span class="flex-1 ml-3 whitespace-nowrap">Profile</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}" class="flex items-center py-2 px-5 text-gray-900 rounded-l-3xl dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <object class="flex-shrink-0 w-5 h-5" data="{{ asset('assets\img\dashboard\layout\logout.svg') }}" type="image/svg+xml"></object>
                    <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>