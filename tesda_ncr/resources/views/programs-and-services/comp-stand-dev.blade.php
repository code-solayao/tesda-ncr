@section('title', 'Competency Standards Development | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout-b>
    <section class="relative flex h-screen items-start justify-center overflow-hidden">
        <div class="absolute bg-cover bg-center bg-no-repeat inset-0 blur-xs" style="background-image: url('{{ asset('images/bg-home.jpg') }}');"></div>
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative mx-32 my-14 py-20 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-6xl font-bold uppercase">Competency Standards Development</span>
            </div>
        </div>
    </section>
    <section class="bg-white flex -mt-[640px] relative w-full">
        <div class="flex px-60 py-12 overflow-y-auto">
            <div class="w-full h-[calc(70vh-4rem)] space-y-5">
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <p>
                        TESDA develops competency standards for middle-level skilled workers. These are in the form of units of competency containing descriptors 
                        for acceptable work performance. These are packaged into qualifications corresponding to critical jobs and occupations in the priority 
                        industry sectors. The qualifications correspond to a specific levels in the Philippine TVET Qualifications Framework (PTQF).
                    </p>
                </div>
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <p>
                        The competency standards and qualifications, together with training standards and assessment arrangements comprise the 
                        national training regulations (TR) promulgated by the TESDA Board. The TRs serve as basis for registration and delivery of TVET programs, 
                        competency assessment and certification and development of curricula for the specific qualification.
                    </p>
                </div>
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <ul class="list-disc list-inside space-y-2">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Promulgated Training Regulations (TR)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">List of Promulgated TRs with Qualification Code</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Validation of the Training Regulations (TR)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Competency Standards</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</x-layout-b>