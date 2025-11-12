@section('title', 'Planning Guidelines | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout>
    <section class="relative h-[270px] overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center blur-xs" style="background-image: url('{{ asset('images/bg-tesda-logo.webp') }}');"></div>
        <div class="absolute inset-0 bg-black/80"></div>
        <div class="relative mx-32 my-32 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-6xl font-bold uppercase">Planning Guidelines</span>
            </div>
        </div>
    </section>
    <section class="bg-white flex relative w-full">
        <div class="flex px-60 py-12 overflow-y-auto">
            <ul class="list-disc list-inside text-gray-700 text-xl font-sans leading-relaxed space-y-1 w-full">
                <li>
                    <span>2020</span>
                    <ul class="[list-style-type:circle] list-inside ml-7 space-y-1">
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning%20Guidelines/2020%20Revised%20Planning%20Guidelines.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Revised Planning Guidelines</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning%20Guidelines/2020%20Planning%20Guidelines.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Planning Guidelines</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://www.tesda.gov.ph/Uploads/File/Planning%20Guidelines/2019%20TESDA%20Planning%20Parameters.pdf" target="_blank" rel="noopener noreferrer">
                        <span class="text-blue-600 hover:underline">2019 Planning Parameters</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.tesda.gov.ph/Uploads/File/Planning%20Guidelines/2018%20PLANNING%20GUIDELINES.pdf" target="_blank" rel="noopener noreferrer">
                        <span class="text-blue-600 hover:underline">2018 Planning Guidelines</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.tesda.gov.ph/Uploads/File/Planning%20Guidelines/2017%20Planning%20Guidelines.pdf" target="_blank" rel="noopener noreferrer">
                        <span class="text-blue-600 hover:underline">2017 Planning Guidelines</span>
                    </a>
                    <ul class="[list-style-type:circle] list-inside ml-7 space-y-1">
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning%20Guidelines/Annex%20A%20TVET%20Reform%20Agenda.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Annex A TVET reform Agenda</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning%20Guidelines/Annex%20B%202017%20Targets.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Annex B 2017 Targets</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning%20Guidelines/Annex%20C%20NITESD%20INPUT%20TO%202017%20PLANNING%20GUIDELINES.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Annex C NITESD input to Planning Guidelines</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning%20Guidelines/Annex%20D%20CO%20Proposed%20Guidelines.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Annex D CO Proposed Guidelines</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://www.tesda.gov.ph/Uploads/File/Planning%20Guidelines/2015%20Planning%20Guidelines.pdf" target="_blank" rel="noopener noreferrer">
                        <span class="text-blue-600 hover:underline">2015 Planning Guidelines</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.tesda.gov.ph/Uploads/File/Planning%20Guidelines/2014%20Planning%20Guidelines.pdf" target="_blank" rel="noopener noreferrer">
                        <span class="text-blue-600 hover:underline">2014 Planning Guidelines</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
</x-layout>