@extends('layouts.app')

@section('title', 'Daftar')

@section('content')
<section class="bg-gray-50 dark:bg-[#002C08] py-14">
  <div class="flex flex-col items-center justify-center px-6 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
          <p class="text-center text-3xl font-extrabold dark:text-gray-50">
            Pupuk <br> Mitra Tani
          </p>
      </a>
      <div class="w-full bg-[#ADBC9F] rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                  DAFTAR
              </h1>
              <form class="space-y-4 md:space-y-6" action="#">
                  <div>
                      <label for="name" class="block mb-2 text-l font-bold text-gray-900">Nama Anda:</label>
                      <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-l roundboldfocus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Anda..." required="Nama Harus Diisi">
                  </div>                
                  <div>
                      <label for="phone-number" class="block mb-2 text-l font-bold text-gray-900">No. HP:</label>
                      <input type="phone-number" name="phone-number" id="phone-number" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-l roundboldfocus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="No. HP..." required="No. HP Harus Diisi">
                  </div>
                  <div>
                    <label for="address" class="block text-l font-bold text-gray-700">Alamat:</label>
                    <textarea id="address" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-l dark:border-gray-600" placeholder="Alamat Anda" required="Alamat Harus Diisi"></textarea>
                </div>
                  <div>
                      <label for="password" class="block mb-2 text-l font-bold text-gray-900">Kata Sandi:</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-l roundboldfocus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div>
                      <label for="confirm-password" class="block mb-2 text-l font-bold text-gray-900">Tulis Ulang Kata Sandi:</label>
                      <input type="confirm-password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-l roundboldfocus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <button type="submit" class="w-full h-12 text-white bg-[#12372A] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-l px-5 bold text-center dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create an account</button>
                  <p class="text-l font-boldtext-gray-500 dark:text-gray-400">
                      Sudah punya akun?? <a href="/login-member" class="font-medium text-[#12372A] hover:underline">Masuk disini.</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>
@endsection

