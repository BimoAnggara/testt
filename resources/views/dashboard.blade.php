<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
    @if ( Auth::user()->role === 'admin')
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-15 mt-5">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="hidden space-x-8 sm:-my-px sm:ml-8 sm:flex">
                    <div class="p-2 text-gray-900">
                        <a class="btn border" href="/datalaporan" role="button">Data pengaduan<br>{{ $allDataPengaduan }}</a>
                    </div>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-8 sm:flex">
                    <div class="p-2 text-gray-900">
                        <a class="btn border" href="/Belum" role="button">Belum diproses<br>{{  $belumDiproses }}</a>
                    </div>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-8 sm:flex">
                    <div class="p-2 text-gray-900">
                        <a class="btn border" href="diproses" role="button">Sedang diproses<br>{{ $sedangDiproses }}</a>
                    </div>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ml-8 sm:flex">
                    <div class="p-2 text-gray-900">
                        <a class="btn border" href="selesai" role="button">Selesai diproses<br>{{ $selesai }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</x-app-layout>
