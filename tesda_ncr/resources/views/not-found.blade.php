@section('title', 'Unavailable | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout>
    <section class="relative flex h-screen items-start justify-center overflow-hidden">
        <div class="absolute bg-cover bg-center bg-no-repeat inset-0 blur-xs" style="background-image: url('{{ asset('images/bg-home.jpg') }}');"></div>
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative mx-32 my-14 py-20 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-6xl font-bold uppercase">Unavailable</span>
            </div>
        </div>
    </section>
    <section class="bg-white flex items-center justify-center -mt-[640px] relative w-full">
        <div class="flex px-60 py-12 overflow-y-auto">
            <div class="text-gray-700 text-xl font-sans leading-relaxed w-full space-y-5">
                <p>The link has no available material attached.</p>
            </div>
        </div>
    </section>
</x-layout>