@section('title', 'Vision, Mission, Value and Quality Statement | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout-b>
    <section class="bg-cover bg-center bg-no-repeat h-[calc(100vh-4rem)]" style="background-image: url('{{ asset('images/bg-home.jpg') }}')"> 
        <div class="absolute inset-0 bg-black/40 backdrop-blur-xs"></div>
        <div class="relative mx-32 mt-16 py-24 z-10">
            <div class="mx-auto w-fit">
                <span class="text-white text-6xl font-bold uppercase">Vision, Mission, Value and Quality Statement</span>
            </div>
        </div>
    </section>
    <section class="bg-white flex -mt-[600px] relative w-full">
        <div class="flex px-60 py-12 overflow-y-auto">
            <div class="w-full h-fit space-y-8">
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <p class="font-semibold">Mandate</p>
                    <p>
                        The Technical Education and Skills Development Authority (TESDA) is the government agency tasked to manage and supervise 
                        technical education and skills development (TESD) in the Philippines. It was created by virtue of Republic Act 7796, otherwise known as the 
                        “Technical Education and Skills Development Act of 1994”. The said Act integrated the functions of the former National Manpower and Youth Council (NMYC), 
                        the Bureau of Technical-Vocational Education of the Department of Education, Culture and Sports (BTVE-DECS) and the Office of Apprenticeship of the 
                        Department of Labor and Employment (DOLE).
                    </p>
                </div>
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <p class="font-semibold">Vision</p>
                    <p>The transformational leader in the technical education and skills development of the Filipino workforce.</p>
                </div>
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <p class="font-semibold">Mission</p>
                    <p>
                        TESDA sets direction, promulgates relevant standards, and implements programs geared towards a quality-assured and inclusive 
                        technical education and skills development and certification system.
                    </p>
                </div>
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <p class="font-semibold">Values Statement</p>
                    <p>We believe in demonstrated competence, institutional integrity, personal commitment, culture of innovativeness and a deep sense of nationalism.</p>
                </div>
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <p class="font-semibold">Quality Policy</p>
                    <p>"We measure our worth by the satisfaction of the customers we serve"</p>
                    <p class="my-4">To achieve this, we commit to comply with applicable requirement and continually improve our systems and processes through: </p>
                    <p>
                        <span class="text-blue-700 text-2xl font-semibold">S</span>trategic Decisions
                    </p>
                    <p>
                        <span class="text-blue-700 text-2xl font-semibold">E</span>ffectiveness
                    </p>
                    <p>
                        <span class="text-blue-700 text-2xl font-semibold">R</span>esponsiveness
                    </p>
                    <p>
                        <span class="text-blue-700 text-2xl font-semibold">V</span>alue Added Performance
                    </p>
                    <p>
                        <span class="text-blue-700 text-2xl font-semibold">I</span>ntegrity
                    </p>
                    <p>
                        <span class="text-blue-700 text-2xl font-semibold">C</span>itizen focus
                    </p>
                    <p>
                        <span class="text-blue-700 text-2xl font-semibold">E</span>fficiency
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-layout-b>