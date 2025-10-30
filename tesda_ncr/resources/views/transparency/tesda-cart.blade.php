@section('title', 'TESDA Committee on Anti-Red Tape (CART) | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout-b>
    <section class="relative flex h-screen items-start justify-center overflow-hidden">
        <div class="absolute bg-cover bg-center bg-no-repeat inset-0 blur-xs" style="background-image: url('{{ asset('images/bg-home.jpg') }}');"></div>
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative mx-32 my-14 py-20 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-6xl font-bold uppercase">TESDA Committee on Anti-Red Tape (CART)</span>
            </div>
        </div>
    </section>
    <section class="bg-white flex -mt-[640px] relative w-full">
        <div class="flex mx-auto py-12 overflow-y-auto">
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
        </div>
    </section>
</x-layout-b>