@section('title', 'Home | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout-a>
    <div class="bg-cover bg-center bg-no-repeat min-h-screen" style="background-image: url('{{ asset('images/bg-home.jpg') }}')">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-xs"></div>
        <div class="relative pl-24 pr-16 pt-28 z-10">
            <div class="flex items-center justify-center space-x-5">
                <img src="{{ asset('images/logos/tesda.png') }}" alt="TESDA-NCR Logo" class="w-3xs rounded-2xl">
                <div class="text-white text-stroke-blue break-words space-y-4 uppercase w-1/2 whitespace-normal">
                    <h1 class="text-5xl font-[Fremont,Verdana]">Technical Education and Skills Development Authority</h1>
                    <h3 class="text-2xl font-[Verdana] font-bold">National Capital Region</h3>
                    <div class="flex items-start space-x-3">
                        <div class="text-white hover:text-blue-500 transition-colors duration-200 w-fit">
                            <a href="http://www.facebook.com/tesdancr1/" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" fill="currentColor" viewBox="0 0 50 50">
                                    <path d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M37,19h-2c-2.14,0-3,0.5-3,2 v3h5l-1,5h-4v15h-5V29h-4v-5h4v-3c0-4,2-7,6-7c2.9,0,4,1,4,1V19z"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="text-white hover:text-red-500 transition-colors duration-200 w-fit">
                            <a href="https://www.youtube.com/@TESDAOfficial" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="55" height="55" fill="currentColor" viewBox="0 0 50 50">
                                    <path d="M 44.898438 14.5 C 44.5 12.300781 42.601563 10.699219 40.398438 10.199219 C 37.101563 9.5 31 9 24.398438 9 C 17.800781 9 11.601563 9.5 8.300781 10.199219 C 6.101563 10.699219 4.199219 12.199219 3.800781 14.5 C 3.398438 17 3 20.5 3 25 C 3 29.5 3.398438 33 3.898438 35.5 C 4.300781 37.699219 6.199219 39.300781 8.398438 39.800781 C 11.898438 40.5 17.898438 41 24.5 41 C 31.101563 41 37.101563 40.5 40.601563 39.800781 C 42.800781 39.300781 44.699219 37.800781 45.101563 35.5 C 45.5 33 46 29.398438 46.101563 25 C 45.898438 20.5 45.398438 17 44.898438 14.5 Z M 19 32 L 19 18 L 31.199219 25 Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center my-36">
                <div class="flex items-center justify-center text-center py-6 rounded-2xl space-x-60 w-3/4">
                    <div class="bg-white border-2 border-blue-700 flex items-center justify-center rounded-full shadow-md w-60 h-60">
                        <img src="{{ asset('images/logos/bagong-pilipinas.png') }}" alt="Bagong Pilipinas Logo" class="w-48 pb-12 object-contain">
                    </div>
                    <div class="bg-white border-2 border-blue-700 flex items-center justify-center rounded-full shadow-md w-60 h-60">
                        <img src="{{ asset('images/logos/dpo-dps-2025.png') }}" alt="DPS Registration Seal 2025" class="w-48 object-contain">
                    </div>
                    <div class="bg-white border-2 border-blue-700 flex items-center justify-center rounded-full shadow-md w-60 h-60">
                        <img src="{{ asset('images/logos/kayang-kaya.png') }}" alt="Kayang-Kaya Logo" class="w-48 object-contain">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-blue-700 flex items-center justify-center p-10">
        <h1 class="text-4xl text-white font-bold font-sans">We measure our worth by the satisfaction of the customers we serve.</h1>
    </div>
    <div class="bg-white min-h-screen pl-24 pr-16 pt-16 z-10">
        <div class="space-y-20">
            <div class="flex items-center justify-center">
                <div class="text-center space-y-8 w-4xl">
                    <div>
                        <h2 class="text-blue-800 text-5xl font-[Fremont,Verdana] font-bold mb-5 uppercase">Vision</h2>
                        <p class="text-gray-600 text-2xl leading-relaxed">
                            The transformational leader in the technical education and skills development of the Filipino workforce.
                        </p>
                    </div>
                    <div>
                        <h2 class="text-blue-800 text-5xl font-[Fremont,Verdana] font-bold mb-5 uppercase">Mission</h2>
                        <p class="text-gray-600 text-2xl leading-relaxed">
                            TESDA sets direction, promulgates relevant standards, and implements programs geared towards quality assured and inclusive technical education 
                            and skills development and certification system.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center pb-32">
                <div class="fb-video" 
                    data-href="https://www.facebook.com/TESDAOfficial/videos/3808930295931226/?t=1" 
                    data-width="700" 
                    data-show-text="false">
                </div>
            </div>
        </div>
    </div>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v19.0">
    </script>
</x-layout-a>