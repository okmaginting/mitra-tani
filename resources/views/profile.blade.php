@extends('layouts.app')

@section('title', 'profile')

@section('content')

<div class="bg-[#DBE7C9] w-full flex flex-col gap-5 px-3 md:px-16 lg:px-28 md:flex-row text-[#161931]">
    <aside class="hidden py-4 md:w-1/3 lg:w-1/4 md:block">
        <div class="sticky flex flex-col gap-2 p-4 text-sm border-r border-indigo-100 top-12">
            <div class="flex flex-col items-center space-y-5 sm:flex-row sm:space-y-0">

                <img class="object-cover w-20 h-20 p-1 rounded-full ring-2 ring-[#12372A] dark:ring-[#12372A]"
                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGZhY2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                    alt="Bordered avatar">

                <div class="justify-center flex-col sm:ml-8">
                    <p>
                        <strong class="text-gray-500">OKMA SANGAPTARAS GINTING</strong>
                    </p>
                    <p>
                        <strong>Total Belanja:</strong>
                    </p>
                    <p class="font-semibold">
                        200
                    </p>

                </div>
            </div>
        </div>
    </aside>
    <main class="w-full min-h-screen py-1 md:w-2/3 lg:w-3/4">
        

        <div class="mb-4 border-b border-gray-200 dark:border-[gray-700]">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-[#12372A] hover:text-[#12372A] dark:text-purple-500 dark:hover:text-purple-500 border-[#12372A] dark:border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Riwayat Pesanan</button>
                </li>
            </ul>
        </div>
        <div id="default-styled-tab-content">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="flex flex-col items-center space-y-5 sm:flex-row sm:space-y-0">

<img class="object-cover w-20 h-20 p-1 rounded-full ring-2 ring-[#12372A] dark:ring-[#12372A]"
    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGZhY2V8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
    alt="Bordered avatar">

<div class="justify-between flex-col items-center space-y-5 sm:ml-8">
    <button type="button"
        class="py-2.5 px-4 text-base font-medium text-white focus:outline-none bg-[#12372A] rounded-lg border border-[#12372A] hover:bg-[#0F2B24] focus:z-10 focus:ring-4 focus:ring-[#12372A]">
        Change picture
    </button>
    <button type="button"
        class="py-2.5 px-4 text-base font-medium text-white focus:outline-none bg-[#B50000] rounded-lg border border-[#B50000] hover:bg-[#9A0000] focus:z-10 focus:ring-4 focus:ring-[#B50000]">
        Delete picture
    </button>
</div>
</div>

<div class="items-center mt-8 sm:mt-14 text-[#12372A]">

<div
    class="flex flex-col items-center w-full mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-4 sm:space-y-0 sm:mb-6">
    <div class="w-3/4">
        <label for="name"
            class="block mb-2 text-sm font-medium text-[#12372A] dark:text-white">Nama:</label>
        <input type="text" id="first_name"
            class="bg-[#DBE7C9] border border-[#12372A] text-[#12372A] text-sm rounded-lg focus:ring-[#12372A] focus:border-[#12372A] block w-full p-2.5"
            placeholder="Nama Anda" value="" required>
    </div>
</div>

<div class="mb-2 sm:mb-6">
    <div class="w-3/4">
        <label for="phone-number"
            class="block mb-2 text-sm font-medium text-[#12372A] dark:text-white">No. HP:</label>
        <input type="text" id="phone-number"
            class="bg-[#DBE7C9] border border-[#12372A] text-[#12372A] text-sm rounded-lg focus:ring-[#12372A] focus:border-[#12372A] block w-full p-2.5"
            placeholder="No. HP" required>
    </div>
</div>

<div class="mb-6">
    <div class="w-3/4">
        <label for="message"
            class="block mb-2 text-sm font-medium text-[#12372A] dark:text-white">Alamat Utama:</label>
        <textarea id="message" rows="4"
            class="block p-2.5 w-full text-sm text-[#12372A] bg-[#DBE7C9] rounded-lg border border-[#12372A] focus:ring-[#12372A] focus:border-[#12372A]"
            placeholder="Alamat"></textarea>
    </div>
</div>

<div class="flex justify-between">
    <button type="submit"
        class="text-white bg-[#12372A] hover:bg-[#0F2B24] focus:ring-4 focus:outline-none focus:ring-[#12372A] font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-[#12372A] dark:hover:bg-[#0F2B24] dark:focus:ring-[#12372A]">Save</button>
</div>

</div>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <div>
        <h2 class="text-lg font-semibold">PEMBAYARAN</h2>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nominal Transfer</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">1.</td>
                    <td class="px-6 py-4 whitespace-nowrap">2024-19-05 23.59.59</td>
                    <td class="px-6 py-4 whitespace-nowrap">Rp. 35.500</td>
                    <td class="px-6 py-4 whitespace-nowrap">Diterima</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">2.</td>
                    <td class="px-6 py-4 whitespace-nowrap">2024-19-05 23.59.59</td>
                    <td class="px-6 py-4 whitespace-nowrap">Rp. 35.500</td>
                    <td class="px-6 py-4 whitespace-nowrap">Diterima</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">3.</td>
                    <td class="px-6 py-4 whitespace-nowrap">2024-19-05 23.59.59</td>
                    <td class="px-6 py-4 whitespace-nowrap">Rp. 35.500</td>
                    <td class="px-6 py-4 whitespace-nowrap">Diterima</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mt-8">
        <h2 class="text-lg font-semibold">PESANAN</h2>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Harga</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">1.</td>
                    <td class="px-6 py-4 whitespace-nowrap">2024-19-05 23.59.59</td>
                    <td class="px-6 py-4 whitespace-nowrap">Rp. 35.500</td>
                    <td class="px-6 py-4 whitespace-nowrap">Diterima</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button class="bg-[#12372A] text-white px-4 py-2 rounded">SELESAIKAN</button>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">2.</td>
                    <td class="px-6 py-4 whitespace-nowrap">2024-19-05 23.59.59</td>
                    <td class="px-6 py-4 whitespace-nowrap">Rp. 35.500</td>
                    <td class="px-6 py-4 whitespace-nowrap">Diterima</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button class="bg-[#12372A] text-white px-4 py-2 rounded">SELESAIKAN</button>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">3.</td>
                    <td class="px-6 py-4 whitespace-nowrap">2024-19-05 23.59.59</td>
                    <td class="px-6 py-4 whitespace-nowrap">Rp. 35.500</td>
                    <td class="px-6 py-4 whitespace-nowrap">Diterima</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button class="bg-[#12372A] text-white px-4 py-2 rounded">SELESAIKAN</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
            </div>
        </div>

        <div class="p-2 md:p-4">
            <div class="w-full px-6 pb-8 mt-8 sm:max-w-xl sm:rounded-lg">
                <div class="grid max-w-2xl mx-auto mt-8">
                    
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
