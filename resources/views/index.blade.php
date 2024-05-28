<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Search')

@section('content')
    @include('partials.search')

        <!-- image -->
        <div class="max-w-screen-lg mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full md:w-2/3">
                    <img src="https://via.placeholder.com/600x300" alt="Dummy Image" class="w-full h-auto rounded-lg shadow-md">
                </div>
                <div class="flex flex-col w-full md:w-1/3">
                    <div class="h-1/2">
                        <img src="https://via.placeholder.com/300x150" alt="Dummy Image" class="w-full h-auto rounded-lg shadow-md">
                    </div>
                    <div class="h-1/2">
                        <img src="https://via.placeholder.com/300x150" alt="Dummy Image" class="w-full h-auto rounded-lg shadow-md">
                    </div>
                </div>
            </div>
        </div>

        <!-- category -->
        <div class="max-w-screen-lg mx-auto py-10">
            <div>
                <p class="font-bold text-xl text-gray-500 dark:text-white">
                    KATEGORI
                </p>
            </div>
            <div class="grid grid-cols-4 grid-rows-2 mb-8 border-2 border-gray-200 rounded-lg shadow-sm dark:border-gray-700 bg-[#ADBC9F]">
                <figure class="flex flex-col items-center justify-between p-4 text-center border-b-2 border-gray-200 md:rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e-2 dark:border-gray-700">
                    <img class="w-16 h-16 mb-4 md:w-20 md:h-20" src="https://via.placeholder.com/150" alt="Product Image">
                    <blockquote class="max-w-2xl mx-auto mt-auto text-gray-500 lg:mb-4 dark:text-gray-400">
                        <h3 class="text-sm font-semibold text-gray-900 dark:text-white md:text-lg">Category 1</h3>
                    </blockquote>
                </figure>
                <figure class="flex flex-col items-center justify-between p-4 text-center border-b-2 border-gray-200 md:border-e-2 dark:border-gray-700">
                    <img class="w-16 h-16 mb-4 md:w-20 md:h-20" src="https://via.placeholder.com/150" alt="Product Image">
                    <blockquote class="max-w-2xl mx-auto mt-auto text-gray-500 lg:mb-4 dark:text-gray-400">
                        <h3 class="text-sm font-semibold text-gray-900 dark:text-white md:text-lg">Category 2</h3>
                    </blockquote>
                </figure>
                <figure class="flex flex-col items-center justify-between p-4 text-center border-b-2 border-gray-200 md:border-e-2 dark:border-gray-700">
                    <img class="w-16 h-16 mb-4 md:w-20 md:h-20" src="https://via.placeholder.com/150" alt="Product Image">
                    <blockquote class="max-w-2xl mx-auto mt-auto text-gray-500 lg:mb-4 dark:text-gray-400">
                        <h3 class="text-sm font-semibold text-gray-900 dark:text-white md:text-lg">Category 3</h3>
                    </blockquote>
                </figure>
                <figure class="flex flex-col items-center justify-between p-4 text-center border-b-2 border-gray-200 md:rounded-se-lg dark:border-gray-700">
                    <img class="w-16 h-16 mb-4 md:w-20 md:h-20" src="https://via.placeholder.com/150" alt="Product Image">
                    <blockquote class="max-w-2xl mx-auto mt-auto text-gray-500 lg:mb-4 dark:text-gray-400">
                        <h3 class="text-sm font-semibold text-gray-900 dark:text-white md:text-lg">Category 4</h3>
                    </blockquote>
                </figure>
                <figure class="flex flex-col items-center justify-between p-4 text-center border-b-2 border-gray-200 md:border-e-2 dark:border-gray-700">
                    <img class="w-16 h-16 mb-4 md:w-20 md:h-20" src="https://via.placeholder.com/150" alt="Product Image">
                    <blockquote class="max-w-2xl mx-auto mt-auto text-gray-500 lg:mb-4 dark:text-gray-400">
                        <h3 class="text-sm font-semibold text-gray-900 dark:text-white md:text-lg">Category 5</h3>
                    </blockquote>
                </figure>
                <figure class="flex flex-col items-center justify-between p-4 text-center border-b-2 border-gray-200 md:border-e-2 dark:border-gray-700">
                    <img class="w-16 h-16 mb-4 md:w-20 md:h-20" src="https://via.placeholder.com/150" alt="Product Image">
                    <blockquote class="max-w-2xl mx-auto mt-auto text-gray-500 lg:mb-4 dark:text-gray-400">
                        <h3 class="text-sm font-semibold text-gray-900 dark:text-white md:text-lg">Category 6</h3>
                    </blockquote>
                </figure>
                <figure class="flex flex-col items-center justify-between p-4 text-center border-b-2 border-gray-200 md:border-e-2 dark:border-gray-700">
                    <img class="w-16 h-16 mb-4 md:w-20 md:h-20" src="https://via.placeholder.com/150" alt="Product Image">
                    <blockquote class="max-w-2xl mx-auto mt-auto text-gray-500 lg:mb-4 dark:text-gray-400">
                        <h3 class="text-sm font-semibold text-gray-900 dark:text-white md:text-lg">Category 7</h3>
                    </blockquote>
                </figure>
                <figure class="flex flex-col items-center justify-between p-4 text-center border-gray-200 md:rounded-b-lg md:rounded-se-lg dark:border-gray-700">
                    <img class="w-16 h-16 mb-4 md:w-20 md:h-20" src="https://via.placeholder.com/150" alt="Product Image">
                    <blockquote class="max-w-2xl mx-auto mt-auto text-gray-500 lg:mb-4 dark:text-gray-400">
                        <h3 class="text-sm font-semibold text-gray-900 dark:text-white md:text-lg">Category 8</h3>
                    </blockquote>
                </figure>
            </div>

        </div>

        <!-- produk terlaris -->
        <div class="max-w-screen-lg mx-auto pb-10">
            <div>
                <p class="font-bold text-xl text-gray-500 dark:text-white">
                    PRODUK TERLARIS
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="w-full bg-[#DBE7C9] border border-gray-200 rounded-lg shadow dark:bg-[#12372A] dark:border-gray-700">
                    <a href="#">
                        <img class="p-8 rounded-t-lg mx-auto" src="https://via.placeholder.com/300" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Lorem ipsum</h5>
                        </a>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900 dark:text-white">Rp.35.500</span>
                            <a href="#" class="text-white bg-[#12372A] hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DBE7C9] dark:text-gray-900 dark:hover:bg-[#c8d5b2] dark:focus:ring-[#c8d5b2]">
                                <svg class="w-6 h-6 text-gray-100 dark:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.268 6A2 2 0 0 0 14 9h1v1a2 2 0 0 0 3.04 1.708l-.311 1.496a1 1 0 0 1-.979.796H8.605l.208 1H16a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L4.686 5H4a1 1 0 0 1 0-2h1.5a1 1 0 0 1 .979.796L6.939 6h5.329Z"/>
                                    <path d="M18 4a1 1 0 1 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0V8h2a1 1 0 1 0 0-2h-2V4Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full bg-[#DBE7C9] border border-gray-200 rounded-lg shadow dark:bg-[#12372A] dark:border-gray-700">
                    <a href="#">
                        <img class="p-8 rounded-t-lg mx-auto" src="https://via.placeholder.com/300" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Lorem ipsum</h5>
                        </a>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900 dark:text-white">Rp.35.500</span>
                            <a href="#" class="text-white bg-[#12372A] hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DBE7C9] dark:text-gray-900 dark:hover:bg-[#c8d5b2] dark:focus:ring-[#c8d5b2]">
                                <svg class="w-6 h-6 text-gray-100 dark:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.268 6A2 2 0 0 0 14 9h1v1a2 2 0 0 0 3.04 1.708l-.311 1.496a1 1 0 0 1-.979.796H8.605l.208 1H16a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L4.686 5H4a1 1 0 0 1 0-2h1.5a1 1 0 0 1 .979.796L6.939 6h5.329Z"/>
                                    <path d="M18 4a1 1 0 1 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0V8h2a1 1 0 1 0 0-2h-2V4Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full bg-[#DBE7C9] border border-gray-200 rounded-lg shadow dark:bg-[#12372A] dark:border-gray-700">
                    <a href="#">
                        <img class="p-8 rounded-t-lg mx-auto" src="https://via.placeholder.com/300" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Lorem ipsum</h5>
                        </a>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900 dark:text-white">Rp.35.500</span>
                            <a href="#" class="text-white bg-[#12372A] hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DBE7C9] dark:text-gray-900 dark:hover:bg-[#c8d5b2] dark:focus:ring-[#c8d5b2]">
                            <svg class="w-6 h-6 text-gray-100 dark:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.268 6A2 2 0 0 0 14 9h1v1a2 2 0 0 0 3.04 1.708l-.311 1.496a1 1 0 0 1-.979.796H8.605l.208 1H16a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L4.686 5H4a1 1 0 0 1 0-2h1.5a1 1 0 0 1 .979.796L6.939 6h5.329Z"/>
                                <path d="M18 4a1 1 0 1 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0V8h2a1 1 0 1 0 0-2h-2V4Z"/>
                            </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full bg-[#DBE7C9] border border-gray-200 rounded-lg shadow dark:bg-[#12372A] dark:border-gray-700">
                    <a href="#">
                        <img class="p-8 rounded-t-lg mx-auto" src="https://via.placeholder.com/300" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Lorem ipsum</h5>
                        </a>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900 dark:text-white">Rp.35.500</span>
                            <a href="#" class="text-white bg-[#12372A] hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DBE7C9] dark:text-gray-900 dark:hover:bg-[#c8d5b2] dark:focus:ring-[#c8d5b2]">
                            <svg class="w-6 h-6 text-gray-100 dark:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.268 6A2 2 0 0 0 14 9h1v1a2 2 0 0 0 3.04 1.708l-.311 1.496a1 1 0 0 1-.979.796H8.605l.208 1H16a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L4.686 5H4a1 1 0 0 1 0-2h1.5a1 1 0 0 1 .979.796L6.939 6h5.329Z"/>
                                <path d="M18 4a1 1 0 1 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0V8h2a1 1 0 1 0 0-2h-2V4Z"/>
                            </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- recommendation -->
        <div class="max-w-screen-lg mx-auto pb-10">
            <div>
                <p class="font-bold text-xl text-gray-500 dark:text-white">
                    REKOMENDASI PRODUK
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="w-full bg-[#DBE7C9] border border-gray-200 rounded-lg shadow dark:bg-[#12372A] dark:border-gray-700">
                    <a href="#">
                        <img class="p-8 rounded-t-lg mx-auto" src="https://via.placeholder.com/300" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Lorem ipsum</h5>
                        </a>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900 dark:text-white">Rp.35.500</span>
                            <a href="#" class="text-white bg-[#12372A] hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DBE7C9] dark:text-gray-900 dark:hover:bg-[#c8d5b2] dark:focus:ring-[#c8d5b2]">
                                <svg class="w-6 h-6 text-gray-100 dark:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.268 6A2 2 0 0 0 14 9h1v1a2 2 0 0 0 3.04 1.708l-.311 1.496a1 1 0 0 1-.979.796H8.605l.208 1H16a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L4.686 5H4a1 1 0 0 1 0-2h1.5a1 1 0 0 1 .979.796L6.939 6h5.329Z"/>
                                <path d="M18 4a1 1 0 1 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0V8h2a1 1 0 1 0 0-2h-2V4Z"/>
                            </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full bg-[#DBE7C9] border border-gray-200 rounded-lg shadow dark:bg-[#12372A] dark:border-gray-700">
                    <a href="#">
                        <img class="p-8 rounded-t-lg mx-auto" src="https://via.placeholder.com/300" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Lorem ipsum</h5>
                        </a>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900 dark:text-white">Rp.35.500</span>
                            <a href="#" class="text-white bg-[#12372A] hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DBE7C9] dark:text-gray-900 dark:hover:bg-[#c8d5b2] dark:focus:ring-[#c8d5b2]">
                                <svg class="w-6 h-6 text-gray-100 dark:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.268 6A2 2 0 0 0 14 9h1v1a2 2 0 0 0 3.04 1.708l-.311 1.496a1 1 0 0 1-.979.796H8.605l.208 1H16a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L4.686 5H4a1 1 0 0 1 0-2h1.5a1 1 0 0 1 .979.796L6.939 6h5.329Z"/>
                                    <path d="M18 4a1 1 0 1 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0V8h2a1 1 0 1 0 0-2h-2V4Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full bg-[#DBE7C9] border border-gray-200 rounded-lg shadow dark:bg-[#12372A] dark:border-gray-700">
                    <a href="#">
                        <img class="p-8 rounded-t-lg mx-auto" src="https://via.placeholder.com/300" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Lorem ipsum</h5>
                        </a>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900 dark:text-white">Rp.35.500</span>
                            <a href="#" class="text-white bg-[#12372A] hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DBE7C9] dark:text-gray-900 dark:hover:bg-[#c8d5b2] dark:focus:ring-[#c8d5b2]">
                                <svg class="w-6 h-6 text-gray-100 dark:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.268 6A2 2 0 0 0 14 9h1v1a2 2 0 0 0 3.04 1.708l-.311 1.496a1 1 0 0 1-.979.796H8.605l.208 1H16a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L4.686 5H4a1 1 0 0 1 0-2h1.5a1 1 0 0 1 .979.796L6.939 6h5.329Z"/>
                                    <path d="M18 4a1 1 0 1 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0V8h2a1 1 0 1 0 0-2h-2V4Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full bg-[#DBE7C9] border border-gray-200 rounded-lg shadow dark:bg-[#12372A] dark:border-gray-700">
                    <a href="#">
                        <img class="p-8 rounded-t-lg mx-auto" src="https://via.placeholder.com/300" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Lorem ipsum</h5>
                        </a>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900 dark:text-white">Rp.35.500</span>
                            <a href="#" class="text-white bg-[#12372A] hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#DBE7C9] dark:text-gray-900 dark:hover:bg-[#c8d5b2] dark:focus:ring-[#c8d5b2]">
                                <svg class="w-6 h-6 text-gray-100 dark:text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.268 6A2 2 0 0 0 14 9h1v1a2 2 0 0 0 3.04 1.708l-.311 1.496a1 1 0 0 1-.979.796H8.605l.208 1H16a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L4.686 5H4a1 1 0 0 1 0-2h1.5a1 1 0 0 1 .979.796L6.939 6h5.329Z"/>
                                    <path d="M18 4a1 1 0 1 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0V8h2a1 1 0 1 0 0-2h-2V4Z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


