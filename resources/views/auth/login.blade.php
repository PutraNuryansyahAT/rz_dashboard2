@extends('layout.authentication')



@section('auth')

<body class="m-0 font-sans antialiased font-normal bg-white text-start text-size-base leading-default text-slate-500">
    <div class="container sticky top-0 z-sticky">

    </div>
    <main class="mt-0 transition-all duration-200 ease-soft-in-out">
        <section>
            <div class="relative flex items-center p-0 overflow-hidden bg-center bg-cover min-h-75-screen">
                <div class="container z-10">
                    <div class="flex flex-wrap mt-0 -mx-3">
                        <div class="flex flex-col w-full max-w-full px-3 mx-auto md:flex-0 shrink-0 md:w-6/12 lg:w-5/12 xl:w-4/12">
                            <div class="relative flex flex-col min-w-0 mt-32 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                                <div class="p-6 pb-0 mb-0 bg-transparent border-b-0 rounded-t-2xl">
                                    <h3 class="relative z-10 font-bold text-transparent bg-gradient-to-r from-green-400 to-blue-500 bg-clip-text">Welcome back</h3>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="flex-auto p-6">
                                    <form role="form">
                                        <label class="inputname">Email</label>
                                        <div class=" mb-4">
                                            <input type="email" class="inputtype" placeholder="Email" aria-label="Email" aria-describedby="email-addon" />
                                        </div>
                                        <label class="inputname">Password</label>
                                        <div class=" mb-4">
                                            <input type="email" class="inputtype" placeholder="Password" aria-label="Password" aria-describedby="password-addon" />
                                        </div>

                                        <div class="text-center">
                                            <button type="button" class="buttonlogin">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="p-6 px-1 pt-0 text-center bg-transparent border-t-0 border-t-solid rounded-b-2xl lg:px-2">
                                    <p class="mx-auto mb-6 leading-normal text-size-sm">
                                        Don't have an account?
                                        <a href="/register" class="relative z-10 font-semibold text-transparent bg-gradient-cyan bg-clip-text">Sign up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 lg:flex-0 shrink-0 md:w-6/12">
                            <div class="absolute top-0 hidden w-3/5 h-full -mr-32 overflow-hidden -skew-x-10 -right-40 rounded-bl-xl md:block">
                                <div class="absolute inset-x-0 top-0 z-0 h-full -ml-16 bg-cover skew-x-10" style="background-image: url('/img/curved-images/curved6.jpg')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @endsection