@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
    <div class="p-8 lg:px-16">
        @if ($subjects->count>0)
        <table class="w-full text-xs md:text-sm text-left text-gray-500 dark:text-gray-400 border">
            <thead class="text-xs text-gray-700 bg-main dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 border-l border-t">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3 border-l border-t">
                        Mata Kuliah
                    </th>
                    <th scope="col" class="px-6 py-3 border-l border-t">
                        Dosen
                    </th>
                    <th scope="col" class="px-6 py-3 border-l border-t">
                        Jumlah Pertemuan  
                    </th>
                    <th scope="col" class="px-6 py-3 border-l border-r border-t">
                        Persentase
                    </th>
                    <th scope="col" class="px-6 py-3 border-l border-r border-t">
                        Detail
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $key => $subject)
                <tr class="{{ $key % 2 === 0 ? 'bg-gray-1900' : 'bg-white' }} dark:bg-gray-800">
                    <td class="px-6 py-4 border-l flex flex-wrap items-stretch gap-2">
                        {{ $key+1 }}
                    </td>
                    <td class="px-6 py-4 border-l">
                        {{ $subject->subject_name }}
                    </td>
                    <td class="px-6 py-4 border-l">
                        {{ $subject->user->name }}
                    </td>
                    <td class="px-6 py-4 border-l">
                        {{ $pertemuanCounts[$key] }}
                    </td>
                    <td class="px-6 py-4 border-l">
                        @if($pertemuanCounts[$key]>0)
                        {{ ($hadirCounts[$key]/$pertemuanCounts[$key])*100 }}%
                        @else
                        0%
                        @endif
                    </td>
                    <td class="px-6 py-4 border-l">
                        <a href="">
                            detail
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <div class="mb-4 p-4 text-sm bg-[#E5F1F3] border-l-8 border-main">
            <p>Belum ada history presensi</p>
        </div>
        @endif
    </div>
@endsection