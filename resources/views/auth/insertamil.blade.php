@extends('layout.authentication')



@section('auth')
<main class="mt-0 transition-all duration-200 ease-soft-in-out">
    <section class="min-h-screen mb-32">
        <div class="relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-center bg-cover min-h-50-screen rounded-xl" style="background-image: url('/img/backgroundregis.jpg')">
            <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-dark-gray opacity-60"></span>

        </div>
        <div class="container">
            <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
                <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                    <div class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                            <h5>Register Account</h5>
                        </div>
                        <!-- Form Action -->
                        <div class="flex-auto p-6">
                            <form action="/registerdamil" method="post" role="form text-left" enctype="multipart/form-data">

                                @csrf
                                @if (session()->has('registError'))
                                <div class="bg-gradient-red border-t border-b border-red-500 text-white px-4 py-1 rounded mb-4" role="alert">
                                    <p class="font-bold my-1">{{ session('registError') }}</p>
                                </div>
                                @endif

                                DATA DIRI
                                <!-- ID AMIL -->
                                <div class="mb-4">
                                    <input type="hidden" name="id_amil" placeholder="id amil" aria-label="Name" aria-describedby="data diri" class="inputtype" value="{{ old('id_amil') }}" />
                                </div>
                                @error('id_amil')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                @enderror

                                <!-- NO KTP -->
                                <div class="mb-4">
                                    <input type="text" name="no_ktp" placeholder="no ktp" aria-label="Name" aria-describedby="data diri" class="inputtype" value="{{ old('no_ktp') }}" required />
                                </div>
                                @error('no_ktp')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                @enderror

                                <!-- NAMA LENGKAP -->
                                <div class="mb-4">
                                    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" aria-label="Name" aria-describedby="data diri" class="inputtype" value="{{ old('nama_lengkap') }}" required />
                                </div>
                                @error('nama_lengkap')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                @enderror

                                <!-- Alamat -->
                                <div class="mb-4">
                                    <input type="text" name="alamat" placeholder="Alamat Domisili" aria-label="Name" aria-describedby="data diri" class="inputtype" value="{{ old('alamat') }}" required />
                                </div>
                                @error('alamat')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                @enderror

                                <!-- EMAIL -->
                                <div class="mb-4">
                                    <input type="email" name="email" placeholder="email" aria-label="Name" aria-describedby="data diri" class="inputtype" value="{{ old('email') }}" required />
                                </div>
                                @error('email')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                @enderror

                                <!-- NOMOR HP -->
                                <div class="mb-4">
                                    <input type="text" name="nomor_hp" placeholder="Nomor HP" aria-label="Name" aria-describedby="data diri" class="inputtype" value="{{ old('nomor_hp') }}" required />
                                </div>
                                @error('nomor_hp')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                @enderror

                                <!-- CABANG RUMAH ZAKAT -->
                                <div class="mb-4">
                                    <input type="text" name="cabang_rumahzakat" placeholder="Cabang Rumah Zakat" aria-label="Name" aria-describedby="data diri" class="inputtype" value="{{ old('cabang_rumahzakat') }}" required />
                                </div>
                                @error('cabang_rumahzakat')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                @enderror



                                UPLOAD BERKAS
                                <label class="block mb-2 text-xs font-medium text-gray-900 ">Surat Pernyataan</label>
                                <input id="file_surat_pernyataan" type="file" name="surat_pernyataan">

                                <div class="col-md-12 mb-2">
                                    @error('surat_pernyataan')
                                    <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                    @enderror
                                    <img id="preview-surat_pernyataan-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" alt="preview image" style="max-height: 100px;">
                                </div>

                                <label class="block mb-2 mt-4 text-xs font-medium text-gray-900 " for="file_input">KTP </label>
                                <input id="file_ktp" type="file" name="ktp">
                                <div class="col-md-12 mb-2">
                                    @error('ktp')
                                    <p class="text-red-500 text-xs italic -mt-3">{{ $message}}</p>
                                    @enderror
                                    <img id="preview-ktp-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" alt="preview image" style="max-height: 100px;">

                                </div>
                                <div class="flex mt-6 text-sm">
                                    <label class="flex items-center dark:text-gray-400 ">
                                        <input type="checkbox" class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" required />
                                        <span class="ml-2">
                                            Saya setuju telah
                                            <span class="underline">privacy policy</span>
                                        </span>
                                    </label>
                                </div>

                                <!-- Button submit -->
                                <div class="text-center">
                                    <button type="submit" class="buttonlogin">Sign up</button>
                                </div>
                                <p class="mt-4 mb-0 leading-normal text-size-sm">Already have an account? <a href="/" class="relative z-10 font-semibold text-transparent bg-gradient-orange bg-clip-text">Sign in</a></p>
                                <input type="text" name="aktiv" value="1" hidden>
                            </form>
                            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                            <script type="text/javascript">
                                $(document).ready(function(e) {
                                    $('#file_ktp').change(function() {

                                        let reader = new FileReader();

                                        reader.onload = (e) => {

                                            $('#preview-ktp-before-upload').attr('src', e.target.result);
                                        }
                                        reader.readAsDataURL(this.files[0]);

                                    });
                                    $('#file_surat_pernyataan').change(function() {

                                        let reader = new FileReader();

                                        reader.onload = (e) => {

                                            $('#preview-surat_pernyataan-before-upload').attr('src', e.target.result);
                                        }
                                        reader.readAsDataURL(this.files[0]);

                                    });
                                });
                            </script>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection