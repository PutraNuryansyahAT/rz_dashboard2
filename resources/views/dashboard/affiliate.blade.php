@extends('layout.header')
@section('maincontent')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    function copylink(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
    }
</script>

<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Link Affiliate
        </h2>

        <!-- General elements -->

        <div class="px-4 pt-3 mb-8 bg-white rounded-lg shadow-md ">

            <h2 class="my-2 text-xl font-semibold text-gray-700 dark:text-gray-200">
                SKRZ - JNE
            </h2>
            <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-black bg-gray-50 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
                <span>
                    Landing Page : <a id="p1" class="biru" href="https://skrzjne.rumahzakat.org/?source={{ auth()->user()->id_amil }}" title="link generator"> https://skrzjne.rumahzakat.org/?source={{ auth()->user()->id_amil }}</a>

                    <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p1')">
                        <svg class="w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>

                </span>
            </div>

            <h2 class="my-2 text-xl font-semibold text-gray-700 dark:text-gray-200">
                SKRZ
            </h2>

            <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-black bg-gray-50 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">

                <span>
                    Landing Page : <a id="p2" class="biru" href="https://sahabatkebaikan.rumahzakat.org/?source={{ auth()->user()->id_amil }}"> https://sahabatkebaikan.rumahzakat.org/?source={{ auth()->user()->id_amil }} </a>
                    <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p2')">
                        <svg class="w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button> <br>

                    Cek Donasi : <a class="biru" id="p3" href=" https://www.rumahzakat.org/donasi?source={{ auth()->user()->id_amil }}"> https://www.rumahzakat.org/donasi?source={{ auth()->user()->id_amil }}</a>
                    <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p3')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                </span>

            </div>

            <h2 class="my-2 text-xl font-semibold text-gray-700 dark:text-gray-200">
                Infak.id
            </h2>

            <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-black bg-gray-50 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">

                <span>
                    Landing Page :<a class="biru" id="p4" href=" https://infak.id/?source={{ auth()->user()->id_amil }}"> https://infak.id/?source={{ auth()->user()->id_amil }}</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p4')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>

                    <br>

                    Cek Donasi :<a class="biru" id="p5" href="https://mitra.rumahzakat.org/infakid/?source={{ auth()->user()->id_amil }}"> https://mitra.rumahzakat.org/infakid/?source={{ auth()->user()->id_amil }}</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p5')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>

                </span>

            </div>

            <h2 class="my-2 text-xl font-semibold text-gray-700 dark:text-gray-200">
                Ramadhan
            </h2>

            <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-black bg-gray-50 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">

                <span>
                    Berbagi Buka Puasa :<a class="biru" id="p6" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#berbagi-buka-puasa">Berbagi Buka Puasa : https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#berbagi-buka-puasa</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p6')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button> <br>

                    Kado Lebaran Yatim :<a class="biru" id="p7" href="https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#kado-lebaran-yatim"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#kado-lebaran-yatim</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p7')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    Bingkisan Lebaran :<a class="biru" id="p8" href="https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#bingkisan-lebaran-keluarga">https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#bingkisan-lebaran-keluarga</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('p8')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>
                    Bebas Hutang :<a class="biru" id="p9" href="https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#ramadhan-bebas-hutang"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#ramadhan-bebas-hutang</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p9')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>
                    Zakat Fitrah :<a class="biru" id="p10" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#zakat-fithrah"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#zakat-fithrah </a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p10')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>
                    Fidyah :<a class="biru" id="p11" href="https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#fidyah"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#fidyah</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p11')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>
                    Syiar Quran :<a class="biru" id="p12" href="https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#syiar-quran"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#syiar-quran</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p12')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                </span>

            </div>

            <h2 class="my-2 text-xl font-semibold text-gray-700 dark:text-gray-200">
                SuperQurban
            </h2>

            <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-black bg-gray-50 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">

                <span>
                    SQ Kambing Kornet :<a class="biru" id="p13" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#qurban-kambing-kornet"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#qurban-kambing-kornet</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p13')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button><br>

                    SQ Sapi 1/7 Kornet :<a class="biru" id="p14" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#qurban-1-per-7-sapi-kornet"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#qurban-1-per-7-sapi-kornet</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p14')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    SQ Sapi Kornet :<a class="biru" id="p15" href="  https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#qurban-sapi-kornet"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#qurban-sapi-kornet
                    </a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p15')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button><br>

                    SQ Kambing Rendang :<a class="biru" id="p16" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#qurban-kambing-rendang"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#qurban-kambing-rendang</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p16')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    SQ Sapi 1/7 Rendang :<a class="biru" id="p17" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#qurban-1-per-7-sapi-rendang"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#qurban-1-per-7-sapi-rendang</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p17')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    SQ Sapi Rendang:<a class="biru" id="p18" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#qurban-sapi-rendang"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#qurban-sapi-rendang</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p18')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>

                </span>

            </div>

            <h2 class="my-2 text-xl font-semibold text-gray-700 dark:text-gray-200">
                Desaku Berqurban
            </h2>

            <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-black bg-gray-50 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">

                <span>
                    Kambing :<a class="biru" id="p19" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#desaku-berqurban-kambing"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#desaku-berqurban-kambing</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p19')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button><br>

                    Sapi 1/7:<a class="biru" id="p20" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#desaku-berqurban-1-per-7-sapi"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#desaku-berqurban-1-per-7-sapi</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p20')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    Sapi :<a class="biru" id="p21" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#desaku-berqurban-sapi"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#desaku-berqurban-sapi</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p21')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>
                </span>

            </div>

            <h2 class="my-2 text-xl font-semibold text-gray-700 dark:text-gray-200">
                Zakat
            </h2>

            <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-black bg-gray-50 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">

                <span>
                    Zakat Penghasilan :<a class="biru" id="p22" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#zakat-penghasilan"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#zakat-penghasilan</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p22')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button><br>

                    Zakat Emas:<a class="biru" id="p23" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#zakat-emas"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#zakat-emas</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p23')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    Zakat Perdagangan :<a class="biru" id="p24" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#zakat-perdagangan"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#zakat-perdagangan
                    </a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p24')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button><br>

                    Zakat Tabungan :<a class="biru" id="p25" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#zakat-tabungan"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#zakat-tabungan</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p25')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>
                </span>

            </div>

            <h2 class="my-2 text-xl font-semibold text-gray-700 dark:text-gray-200">
                Pra Ramadhan
            </h2>

            <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-black bg-gray-50 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">

                <span>
                    Berbagi Makanan Keluarga :<a class="biru" id="p26" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#berbagi-makan-keluarga"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#berbagi-makan-keluarga</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p26')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    Bingkisan Yatim Dhuafa:<a class="biru" id="p27" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#bingkisan-yatim-dhuafa"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#bingkisan-yatim-dhuafa</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p27')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    Bingkisan Keluarga Pra Sejahtera :<a class="biru" id="p28" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#bingkisan-keluarga-pra-sejahtera"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#bingkisan-keluarga-pra-sejahtera</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p28')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>


                </span>

            </div>

            <h2 class="my-2 text-xl font-semibold text-gray-700 dark:text-gray-200">
                Bencana dan Kemanusiaan
            </h2>

            <div class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-black bg-gray-50 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">

                <span>
                    Bencana Nasional :<a class="biru" id="p29" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#bencana-nasional"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#bencana-nasional</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p29')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    Bingkisan Untuk Adik Pengungsi:<a class="biru" id="p30" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#bingkisan-untuk-adik-pengungsi"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#bingkisan-untuk-adik-pengungsi</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p30')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    Desa Berdaya:<a class="biru" id="p31" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#desa-berdaya"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#desa-berdaya</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p31')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    Siaga Pangan:<a class="biru" id="p32" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#siaga-pangan"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#siaga-pangan</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p32')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    Bantuan Kemanusiaan:<a class="biru" id="p33" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#bantuan-kemanusiaan"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#bantuan-kemanusiaan</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p33')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    Wakaf Produktif:<a class="biru" id="p34" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#wakaf-produktif"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#wakaf-produktif </a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p34')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    Infak:<a class="biru" id="p35" href="  https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#infaq"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#infaq</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p35')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    Sekolah Juara:<a class="biru" id="p36" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#sekolah-juara"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#sekolah-juara</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p36')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    Klinik:<a class="biru" id="p37" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#klinik-cita-sehat"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#klinik-cita-sehat</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p37')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    Palestina:<a class="biru" id="p38" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#palestina"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#palestina</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p38')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    Bencana Nasional:<a class="biru" id="p39" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#bencana-nasional"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#bencana-nasional</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p39')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    APD Tim Medis COVID-19:<a class="biru" id="p40" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#apd-tim-medis-covid19"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#apd-tim-medis-covid19</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p40')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                    Lindungi Relawan COVID-19:<a class="biru" id="p41" href=" https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#lindungi-relawan-covid19"> https://www.rumahzakat.org/donasi/?source={{ auth()->user()->id_amil }}#lindungi-relawan-covid19</a><button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-orange-1 border border-transparent rounded-full active:bg-orange-1 hover:bg-orange-300 focus:outline-none focus:shadow-outline-purple" aria-label="Edit" onclick="copylink('#p41')">
                        <svg class=" w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                        </svg>
                    </button>
                    <br>

                </span>
            </div>
        </div>


    </div>
</main>

@endsection