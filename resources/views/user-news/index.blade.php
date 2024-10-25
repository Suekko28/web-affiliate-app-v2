@extends('layouts.app-user')

@section('navbar')
  <!-- News Start !-->
  <section class="news">
    <div class="container mx-auto py-16 px-16 lg:px-32">
        <div class="title-news w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-12">
                <h4 class="text-lg sm:text-xl lg:text-2xl text-primary">
                    News
                </h4>
                <div class="w-[75px] h-[2px] my-2 block bg-black mx-auto"></div>
            </div>
            <div class="search-bar">
                <div class="relative lg:w-1/2 w-full mx-auto mb-12">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white"
                        placeholder="Search News (Title)" required />
                </div>
            </div>
        </div>
        <div class="news flex flex-wrap">
            <div class="card w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="card-body">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <a href="#">
                            <img src="{{ asset('/img/news.jpg') }}" alt="Logo OGI"
                                class="w-full object-cover w-full h-[250px] block">
                        </a>
                        <div class="py-8 px-6">
                            <h4 class="title-news mb-2">HOW TO MAKE YOU HANDSOME</h4>
                            <p class="text-sm mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit,
                                deserunt?</p>
                            <a class="text-xs hover:text-hover text-secondary" href="#">Continue Read <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="card-body">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                        <a href="#">
                            <img src="{{ asset('/img/news.jpg') }}" alt="Logo OGI"
                                class="w-full object-cover w-full h-[250px] block">
                        </a>
                        <div class="py-8 px-6">
                            <h4 class="title-news mb-2">HOW TO MAKE YOU HANDSOME</h4>
                            <p class="text-sm mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit,
                                deserunt?</p>
                            <a class="text-xs hover:text-hover text-secondary" href="#">Continue Read <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="more-detail flex justify-center">
            <a href=""
                class="w-1/2 lg:w-1/3 text-center py-2 border border-black bg-white transition-all hover:shadow-lg text-primary hover:text-white hover:bg-black hover:border-slate-800 focus:text-white">More
                Detail</a>
        </div>
        {{-- <div class="pagination flex justify-center w-full space-x-1 mt-6">
            <button
                class="rounded-md border border-slate-200 py-2 px-3 text-center text-sm transition-all shadow-md hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">Prev</button>
            <button
                class="rounded-md border border-slate-200 py-2 px-3 text-center text-sm transition-all shadow-md hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">1</button>
            <button
                class="rounded-md border border-slate-200 py-2 px-3 text-center text-sm transition-all shadow-md hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">2</button>
            <button
                class="rounded-md border border-slate-200 py-2 px-3 text-center text-sm transition-all shadow-md hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">3</button>
            <button
                class="rounded-md border border-slate-200 py-2 px-3 text-center text-sm transition-all shadow-md hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2">Next</button>
        </div> --}}
    </div>
</section>
<!-- News End !-->
@endsection
