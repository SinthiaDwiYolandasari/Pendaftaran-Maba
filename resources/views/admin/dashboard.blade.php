<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Selamat Datang di Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-blue-500 to-green-500 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white dark:text-gray-100">
                    <h3 class="text-2xl font-semibold mb-4">{{ __("Halo, Admin!") }}</h3>
                    <p class="text-lg">{{ __("Anda memiliki kontrol penuh di sini. Kelola pendaftaran mahasiswa baru, lihat statistik, dan terus berinovasi untuk masa depan kampus kami.") }}</p>
                    <p class="mt-4">{{ __("Bersiaplah untuk memberikan yang terbaik bagi mahasiswa kami!") }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
