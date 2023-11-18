@extends('dashboard.layouts.main')

@section('content')
@include('dashboard.components.header')
    <div class="p-8 lg:px-16">
        @if (session('success'))
        <div id="success-message" class="p-4 mb-6 text-sm text-green-900 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success! </span>{{ session('success') }}
        </div>
        @endif
        @if($projects->count()>0)
        <div class="relative overflow-x-auto rounded-sm mb-5">
            <table class="w-full text-xs md:text-sm text-left text-gray-500 dark:text-gray-400 border">
                <thead class="text-xs text-gray-700 bg-main dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 border-l border-t">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 border-l border-t">
                            Nama Proyek
                        </th>
                        <th scope="col" class="px-6 py-3 border-l border-t">
                            Waktu
                        </th>
                        <th scope="col" class="px-6 py-3 border-l border-t">
                            Action  
                        </th>
                        <th scope="col" class="px-6 py-3 border-l border-r border-t">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $key => $project)
                    <tr class="{{ $key % 2 === 0 ? 'bg-gray-1900' : 'bg-white' }} dark:bg-gray-800">
                        <td class="px-6 py-4 border-l">
                            {{ $no++ }}
                        </td>
                        <td class="px-6 py-4 border-l">
                            {{ $project->project_name }}
                        </td>
                        <td class="px-6 py-4 border-l">
                            {{ \Carbon\Carbon::parse($project->start_date)->isoFormat('MMMM Y') }} - {{ $project->end_date ? \Carbon\Carbon::parse($project->end_date)->isoFormat('MMMM Y') : 'Sekarang' }}

                        </td>
                        <td class="px-6 py-4 border-l flex flex-wrap items-stretch gap-2">
                            <a href="{{ route('project.show', $project->project_id) }}">
                                <button type="button" href="{{ route('project.show', $project->project_id) }}" class="bg-blue-200 py-1 px-1.5 rounded">
                                    <svg class="text-white" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>                            
                                </button>
                            </a>     
                            @if (session('data')->getTable()=='lab_administrators')       
                            <a href="{{ route('project.edit', $project->project_id) }}">
                                <button type="button" href="{{ route('project.edit', $project->project_id) }}" class="bg-yellowpallete py-1 px-1.5 rounded">
                                    <svg class="text-white" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>                         
                                </button>
                            </a>  
                            <form action="{{ route('project.destroy', $project->project_id) }}" method="POST" >
                                @csrf
                                @method('delete')
                                <button type="submit" class="bg-redpallete py-1 px-1.5 rounded" onclick="confirmDelete()" >
                                    <svg class="text-white" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>                      
                                </button>
                            </form>  
                            @endif
                        </td>
                        <td class="px-6 py-4 border-l">
                            @if($project->status == 'waiting')
                            <p class="p-2 bg-yellowpallete text-white rounded w-fit">Waiting</p>
                            @elseif($project->status == 'published')
                            <p class="p-2 bg-green-400 text-white rounded w-fit">Published</p>
                            @elseif($project->status == 'rejected')
                            <p class="p-2 bg-redpallete text-white rounded w-fit">Rejected</p>
                            @else
                            <p class="p-2 bg-yellowpallete text-white rounded w-fit">Archive</p>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if ($projects->count()>5)
        @include('dashboard.components.paginate')
        @endif
        @else
        @if(session('data')->getTable()=='lab_administrators')           
        <div class="mb-4 p-4 text-sm bg-[#E5F1F3] border-l-8 border-main">
            <p>Belum ada yang mengajukan proyek</p>
            </div>
        @else  
        <div class="mb-4 p-4 text-sm bg-[#E5F1F3] border-l-8 border-main">
            <p>Anda belum membuat permohonan proyek</p>
        </div>
        <a class="w-fit border bg-main text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2" href="{{ route('project.create')}}">
            Tambah Proyek
        </a>
        @endif
        @endif
    </div>
    <script src="{{ asset('assets/js/notif.js') }}"></script>
    <script>
        function confirmDelete() {
            if (confirm('Apakah anda ingin menghapus proyek?')) {
                document.getElementById('deleteForm').submit();
            }
        }
    </script>
@endsection