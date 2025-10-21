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
        <div class="space-y-10">
            <div class="flex items-center justify-center ">
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
        </div>
    </div>
</x-layout-a>