@section('title', 'TESDA Committee on Anti-Red Tape (CART) | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout-b>
    <section class="bg-cover bg-center bg-no-repeat min-h-screen" style="background-image: url('{{ asset('images/bg-home.jpg') }}')"> 
        <div class="absolute inset-0 bg-black/40 backdrop-blur-xs"></div>
        <div class="relative mx-32 mt-16 py-24 z-10">
            <div class="mx-auto w-fit">
                <span class="text-white text-6xl font-bold uppercase">TESDA Committee on Anti-Red Tape (CART)</span>
            </div>
        </div>
    </section>
    <div class="bg-white flex -mt-[660px] relative w-full">
        <main class="flex mx-auto py-12 overflow-y-auto">
            <div class="w-full space-y-8">
                <div class="w-full h-auto">
                    <img src="{{ asset('images/tesda-cart/updated-tesda-cart.png') }}" alt="Updated TESDA Committee on Anti-Red Tape">
                </div>
                <div class="w-full h-auto">
                    <img src="{{ asset('images/tesda-cart/rtc-arta-focal-1.png') }}" alt="Regional Training Center Arta Focal">
                </div>
                <div class="w-full h-auto">
                    <img src="{{ asset('images/tesda-cart/rtc-arta-focal-2.png') }}" alt="Regional Training Center Arta Focal">
                </div>
                <div class="w-full h-auto">
                    <img src="{{ asset('images/tesda-cart/regional-arta-focal.png') }}" alt="Regional Arta Focal">
                </div>
            </div>
        </main>
    </div>
</x-layout-b>