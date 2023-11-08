@extends('dashboard.layouts.main')


@section('content')
    @include('dashboard.components.header')
    <div class="p-8 lg:px-32">
        @if (session('success'))
        <div class="p-4 mb-6 text-sm text-green-900 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success! </span>{{ session('success') }}
        </div>
        @endif



   
        @if ($announcements->count() > 0)
        <a href="{{ route('announcement.create') }}" class="bg-main mb-4 flex flex-wrap items-center w-fit border-2 px-3 py-1.5">
            <p class="font-semibold mr-1">Tambah</p>
            <svg class="text-black w-5 h-5" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
        </a>

        <div class="relative overflow-x-auto mb-5">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-main dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Deskripsi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($announcements as $announcement)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $no++ }}
                        </th>
                        <td class="px-6 py-4 border-r"> <!-- Add border to the right -->
                            {{ $announcement->title }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $announcement->description }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        




        @if ($announcements->count()>5)
        @include('dashboard.components.paginate')
        @endif
        

        @else
        <div class="mb-4 p-4 text-sm bg-[#E5F1F3] border-l-8 border-main">
            <p>Tidak ada pengumuman proyek yang dibuat</p>
        </div>

        <a href="{{ route('announcement.create') }}" class="bg-main mb-4 flex flex-wrap items-center w-fit border-2 px-3 py-1.5">
            <p class="font-semibold mr-1">Tambah</p>
            <svg class="text-black w-5 h-5" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
        </a>
        @endif
        
    </div>
    
    <script>
            // Use JavaScript to hide the success message after 3 seconds
            setTimeout(function() {
                var successMessage = document.getElementById('success-message');
                if (successMessage) {
                    successMessage.style.display = 'none';
                }
            }, 3000); // 3000 milliseconds = 3 seconds
    </script>
@endsection

