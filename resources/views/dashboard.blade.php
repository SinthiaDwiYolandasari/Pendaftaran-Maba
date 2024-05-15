<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Selamat Datang Calon Mahasiswa Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-indigo-500 to-purple-600 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white dark:text-gray-100">
                    <h3 class="text-2xl font-semibold mb-4">{{ __("Anda Telah Berhasil Masuk Sebagai User!") }}</h3>
                    <p class="text-lg">{{ __("Selamat datang di dashboard pendaftaran mahasiswa baru. Di sini Anda dapat mengelola semua proses pendaftaran dengan mudah dan efisien.") }}</p>
                    <p class="mt-4">{{ __("Mari mulai petualangan Anda untuk membentuk masa depan para mahasiswa kami!") }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
