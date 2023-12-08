@extends('page.layouts.main')

@section('content')
    {{-- Start Judul --}}
    <div class="w-full bg-gray-400 px-16 py-28 bg-cover bg-blend-multiply bg-center "
        style="background-image: url('{{ asset('assets/img/page/publication3/bgpublication3.png') }}')">
        <div class="text-center text-white">

            <h1 class=" font-bold text-3xl lg:text-5xl tracking-wider">Projects</h1>

            <div class="flex justify-center items-center pt-2">
                <svg class="h-4 w-4 mr-2 sm:h-5 sm:w-6 lg:h-6 lg:w-6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="100" height="100" viewBox="0 0 24 24">
                    <path
                        d="M 12 2.0996094 L 1 12 L 4 12 L 4 21 L 10 21 L 10 14 L 14 14 L 14 21 L 20 21 L 20 12 L 23 12 L 12 2.0996094 z"
                        fill="white">
                    </path>
                </svg>

                <div class="flex flex-row text-base text-white lg:text-lg tracking-wider gap-4">
                    <a
                        href="\">Home</a>
                        <p>/</p>
                        <a href="\publication3">Publication</a>
                </div>

            </div>

        </div>
    </div>
    <!-- Header End -->
    <div class="md:p-12 lg:p-24 p-4">
        <div class="py-6 px-4 ">
            <div class="text-lg pb-4">Project</div>
            <h1 class="text-2xl font-bold">{{ $project->project_name }}</h1>
            <div class="bg-black w-full h-[1px] mt-4"></div>
            <div class="flex flex-row gap-3 py-3">
                <h1 class="font-semibold text-sm">Authors :</h1>
                @foreach ($project->projectHistory as $author) 
                <div class="flex flex-row gap-3 items-center ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M12 4a8 8 0 0 0-6.96 11.947A4.99 4.99 0 0 1 9 14h6a4.99 4.99 0 0 1 3.96 1.947A8 8 0 0 0 12 4Zm7.943 14.076A9.959 9.959 0 0 0 22 12c0-5.523-4.477-10-10-10S2 6.477 2 12a9.958 9.958 0 0 0 2.057 6.076l-.005.018l.355.413A9.98 9.98 0 0 0 12 22a9.947 9.947 0 0 0 5.675-1.765a10.055 10.055 0 0 0 1.918-1.728l.355-.413l-.005-.018ZM12 6a3 3 0 1 0 0 6a3 3 0 0 0 0-6Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h1 class="text-sm">{{ $author->user->name }}</h1>
                </div>
                @endforeach
              {{-- <div class="flex flex-row gap-3 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M12 4a8 8 0 0 0-6.96 11.947A4.99 4.99 0 0 1 9 14h6a4.99 4.99 0 0 1 3.96 1.947A8 8 0 0 0 12 4Zm7.943 14.076A9.959 9.959 0 0 0 22 12c0-5.523-4.477-10-10-10S2 6.477 2 12a9.958 9.958 0 0 0 2.057 6.076l-.005.018l.355.413A9.98 9.98 0 0 0 12 22a9.947 9.947 0 0 0 5.675-1.765a10.055 10.055 0 0 0 1.918-1.728l.355-.413l-.005-.018ZM12 6a3 3 0 1 0 0 6a3 3 0 0 0 0-6Z"
                            clip-rule="evenodd" />
                    </svg>
                    <h1 class="text-sm">Tamara Sadis</h1>
                </div>   --}}
            </div>
            <div class="bg-black w-full h-[1px] mt-4"></div>
            <div class="flex flex-row gap-4 py-3">
                <h1 class="font-semibold text-sm">Tanggal Mulai :</h1>
                <h1 class="font-semibold text-sm">{{ \Carbon\Carbon::parse($project->start_date)->isoFormat('DD MMMM YYYY') }}</h1>
            </div>
            <div class="bg-black w-full h-[1px] mt-2"></div>
            <div class="flex flex-row gap-4 py-3">
                <h1 class="font-semibold text-sm">Tanggal Selesai :</h1>
                @if ($project->end_date)
                <h1 class="font-semibold text-sm">{{ \Carbon\Carbon::parse($project->end_date)->isoFormat('DD MMMM YYYY') }}</h1>
                @else
                -
                @endif
            </div>
            <div class="bg-black w-full h-[1px] mt-4"></div>
        </div>

        <div class="bg-gray-100 px-8 mx-4 relative">
            <div class="flex flex-row items-center pt-4 gap-4">
                <div class="bg-[#64c5d3] w-[30px] h-[50px] absolute left-0 top-4 md:top-2 lg:top-2"></div>
                <div class="text-lg font-semibold italic pl-8 pb-4">
                    @foreach ($project->projectField as $key => $field)
                        {{ $field->field->field_name }}
                        @if (!$loop->last)
                            |
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="flex flex-row items-center pt-4 gap-4">
                <div class="bg-[#64c5d3] w-[30px] h-[50px] absolute left-0 "></div>
                <div class="text-lg font-semibold italic pl-8 pt-0">Absract</div>
            </div>
            <div class="py-12 lg:px-20 px-p2 text-sm text-justify">
                {{ $project->description }}
            </div>
        </div>

        <div class="pt-8 pb-8">

            <div class="bg-gray-100  mx-4 px-8 pt-4 relative">
                <div class="flex flex-row items-center pt-4 gap-4 ">
                    <div class="bg-[#64c5d3] w-[30px] h-[50px] absolute left-0"></div>
                    <div class="text-lg font-semibold italic pl-4">Show Docs</div>
                </div>
                <div class="py-6 px-12">
                    <a  href="{{ $project->document_link }}" target="_blank" class="text-sm text-justify text-blue-600">Download Docs</a>
                </div>
            </div>
        </div>
        <div class="mx-4">   
            <a class="w-fit border bg-prev text-white px-3 py-1.5 text-center flex flex-wrap items-center gap-2" href='/publications'>
                <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                Kembali
            </a>
        </div>
    </div>
@endsection
