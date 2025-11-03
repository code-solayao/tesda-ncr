@section('title', 'TVET Brief | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout-b>
    <section class="relative flex h-screen items-start justify-center overflow-hidden">
        <div class="absolute bg-cover bg-center bg-no-repeat inset-0 blur-xs" style="background-image: url('{{ asset('images/bg-home.jpg') }}');"></div>
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative mx-32 my-14 py-20 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-6xl font-bold uppercase">TVET Brief</span>
            </div>
        </div>
    </section>
    <section class="bg-white flex -mt-[640px] relative w-full">
        <div class="flex px-60 py-12 overflow-y-auto">
            <div class="text-gray-700 text-xl font-sans leading-relaxed w-full space-y-5">
                <div class="space-y-1">
                    <p class="font-semibold">Series of 2025</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">2025 TVET Brief: "Exploring the Shift to Skilled-Based Training in Philippine TVET: Addressing Mismatches Through Targeted Reform"</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-1">
                    <p class="font-semibold">Series of 2024</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 1 - Two for one in TVET: Is Philippine TVET ready for Dual Transition?</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 2 - Navigating Futures: Pathways Beyond Senior High School</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 3 -  Does Learning Progression apply to Philippine TVET?</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-1">
                    <p class="font-semibold">Series of 2023</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 1 - Other Than Formal: Situating Non-Formal and Informal TVET in the Philippines</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 4 - Assessing Productivity Through Training and TVET: How and Why?</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-1">
                    <p class="font-semibold">Series of 2022</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 1 - The Catch Up Games: Reverting Learning Losses Due to COVID</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trend Issue No. 2 - Far and Wide: Accelerating Upskilling and Reskilling at Scale</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trend Issue No. 3 - The Significance of Skills Intelligence in the Development of Technical Vocational Education and Training</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trend Issue No. 4 - Reading Between the Lines: Learning Poverty and its Effects on Philippine TVET</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-1">
                    <p class="font-semibold">Series of 2021</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 1 - Imbibing the Future's Thinking Mind Set in the Future-Proofing Philippine TVET</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 2 - Linking Migration and Economic Policy Development and Technical Vocational Education</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 3 - Lifelong Learning Starts Here: An Overview of Competency Stacking</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 4 - Situating Vendor Training and Certification in Philippine TVET</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-1">
                    <p class="font-semibold">Series of 2020</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 1 - World Bank Study on Inclusive Development in Mindanao</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 3 - Innovation</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 4 - CBT and Capacity-Based Training</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 5 -  Traversing-the-New-Normal-Innovation-in-PH-TVET</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 6 - COVID-19s -Impact-to-Economic-Sectors</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 7 - Realizing TVET e-Learning for All in the New Normal</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 8 - Preparing Philippine TVET for the Future in ASEAN</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-1">
                    <p class="font-semibold">Series of 2019</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 1 - Human Capital Development and the Global Value Chains (GVCs)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 2 - Mapping Philippine Workers at Risk of Automation in the Fourth Industrial Revolution</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 3 - Big Data and Its Big Implication in Human Capital Development</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 4 - Competitiveness Rankings and Their Implications to Human Capital Development</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-1">
                    <p class="font-semibold">Series of 2018</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 1 - Preparing the Right Mix: Combining Socioemotional Skills with Technical Skills for the Labor Market</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 2 - Future-Proofing Our Workforce: Situating the Status of Science, Technology, Engineering and Mathematics (STEM) in TVET</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Industry Trends Issue No. 3 - Disruptive Technologies and Trends in the Fourth Industrial Revolution</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</x-layout-b>