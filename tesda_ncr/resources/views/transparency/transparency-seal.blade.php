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
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        II. Annual Report
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
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        III. Approved Budget and MFO Targets(OSEC)
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
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        IV. Major Programs and Projects Classified According to Key Result Areas
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
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        V. Program/projects beneficiaries as identified in the applicable special provisions
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
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        VI. Status of implementation of said program/project evaluation and/or assessment reports
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
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        VII. Annual Procurement Plan, contracts/suppliers/consultants
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
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        VIII. Citizen's Charter
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
                <div class="block">
                    <button type="button" class="collapsible bg-gray-300 border border-gray-800 font-medium px-5 py-2 rounded shadow-md text-start w-full hover:bg-blue-600 hover:text-white">
                        IX. Quality Management System
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