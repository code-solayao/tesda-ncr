@section('title', 'Assessment and Certification | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout-b>
    <section class="bg-cover bg-center bg-no-repeat min-h-screen" style="background-image: url('{{ asset('images/bg-home.jpg') }}')"> 
        <div class="absolute inset-0 bg-black/40 backdrop-blur-xs"></div>
        <div class="relative mx-32 mt-16 py-24 z-10">
            <div class="mx-auto w-fit">
                <span class="text-white text-6xl font-bold uppercase">Assessment and Certification</span>
            </div>
        </div>
    </section>
    <div class="bg-white flex -mt-[660px] relative w-full">
        <main class="flex px-60 py-12 overflow-y-auto">
            <div class="w-full h-fit space-y-5">
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <p>
                        TESDA pursues the assessment and certification of the competencies of the middle-level skilled workers through 
                        Philippine TVET Competency Assessment and Certification System (PTCACS). The assessment process seeks to determine whether the graduate or worker 
                        can perform to the standards expected in the workplace based on the defined competency standards. Certification is provided to those who meets 
                        the competency standards. This ensures the productivity, quality and global competitiveness of the middle-level workers.
                    </p>
                </div>
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <p>TESDA has a Registry of Certified Workers which provides information on the pool of certified workers for certain occupations nationwide.</p>
                </div>
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <p>TESDA also has accredited assessment centers as well as the competency assessors who conduct competency assessment process for persons applying for certification.</p>
                </div>
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <span class="text-blue-600 hover:underline">Click here to view the FREQUENTLY ASKED QUESTIONS (FAQs) and ANSWERS ON THE TESDA ASSESSMENT AND CERTIFICATION PROGRAM</span>
                    </a>
                </div>
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <ol class="list-[lower-alpha] list-inside font-medium space-y-2">
                        <li>
                            <span class="px-2">
                                General Requirements and Procedures in Applying for Assessment and Certification (National Certificate (NC) / Certificate of Competency (COC))
                            </span>
                            <ol class="list-decimal list-inside font-normal ml-7 space-y-1">
                                <li>
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                        <span class="text-blue-600 hover:underline px-2">New Applicant</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                        <span class="text-blue-600 hover:underline px-2">Renewal</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                        <span class="text-blue-600 hover:underline px-2">Lost/Damaged Certificate</span>
                                    </a>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <span class="px-2">Lists</span>
                            <ol class="list-decimal list-inside font-normal ml-7 space-y-1">
                                <li>
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                        <span class="text-blue-600 hover:underline px-2">List of TESDA Accredited Assessment Centers</span>
                                    </a>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <span class="px-2">Online Verification Registries</span>
                            <ol class="list-decimal list-inside font-normal ml-7 space-y-1">
                                <li>
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                        <span class="text-blue-600 hover:underline px-2">Registry of Certified Workers 2016 Issuances and Earlier</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                        <span class="text-blue-600 hover:underline px-2">Registry of Certified Workers 2017 Issuances and Up</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                        <span class="text-blue-600 hover:underline px-2">Registry of TESDA Accredited Trainers with NTTC</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                        <span class="text-blue-600 hover:underline px-2">Registry of TESDA Accredited Assessors</span>
                                    </a>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>
            </div>
        </main>
    </div>
</x-layout-b>