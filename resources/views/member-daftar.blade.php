@extends('layouts.app')

@section('title', 'Daftar')

@section('content')
<div class="flex bg-green-200 rounded-lg shadow-lg overflow-hidden w-full max-w-4xl">
        <!-- Form Section -->
        <div class="w-2/3 p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-8">DAFTAR:</h2>
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nama:</label>
                    <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-green-500" type="text" id="name" placeholder="Nama Anda">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Nomor HP:</label>
                    <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-green-500" type="text" id="phone" placeholder="Nomor HP Anda">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Alamat:</label>
                    <textarea class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-green-500" id="address" rows="3" placeholder="Alamat Anda"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Kata Sandi:</label>
                    <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-green-500" type="password" id="password" placeholder="Kata Sandi">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">Tulis Ulang Kata Sandi:</label>
                    <input class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-green-500" type="password" id="password_confirmation" placeholder="Tulis Ulang Kata Sandi">
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">BUAT AKUN</button>
                </div>
            </form>
            <div class="mt-4">
                <a class="inline-block align-baseline font-bold text-sm text-green-700 hover:text-green-900" href="#">Belum punya akun?</a>
            </div>
            <div class="mt-4">
                <button class="bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">MASUK</button>
            </div>
        </div>
        <!-- Text Section -->
        <div class="w-1/3 bg-green-400 p-8 flex items-center justify-center">
            <h2 class="text-4xl font-bold text-white">Pupuk Mitra Tani</h2>
        </div>
</div>
@endsection

