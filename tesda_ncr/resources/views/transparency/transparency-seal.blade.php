@section('title', 'Transparency Seal | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js', 
        'resources/js/transparency/transparency-seal.js'])
@endsection

<x-layout-a>
    <section class="page-header">
        <div>
            <img src="{{ asset('images/transparency-seal.jpg') }}" alt="Transparency Seal" class="w-full h-auto">
        </div>
    </section>
    <section class="page-content">
        <div class="px-60 py-12">
            <h3 class="text-blue-800 text-2xl font-semibold mb-8">Symbolism</h3>
            <p class="text-gray-600 text-xl font-sans leading-relaxed my-8">
                A pearl buried inside a tightly shut shell is practically worthless. Government information is a pearl, 
                meant to be shared with the public in order to maximize its inherent value. The Transparency Seal, depicted by a pearl shining out of an open shell, 
                is a symbol of a policy shift towards openness in access to government information. On the one hand, it hopes to inspire Filipinos in the civil service 
                to be more open to citizen engagement; on the other, to invite the Filipino citizenry to exercise their right to participate in governance.
            </p>
            <p class="text-gray-600 text-xl font-sans leading-relaxed my-8">
                This initiative is envisioned as a step in the right direction towards solidifying the position of the Philippines as the Pearl of the Orient 
                - a shining example of democratic virtue in the region.
            </p>
            <h3 class="text-blue-800 text-2xl font-medium my-8">
                Compliance with Sec. 91 (Transparency Seal) R.A. No. 10633 (General Appropriations Act FY 2014)
            </h3>
            <div class="space-y-3">
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        I. The agency's mandates and functions, names of its officials with their position and designation, and contact information
                    </button>
                    <div class="bg-gray-200 hidden px-10 py-4 rounded">
                        <ul class="list-disc space-y-2 text-black">
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">Mandate and Function</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">Directory of Officials</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">TESDA Board Members</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        II. Annual Report
                    </button>
                    <div class="bg-gray-200 hidden px-5 py-4 rounded">
                        <h3 class="text-blue-800 text-2xl font-medium mb-5">FY 2014-2025</h3>
                        <ul class="list-disc mx-4 space-y-2 text-black">
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">BED 1: Financial Plan</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2025</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2024</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2023</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2022</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2021</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2020</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2019</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2018</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2017</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2016</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2015</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2014</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">BED 2: Physical Plan</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2025</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2024</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2023</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2022</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2021</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2020</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2019</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2018</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2017</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2016</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2015</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2014</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">BED 3: Monthly Cash Program/Monthly Disbursement Program</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2025</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2024</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2023</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2022</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2021</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2020</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2019</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2018</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2017</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2016</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2015</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2014</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Quarterly Financial Report of Operations</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2014</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Quarterly Report of Actual Income</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2014</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Summary Report of Disbursements</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2025</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2024</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2023</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2022</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2021</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2020</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2019</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2018</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2017</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2016</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2015</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2014</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2013</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2012</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2011</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">BFARs - Per COA/DBM Joint Circular No. 2014-1 dated July 2, 2014</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">BAR 1: Quarterly Physical Report of Operations</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>2025: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2024: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2023: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2022: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2021: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2020: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2019: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2018: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2017</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2016</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2015</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2014</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">FAR 1: Statement of Appropriations, Allotments, Obligations, Disbursements, and Balances (SAAODB)</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2025</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2024</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2023</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2022</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2021</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2020</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2019</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>2018: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2017: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2016</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2015</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2014</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">FAR 1-A: Summary of Appropriations, Allotments, Obligations, Disbursements, and Balances by Object of Expenditures</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2025</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2024</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2023</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2022</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2021</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2020</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2019</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>2018: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2017: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2016</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2015</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2014</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">FAR 1-B: List of Allotments and Sub-Allotments</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2025</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2024</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2023</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2022</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2021</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2020</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2019</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li>Current: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                    <li>Continuing Allocation: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                        </a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>2018: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2017: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2016</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2015</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">FAR 2: Statement of Approved Budget, Utilizations, Disbursements and Balances (for Off-Budget Funds)</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>2025: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2024: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2023: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2022: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2021: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2020: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2019: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2018: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2017: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">FAR 2-A: Summary of Approved Budget, Utilizations, Disbursements, and Balances By Object of Expenditures (for Off-Budget Funds)</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>2025: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2024: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2023: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2022: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2021: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2020: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2019: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2018: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2017: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">FAR 3: Aging of Due and Demandable Obligations</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2025</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2024</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2023</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2022</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2021</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2020</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2019</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2018</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2017</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2016</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2015</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2014</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">FAR 4: Monthly Report of Disbursements</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>2025: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jan</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Feb</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Mar</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Apr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">May</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jun</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jul</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Aug</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Sep</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Oct</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Nov</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Dec</span>
                                                </a>
                                            </li>
                                            <li>2024: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jan</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Feb</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Mar</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Apr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">May</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jun</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jul</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Aug</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Sep</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Oct</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Nov</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Dec</span>
                                                </a>
                                            </li>
                                            <li>2023: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jan</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Feb</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Mar</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Apr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">May</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jun</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jul</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Aug</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Sep</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Oct</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Nov</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Dec</span>
                                                </a>
                                            </li>
                                            <li>2022: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jan</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Feb</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Mar</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Apr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">May</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jun</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jul</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Aug</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Sep</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Oct</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Nov</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Dec</span>
                                                </a>
                                            </li>
                                            <li>2021: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jan</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Feb</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Mar</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Apr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">May</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jun</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jul</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Aug</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Sep</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Oct</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Nov</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Dec</span>
                                                </a>
                                            </li>
                                            <li>2020: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jan</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Feb</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Mar</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Apr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">May</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jun</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jul</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Aug</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Sep</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Oct</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Nov</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Dec</span>
                                                </a>
                                            </li>
                                            <li>2019: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jan</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Feb</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Mar</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Apr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">May</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jun</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jul</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Aug</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Sep</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Oct</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Nov</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Dec</span>
                                                </a>
                                            </li>
                                            <li>2018: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jan</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Feb</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Mar</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Apr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">May</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jun</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jul</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Aug</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Sep</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Oct</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Nov</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Dec</span>
                                                </a>
                                            </li>
                                            <li>2017: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jan</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Feb</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Mar</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Apr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">May</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jun</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jul</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Aug</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Sep</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Oct</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Nov</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Dec</span>
                                                </a>
                                            </li>
                                            <li>2016: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jan</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Feb</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Mar</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Apr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">May</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jun</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jul</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Aug</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Sep</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Oct</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Nov</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Dec</span>
                                                </a>
                                            </li>
                                            <li>2015: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jan</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Feb</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Mar</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Apr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">May</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jun</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jul</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Aug</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Sep</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Oct</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Nov</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Dec</span>
                                                </a>
                                            </li>
                                            <li>2014: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jan</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Feb</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Mar</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Apr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">May</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jun</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Jul</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Aug</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Sep</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Oct</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Nov</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Dec</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">FAR 5: Quarterly Report of Revenue and Other Receipts</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>2025: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2024: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2023: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2022: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2021: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2020: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2019: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2018: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2017: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2016: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2015: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                            <li>2014: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">FAR 6: Statement of Approved Budget, Utilizations, Disbursements and Balances for Trust Receipts</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li><span>Not Applicable</span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h3 class="text-blue-800 text-2xl font-medium my-5">FY 2011-2013</h3>
                        <ul class="list-disc mx-4 space-y-2 text-black">
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Budget Execution Documents</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">BED 1: Financial Plan</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2013</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2012</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2011</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">BED 2: Physical Plan</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2013</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2012</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2011</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">BED 3: Monthly Cash Program/Monthly Disbursement Program</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2013</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2012</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2011</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Monthly Disbursement Program</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">BED 4: Estimate of Monthly Income</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2013</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2012</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2011</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">List of Not Yet Due and Demandable Obligations</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2013</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2012</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2011</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2010</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Budget Accountability Reports</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">BAR 1: Quarterly Physical Report of Operations</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2013</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2012</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2011</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">BAR 2: Quarterly Financial Report of Operations</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2013</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2012</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2011</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">BAR 4: Statement of Allotment, Obligations and Balances</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2013</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2012</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2011</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">BAR 5: Summary Report of Disbursements</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2013</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2012</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2011</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">List of Not Yet Due and Demandable Obligations</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2013</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2012</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2011</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2010</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Financial Accountability Reports for 2013 and 2014 (per COA-DBM joint Circular 2013-1)</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">ANNEX A: Statement of Allotments, Obligations, Disbursements and Balances</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2013</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">ANNEX A1: List of Agency Budget Matrix/Special Allotment Release Orders and Sub-Allotment Release Orders</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2013</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2014</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">ANNEX B: Detailed Statement of Current Year’s Obligations, Disbursements and Unpaid Prior Year Obligations</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2013</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">ANNEX C: Summary of Prior Year’s Obligations, Disbursements and Unpaid Prior Year Obligations</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2014</span>
                                                </a>
                                            </li>
                                            <li>2013: 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Summary Report of Disbursements</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        III. Approved Budget and MFO Targets(OSEC)
                    </button>
                    <div class="bg-gray-200 hidden px-10 py-4 rounded">
                        <ul class="list-disc space-y-2 text-black">
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Budget (as reflected in GAA)</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2025</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2024</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2023</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2022</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2021</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2020</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2019</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2018</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2017</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2016</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2015</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2014</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2013</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2012</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Corresponding Targets</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2025</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2024</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2023</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2022</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2021</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2020</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2019</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2018</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2017</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2016</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2015</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2014</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2013</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2012</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        IV. Major Programs and Projects Classified According to Key Result Areas
                    </button>
                    <div class="bg-gray-200 hidden px-10 py-4 rounded">
                        <ul class="list-disc space-y-2 text-black">
                            <li>2025: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2024: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2023: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2022: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2021: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2020: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2019: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2018: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2017: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2016: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2015</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2014</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2013</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2012</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        V. Program/projects beneficiaries as identified in the applicable special provisions
                    </button>
                    <div class="bg-gray-200 hidden px-10 py-4 rounded">
                        <ul class="list-disc space-y-2 text-black">
                            <li>2025: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a>
                            </li>
                            <li>2024: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2023: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2022: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2021: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2020: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2019: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2018: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2017: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2016: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2015</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2014</span>
                                </a>
                            </li>
                            <li>2013: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2012</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        VI. Status of implementation of said program/project evaluation and/or assessment reports
                    </button>
                    <div class="bg-gray-200 hidden px-10 py-4 rounded">
                        <ul class="list-disc space-y-2 text-black">
                            <li>2025: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a>
                            </li>
                            <li>2024: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2023: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2022: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2021: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2020: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2019: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2018: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2017: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>2016: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2015</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2014</span>
                                </a>
                            </li>
                            <li>2013: 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                </a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">2012</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        VII. Annual Procurement Plan, contracts/suppliers/consultants
                    </button>
                    <div class="bg-gray-200 hidden px-10 py-4 rounded">
                        <ul class="list-disc space-y-2 text-black">
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Annual Procurement Plan</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2025</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2025 Annual Procurement Plan (Changes within 1st Semester)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">TESDA CO APP 2025</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2025 APP CSE</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2025 INDICATIVE APP NON-CSE (SSP)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2025 INDICATIVE APP NON-CSE</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2026 Indicative Annual Procurement Plan non-CSE</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2024</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">2024 - APP Changes within 2nd Sem (SSP)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">APP Changes within the 2nd Sem (GAA)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2024 PMR 2nd Semester</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2024 Annual Procurement Plan (Changes within 1st Semester)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2024 Annual Procurement Plan</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2024 PMR 1st Semester</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2023</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2023 Indicative APP</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2023 APP Non-CSE</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2023 APP CSE</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2023 APP 1st Quater (Supplemental)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2023 APP 2nd Quarter (Supplemental)</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2022</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2022 Indicative APP - CSE</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2022 APP CSE</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2022 APP Non-CSE (Final)</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2021</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2021 Indicative APP CSE</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2021 Indicative APP Non-CSE</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2021 APP</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2020</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2020 APP Non-CSE</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">FY 2020 APP-CSE</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2019</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">APP CSE District Offices</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">APP CSE</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2018</span>
                                        </a> | 
                                        <a href="" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2017</span>
                                        </a> | 
                                        <a href="" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2016</span>
                                        </a> | 
                                        <a href="" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2015</span>
                                        </a> | 
                                        <a href="" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2014</span>
                                        </a> | 
                                        <a href="" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2013</span>
                                        </a> | 
                                        <a href="" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2012</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Agency Procurement Compliance and Performance Indicator System (APCPI)</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2021 APCPI</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2020 APCPI</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Contracts awarded and Names of Suppliers/Contractors/Consultants</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2020</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2019</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Procurement Monitoring Report</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2025</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">January - June 2025</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">July - December 2025</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2024</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">January - June 2024</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">July - December 2024</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2023</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">January - June 2023</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">January - June 2023 (Supplemental)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">July - December 2023</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">July - December 2023 (Supplemental)</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2022</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">January - June 2022</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">January - June 2022 (Supplemental)</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">July - December 2022</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2021</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">January - June 2021</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">July - December 2021</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2020</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">January - June 2020</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">July - December 2020</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2019</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">January - June 2019</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">July - December 2019</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2018</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">January - June 2018</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">July - December 2018</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2017</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">January - June 2017</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">July - December 2017</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2016</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">January - June 2016</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">July - December 2016</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2015</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">January - June 2015</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">July - December 2015</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2014</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">January - June 2014</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">July - December 2014</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        VIII. Citizen's Charter
                    </button>
                    <div class="bg-gray-200 hidden px-10 py-4 rounded">
                        <ul class="space-y-2 text-black">
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">Cover Page</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">TESDA Citizens Charter</span>
                                </a>
                            </li>
                            <h3 class="text-blue-800 text-lg font-medium mt-6">Annexes</h3>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">Annex 1 - Customer Satisfaction Management System Forms</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">Annex 2 - LSI Application Form</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">Annex 3 - LSI Employment Information</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">Annex 4 - LSI Interview Sheet</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">Annex 5 - LSI Learners Form</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">Annex 6 - NTTA Forms</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">Annex 7 - TWC Forms</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">Annex 8 - Program Registration Forms</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">Annex 9 - Accreditation ACs Forms</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">Annex 10 - Accreditation Assessors Forms</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">Annex 11 - Competency Assessment Forms</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">Annex 12 - School Sample Forms</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        IX. Quality Management System
                    </button>
                    <div class="bg-gray-200 hidden px-10 py-4 rounded">
                        <ul class="list-disc space-y-2 text-black">
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">ISO 9001 Certificate</span>
                                </a>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Documented Information on ISO 9001: 2015 aligned QMS</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">TESDA Quality Manual</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">Certification on the Conduct of IQA</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">Management Review Summary of Agenda Items</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        TESDA Additional Transparency Compliance
                    </button>
                    <div class="bg-gray-200 hidden px-10 py-4 rounded">
                        <ul class="list-decimal space-y-2 text-green-800">
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">TESDA Efficiency and Integrity Development Plan 2022-2026</span>
                                </a>, 
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">Agency Efficiency and Integrity Development Plan (EIDP) CY 2017-2020</span>
                                </a>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">COA Annual Audit Report</p>
                                <ul class="list-disc hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2025</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2024</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2023</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2022</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2021</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2020</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2019</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2018</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2017</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2016</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2015</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2014</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2013</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2012</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2011</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2010</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span class="hover:text-blue-700">Status of Cases</span>
                            </li>
                            <li>
                                <span class="hover:text-blue-700">Code of Conduct</span>
                            </li>
                            <li>
                                <span class="hover:text-blue-700">Disbursement Acceleration Program (DAP)</span>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">Status of Actions Taken by Management CY 2016 as of June 30, 2017</span>
                                </a>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Aging of Cash Advances</p>
                                <ul class="list-disc hidden mx-4 p-2 space-y-2">
                                    <li>2025: 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                        </a>
                                    </li>
                                    <li>2024: 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                        </a>
                                    </li>
                                    <li>2023: 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                        </a>
                                    </li>
                                    <li>2022: 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                        </a>
                                    </li>
                                    <li>2021: 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                        </a>
                                    </li>
                                    <li>2020: 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                        </a>
                                    </li>
                                    <li>2019: 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2018</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2017</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2016</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2015</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2014</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2013</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2012</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Status of Cash Advances</p>
                                <ul class="list-disc hidden mx-4 p-2 space-y-2">
                                    <li>2025: 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                        </a>
                                    </li>
                                    <li>2024: 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                        </a>
                                    </li>
                                    <li>2023: 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                        </a>
                                    </li>
                                    <li>2022: 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                        </a>
                                    </li>
                                    <li>2021: 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                        </a>
                                    </li>
                                    <li>2020: 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                        </a>
                                    </li>
                                    <li>2019: 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                        </a>
                                    </li>
                                    <li>2018: 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">1st Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2nd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">3rd Qtr</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">4th Qtr</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2017</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2016</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2015</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2014</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2013</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Financial Statements</p>
                                <ul class="list-disc hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <span class="hover:text-blue-700">2024</span>
                                    </li>
                                    <li>
                                        <span class="hover:text-blue-700">2023</span>
                                    </li>
                                    <li>
                                        <span class="hover:text-blue-700">2022</span>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2021</p>
                                        <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Consolidated Trial Balance Trust Fund - 1st Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Consolidated Trial Balance Trust Fund - 2nd Qtr</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Consolidated Trial Balance Trust Fund - 3rd Qtr</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Consolidated All Funds - December 2021</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2020</p>
                                        <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Financial Statements CY 2020 - 1st Quarter</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Financial Statements CY 2020 - 2nd Quarter</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Financial Statements CY 2020 - 3rd Quarter</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Financial Statements CY 2020 - 4th Quarter</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2019</p>
                                        <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Financial Statements CY 2019 - 1st Quarter</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Financial Statements CY 2019 - 2nd Quarter</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Financial Statements CY 2019 - 3rd Quarter</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Financial Statements CY 2019 - 4th Quarter</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">2018</p>
                                        <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Financial Statements CY 2018 - 1st Quarter</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Financial Statements CY 2018 - 2nd Quarter</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Financial Statements CY 2018 - 3rd Quarter</span>
                                                </a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">Financial Statements CY 2018 - 4th Quarter</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="hover:text-blue-700">2016</span>
                                    </li>
                                    <li>
                                        <span class="hover:text-blue-700">2015</span>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Guidelines/Mechanics in Ranking Offices/Delivery Units for the Grant of PBB</p>
                                <ul class="list-disc hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2025</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2024</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2023</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2022</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2021</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2020</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2019</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2018</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2017</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2016</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2015</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2014</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">Agency Scorecard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">MFO Accountability Report Card (MARC-1)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">MFO Accountability Report Card (MARC-2)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="hover:text-blue-700 hover:underline">Priority Program Accountability Report Card (PARC)</span>
                                </a>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Freedom of Information (FOI)</p>
                                <ul class="list-disc hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">TESDA FOI Certificate of Compliance for FY 2020</span>
                                        </a>
                                    </li>
                                    <li>
                                        <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Freedom of Information Reports</p>
                                        <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">TESDA MARC-1</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank" rel="noopener noreferrer">
                                                    <span class="hover:text-blue-700 hover:underline">TESDA MARC-2</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Agency Review and Compliance Committee for SALN</p>
                                <ul class="list-disc hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2025</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2024</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2023</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2022</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2021</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2020</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2019</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2018</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p class="collapsible cursor-pointer hover:text-blue-700 hover:underline">Agency Review and Compliance Procedure for SALN</p>
                                <ul class="list-disc hidden mx-4 p-2 space-y-2">
                                    <li>
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2025</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2024</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2023</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2022</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2021</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2020</span>
                                        </a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer">
                                            <span class="hover:text-blue-700 hover:underline">2019</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout-a>