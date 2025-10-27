@section('title', 'Citizen\'s Charter | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout-b>
    <section class="bg-cover bg-center bg-no-repeat min-h-screen" style="background-image: url('{{ asset('images/bg-home.jpg') }}')"> 
        <div class="absolute inset-0 bg-black/40 backdrop-blur-xs"></div>
        <div class="relative mx-32 mt-16 py-24 z-10">
            <div class="mx-auto w-fit">
                <span class="text-white text-6xl font-bold uppercase">Citizen's Charter</span>
            </div>
        </div>
    </section>
    <section class="bg-white -mt-[660px] relative w-full">
        <div class="px-60 py-12 overflow-y-auto">
            <div class="w-full h-[calc(75vh-4rem)]">
                <div class="text-gray-600 text-xl font-semibold leading-relaxed space-y-4">
                    <div>
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <span class="hover:text-blue-600 hover:underline">Citizen's Charter</span>
                        </a>
                    </div>
                    <div>
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <span class="hover:text-blue-600 hover:underline">Certificate of Compliance</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout-b>