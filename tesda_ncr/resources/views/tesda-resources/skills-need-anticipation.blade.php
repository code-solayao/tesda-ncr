@section('title', 'Skills Need Anticipation: Workplace Skills and Satisfaction Survey | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout-b>
    <section class="relative flex h-screen items-start justify-center overflow-hidden">
        <div class="absolute bg-cover bg-center bg-no-repeat inset-0 blur-xs" style="background-image: url('{{ asset('images/bg-home.jpg') }}');"></div>
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative mx-32 my-14 py-20 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-6xl font-bold uppercase">Skills Need Anticipation: Workplace Skills and Satisfaction Survey</span>
            </div>
        </div>
    </section>
    <section class="bg-white flex -mt-[600px] relative w-full">
        <div class="px-60 py-12 overflow-y-auto">
            <div class="text-gray-700 text-xl font-sans leading-relaxed w-full space-y-5">
                <p class="font-semibold text-2xl">2025</p>
                <ul class="list-disc list-inside space-y-1">
                    <li>
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">TVET Skills Insights Report 2025 | Behind the Scenes of Care: Labor Insights Into the Auxiliary Health Workforce (Cadaver Care and Clinical Simulation)</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">VET Skills Insights Report Issue No. 1| Series of 2025 - Beyond Automation: The Age of 5th Industrial Revolution</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">TVET Skills Insight Report 2025|Threads of Heritage: Skills, Demands and Opportunities in Philippine Traditional Embroidery</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">TVET Skills Insights Report 2025 | Skilling for Sustainability: Strengthening Human Capital for the Coconut Processing Industry in the Philippines</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <span class="text-blue-600 hover:underline">TVET Skills Insights Report 2025 | Stage of Opportunity: Workforce Analysis in the Philippine Performing Arts Industry (Live Music, Dance, and Theater Art Form)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</x-layout-b>