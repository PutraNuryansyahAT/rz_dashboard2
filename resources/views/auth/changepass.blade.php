@extends('layout.header')

@section('maincontent')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Pengaturan Akun
        </h2>
        <!-- CTA -->

        <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-gray-800 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">

            <span>Change Password User | {{auth()->user()->username}}</span>

        </div>
        <!-- General elements -->
        <form action="/reqchangepass" method="post">
            @csrf
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md ">
                @if (session()->has('success'))
                <div class="bg-gradient-to-r from-green-500 border-t border-b border-green-100 text-white px-4 py-3 rounded" role="alert">
                    <p class="font-bold my-1">{{ session('success') }}</p>
                </div>
                @endif

                @if (session()->has('error'))
                <div class="bg-gradient-red border-t border-b border-red-500 text-white px-4 py-1 rounded" role="alert">
                    <p class="font-bold my-1">{{ session('error') }}</p>
                </div>
                @endif
                <label class="label">
                    <span class="inputnamesetting">Old Password</span>
                    <input type="password" class="block w-full mt-1 text-sm form-input " placeholder="old password" name="old_password" id="old" value="{{ old('old_password')}}" />
                </label>
                <input type="checkbox" class="text-sm" onclick=" myFunction()">show password
                @error('old_password')
                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>
                @enderror
                <label class="label">
                    <span class="inputnamesetting">New Password</span>
                    <input type="password" class="block w-full mt-1 text-sm form-input " placeholder="New Password" name="new_password" id="new" value="{{ old('new_password')}}" />
                </label>
                <input type="checkbox" class="text-sm" onclick=" myFunction2()">show password
                @error('new_password')
                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>

                @enderror
                <label class="label">
                    <span class="inputnamesetting">Confirm New Password</span>
                    <input type="password" class="block w-full mt-1 text-sm form-input " placeholder="Confirm Password" name="confirm_passowrd" id="veri" value="{{ old('confirm_password')}}" />
                </label>
                <input type="checkbox" class="text-sm" onclick=" myFunction3()">show password

                @error('confirm_password')
                <br>
                <br>
                <p class="text-red-500 text-xs italic -mt-3">{{ $message }}</p>

                @enderror
                <br>
                <br>
                <button type="submit " class=" bg-orange-500 hover:bg-orange-1 text-gray-100 font-semibold hover:text-white py-2 px-5 border border-orange-200 hover:border-transparent rounded">
                    Change
                </button>


            </div>
        </form>
        <script type="text/javascript">
            function myFunction() {
                var x = document.getElementById("old");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }

            function myFunction2() {
                var x = document.getElementById("new");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }

            function myFunction3() {
                var x = document.getElementById("veri");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
    </div>
</main>
@endsection