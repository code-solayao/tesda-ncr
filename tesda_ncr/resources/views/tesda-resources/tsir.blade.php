@section('title', 'TVET Skills Insights Report (TSIR) | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout>
    <section class="relative h-[270px] overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center blur-xs" style="background-image: url('{{ asset('images/bg-tesda-logo.webp') }}');"></div>
        <div class="absolute inset-0 bg-black/80"></div>
        <div class="relative mx-32 my-32 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-6xl font-bold uppercase">TVET Skills Insights Report (TSIR)</span>
            </div>
        </div>
    </section>
    <section class="bg-white flex relative w-full">
        <div class="px-60 py-12 overflow-y-auto">
            <div class="text-gray-700 text-xl font-sans leading-relaxed w-full space-y-5">
                <div>
                    <p class="font-semibold text-2xl">2025</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/SkillInsights/2025/Final%20Report_TSIR_Auxiliary%20Healthcare%20Industry.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">TVET Skills Insights Report 2025 | Behind the Scenes of Care: Labor Insights Into the Auxiliary Health Workforce (Cadaver Care and Clinical Simulation)</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/SkillInsights/2025/TVET%20Skills%20Insights%20Report%20_%205th%20Industrial%20Revolution.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">TVET Skills Insights Report Issue No. 1| Series of 2025 - Beyond Automation: The Age of 5th Industrial Revolution</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/SkillInsights/2025/TSIR%20on%20Master%20Embroiders.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">TVET Skills Insight Report 2025|Threads of Heritage: Skills, Demands and Opportunities in Philippine Traditional Embroideryr</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/SkillInsights/2025/LMI%20-%20Coconut%20Industry_Processing.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">TVET Skills Insights Report 2025 | Skilling for Sustainability: Strengthening Human Capital for the Coconut Processing Industry in the Philippines</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/SkillInsights/2025/25.06.02_TSIR%20on%20Performing%20Arts%20(Live,%20Music%20and%20Dance).docx.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">TVET Skills Insights Report 2025 | Stage of Opportunity: Workforce Analysis in the Philippine Performing Arts Industry (Live Music, Dance, and Theater Art Form)</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">2024</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2025/Labor%20Market%20Information%20on%20the%20Bangsamoro.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR: Mapping the Bangsamoro Autonomous Region in Muslim Mindanao (BARMM) Competitive Advantage</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2025/LMIR%20No.%204_%20Nuclear%20Energy.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 4, s. 2024: Future Workforce Planning: Preparing for Nuclear Energy Revitalization in the Philippines</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2025/24.05.24_Quick%20LMI%20on%20Qatar%20(2).pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI: Future of Work and Economy for Filipino Migrant Tech-Voc Workers in Qatar</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2024/LMIR%20No.%203_Climate%20Change.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 3, s. 2024: Adapting to Climate Change: Workforce Trends and Opportunities in the Global Market</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2024/Metro%20Manila%20Subway%20Project.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI: Metro Manila Subway Project: Unearthing Skills Needs, Unleashing Opportunity</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2024/Build%20Better%20More%20Program.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 2, s. 2024: Beyond Blue Prints: Building Better Futures Through the Build Better More Program</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2024/Beyond%20Borders%20-%20Bridging%20Mobility%20for%20Domestic%20Filipino%20Workers.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI on Domestic Workers: Beyond Borders: Bridging Mobility for Domestic Filipino Workers</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2024/LMIR%20Issue%201%20Child%20%20Development%20Workers.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 1, s. 2024: Philippine Child Development Workers'</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">2023</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2024/LMIR%20Issue%20No.%204%20series%20of%202023.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 4, s. 2023: Blue Careers in a Blue Future: Enhancing the Skills and Competency Needed in Key Sectors of the Blue Economy</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2023/LMI-Building-Reselience-Developing-the-Skills-Needs-Across-the-Coconut-Industry.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Building Resilience: Developing the Skill Needs Across the Coconut Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2023/LMI-Halal-Lifestyle-Insights-on-Enhancing-Skills-in-the-Philippine-Halal-Food-Industry.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Halal Lifestyle: Insights on Enhancing Skills in the Philippine Halal Food Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2023/LMI%20Preparing%20the%20Talent%20Supply%20Cold%20Chain%20Industry%20for%20Energy%20Efficiency.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI: Preparing the Talent Supply: Cold Chain Industry for Energy Efficiency</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2023/LMI%20Exploring%20Labor%20Opportunities%20The%20Liguasan%20Marsh.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI: Exploring Labor Opportunities: The Liguasan Marsh</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2023/LMIELE_1.PDF" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI: Promotion of Low Carbon Urban Transport Systems in the Philippines (LCT) Project</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2023/LMIR%20on%20Green%20Economy.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 1, s. 2023: "Green Skills for Green Jobs 2.0: Expanding Green TVET Infrastructure for the Skilled Workforce"</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2023/23.03.06_LMI%20on%20SWM.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI: VALUE CREATION AND JOB GENERATION - The Potential of the Solid Waste Management Sector</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2023/LMIR%20No.%202%20Navigating%20the%20Future%20Work%20-%20Steering%20the%20Gig%20Economy%20Through%20Skills%20Development.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 2, s. 2023: Navigating the Future Work - Steering the Gig Economy Through Skills Development</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2023/LMIR%20No.%203%20Building%20Vessels,%20Refurbishing%20Careers%20Labor%20Market%20Intelligence%20in%20Shipbuilding%20and%20Repair.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 3, s. 2023: Building Vessels, Refurbishing Careers Labor Market Intelligence in Shipbuilding and Repair</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">2022</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2022/LMIR%20no.%204%20Coconut%20Industry.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 4, s. 2022: Revitalizing the Philippines Coconut Industry: Improving Productivity and Competitiveness Through Skills Training</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2022/2022.09.29%20draft%20LMIR%20No.%203%20%20Migrant%20Workers%20-%20for%20posting.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 3, s. 2022: Filipino Migrant Workers: Enhancing Labor Mobility Through Skills Development</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2022/LMIR_issue%20no.%202%20Circular%20Economy_FINAL.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 2, s. 2022:TVET for Circular Economy: Preparing the Workforce for the Circularity of Industries</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2022/LMIR%20No.%201_Women%20(Final).pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 1, s. 2022: Breaking Barriers: TVET and a Pro-Women Labor Market</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2022/LMI_Future-Proofing%20the%20Construction%20Sector.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI: Future-Proofing the Construction Sector</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">2021</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2021/LMIR%204_Care%20Health%20Caring%20in%20the%20New%20Normal.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 4, s. 2021: Care Health Caring in the New Normal</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2021/LMIR%203_The%20Potential%20of%20AI%20Divergent%20Possibilities%20of%20Innovation.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 3, s. 2021: The Potential of AI Divergent Possibilities of Innovation</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2021/LMIR%20on%20Skills%20of%20TVET%20Trainers.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 2, s. 2021: The TVET Trainer: In the Future of Work and Learning</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2021/LMIR%20on%20Renewable%20Energy.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 1, s. 2021: Sustaining the Future: Powering Individuals and Communities through Renewable Energy</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2021/LMI_TVET's%20Responsiveness%20to%20the%20Fast-Changing%20IT-BPM%20Industry.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI: TVET's Responsiveness to the Fast-Changing IT-BPM Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR/2021/LMI_Technological%20Disruption%20to%20the%20Logistics%20Industry.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI: Technological Disruption to the Logistics Industry</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">2020</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR%202020/20.12.01_LMIR-no.-5_Skills-for-the-Post-Pandemic-Labor-Market_Draft-3.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 5, s. 2020: Into the Future: Looking into the Skills for the Post-Pandemic Labor Market</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR%202020/20.11.27_LMIR_on%20Cybersecurity.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 4, s. 2020: Cybersecurity: Protecting the Philippines’ Digital Future</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR%202020/20.09.30_Health-and-Wellness_AO-September-2020.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: Health and Wellness (as of September 2020)</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR%202020/20.09.29_Automotive_AO-August-2020.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: Automotive (as of August 2020)</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR%202020/20.09.29_Automotive-Servicing_AO-July-2020.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: Automotive Servicing (as of July 2020)</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR%202020/20.09.28_Aquaculture_AO-April-2020.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: Aquaculture (as of April 2020)</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR%202020/20.08.16_Updated-Skills-Map.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">TESDA Skills Map</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR%202020/2020.07.06_Quick%20LMI_Human%20Health_Web%20Format.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI on COVID-19 Health Human Resources</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR%202020/LMIR%20Issue%20No.%203,%20s.%202020%20-%20Enriching%20the%20Culture.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 3, s. 2020 - Enriching the Culture</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR%202020/LMIR%20Issue%20No.%202,%20s.%202020%20-%20From%20Seeds%20to%20Satellites.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 2, s. 2020 - From Seeds to Satellites</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/LMIR%202020/LMIR%20Issue%20No.%201,%20s.%202020%20-%20Enabling%20the%20Disabled.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 1 s. 2020 - Enabling the Disabled</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">2019</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning/Planning%202019/LMIR/19.12.27_LMIR_Creative%20Industries%20(Web%20Format).pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 5, s. 2019 - Pagkamalikhain: The Philippine Creative Industries in the TVET Perspective</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning/Planning%202019/LMIR/19.12.13_LMIR%20on%20Online%20Jobs%20(Web%20Format).pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 4, s. 2019 - Working Anytime, Anywhere: Embracing the E-commerce Revolution</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning/Planning%202019/LMIR/LMIR%20on%20Transport%20and%20Logistics%20(Web%20Format).pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 3, s. 2019 - Philippine Transportation and Logistics: Preparing the Filipino Workforce</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning/Planning%202019/LMIR/19.08.22_LMI%20on%20ITBPM_Website%20Version.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 2, s. 2019 - Sustaining the Competitiveness of the Philippine IT-BPM Industry in the Changing World of Work</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning/Planning%202019/LMIR/LMIR%20Issue%20No.%201%20Series%20of%202019_Automotive%20Global%20Value%20Chain.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 1, s. 2019 - Increasing the Philippines in the Automotive Value Chain Through Human Capital Development</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning/Planning%202019/LMIR/19.04.03_Quick%20LMI_IT-BPO%20(Web%20Format).pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: IT-BPO</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning/Planning%202019/LMIR/19.04.16_Quick%20LMI_Manufacturing%20(Web%20Format).pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: Manufacturing</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning/Planning%202019/LMIR/19.06.18_Quick%20LMI_Transport%20and%20Logistics%20(Web%20Format).pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: Transport and Logistics</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning/Planning%202019/LMIR/19.06.28_Quick%20LMI_Construction%20(Web%20Format).pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: Construction</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning/Planning%202019/LMIR/19.10.24_Quick%20LMI_Electric%20Vehicle%20(Web%20Format).pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: Electric Vehicle</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning/Planning%202019/LMIR/19.12.27_Quick%20LMI_Semiconductors%20and%20Electronics%20(Web%20Format).pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: Semiconductors and Electronics</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">2018</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning/Planning%202019/LMIR%20on%20Developing%20Philippine%20Agriculture%20through%20Agribusiness_Web%20Format.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Developing Philippine Agriculture Through Agribusiness</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning2018/LMIR/Jobs%20Boom%20for%20Healthcare%20Workers.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Jobs Boom for Filipino Health Care Assistance Workers</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning2018/LMIR/LMIR%20Re%20Philippines%20Top%20Investment%20Destination_7.24.18_FOR%20WEBSITE%20UPLOADING.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Reviewing the Philippines Top Industries: Skilled Labor Force Made the Country Best fir Investments</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/Planning2018/LMIR/20180621%20Green%20Jobs%20Skills%20Paper_for%20website%20upload.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Green Skills for Green Jobs</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">2017</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/planning2017/LMIR/MARITIME%20LMIR%20March%2017%20with%20cover%202017.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">The Philippine Maritime Industry Through The Years</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/planning2017/LMIR/ITBPM%20LMIR%20(For%20TESDA%20Website).pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Dimming or Brightening: Current Views on the Effects of Automation and the U.S. Anti-Outsourcing Bill to the Philippine IT-BPM Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/planning2017/LMIR/Construction%20LMIR%20For%20Website.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">From Build, Build, Build To Work, Work, Work: The Construction Industry In The Golden Age Of Philippine Infrastructure</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">2016</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/planning2017/LMIR/4th%20IR%20LMIR%20January%203%20FULL.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Technological Change is Coming: The Fourth Industrial Revolution</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/planning2017/LMIR/Tourism%20LMIR%20for%20Website.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Tourism and Economic Development</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">2015</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/planning2017/LMIR/final%20LMIR%20-%20PHILIPPINE%20AUTOMOTIVE%20INDUSTRY%20(ao%202015-11-09).pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Developments in Philippine Automotive Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/Uploads/File/planning2017/LMIR/LMIR_agri%20and%20fisheries%20mech%20law_paper%20-%20final%20DEC%2028%20-%20Copy.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Agricultural and Fisheries Mechanization</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">December 2013</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="https://www.tesda.gov.ph/uploads/File/Planning2014/LMIR/LMIR%20(1)%20Priority%20Industries.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 01-05-12 Priority Industries that Support Job Generation</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/uploads/File/Planning2014/LMIR/LMIR%20(2)%20Hot%20Skills%20for%20Hot%20Jobs.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 02-05-12 Hot Skills for Hot Jobs</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/uploads/File/Planning2014/LMIR/LMIR%20(3)%20Competitiveness%20of%20Cities.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 03-12-12 Competitiveness of Cities and Municipalities</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/uploads/File/Planning2014/LMIR/LMIR%20(4)%20ASEAN%20MRA%20on%20Tourism%20Professionals.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 04-12-12 ASEAN MRA on Tourism</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/uploads/File/Planning2014/LMIR/LMIR%20(5)%20Skills%20Demand%20Mapping_Final.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 05-12-12 Skills Demand and Supply Mapping</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/uploads/File/Planning2014/LMIR/LMIR%20(6)%20Manufacturing%20Industry.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 06-12-12 Manufacturing Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/uploads/File/Planning2014/LMIR/LMIR%20(7)%20Electronics%20Industry.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 07-12-12 Electronics Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/uploads/File/Planning2014/LMIR/LMIR%20(8)%20Chemical%20Manufacturing.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 08-12-12 Chemical Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/uploads/File/Planning2014/LMIR/LMIR%20(9)%20Furniture%20Industry.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 09-12-12 Furniture Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/uploads/File/Planning2014/LMIR/LMIR%20(10)%20ASCC.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 10-12-12 ASEAN Socio Cultural Community Blueprint</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/uploads/File/Planning2014/LMIR/LMIR%20(11)%20Logistics.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 11-12-12 Logistics Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/uploads/File/Planning2014/LMIR/LMIR%20(12)%20Hard%20to%20Fill%20Jobs%20Overseas_Final.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 12-12-12 Hard-to fill-Jobs(Overseas)</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">June 2013</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="https://www.tesda.gov.ph/uploads/File/Planning2013/LMIR%20Priority%20Industries_June10.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Priority Industries that Support Generation (LMIR No. ST-PO 01-05-2013)</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tesda.gov.ph/uploads/File/Planning2013/Hot%20skills%20for%20Hot%20jobs_final.pdf" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Hot Skills for Hot Jobs (LMIR No. ST-PO 02-05-2013)</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">December 2011 - June 2012</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">December 22, 2011</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">#</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</x-layout>