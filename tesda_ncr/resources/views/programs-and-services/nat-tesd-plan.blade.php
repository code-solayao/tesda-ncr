@section('title', 'National Technical Education and Skills Development Plan (NTESDP) | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout-b>
    <section class="bg-cover bg-center bg-no-repeat min-h-screen" style="background-image: url('{{ asset('images/bg-home.jpg') }}')"> 
        <div class="absolute inset-0 bg-black/40 backdrop-blur-xs"></div>
        <div class="relative mx-32 mt-16 py-24 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-6xl font-bold uppercase">National Technical Education and Skills Development Plan (NTESDP)</span>
            </div>
        </div>
    </section>
    <div class="bg-white flex -mt-[640px] relative w-full">
        <main class="flex px-60 py-12 overflow-y-auto">
            <div class="w-full space-y-5">
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <p class="font-medium">The National Technical Education and Skills Development Plan (NTESDP) 2023-2028</p>
                </div>
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <p class="font-medium">MaGaling at MakaBagong TVET para sa Bagong Pilipinas:</p>
                    <p>TVET as a Pathway to Recovery and Socio-Economic Transformation</p>
                </div>
            </div>
        </main>
    </div>
</x-layout-b>