@section('title', 'TVET Programs | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout-b>
    <section class="bg-cover bg-center bg-no-repeat min-h-screen" style="background-image: url('{{ asset('images/bg-home.jpg') }}')"> 
        <div class="absolute inset-0 bg-black/40 backdrop-blur-xs"></div>
        <div class="relative mx-32 mt-16 py-24 z-10">
            <div class="mx-auto w-fit">
                <span class="text-white text-6xl font-bold uppercase">TVET Programs</span>
            </div>
        </div>
    </section>
    <div class="bg-white flex -mt-[660px] relative w-full">
        <main class="flex px-60 py-12 overflow-y-auto">
            <div class="w-full h-fit space-y-5">
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <p>
                        In view of the need to provide equitable access and provision of TESD programs to the growing TVET clients, 
                        TESDA continues to undertake direct training provisions. There are four training modalities school-based, center-based, enterprised-based 
                        and community-based. These are being done with TESDA’s infrastructure in place – 57 TESDA administered schools, 60 training center, 
                        enterprised-based training through DTS/apprenticeship and community-based training in convergence with the LGU’s.
                    </p>
                </div>
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <ul class="list-disc mx-4 px-7 space-y-2">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">School Based Program</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Centre Based Program</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Community Based Program</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Enterprise Based Program</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="text-gray-700 text-xl font-sans leading-relaxed space-y-4">
                    <p class="font-semibold uppercase">TESDA Supports Training Provision</p>
                    <p>
                        TESD creates opportunities for people to be responsible and become productive citizens. The need to provide and make accessible relevant 
                        TESD compels TESDA to undertake direct training activities at the same time support training activities undertaken by other key players 
                        in the TESD sector.
                    </p>
                    <p>
                        TESDA Technology Institutions are composed of 125 schools, regional, provincial and specialized training centers nationwide which undertake 
                        direct training activities for TESDA. The absence of an institution in the area which can provide people equitable access to TESD necessitates 
                        TESDA to undertake direct training activities. These TTIs also serve as venues to test new training schemes and are used as laboratories 
                        for new technology.
                    </p>
                    <div>
                        <p>Among TESDA’s specialized training centers are the following: </p>
                        <p>
                            <strong>TESDA Women’s Center (TWC)</strong> seeks to advance the economic status of women through training, entrepreneurship development, 
                            gender sensitive policies, programs and projects and research and advocacy. It was established through a grant from the Government of Japan.
                        </p>
                    </div>
                    <p>
                        <strong>Language Skills Institute (LSI)</strong> serves as TESDA’s facility for language programs specifically for workers intending to work abroad. 
                        The LSI conducts training on workplacecommunication on the language of the country of the worker’s destination. There are 35 LSI nationwide 
                        offering different language courses which include English, Korean, Mandarin, Japanese and Spanish.
                    </p>
                    <p>
                        <strong>Korea-Philippines IT Training Centers</strong> are grant-assisted projects from the Government of the Republic of Korea. 
                        These KPITTCs are located at the Polytechnic University in Novaliches, Quezon City and at the Regional Skills Development Centers 
                        in Guiguinto, Bulacan and Tibungco, Davao City, respectively.
                    </p>
                </div>
            </div>
        </main>
    </div>
</x-layout-b>