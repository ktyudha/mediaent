@extends('layouts.master')
@section('konten')

<x-app-layout>

    <!--Left Col-->
    <main class="container flex flex-col min-h-screen mt-36 md:mt-40">
        <div class="py-7">
            <div class="py-5 border-b-4 mx-auto mb-8">
                <h2 class="font-bold text-2xl text-center tracking-widest uppercase">{{ request()->route('category')->name }}</h2>
            </div>

            <section class="flex flex-col md:flex-row justify-center gap-8 pb-10 border-b-4">
                <div class="w-full space-y-3">
                    <h3 class="text-center font-semibold text-xl uppercase tracking-wide">Latest Article</h3>
                    <div class="h-96 w-full bg-slate-300 flex justify-center items-center">
                        <h3 class="text-3xl font-semibold text-slate-400">Category post</h3>
                    </div>
                </div>
                <div class="w-full space-y-3">
                    <h3 class="text-center font-semibold text-xl uppercase tracking-wide">Video on Youtube</h3>
                    <div class="h-96 w-full bg-slate-300 flex justify-center items-center">
                        <h3 class="text-3xl font-semibold text-slate-400">Video on Youtube</h3>
                    </div>
                </div>
            </section>

            <div class="flex flex-col lg:flex-row justify-between items-start space-x-12 mb-4 py-8">
                <section class="w-full lg:w-full">
                    <div class="py-2 mx-auto mb-8">
                        <h2 class="font-bold text-2xl text-center tracking-widest uppercase">Articles</h2>
                    </div>

                    <div class="w-9/12 flex flex-col space-y-5 mx-auto">
                        <!--Card 1-->
                        <a href="preview.html">
                            <div class="w-full lg:max-w-full lg:flex">
                                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover text-center overflow-hidden flex justify-center items-center bg-slate-300">
                                    <h4>Image placeholder</h4>
                                </div>
                                <div class="p-4 flex flex-col justify-between leading-normal">
                                    <div class="mb-8">
                                        <div class="text-gray-900 font-bold text-xl mb-2">Title</div>
                                        <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="text-sm">
                                            <span class="text-gray-900 font-semibold leading-none">Categories</span>
                                            <span class="mx-2 text-gray-600">Aug 18</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!--Card 1-->
                        <a href="preview.html">
                            <div class="w-full lg:max-w-full lg:flex">
                                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover text-center overflow-hidden flex justify-center items-center bg-slate-300">
                                    <h4>Image placeholder</h4>
                                </div>
                                <div class="p-4 flex flex-col justify-between leading-normal">
                                    <div class="mb-8">
                                        <div class="text-gray-900 font-bold text-xl mb-2">Title</div>
                                        <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="text-sm">
                                            <span class="text-gray-900 font-semibold leading-none">Categories</span>
                                            <span class="mx-2 text-gray-600">Aug 18</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!--Card 1-->
                        <a href="preview.html">
                            <div class="w-full lg:max-w-full lg:flex">
                                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover text-center overflow-hidden flex justify-center items-center bg-slate-300">
                                    <h4>Image placeholder</h4>
                                </div>
                                <div class="p-4 flex flex-col justify-between leading-normal">
                                    <div class="mb-8">
                                        <div class="text-gray-900 font-bold text-xl mb-2">Title</div>
                                        <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="text-sm">
                                            <span class="text-gray-900 font-semibold leading-none">Categories</span>
                                            <span class="mx-2 text-gray-600">Aug 18</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!--Card 1-->
                        <a href="preview.html">
                            <div class="w-full lg:max-w-full lg:flex">
                                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover text-center overflow-hidden flex justify-center items-center bg-slate-300">
                                    <h4>Image placeholder</h4>
                                </div>
                                <div class="p-4 flex flex-col justify-between leading-normal">
                                    <div class="mb-8">
                                        <div class="text-gray-900 font-bold text-xl mb-2">Title</div>
                                        <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="text-sm">
                                            <span class="text-gray-900 font-semibold leading-none">Categories</span>
                                            <span class="mx-2 text-gray-600">Aug 18</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- pagination example -->
                    <nav class="w-full py-7 inline-flex justify-center rounded-md" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Previous</span>
                            <!-- Heroicon name: solid/chevron-left -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                        <a href="#" aria-current="page" class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 1 </a>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 2 </a>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium"> 3 </a>
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Next</span>
                            <!-- Heroicon name: solid/chevron-right -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </nav>
                    <!-- end of pagination example -->
                </section>
            </div>
        </div>
    </main>
</x-app-layout>
@endsection
