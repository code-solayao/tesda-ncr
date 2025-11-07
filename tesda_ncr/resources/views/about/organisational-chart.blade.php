@section('title', 'Organizational Chart | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout>
    <section class="relative h-[270px] overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center blur-xs" style="background-image: url('{{ asset('images/bg-tesda-logo.webp') }}');"></div>
        <div class="absolute inset-0 bg-black/80"></div>
        <div class="relative mx-32 my-32 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-6xl font-bold uppercase">TESDA-NCR Organizational Chart</span>
            </div>
        </div>
    </section>
    <section class="bg-white flex relative w-full">
        <div class="flex mx-auto py-12 overflow-y-auto">
            <div class="w-full space-y-8">
                <img src="{{ asset('images/organizational-chart.png') }}" alt="TESDA-NCR Organizational Chart" class="w-full h-auto">
            </div>
        </div>
    </section>
</x-layout>