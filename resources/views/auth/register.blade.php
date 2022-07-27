@extends('layout.authentication')



@section('auth')
<main class="mt-0 transition-all duration-200 ease-soft-in-out">
    <section class="min-h-screen mb-32">
        <div class="relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-center bg-cover min-h-50-screen rounded-xl" style="background-image: url('/img/curved-images/curved14.jpg')">
            <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-dark-gray opacity-60"></span>
            <div class="container z-10">
                <div class="flex flex-wrap justify-center -mx-3">
                    <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                        <h1 class="mt-12 mb-2 text-white">Welcome!</h1>
                        <p class="text-white">Use these awesome forms to login or create new account in your project for free.</p>
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
                            <form action="/register" method="post" role="form text-left">
                                @csrf
                                @if (session()->has('registError'))
                                <div class="bg-gradient-red border-t border-b border-red-500 text-white px-4 py-1 rounded mb-4" role="alert">
                                    <p class="font-bold my-1">{{ session('registError') }}</p>
                                </div>
                                @endif

                                <div class="mb-4">
                                    <select class="inputtype " name="id_amil">
                                        <option value="" disabled selected hidden>-- Pilih Amil --</option>
                                        @foreach ($amil as $amils )
                                        <option value='{{$amils->id_amil }}'>{{$amils->nama_lengkap }} - {{ $amils->email  }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                @error('id_amil')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                @enderror

                                <div class="mb-4">
                                    <input type="text" name="username" placeholder="Username" aria-label="Name" aria-describedby="email-addon" class="inputtype" value="{{ old('username') }}" required />
                                </div>
                                @error('username')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                                @enderror

                                <div class="mb-4">
                                    <input type="password" name="password" placeholder="Password" aria-label="Password" aria-describedby="password-addon" class="inputtype" required value="{{ old('password') }}" />
                                </div>
                                @error('password')
                                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>

                                @enderror
                                <input type="text" name="aktiv" value="1" hidden>


                                <div class="text-center">
                                    <button type="submit" class="buttonregist">Sign up</button>
                                </div>
                                <p class="mt-4 mb-0 leading-normal text-size-sm">Already have an account? <a href="/" class="font-bold text-slate-700">Sign in</a></p>
                            </form>
                            <!-- End Form Action -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection