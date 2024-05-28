<!-- resources/views/partials/navbar.blade.php -->
<header>
   <nav class="bg-[#436850] dark:bg-[#436850] fixed w-full h-25 z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
       <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
           <div>
               <p class="text-2xl font-extrabold text-white dark:text-white">
                   Pupuk <br> Mitra Tani
               </p>
           </div>
           <div class="flex md:order-2 space-x-3 md:space-x-4 rtl:space-x-reverse items-center">
                <button>
                    <a href="/cart">
                    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </button>
               <!-- Theme toggle button -->
               <button id="theme-toggle" type="button" class="text-white dark:text-white hover:bg-gray-400 dark:hover:bg-gray-400 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                   <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                       <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                   </svg>
                   <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                       <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                   </svg>
               </button>
               <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                   <span class="sr-only">Open user menu</span>
                   <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D" alt="user photo">
               </button>
               <!-- Dropdown menu -->
               <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                   <div class="px-4 py-3">
                       <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                       <span class="block text-sm text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                   </div>
                   <ul class="py-2" aria-labelledby="user-menu-button">
                       <li>
                           <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profil</a>
                       </li>
                       <li>
                           <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Keluar</a>
                       </li>
                   </ul>
               </div>
               <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                   <span class="sr-only">Open main menu</span>
                   <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                   </svg>
               </button>
           </div>
           <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
               <ul class="bg-[#436850] dark:bg-[#436850] text-lg font-semibold flex flex-col p-4 md:p-0 mt-4 border rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                   <li>
                       <a href="/" class="block py-2 px-3 text-white rounded md:bg-transparent md:text-[#DBE7C9] md:p-0 md:dark:text-[#DBE7C9]" aria-current="page">BERANDA</a>
                   </li>
                   <li>
                       <a href="/search" class="block py-2 px-3 text-white rounded hover:text-[#DBE7C9] md:hover:text-[#DBE7C9] md:p-0 md:dark:hover:text-[#DBE7C9] dark:hover:text-[#DBE7C9]">CARI</a>
                   </li>
                   <li>
                       <a href="products" class="block py-2 px-3 text-white rounded hover:text-[#DBE7C9] md:hover:text-[#DBE7C9] md:p-0 md:dark:hover:text-[#DBE7C9] dark:hover:text-[#DBE7C9]">PRODUK</a>
                   </li>
                   <li>
                       <a href="faq" class="block py-2 px-3 text-white rounded hover:text-[#DBE7C9] md:hover:text-[#DBE7C9] md:p-0 md:dark:hover:text-[#DBE7C9] dark:hover:text-[#DBE7C9]">PERTANYAAN</a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>
</header>
