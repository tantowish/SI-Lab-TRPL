@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
    <div class="p-8 lg:px-16 mx-auto">
        @if (session('success'))
        <div id="success-message" class="p-4 mb-6 text-sm text-green-900 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success! </span>{{ session('success') }}
        </div>
        @endif
        @if ($reserves->total()>7)
        <div class="relative overflow-x-auto rounded-sm mb-5">
            <table class="w-full text-xs md:text-sm text-left text-gray-500 dark:text-gray-400 border">
                <thead class="text-xs text-gray-700 bg-main dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 border-l border-t">
                            Mulai
                        </th>
                        <th scope="col" class="px-6 py-3 border-l border-t">
                            Selesai
                        </th>
                        <th scope="col" class="px-6 py-3 border-l border-t">
                            Laboratorium
                        </th>
                        @if (session('data')->getTable()=='lab_administrators')               
                        <th scope="col" class="px-6 py-3 border-l border-t">
                            Peminjam
                        </th>
                        <th scope="col" class="px-6 py-3 border-l border-t">
                            Detail
                        </th>
                        @endif
                        <th scope="col" class="px-6 py-3 border-l border-r border-t">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reserves as $key => $reserve)
                    <tr class="{{ $key % 2 === 0 ? 'bg-gray-1900' : 'bg-white' }} dark:bg-gray-800">
                        <td class="px-6 py-4 border-l">
                            {{ date('H:i', strtotime($reserve->start_time)) }}
                        </td>
                        <td class="px-6 py-4 border-l">
                            {{ date('H:i', strtotime($reserve->end_time)) }}
                        </td>
                        <td class="px-6 py-4 border-l">
                            {{ $reserve->laboratorium->laboratorium_name }}
                        </td>
                        @if (session('data')->getTable()=='lab_administrators')
                        <td class="px-6 py-4 border-l">
                            {{ $reserve->user->name }}
                        </td>
                        <td class="px-6 py-4 border-l">
                            <a href="{{ route('reserve.show', $reserve->reserve_id) }}">
                                <button type="button" href="" class="bg-blue-200 px-1.5 rounded">
                                    <svg class="text-white" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>                            
                                </button>
                            </a>                        
                        </td>        
                        @endif
                        <td class="px-6 py-4 border-l border-r">
                            @if($reserve->labReserve[0]->status == 'waiting')
                            <p class="p-2 bg-yellowpallete text-white rounded w-fit">Waiting</p>
                            @elseif($reserve->labReserve[0]->status == 'accepted')
                            <p class="p-2 bg-green-400 text-white rounded w-fit">Accepted</p>
                            @else
                            <p class="p-2 bg-redpallete text-white rounded w-fit">Rejected</p>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if ($reserves->total()>7)
        <script>
            let currentPage = {{ $reserves->currentPage() }}
            const maxPage = {{ $reserves->lastPage() }};
            const total_value = {{ $reserves->total() }};
            const showing_value = {{ ($reserves->currentPage() - 1) * $reserves->perPage() + 1 }}
            const to_value = {{ $reserves->currentPage() === $reserves->lastPage() ? $reserves->total() : $reserves->perPage()*$reserves->currentPage() }};
            console.log(maxPage)
        </script>
        @include('dashboard.components.paginate')
        @endif
        @else
        @if (session('data')->getTable()=='lab_administrators')       
        <div class="mb-4 p-4 text-sm bg-[#E5F1F3] border-l-8 border-main">
            <p>Belum ada yang melakukan reservasi</p>
        </div>
        @else
        <div class="mb-4 p-4 text-sm bg-[#E5F1F3] border-l-8 border-main">
            <p>Anda belum melakukan reservasi</p>
        </div>
        <a class="w-fit border bg-main text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2" href="{{ route('reserve.create')}}">
            Reservasi
        </a>
        @endif
        @endif
    </div>
    <script src="{{ asset('assets/js/notif.js') }}"></script>
@endsection