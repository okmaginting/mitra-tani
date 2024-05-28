@extends('layouts.app')

@section('title', 'Search')

@section('content')
<section class="py-8 antialiased md:py-16">
  <form action="#" class="mx-auto max-w-screen-xl px-4 2xl:px-0">

    <div class="mt-6 sm:mt-8 lg:flex lg:items-start lg:gap-12 xl:gap-16">
      <div class="min-w-0 flex-1 space-y-8">
        <div class="space-y-4">
          <h2 class="text-xl font-bold text-gray-900 dark:text-white">ALAMAT PENGIRIMAN</h2>

          <div class="grid grid-cols-1 gap-4">
            <div>
              <label for="your_name" class="mb-2 block text-l font-bold text-gray-900 dark:text-white"> Nama Pemesan: </label>
              <input type="text" id="your_name" class="block w-2/4 rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-[#E9FBEC] dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500" placeholder="Nama Anda" required />
            </div>
            <div class="flex items-center">
                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-[#6B6B6B] bg-gray-100 border-gray-300 focus:ring-[#ADBC9F] dark:focus:ring-[#6B6B6B] dark:ring-offset-gray-800 focus:ring-2 dark:bg-[#E9FBEC] dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-l font-bold text-gray-900 dark:text-gray-300">Ambil di Toko</label>
            </div>
            <div class="flex">
                <div class="justify-center">
                    <input id="default-radio-2" name="default-radio" type="radio" value="" class="w-4 h-4 text-[#6B6B6B] bg-gray-100 border-gray-300 focus:ring-[#ADBC9F] dark:focus:ring-[#6B6B6B] dark:ring-offset-gray-800 focus:ring-2 dark:bg-[#E9FBEC] dark:border-gray-600">
                </div>
                <div class="ms-2 text-l">
                    <label for="default-radio-2" class="font-bold text-gray-900 dark:text-gray-300">Alamat Utama:</label>
                        <p id="default-radio-2" class="text-l font-semibold text-gray-500 dark:text-gray-300 w-2/4">Gang susuk v, padang bulan selayang 1, medan selayang (Kede biru smpg kmks), KOTA MEDAN - MEDAN SELAYANG, SUMATERA UTARA, ID 20131</p>
                    </div>
            </div>
            <div class="flex">
                <div class="justify-center">
                    <input id="default-radio-3" name="default-radio" type="radio" value="" class="w-4 h-4 text-[#6B6B6B] bg-gray-100 border-gray-300 focus:ring-[#ADBC9F] dark:focus:ring-[#6B6B6B] dark:ring-offset-gray-800 focus:ring-2 dark:bg-[#E9FBEC] dark:border-gray-600">
                </div>
                <div class="ms-2 text-l">
                    <label for="default-radio-3" class="font-bold text-gray-900 dark:text-gray-300">Kostum Alamat:</label>
                        <textarea id="message" rows="2" cols="50" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#ADBC9F] focus:border-[#ADBC9F] dark:bg-[#E9FBEC] dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#ADBC9F] dark:focus:border-[#ADBC9F]" placeholder="Masukkan alamat anda"></textarea>
                </div>
            </div>
          </div>
        </div>

        <div class="space-y-4">
          <h3 class="text-xl font-bold text-gray-900 dark:text-white">PEMBAYARAN</h3>
            <div class="flex items-center">
                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-[#6B6B6B] bg-gray-100 border-gray-300 focus:ring-[#ADBC9F] dark:focus:ring-[#6B6B6B] dark:ring-offset-gray-800 focus:ring-2 dark:bg-[#E9FBEC] dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-l font-bold text-gray-900 dark:text-gray-300">Bayar di Tempat</label>
            </div>
            <div class="flex items-center">
                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-[#6B6B6B] bg-gray-100 border-gray-300 focus:ring-[#ADBC9F] dark:focus:ring-[#6B6B6B] dark:ring-offset-gray-800 focus:ring-2 dark:bg-[#E9FBEC] dark:border-gray-600">
                <label for="default-radio-1" class="ms-2 text-l font-bold text-gray-900 dark:text-gray-300">Transfer Bank -BRI</label>
            </div>
        </div>
      </div>

      <div class="mt-6 w-full space-y-6 sm:mt-8 lg:mt-0 lg:max-w-xs xl:max-w-md">
        <div class="flow-root">
          <div class="-my-3 divide-y divide-gray-200 dark:divide-gray-800">
            <dl class="flex items-center justify-between gap-4 py-3">
              <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Subtotal Produk</dt>
              <dd class="text-base font-medium text-gray-900 dark:text-white">Rp. 38.000</dd>
            </dl>

            <dl class="flex items-center justify-between gap-4 py-3">
              <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Ongkos Kirim</dt>
              <dd class="text-base font-medium text-gray-900 dark:text-white">Rp. 2.000</dd>
            </dl>

            <dl class="flex items-center justify-between gap-4 py-3">
              <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
              <dd class="text-xl font-bold text-gray-900 dark:text-white">Rp. 40.000</dd>
            </dl>
          </div>
        </div>

        <div class="space-y-3">
          <button type="submit" class="flex w-full items-center justify-center rounded-lg bg-[#12372A] px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Proceed to Payment</button>
        </div>
      </div>
    </div>
  </form>
</section>
@endsection
