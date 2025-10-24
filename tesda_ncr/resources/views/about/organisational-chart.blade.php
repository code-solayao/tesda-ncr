@section('title', 'Organizational Chart | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout-b>
    <section class="bg-cover bg-center bg-no-repeat min-h-screen" style="background-image: url('{{ asset('images/bg-home.jpg') }}')"> 
        <div class="absolute inset-0 bg-black/40 backdrop-blur-xs"></div>
        <div class="relative mx-32 mt-16 py-24 z-10">
            <div class="mx-auto w-fit">
                <span class="text-white text-6xl font-bold uppercase">TESDA-NCR Organizational Chart</span>
            </div>
        </div>
    </section>
    <div class="bg-white flex -mt-[660px] relative w-full">
        <main class="flex mx-auto py-12 overflow-y-auto">
            <div class="w-full space-y-8">
                <img src="{{ asset('images/organizational-chart.png') }}" alt="TESDA-NCR Organizational Chart" class="w-full h-auto">
            </div>
        </main>
    </div>
</x-layout-b>