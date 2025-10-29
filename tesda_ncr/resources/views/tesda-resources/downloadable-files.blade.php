@section('title', 'Downloadable Files | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout-b>
    <section class="bg-cover bg-center bg-no-repeat min-h-screen" style="background-image: url('{{ asset('images/bg-home.jpg') }}')"> 
        <div class="absolute inset-0 bg-black/40 backdrop-blur-xs"></div>
        <div class="relative mx-32 mt-16 py-24 z-10">
            <div class="mx-auto w-fit">
                <span class="text-white text-6xl font-bold uppercase">Downloadable Files</span>
            </div>
        </div>
    </section>
    <div class="bg-white flex -mt-[660px] relative w-full">
        <main class="flex px-60 py-12 overflow-y-auto">
            <div class="text-gray-700 text-xl font-sans leading-relaxed w-full h-[calc(70vh-4rem)] space-y-5">
                <ul class="list-disc list-inside space-y-2">
                    <li>
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">Training Regulations</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">Self-Assessment Guides</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">Learner's Profile Form (MIS 03-01 ver.2021)</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">Basic Competencies Integrated with 21st Century Skills</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">QMS Prescribed Forms</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">Star Rated Programs</span>
                        </a>
                    </li>
                </ul>
            </div>
        </main>
    </div>
</x-layout-b>