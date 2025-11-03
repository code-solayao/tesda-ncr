@section('title', 'TVET Statistics | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout-b>
    <section class="relative flex h-screen items-start justify-center overflow-hidden">
        <div class="absolute bg-cover bg-center bg-no-repeat inset-0 blur-xs" style="background-image: url('{{ asset('images/bg-home.jpg') }}');"></div>
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative mx-32 my-14 py-20 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-6xl font-bold uppercase">TVET Statistics</span>
            </div>
        </div>
    </section>
    <section class="bg-white flex -mt-[640px] relative w-full">
        <div class="flex px-60 py-12 overflow-y-auto">
            <div class="text-gray-700 text-xl font-sans leading-relaxed w-full space-y-5">
                <p>
                    Philippine TVET Statistics contains historical data on TVET outputs specifically on enrolment, graduates, assessment, and certification. 
                    It includes education and employment-related statistics which were processed and monitored to serve as inputs to policy formulation and 
                    program development. The data sets on population, labor, and employment, and basic education were sourced from other government agencies.
                </p>
                <p>
                    It is useful resource material for policymakers, administrators, and planning of TVET institutions, training partners in the LGUs, 
                    non-government organizations, researchers, and students in relevant educational fields.
                </p>
                <div>
                    <p class="font-semibold">Various TVET Statistics</p>
                    <div class="my-3">
                        <p class="font-semibold">2024</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Enrolled and Graduates by Region and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Enrolled and Graduates by Province and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Enrolled and Graduates by Sector and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Assessed and Certified by Region and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Assessed and Certified by Province and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Assessed and Certified by Sector and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Number of Registered Programs and TVET Provider by Region</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Number of Registered Programs and TVET Provider by Province</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Number of Registered Programs and TVET Provider by Sector</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Number of TVET Provider by Type of Provider, by Region</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Number of TVET Provider by Type of Provider, by Province</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2024 Number of Enrolled and Graduates (TM) by Province</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="my-3">
                        <p class="font-semibold">2023</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Enrolled and Graduates by Region and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Enrolled and Graduates by Province and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Enrolled and Graduates by Sector and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Assessed and Certified by Region and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Assessed and Certified by Province and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Assessed and Certified by Sector and Sex</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Number of Registered Programs and TVET Provider by Region</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Number of Registered Programs and TVET Provider by Province</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Number of Registered Programs and TVET Provider by Sector</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Number of TVET Provider by Type of Provider, by Region</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Number of TVET Provider by Type of Provider, by Province</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">2023 Number of Enrolled and Graduates (TM) by Province</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <p class="font-semibold">Annual Report</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Annual TVET Statistics 2024</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Annual TVET Statistics 2023</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Annual TVET Statistics 2022</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Annual TVET Statistics 2021</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Annual TVET Statistics 2020</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold">Quarter Report</p>
                    <div class="my-3">
                        <p class="font-semibold">2024</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2024 - 4th Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2024 - 3rd Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2024 - 2nd Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2024 - 1st Quarter</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="my-3">
                        <p class="font-semibold">2023</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2023 - 2nd Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2023 - 1st Quarter</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="my-3">
                        <p class="font-semibold">2022</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2022 - 4th Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2022 - 3rd Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2022 - 2nd Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2022 - 1st Quarter</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="my-3">
                        <p class="font-semibold">2021</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2021 - 4th Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2021 - 3rd Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2021 - 2nd Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2021 - 1st Quarter</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="my-3">
                        <p class="font-semibold">2020</p>
                        <ul class="list-disc list-inside space-y-1">
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2020 - 4th Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2020 - 3rd Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2020 - 2nd Quarter</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener noreferrer">
                                    <span class="text-blue-600 hover:underline">TVET Statistics 2020 - 1st Quarter</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <p class="font-semibold">TVET Fact Sheet</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">2020-2024 TVET Fact Sheet - TESDA TVET Statistics</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">2019-2023 TVET Fact Sheet - TESDA TVET Statistics</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">2018-2022 TVET Fact Sheet - TESDA TVET Statistics</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">2017-2021 TVET Fact Sheet - TESDA TVET Statistics</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">2016-2020 TVET Fact Sheet - TESDA TVET Statistics</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">2015-2019 TVET Fact Sheet - TESDA TVET Statistics</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold">TVET Trends</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Philippine TVET Statistics 2020</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Philippine TVET Statistics 2017-2019</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Philippine TVET Statistics 2015-2019</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Philippine TVET Statistics 2014-2016</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Philippine TVET Statistics 2008-2013</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">Philippine TVET Statistics 2005-2011</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="font-semibold">National Accomplishment on Assessment and Certification</p>
                    <ul class="list-disc list-inside space-y-1">
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline">January 1-31, 2021</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</x-layout-b>