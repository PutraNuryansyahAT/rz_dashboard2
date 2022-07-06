@extends('layout.header')
@section('maincontent')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Pengaturan Akun
        </h2>
        <!-- CTA -->

        <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-gray-800 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">

            <span>Tanggal Registrasi | {{auth()->user()->created_at }}</span>
            <span>Terakhir Update | {{auth()->user()->updated_at }}</span>
        </div>
        <!-- General elements -->
        <form action="/update" method="post" enctype="multipart/form">
            @method('put')
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md ">
                @if (session()->has('success'))
                <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                    <p class="font-bold">{{ session('success') }}</p>
                </div>
                <br>
                @endif
                <label class="block text-sm">
                    <span class="text-black">Nama Lengkap</span>
                    <input class="block w-full mt-1 text-sm form-input " placeholder="Name" name="name" value="{{ old('name' , Auth::user()->name)}}" />
                </label>
                @error('name')
                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>

                @enderror
                <label class="block mt-4 text-sm">
                    <span class="text-black">Alamat Domisili</span>
                    <textarea class="block w-full mt-1 text-sm form-textarea" rows="3" placeholder="Alamat" name="alamat">{{ old('alamat' , Auth::user()->alamat)}}</textarea>
                </label>
                @error('alamat')
                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>

                @enderror

                <label class="block mt-4 text-sm">
                    <span class="text-black">Email</span>
                    <input class="block w-full mt-1 text-sm form-input" placeholder="Email" name="email" value="{{ old('email' , Auth::user()->email)}}" />
                </label>
                @error('email')
                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>

                @enderror

                <label class="block mt-4 text-sm">
                    <span class="text-black">Hp</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="+62" value="{{ old('nomorhp' , Auth::user()->nomorhp)}}" name="nomorhp" />
                </label>
                @error('nomorhp')
                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>

                @enderror

                <label class="block mt-4 text-sm">
                    <span class="text-black">Cabang Rumah Zakat Terdekat</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Cabang Rumah Zakat Terdekat" value="{{ old('cabang' , Auth::user()->cabang)}}" name="cabang" />
                </label>
                @error('cabang')
                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>

                @enderror

                <!-- Data Rekening -->
                <h2 class="mt-12  mb-4 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    Data Rekening Bank
                </h2>

                <label class="block mt-4 text-sm">
                    <span class="text-black">Nama Bank</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Nama Bank" name="namabank" value="{{ old('namabank' , Auth::user()->namabank)}}" />
                </label>

                <label class="block mt-4 text-sm">
                    <span class="text-black">No Rekening</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="No Rekening" name="norekening" value="{{ old('norekening' , Auth::user()->norekening )}}" />
                </label>

                <label class="block mt-4 text-sm">
                    <span class="text-black">Atas Nama</span>
                    <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Atas Nama" name="atasnama" value="{{ old('atasnama' , Auth::user()->atasnama)}}" />
                </label>

                <h1 class="mt-6  mb-4 text-xl font-semibold text-gray-700 ">
                    Upload Berkas
                    </h2>
                    <label class="block mb-2 text-sm font-medium text-gray-900 " for="file_input">Surat Pernyataan</label>
                    <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer  focus:outline-none " id="file_input" type="file" name="suratpernyataan">

                    <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 " for="file_input">KTP</label>
                    <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer  focus:outline-none " id="file_input" type="file" name="ktp">
                    <br>
                    <div class=" flex justify-center">
                        <button type="submit " class=" bg-orange-500 hover:bg-orange-1 text-gray-100 font-semibold hover:text-white py-2 px-5 border border-orange-200 hover:border-transparent rounded">
                            Update
                        </button>
                    </div>


            </div>
        </form>


    </div>
</main>
@endsection