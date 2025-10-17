@section('title', 'Transparency Seal | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js', 
        'resources/js/transparency/transparency-seal.js'])
@endsection

<x-layout>
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
                        <ul class="list-disc space-y-2">
                            <li class="text-black hover:text-blue-700">
                                <a href="#" target="_blank" rel="noopener noreferrer">Mandate and Function</a>
                            </li>
                            <li class="text-black hover:text-blue-700">
                                <a href="#" target="_blank" rel="noopener noreferrer">Directory of Officials</a>
                            </li>
                            <li class="text-black hover:text-blue-700">
                                <a href="#" target="_blank" rel="noopener noreferrer">TESDA Board Members</a>
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
                        <ul class="list-disc mx-4 space-y-2">
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <p class="collapsible">BED 1: Financial Plan</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2025</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2024</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2023</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2022</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2021</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2020</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2019</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2018</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2017</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2016</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2015</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2014</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <p class="collapsible">BED 2: Physical Plan</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2024</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2023</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2022</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2021</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2020</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2019</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2019-revised</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2018</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2017</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2016</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2015</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2014</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <p class="collapsible">BED 3: Monthly Cash Program/Monthly Disbursement Program</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2025</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2024</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2023</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2022</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2021</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2020</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2019</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2018</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2017</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2016</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2015</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2014</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <p class="collapsible">Quarterly Financial Report of Operations</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2014 - 1st Qtr</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2014 - 2nd Qtr</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2014 - 3rd Qtr</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <p class="collapsible">Quarterly Report of Actual Income</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2014 - 1st Qtr</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2014 - 2nd Qtr</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2014 - 3rd Qtr</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2014 - 4th Qtr</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <p class="collapsible">Summary Report of Disbursements</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">January 2014</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">February 2014</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">March 2014</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">April 2014</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">May 2014</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">June 2014</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">July 2014</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">August 2014</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">September 2014</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">October 2014</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">November 2014</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">December 2014</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <p class="collapsible">BFARs - Per COA/DBM Joint Circular No. 2014-1 dated July 2, 2014</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">BAR 1: Quarterly Physical Report of Operations</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black">2025: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a>
                                            </li>
                                            <li class="text-black">2024: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2023: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2022: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2021: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2020: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2019: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2018: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2017: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2016: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2015: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2014: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> |  
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">FAR 1: Statement of Appropriations, Allotments, Obligations, Disbursements, and Balances (SAAODB)</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2025</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations as the Quarter Ending March 31, 2025
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Current Year Appropriations as the Quarter Ending June 30, 2025
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2024</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations as the Quarter Ending March 31, 2024
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Current Year Appropriations as the Quarter Ending June 30, 2024
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Current Year Appropriations as the Quarter Ending September 30, 2024
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2023</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations as the Quarter Ending March 31, 2023
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Current Year Appropriations - Consolidated
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Continuing Appropriations - Consolidated
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2022</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Consolidated Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Consolidated Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2021</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Quarter for CY 2021 (Current & Continuing Appropriations)
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Quarter for CY 2021 Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Quarter for CY 2021 Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Quarter Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Quarter Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Quarter Consolidated
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Quarter Consolidated Continuation
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2020</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Current Year Appropriations (ALL)
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Current Year Appropriations (CO)
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Current Year Appropriations (Consolidated)
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Current Year Appropriation (All)
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2019</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Current Year Appropriations (All)
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2018</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Current Year Appropriations (All)
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Current Year Appropriations (All)
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Current Year Appropriations (All)
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations (Central Office)
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations (All)
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2017</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2016</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black">2015 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">as of December 31, 2015</a>
                                            </li>
                                            <li class="text-black">2014 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">as of December 31, 2014</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">FAR 1-A: Summary of Appropriations, Allotments, Obligations, Disbursements, and Balances by Object of Expenditures</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2025</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Continuing Year Appropriations
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2024</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2023</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Current Year Appropriations - Consolidated
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Continuing Appropriations - Consolidated
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2022</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2021</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Quarter for CY 2021 (Current & Continuing Appropriations)
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Quarter for CY 2021 Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Quarter for CY 2021 Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Quarter Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Quarter Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Quarter Consolidated
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Quarter Continuation
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2020</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Continuing Appropriations (CO)
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Continuing Appropriations (Consolidated)
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Current Year Appropriation (All)
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2019</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Current Year Appropriations (All)
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2018</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Current Year Appropriations (All)
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Current Year Appropriations (All)
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Current Year Appropriations (All)
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations (Central Office)
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations (All)
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2017</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            1st Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2016</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Continuing Appropriations as of December 31, 2016
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Current Year Appropriations as of December 31, 2016
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Current Year Appropriations as of December 31, 2016 (1)
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">FAR 1-B: List of Allotments and Sub-Allotments</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2025</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Current Year Appropriation as of the Quarter Ending March 31, 2025
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Continuing Appropriation as of the Quarter Ending March 31, 2025
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Current Year Appropriations as the Quarter Ending June 30, 2025
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2024</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Current Year Appropriation as of the Quarter Ending March 31, 2024
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Continuing Appropriation as of the Quarter Ending March 31, 2024
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Current Year Appropriations as the Quarter Ending June 30, 2024
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Current Year Appropriations as the Quarter Ending September 30, 2024
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2023</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Current Year Appropriations as the Quarter Ending March 31, 2023
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Continuing Appropriation as of the Quarter Ending June 31, 2023
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Current Year Appropriations as of the Quarter Ending September 30, 2023
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Continuing Appropriations as of the Quarter Ending September 30, 2023
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Current Year Appropriations as of the Quarter Ending December 31, 2023
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Continuing Appropriations as of the Quarter Ending December 31, 2023
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2022</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Current Year Appropriation as of the Quarter Ending March 31, 2022
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Current Year Appropriations as of the Quarter Ending March 31, 2022
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Continuing Appropriation as of the Quarter Ending March 31, 2022
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Current Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            2nd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            3rd Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Current Year Appropriations
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            4th Qtr Continuing Appropriations
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2021</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Consolidated as of the Quarter Ending December 31, 2021
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Consolidated Continuing Appropriations as of the Quarter Ending December 31, 2021
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Current Year Appropriations as of the Quarter Ending September 30, 2021
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Continuing Appropriations as of the Quarter  Ending  September 30, 2021
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Current Year Appropriations as of the Quarter Ending June 30, 2021
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Continuing Appropriations as of the Quarter Ending June 30, 2021
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Current Year Appropriations as of the Quarter Ending March 31, 2021
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Continuing Appropriations as of the Quarter Ending March 31, 2021
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2020</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            as of the Quarter Ending June 30, 2020
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Current Year Appropriations as of the Quarter Ending September 30, 2020
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2019</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Current Year Appropriations as of the Quarter Ending March 31, 2019
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Continuing Appropriations as of the Quarter Ending March 31, 2019
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2018</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            as of the Quarter Ending December 31, 2018
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            as of the Quarter Ending September 30, 2018
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2017</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Continuing Appropriations as of the Quarter Ending September 30, 2017
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Current Appropriations as of the Quarter Ending September 30, 2017
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Continuing Appropriations as of the Quarter Ending June 30, 2017
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Current Year Appropriations as of the Quarter Ending June 30, 2017
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Continuing Appropriations as of the Quarter Ending March 31, 2017
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Current Year Appropriations as of the Quarter Ending March 31, 2017
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2016</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Continuing Appropriations as of December 31, 2016
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Current Year Appropriations as of December 31, 2016
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            Current Year Appropriations as of December 31, 2016 (1)
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2015</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            as of March 31, 2014
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2014</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            as of December 31, 2014
                                                        </a>
                                                    </li>
                                                    <li class="text-black">
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                            as of September 30, 2014
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">FAR 2: Statement of Approved Budget, Utilizations, Disbursements and Balances (for Off-Budget Funds)</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black">2025: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a>
                                            </li>
                                            <li class="text-black">2024: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2023: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2022: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2021: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">
                                                    Consolidated as of December 31, 2021
                                                </a>
                                            </li>
                                            <li class="text-black">2020: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2019: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2018: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a>
                                            </li>
                                            <li class="text-black">2017: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2016: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">as of September 30, 2016</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">as of June 30, 2016</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">as of March 31, 2016</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">Consolidated FAR 2</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">Internally Generated Funds</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">2025: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a>
                                                    </li>
                                                    <li class="text-black">2024: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">Business Related Funds</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">2025: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a>
                                                    </li>
                                                    <li class="text-black">2024: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">FAR 2-A: Summary of Approved Budget, Utilizations, Disbursements, and Balances By Object of Expenditures (for Off-Budget Funds)</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black">2025: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a>
                                            </li>
                                            <li class="text-black">2024: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr - Cocolevy</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr Consolidated FAR 2A</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr Consolidated FAR 2A - Cocolevy</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr FAR 2A - Cocolevy</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr Consolidated FAR 2A</a>
                                            </li>
                                            <li class="text-black">2023: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2022: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2021: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2020: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2019: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2018: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a>
                                            </li>
                                            <li class="text-black">2017: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2016: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">as of September 30, 2016</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">as of June 30, 2016</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">as of March 31, 2016</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">Consolidated FAR 2-A</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">Internally Generated Funds</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">2025: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a>
                                                    </li>
                                                    <li class="text-black">2024: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">Business Related Funds</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black">2025: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a>
                                                    </li>
                                                    <li class="text-black">2024: 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">FAR 3: Aging of Due and Demandable Obligations</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2024 CO</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2024 Consolidated</a>
                                            </li>
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2023</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">Consolidated</a>
                                            </li>
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2022</a>
                                            </li>
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2021</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2021 Consolidated</a>
                                            </li>
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2020</a>
                                            </li>
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2019</a>
                                            </li>
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2018</a>
                                            </li>
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2017</a>
                                            </li>
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2016</a>
                                            </li>
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2015</a>
                                            </li>
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2014</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">FAR 4: Monthly Report of Disbursements</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2025</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2024</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2023</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2022</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2021 (Consolidated)</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2021</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2020</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2019</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2018</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2017</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2016</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2015</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2014</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">Consolidated FAR 4</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2025</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2024</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">FAR 4: Trust Receipt (PCA) Coco-Levy Fund</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2025</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2024</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2023</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">FAR 5: Quarterly Report of Revenue and Other Receipts</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black">2025: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">Consolidated</a>
                                            </li>
                                            <li class="text-black">2024: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2023: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2022: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2021: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr Consolidated</a>
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a> |  | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr Consolidated</a>
                                            </li>
                                            <li class="text-black">2020: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2019: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2018: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a>
                                            </li>
                                            <li class="text-black">2017: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2016 as of</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2015 as of</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black">2014 as of 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">December</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">Consolidated FAR 5</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black">2024: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">FAR 6: PCA Coco-Levy Fund</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black">2025: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a>
                                            </li>
                                            <li class="text-black">2024: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2023: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <h3 class="text-blue-800 text-2xl font-medium my-5">FY 2014-2025</h3>
                        <ul class="list-disc mx-4 space-y-2">
                            <li class="text-black hover:text-blue-700">
                                <p class="collapsible cursor-pointer">Budget Execution Documents</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible cursor-pointer">BED 1: Financial Plan</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2013</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2012</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2011</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible cursor-pointer">BED 2: Physical Plan</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2013</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2012</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2011</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible cursor-pointer">BED 3: Monthly Cash Program/Monthly Disbursement Program</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2013</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2012</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2011</a>
                                            </li>
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">
                                                    Monthly Disbursement Program
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible cursor-pointer">BED 4: Estimate of Monthly Income</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2013</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2012</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2011</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible cursor-pointer">List of Not Yet Due and Demandable Obligations</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2013</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2012</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2011</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2010</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="text-black hover:text-blue-700">
                                <p class="collapsible cursor-pointer">Budget Accountability Reports</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible cursor-pointer">BAR 1: Quarterly Physical Report of Operations</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black">2013: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2012: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2011: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">4th Qtr</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible cursor-pointer">BAR 2: Quarterly Financial Report of Operations</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black">2013: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2012: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2011: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">4th Qtr</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible cursor-pointer">BAR 3: Quarterly Report of Actual Income</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black">2013: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">4th Qtr</a>
                                            </li>
                                            <li class="text-black">2012 as of 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">June</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">December</a>
                                            </li>
                                            <li class="text-black">2011 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">as of December</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible cursor-pointer">BAR 4: Statement of Allotment, Obligations and Balances</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2013</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2012</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible">2011</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible cursor-pointer">BAR 5: Summary Report of Disbursements</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible cursor-pointer">2013</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2012</a>
                                            </li>
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2011</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="text-black hover:text-blue-700">
                                <p class="collapsible cursor-pointer">Financial Accountability Reports for 2013 and 2014 (per COA-DBM joint Circular 2013-1)</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible cursor-pointer">ANNEX A: Statement of Allotments, Obligations, Disbursements and Balances</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2013</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible cursor-pointer">ANNEX A1: List of Agency Budget Matrix/Special Allotment Release Orders and Sub-Allotment Release Orders</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black">2013: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">4th Qtr</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible cursor-pointer">ANNEX B: Detailed Statement of Current Year’s Obligations, Disbursements and Unpaid Prior Year Obligations</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2013</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible cursor-pointer">ANNEX C: Summary of Prior Year’s Obligations, Disbursements and Unpaid Prior Year Obligations</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2014</a>
                                            </li>
                                            <li class="text-black">2013: 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">1st Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">2nd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">3rd Qtr</a> | 
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700 cursor-pointer">4th Qtr</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible cursor-pointer">BAR 5: Summary Report of Disbursements</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <p class="collapsible cursor-pointer">2013</p>
                                                <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">January</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">February</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">March</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">April</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">May</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">June</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">July</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">August</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">September</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">October</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">November</a>
                                                    </li>
                                                    <li class="text-black hover:text-blue-700">
                                                        <a href="#" target="_blank" rel="noopener noreferrer">December</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2012</a>
                                            </li>
                                            <li class="text-black">
                                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2011</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="text-black hover:text-blue-700">
                                <p class="collapsible cursor-pointer">Summary Report of Disbursements</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li class="text-black hover:text-blue-700 cursor-pointer">
                                        <a href="#" target="_blank" rel="noopener noreferrer">1st Quarter</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700 cursor-pointer">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2nd Quarter</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700 cursor-pointer">
                                        <a href="#" target="_blank" rel="noopener noreferrer">3rd Quarter</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700 cursor-pointer">
                                        <a href="#" target="_blank" rel="noopener noreferrer">4th Quarter</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700 cursor-pointer">
                                        <a href="#" target="_blank" rel="noopener noreferrer">ROPOTI Summary</a>
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
                        <ul class="list-disc space-y-2">
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <p class="collapsible">Approved budget (GAA, including regional offices, as submitted to and sourced from DBM)</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2025</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2024</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2023</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2022</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2021</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2020</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2019</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2018</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2017</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2016</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2015</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2014</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2013</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2012</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <p class="collapsible">Corresponding targets</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2025</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2024</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2023</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2022</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2021</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2020</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2019</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2018</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2017</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2016</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2015</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2014</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2013</a>
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
                        <ul class="list-disc space-y-2">
                            <li class="text-black">2025: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a>
                            </li>
                            <li class="text-black">2024: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2023: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2022: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2021: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2020: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2019: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2018: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2017: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2016: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2015</a>
                            </li>
                            <li class="text-black">
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2014</a>
                            </li>
                            <li class="text-black">2013: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2012</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        V. Program/projects beneficiaries as identified in the applicable special provisions
                    </button>
                    <div class="bg-gray-200 hidden px-10 py-4 rounded">
                        <ul class="list-disc space-y-2">
                            <li class="text-black">2025: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a>
                            </li>
                            <li class="text-black">2024: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2023: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2022: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2021: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2020: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2019: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2018: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2017: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2016: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2015</a>
                            </li>
                            <li class="text-black">
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2014</a>
                            </li>
                            <li class="text-black">2013: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2012</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        VI. Status of implementation of said program/project evaluation and/or assessment reports
                    </button>
                    <div class="bg-gray-200 hidden px-10 py-4 rounded">
                        <ul class="list-disc space-y-2">
                            <li class="text-black">2025: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a>
                            </li>
                            <li class="text-black">2024: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2023: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2022: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2021: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2020: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2019: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2018: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2017: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">2016: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2015</a>
                            </li>
                            <li class="text-black">
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2014</a>
                            </li>
                            <li class="text-black">2013: 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">1st Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2nd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">3rd Qtr</a> | 
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">4th Qtr</a>
                            </li>
                            <li class="text-black">
                                <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">2012</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        VII. Annual Procurement Plan, contracts/suppliers/consultants
                    </button>
                    <div class="bg-gray-200 hidden px-10 py-4 rounded">
                        <ul class="list-disc space-y-2">
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <p class="collapsible">Annual Procurement Plan</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">2025</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2025 Annual Procurement Plan (Changes within 1st Semester)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">TESDA CO APP 2025</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2025 APP CSE</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2025 INDICATIVE APP NON-CSE (SSP)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2025 INDICATIVE APP NON-CSE</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2026 Indicative Annual Procurement Plan non-CSE</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">2024</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">2024 - APP Changes within 2nd Sem (SSP)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">APP Changes within the 2nd Sem (GAA)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2024 PMR 2nd Semester</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2024 Annual Procurement Plan (Changes within 1st Semester)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2024 Annual Procurement Plan</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2024 PMR 1st Semester</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">2023</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">Annual Procurement Plan FY 2023 (Changes within the 2nd Semester)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">Indicative Annual Procurement Plan (Non-CSE) for FY 2024</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">Annual Procurement Plan FY 2023 (Changes within the 1st semester)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">TESDA Central Office PMR 1st Sem 2023</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2023 Indicative APP Non-CSE</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2023 Annual Procurement Plan</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">Annual Procurement Plan FY 2023 - TWC</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">Annual Procurement Plan Non CSE 2023 - TWC</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">2022</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">Supplemental APP for Non-CSE for CY 2022 (2nd Semester)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">Supplemental APP for Non-CSE for CY 2022 (1st Semester)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2022 Annual Procurement Non-CSE 2022</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2022 Indicative APP (Support Service)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2022 APP-CSE TESDA CO</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2022 APP for NON-CSE Indicative TESDA CO</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">2021</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">Supplemental APP for Non-CSE for CY 2021 (2nd Semester)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">Tesda Central Office PMR 2nd Sem 2021</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">Tesda Central Office PMR 1st Sem 2021</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">Supplemental APP for Non-CSE for CY 2021 (1st Semester)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2021 APP Non-CSE (Revised based on GAA 2021)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2021 Revised Indicative APP Non-CSE (Support Services)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2021 APP-CSE-Regular Fund</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2021 APP-CSE-SSP Fund</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2021 Indicative APP Non-CSE - TESDA CO</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">2020</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2020 2nd Sem Supplemental APP TESDA CO</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">FY 2020 1st Sem Supplemental APP TESDA CO</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">Final APP Non-CSE for FY 2020 (per approved GAA)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">Supplemental APP Non CSE CY 2020 (EPA-Support Services)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">TESDA APP CSE for CY 2020</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">TESDA APP Non-CSE for CY 2020</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">2019</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">Supplemental APP (Non-CSE) for CY 2019 - 2nd Semester</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">TESDA APP Non-CSE 2019 (Reenacted Budget)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">Supplemental APP- Non-CSE (1st Sem 2019)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">APP 2019 - Non-CSE (Revised Based on RA 11260 or GAA 2019)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">APP 2019 - Non-CSE (GPPB format)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">APP-CSE 2019 - TESDA Central Office</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">APP-CSE 2019 - TESDA Central Office (Fund SSP)</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">2018</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">Supplemental APP - Non-CSE (1st Sem 2018), Supplemental APP Non-CSE 2018 2nd Sem</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">TESDA Central Office - Supplemental APP - CSE 2018 (1st Sem), Supplemental APP-CSE 2018 2nd Sem</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">APP 2018- TESDA Central Office</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">APP 2018 - TESDA CO (GPPB format)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">APP for MITHI IT Projects</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">2017</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">APP 2017 - TESDA Central Office</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">Supplemental APP January to June FY 2017</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">Supplemental APP July - Dec FY 2017</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <p class="collapsible">2016</p>
                                        <ul class="[list-style-type:square] hidden mx-4 p-2 space-y-2">
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">2016 APP - TESDA CO (GPPB Format)</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">2016 Supplemental APP</a>
                                            </li>
                                            <li class="text-black hover:text-blue-700">
                                                <a href="#" target="_blank" rel="noopener noreferrer">2016 APP Summary</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2015</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2014</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2013</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2012</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <p class="collapsible">Agency Procurement Compliance and Performance Indicator System (APCPI)</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2021 APCPI Results</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <p class="collapsible">Contracts awarded and Names of Suppliers/Contractors/Consultants</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">2012 to 2019</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <p class="collapsible">Procurement Monitoring Report</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">January - June 2025</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">July - December 2023</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">January - June 2023</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">July - December 2022</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">January - June 2022</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">July - December 2020</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">January - June 2020</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">July - December 2019</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">January - June 2019</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">July - December 2018</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">January - June 2018</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">July - December 2017</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">January - June 2017</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">July - December 2016</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">January - June 2016</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">July - December 2015</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <p class="collapsible">Disposal of Unservisable Properties</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">ITB 2023-09-0001</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">ITB 2022-10-0001</a>
                                    </li>
                                    <li class="text-black">
                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">ITB 2020-10-0001 New</a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">Bid Bulletin No.1</a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">Bid Bulletin No.2</a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">Instruction to Bidders New</a>
                                    </li>
                                    <li class="text-black">
                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">ITB 2020-10-0001</a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">Instruction to Bidders</a>
                                    </li>
                                    <li class="text-black">
                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">ITB 2018-03-0001</a> | 
                                        <a href="#" target="_blank" rel="noopener noreferrer" class="text-black hover:text-blue-700">Instruction to Bidders</a>
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
                        <ul class="space-y-2">
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <a href="#" target="_blank" rel="noopener noreferrer">Cover Page</a>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <a href="#" target="_blank" rel="noopener noreferrer">TESDA Citizens Charter</a>
                            </li>
                            <h3 class="text-blue-800 text-lg font-medium mt-6">Annexes</h3>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <a href="#" target="_blank" rel="noopener noreferrer">Annex 1 - Customer Satisfaction Management System Forms</a>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <a href="#" target="_blank" rel="noopener noreferrer">Annex 2 - LSI Application Form</a>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <a href="#" target="_blank" rel="noopener noreferrer">Annex 3 - LSI Employment Information</a>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <a href="#" target="_blank" rel="noopener noreferrer">Annex 4 - LSI Interview Sheet</a>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <a href="#" target="_blank" rel="noopener noreferrer">Annex 5 - LSI Learners Form</a>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <a href="#" target="_blank" rel="noopener noreferrer">Annex 6 - NTTA Forms</a>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <a href="#" target="_blank" rel="noopener noreferrer">Annex 7 - TWC Forms</a>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <a href="#" target="_blank" rel="noopener noreferrer">Annex 8 - Program Registration Forms</a>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <a href="#" target="_blank" rel="noopener noreferrer">Annex 9 - Accreditation ACs Forms</a>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <a href="#" target="_blank" rel="noopener noreferrer">Annex 10 - Accreditation Assessors Forms</a>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <a href="#" target="_blank" rel="noopener noreferrer">Annex 11 - Competency Assessment Forms</a>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <a href="#" target="_blank" rel="noopener noreferrer">Annex 12 - School Sample Forms</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        IX. Quality Management System
                    </button>
                    <div class="bg-gray-200 hidden px-10 py-4 rounded">
                        <ul class="list-disc space-y-2">
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <a href="#" target="_blank" rel="noopener noreferrer">ISO 9001 Certificate</a>
                            </li>
                            <li class="text-black hover:text-blue-700 cursor-pointer">
                                <p class="collapsible">Documented Information on ISO 9001: 2015 aligned QMS</p>
                                <ul class="[list-style-type:circle] hidden mx-4 p-2 space-y-2">
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">TESDA Quality Manual</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">Certification on the Conduct of IQA</a>
                                    </li>
                                    <li class="text-black hover:text-blue-700">
                                        <a href="#" target="_blank" rel="noopener noreferrer">Management Review Summary of Agenda Items</a>
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
                        <h3 class="text-blue-800 text-2xl font-medium mb-5">FY 2014-2025</h3>
                        <ul class="space-y-2">
                            <li class="text-black hover:text-blue-700">
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 inline-block mb-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                    </svg> Mandate and Function
                                </a>
                            </li>
                            <li class="text-black hover:text-blue-700">
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 inline-block mb-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                    </svg> Directory of Officials
                                </a>
                            </li>
                            <li class="text-black hover:text-blue-700">
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 inline-block mb-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                    </svg> TESDA Board Members
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-footer">
    </section>
</x-layout>