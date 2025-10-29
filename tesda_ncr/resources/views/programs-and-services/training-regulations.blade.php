@section('title', 'Training Regulations | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout-b>
    <section class="bg-cover bg-center bg-no-repeat min-h-screen" style="background-image: url('{{ asset('images/bg-home.jpg') }}')"> 
        <div class="absolute inset-0 bg-black/40 backdrop-blur-xs"></div>
        <div class="relative mx-32 mt-16 py-24 z-10">
            <div class="mx-auto w-fit">
                <span class="text-white text-6xl font-bold uppercase">Training Regulations</span>
            </div>
        </div>
    </section>
    <div class="bg-white flex -mt-[660px] relative w-full">
        <main class="flex px-60 py-12 overflow-y-auto">
            <div class="text-gray-700 text-xl font-sans leading-relaxed w-full space-y-5">
                <p>
                    Training Regulations (TR) – a TESDA-promulgated document that serves as basis for which the competency-based curriculum and instructional materials 
                    and competency assessment tools are developed. This document represents a specific qualification. It defines the competency standards for 
                    a national qualification and how such qualification can be gained, assessed and be given recognition.
                </p>
            </div>
        </main>
    </div>
</x-layout-b>