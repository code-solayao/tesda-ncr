@section('title', 'Labor Market Intelligence Report | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout-b>
    <section class="relative flex h-screen items-start justify-center overflow-hidden">
        <div class="absolute bg-cover bg-center bg-no-repeat inset-0 blur-xs" style="background-image: url('{{ asset('images/bg-home.jpg') }}');"></div>
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative mx-32 my-14 py-20 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-6xl font-bold uppercase">Labor Market Intelligence Report</span>
            </div>
        </div>
    </section>
    <section class="bg-white flex -mt-[640px] relative w-full">
        <div class="flex px-60 py-12 overflow-y-auto">
            <div class="text-gray-700 text-xl font-sans leading-relaxed w-full space-y-5">
                <p class="mb-10">
                    The LMIR provides insights on current trends, issues, and challenges available in the local and international labor markets, both demand and supply. 
                    The LMIR is used in the determination of priority skills for the Training Regulation development, for policy formulation, especially in directing and 
                    aligning TVET programs with labor market requirements.
                </p>
                <div>
                    <p class="font-semibold text-2xl">2024</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR: Mapping the Bangsamoro Autonomous Region in Muslim Mindanao (BARMM) Competitive Advantage</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 4, s. 2024: Future Workforce Planning: Preparing for Nuclear Energy Revitalization in the Philippines</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI: Future of Work and Economy for Filipino Migrant Tech-Voc Workers in Qatar</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 3, s. 2024: Adapting to Climate Change: Workforce Trends and Opportunities in the Global Market</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI: Metro Manila Subway Project: Unearthing Skills Needs, Unleashing Opportunity</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 2, s. 2024: Beyond Blue Prints: Building Better Futures Through the Build Better More Program</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI on Domestic Workers: Beyond Borders: Bridging Mobility for Domestic Filipino Workers</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 1, s. 2024: Philippine Child Development Workers'</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">2023</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 4, s. 2023: Blue Careers in a Blue Future: Enhancing the Skills and Competency Needed in Key Sectors of the Blue Economy</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Building Resilience: Developing the Skill Needs Across the Coconut Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Halal Lifestyle: Insights on Enhancing Skills in the Philippine Halal Food Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI: Preparing the Talent Supply: Cold Chain Industry for Energy Efficiency</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI: Exploring Labor Opportunities: The Liguasan Marsh</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI: Promotion of Low Carbon Urban Transport Systems in the Philippines (LCT) Project</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 1, s. 2023: "Green Skills for Green Jobs 2.0: Expanding Green TVET Infrastructure for the Skilled Workforce"</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI: VALUE CREATION AND JOB GENERATION - The Potential of the Solid Waste Management Sector</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 2, s. 2023: Navigating the Future Work - Steering the Gig Economy Through Skills Development</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 3, s. 2023: Building Vessels, Refurbishing Careers Labor Market Intelligence in Shipbuilding and Repair</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">2022</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 4, s. 2022: Revitalizing the Philippines Coconut Industry: Improving Productivity and Competitiveness Through Skills Training</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 3, s. 2022: Filipino Migrant Workers: Enhancing Labor Mobility Through Skills Development</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 2, s. 2022:TVET for Circular Economy: Preparing the Workforce for the Circularity of Industries</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 1, s. 2022: Breaking Barriers: TVET and a Pro-Women Labor Market</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI: Future-Proofing the Construction Sector</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">2021</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 4, s. 2021: Care Health Caring in the New Normal</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 3, s. 2021: The Potential of AI Divergent Possibilities of Innovation</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 2, s. 2021: The TVET Trainer: In the Future of Work and Learning</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 1, s. 2021: Sustaining the Future: Powering Individuals and Communities through Renewable Energy</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI: TVET's Responsiveness to the Fast-Changing IT-BPM Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMI: Technological Disruption to the Logistics Industry</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">2020</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 5, s. 2020: Into the Future: Looking into the Skills for the Post-Pandemic Labor Market</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue no. 4, s. 2020: Cybersecurity: Protecting the Philippines’ Digital Future</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: Health and Wellness (as of September 2020)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: Automotive (as of August 2020)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: Automotive Servicing (as of July 2020)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: Aquaculture (as of April 2020)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">TESDA Skills Map</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI on COVID-19 Health Human Resources</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 3, s. 2020 - Enriching the Culture</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 2, s. 2020 - From Seeds to Satellites</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 1 s. 2020 - Enabling the Disabled</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">2019</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 5, s. 2019 - Pagkamalikhain: The Philippine Creative Industries in the TVET Perspective</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 4, s. 2019 - Working Anytime, Anywhere: Embracing the E-commerce Revolution</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 3, s. 2019 - Philippine Transportation and Logistics: Preparing the Filipino Workforce</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 2, s. 2019 - Sustaining the Competitiveness of the Philippine IT-BPM Industry in the Changing World of Work</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Issue No. 1, s. 2019 - Increasing the Philippines in the Automotive Value Chain Through Human Capital Development</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: IT-BPO</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: Manufacturing</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: Transport and Logistics</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: Construction</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: Electric Vehicle</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Quick LMI: Semiconductors and Electronics</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">2018</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Developing Philippine Agriculture Through Agribusiness</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Jobs Boom for Filipino Health Care Assistance Workers</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Reviewing the Philippines Top Industries: Skilled Labor Force Made the Country Best fir Investments</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Green Skills for Green Jobs</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">2017</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">The Philippine Maritime Industry Through The Years</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Dimming or Brightening: Current Views on the Effects of Automation and the U.S. Anti-Outsourcing Bill to the Philippine IT-BPM Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">From Build, Build, Build To Work, Work, Work: The Construction Industry In The Golden Age Of Philippine Infrastructure</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">2016</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Technological Change is Coming: The Fourth Industrial Revolution</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Tourism and Economic Development</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">2015</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Developments in Philippine Automotive Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Agricultural and Fisheries Mechanization</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">December 2013</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 01-05-12 Priority Industries that Support Job Generation</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 02-05-12 Hot Skills for Hot Jobs</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 03-12-12 Competitiveness of Cities and Municipalities</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 04-12-12 ASEAN MRA on Tourism</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 05-12-12 Skills Demand and Supply Mapping</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 06-12-12 Manufacturing Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 07-12-12 Electronics Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 08-12-12 Chemical Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 09-12-12 Furniture Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 10-12-12 ASEAN Socio Cultural Community Blueprint</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 11-12-12 Logistics Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 12-12-12 Hard-to-fill Jobs(Overseas)</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">June 2013</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Priority Industries that Support Generation (LMIR No. ST-PO 01-05-2013)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Hot Skills for Hot Jobs (LMIR No. ST-PO 02-05-2013)</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">December 2011 - June 2012</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR - ST-PO 01-02-12 - Highlights of the October 2011 Labor Force Survey, Profile of the Inactive Unemployed, Profile of Employer in Own Family-operated Farm or Business</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR - ST-PO 02-02-12 - Philippines: Back in the Game</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR - ST-PO 03-05-12 - Metals and Engineering Sector: Supply and Demand in Computer Numerical Control (CNC) Machine Operation and Other Related TVET Qualification</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR - ST-PO 04-12-12 - The Global Competitiveness Report 2012-2013</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR - ST-PO 05-12-12 - Moving Towards One Vision One Identity One Community - ASEAN Vision 2015 (An expert from the ASEAN Economic Blueprint)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR - ST-PO 06-12-12 - The Millennium Development Goals (MDGs): Are we up to the task?</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR - ST-PO 07-12-12 - Decent Work Country Profile: The Philippines</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR - ST-PO 08-12-12 - Information Technology-Business Process Outsourcing (IT-BPO)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR - ST-PO 09-12-12 - Construction</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR - ST-PO 10-12-12 - Tourism 2012: It's more fun in the Philippines</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR - ST-PO 11-12-12 - Solid Waste Management</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR - ST-PO 12-12-12 - Labor, Employment and TVET Statistics</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">December 22, 2011</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Rapid Assessment of 2008-2010 TVET Performance</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">A Profile of Job Vacancies and Job Seekers at the Phil-Jobnet 3rd Quarter 2011</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Highlights of the OccupationalWages Survey on Wage Rates in Industries</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Tourism  Development Areas</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Job Vacancies in Philipine_Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">The 2011 Investment Priorities Plan</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">The Honolulu Declaration</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Highlights of the Wage Workers</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">November 2, 2011</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 13-10-2011 "Highlights of the July 2011 Labor Force Survey"</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 14-10-2011 "Job Opportunities in Canberra, Australia"</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO "Wage and Salary Workers in the Philippines: 2010 a Closer Look"</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 16-10-2011 "Animation"</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR No. ST-PO 17-10-2011 "Highlights of the 2009 Family Income and Expenditutes Survey (FIES)"</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">September 7, 2011</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Automotive</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Agriculture and Fishery</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Semicon and Electronics</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Maritime</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Construction</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">2008 FLEMMS</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">January 2011 LFS and Profile of Working Children in the Phils.</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Manpower Development for Agriculture Entrepreneurs</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Effect of the Japan Disaster on the Phil. Automotive Industry</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold text-2xl">Date last file added - July 21, 2008</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">LMIR Super Region Brochure June 24, 2008</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Critical Skills in the Processed Food and Beverages Industry</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Philippine Mining Prospects (August 2005)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">OFWs For The World (Issue No. 2005-1)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">ICT Updates (October 2004)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">A Look at the Overseas Labor Market (July 2004)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">ICTrities (April 2004)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">The Overseas Market for Filipino Entertainers (March 2004)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">How Saturated is the Caregivers' Market? (February 2004)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Skills Shortages and Training Needs of MNCs in the Philippines (Issue No. 20)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">The Country's ICT Industry in Focus (Issue No. 19)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">How Competitive is the Philippines? (Issue No. 18)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Prospects of the Country's Tourism (Issue No. 17)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">The Fast-Emerging Market (Issue No. 16)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Caregivers: Special Breed of Health Workers (Issue No. 15)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">What it Takes to be an Employable IT Graduate (Issue No. 13)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Bright Future Seen in Agriculture (Issue No. 12)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Investment Priorities of the Philippines (Issue No. 11)</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</x-layout-b>