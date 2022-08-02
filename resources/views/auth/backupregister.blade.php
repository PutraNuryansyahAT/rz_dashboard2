@extends('layout.authentication')



@section('auth')
<main class="mt-0 transition-all duration-200 ease-soft-in-out">
    <section class="min-h-screen mb-32">
        <div class="relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-center bg-cover min-h-50-screen rounded-xl" style="background-image: url('/img/backgroundregis.jpg')">
            <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-dark-gray opacity-60"></span>
            <div class="container z-10">
                <div class="flex flex-wrap justify-center -mx-3">
                    <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                        <h1 class="relative z-10 font-bold text-transparent bg-gradient-to-r text-white bg-clip-text">Registrasi Akun Login</h1>


                    </div>
                </div>
            </div>
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
                            <form action="/inputregister" method="post" role="form text-left" enctype="multipart/form-data">

                                @csrf
                                @if (session()->has('registError'))
                                <div class="bg-gradient-red border-t border-b border-red-500 text-white px-4 py-1 rounded mb-4" role="alert">
                                    <p class="font-bold my-1">{{ session('registError') }}</p>
                                </div>
                                @endif

                                DATA DIRI
                                <div class="mb-4">
                                    <input type="text" name="id_amil" placeholder="id amil" aria-label="Name" aria-describedby="data diri" class="inputtype" value="{{ old('username') }}" required />
                                    <!-- <select class="inputtype " name="id_amil">
                                        <option value="" disabled selected hidden>-- Pilih Amil --</option>
                                        @foreach ($amil as $amils )
                                        <option value='{{$amils->id_amil }}'>{{$amils->nama_lengkap }} - {{ $amils->email  }}</option>
                                        @endforeach

                                    </select> -->
                                </div>
                                @error('id_amil')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                @enderror

                                <div class="mb-4">
                                    <input type="text" name="no_ktp" placeholder="NIK" aria-label="Name" aria-describedby="data diri" class="inputtype" value="{{ old('no_ktp') }}" required />
                                </div>
                                @error('no_ktp')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                @enderror

                                <div class="mb-4">
                                    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" aria-label="Name" aria-describedby="data diri" class="inputtype" value="{{ old('nama_lengkap') }}" required />
                                </div>
                                @error('nama_lengkap')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                @enderror

                                <div class="mb-4">
                                    <input type="text" name="email" placeholder="Email" aria-label="Name" aria-describedby="data diri" class="inputtype" value="{{ old('email') }}" required />
                                </div>
                                @error('email')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                @enderror




                                <div class="mb-4">
                                    <input type="text" name="no_hp" placeholder="Nomor HP" aria-label="Name" aria-describedby="data diri" class="inputtype" value="{{ old('no_hp') }}" required />
                                </div>
                                @error('no_hp')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                @enderror

                                <!-- Input Buat Akun -->
                                BUAT AKUN
                                <div class="mb-4">
                                    <input type="text" name="username" placeholder="Username" aria-label="akun" aria-describedby="data diri" class="inputtype" value="{{ old('username') }}" required />
                                </div>
                                @error('username')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                @enderror

                                <div class="mb-4">
                                    <input type="password" name="password" placeholder="Password" aria-label="akun" aria-describedby="password-addon" class="inputtype" required value="{{ old('password') }}" />
                                </div>
                                @error('password')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                @enderror

                                <!-- Input Data Rekening -->
                                DATA REKENING

                                <div class="mb-4">
                                    <input type="input" name="nama_bank" placeholder="Bank yang digunakan" aria-label="bank" aria-describedby="password-addon" class="inputtype" required value="{{ old('nama_bank') }}" />
                                </div>
                                @error('nama_bank')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                @enderror

                                <div class="mb-4">
                                    <input type="input" name="no_rekening" placeholder="Nomor Rekening" aria-label="bank" aria-describedby="password-addon" class="inputtype" required value="{{ old('no_rekening') }}" />
                                </div>
                                @error('no_rekening')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                @enderror

                                <div class="mb-4">
                                    <input type="input" name="atas_nama" placeholder="Atas Nama" aria-label="bank" aria-describedby="password-addon" class="inputtype" required value="{{ old('no_rekening') }}" />
                                </div>
                                @error('atas_nama')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                @enderror

                                <!-- Upload Berkas -->
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
                                <!-- Button submit -->
                                <div class="text-center">
                                    <button type="submit" class="buttonlogin">Sign up</button>
                                </div>
                                <p class="mt-4 mb-0 leading-normal text-size-sm">Already have an account? <a href="/" class="relative z-10 font-semibold text-transparent bg-gradient-orange bg-clip-text">Sign in</a></p>
                                <input type="text" name="aktiv" value="1" hidden>
                            </form>

                            <!-- script for previews the image -->
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
                            <!-- End Form Action -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection