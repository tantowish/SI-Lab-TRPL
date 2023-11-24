@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
    <div class="p-8 lg:px-16">
        @if (session('success'))
        <div id="success-message" class="p-4 mb-6 text-sm text-green-900 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success! </span>{{ session('success') }}
        </div>
        @endif
        <div class="py-4">
            <p>Lebar Ruangan : {{ $laboratorium->wide." m x ".$laboratorium->length.' m' }}</p>
            <p>Daya Listrik : {{ $laboratorium->watt_power }} watt</p>
        </div>
        <div class="relative overflow-x-auto rounded-sm mb-5">
            <a class="w-fit border bg-main text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2 ml-auto" href="{{ route('inventory.create', $laboratorium->laboratorium_id) }}">
                Tambah
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
            </a>
            <!-- Rest of your code -->
        </div>
        @if ($inventories->total()>0)
        <div class="relative overflow-x-auto rounded-sm mb-5">
            <table class="w-full text-xs md:text-sm text-left text-gray-500 dark:text-gray-400 border">
                <thead class="text-xs text-gray-700 bg-main dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" rowspan="2" class="px-6 py-3 border-l border-t align-middle text-center">
                            No
                        </th>
                        <th scope="col" rowspan="2" class="px-6 py-3 border-l border-t align-middle text-center">
                            Nama Barang
                        </th>
                        <th scope="col" rowspan="2" class="px-6 py-3 border-l border-t align-middle text-center">
                            Kode Barang
                        </th>
                        <th scope="col" rowspan="2" class="px-6 py-3 border-l border-t align-middle text-center">
                            Jumlah
                        </th>
                        <th scope="col" colspan="2" class="px-6 py-3 border-l border-t border-r align-middle text-center">
                            Kondisi
                        </th>
                        <th scope="col" rowspan="2" class="px-6 py-3 border-l border-t align-middle text-center">
                            Keterangan
                        </th>
                        <th scope="col" rowspan="2" class="px-6 py-3 border-l border-t align-middle text-center">
                            Aksi
                        </th>
                    </tr>
                    <tr>
                        <!-- Sub-columns under Kondisi -->
                        <th scope="col" class="px-6 py-3 border-l border-t align-middle text-center">
                            Baik
                        </th>
                        <th scope="col" class="px-6 py-3 border-l border-r border-t align-middle text-center">
                            Rusak
                        </th>
                    </tr>
                </thead>                                
                <tbody>
                    @foreach ($inventories as $key => $inventory)
                        @if($loop->even)
                        <tr class="bg-gray-1900 dark:bg-gray-800">
                        @else
                        <tr class="bg-white dark:bg-gray-800">
                        @endif
                            <td class="px-6 py-4 border-l">
                                {{ ($inventories->currentPage() - 1) * $inventories->perPage() + $loop->iteration }}
                            </td>
                            <td class="px-6 py-4 border-l">
                                {{ $inventory->item_name }}
                            </td>
                            <td class="px-6 py-4 border-l">
                                {{ $inventory->no_item }}
                            </td>
                            <td class="px-6 py-4 border-l border-r">
                                {{ $inventory->good+$inventory->bad }}
                            </td>
                            <td class="px-6 py-4 border-l border-r">
                                {{ $inventory->good }}
                            </td>
                            <td class="px-6 py-4 border-l border-r">
                                {{ $inventory->bad }}
                            </td>
                            <td class="px-6 py-4 border-l border-r">
                                {{ $inventory->information }}
                            </td>
                            <td class="px-6 py-4 border-l border-r flex flex-wrap gap-2">
                                <a href="{{ route('inventory.edit', $inventory->inventory_id) }}">
                                    <button type="button" href="{{ route('inventory.edit', $inventory->inventory_id) }}" class="bg-yellowpallete py-1 px-1.5 rounded">
                                        <svg class="text-white" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>                         
                                    </button>
                                </a>  
                                <form action="{{ route('inventory.destroy', $inventory->inventory_id) }}" method="POST" >
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="bg-redpallete py-1 px-1.5 rounded" onclick="confirmDelete()" >
                                        <svg class="text-white" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>                      
                                    </button>
                                </form>  
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- {{ dd($inventories) }} --}}
        @if ($inventories->total()>10)
        <script>
            let currentPage = {{ $inventories->currentPage() }};
            const maxPage = {{ $inventories->lastPage() }};
            const total_value = {{ $inventories->total() }};
            const showing_value = {{ ($inventories->currentPage() - 1) * $inventories->perPage() + 1 }}
            const to_value = {{ $inventories->currentPage() === $inventories->lastPage() ? $inventories->total() : $inventories->perPage()*$inventories->currentPage() }};
        </script>
        @include('dashboard.components.paginate')
        @endif

        @else
        <div class="mb-4 p-4 text-sm bg-[#E5F1F3] border-l-8 border-main">
            <p>Belum ada perlengkapan pada laboratorium ini</p>
        </div>
        @endif
        <a class="w-fit border bg-prev text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2" href="{{ route('inventory.index') }}">
            <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
            Kembali
        </a>
    </div>
    <script src="{{ asset('assets/js/notif.js') }}"></script>
    <script>
        function confirmDelete() {
            if (confirm('Apakah anda ingin menghapus barang?')) {
                document.getElementById('deleteForm').submit();
            }
        }
    </script>
@endsection