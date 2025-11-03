@section('title', 'Program Registration and Accreditation | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout-b>
    <section class="relative flex h-screen items-start justify-center overflow-hidden">
        <div class="absolute bg-cover bg-center bg-no-repeat inset-0 blur-xs" style="background-image: url('{{ asset('images/bg-home.jpg') }}');"></div>
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative mx-32 my-14 py-20 z-10">
            <div class="mx-auto text-center w-fit">
                <span class="text-white text-6xl font-bold uppercase">Program Registration and Accreditation</span>
            </div>
        </div>
    </section>
    <section class="bg-white flex -mt-[640px] relative w-full">
        <div class="flex px-60 py-12 overflow-y-auto">
            <div class="w-full space-y-5">
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <p>
                        Program registration in UTPRAS is the mandatory registration of Technical Vocational Education and Training (TVET) programs with TESDA. 
                        It is the system that ensures compliance of Technical Vocational Institutions (TVIs) with the minimum requirements as prescribed under 
                        the promulgated training regulation to include among others curricular programs, faculty and staff qualifications, physical sites and facilities, 
                        tools, equipment, supplies and materials and similar requirements prior to the issuance of the government authority to offer or undertake 
                        technical vocational education programs.
                    </p>
                </div>
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <p>
                        A TVET institution has to comply with the requirements of registration prior to its offering of a program. Upon completion of all the requirements, 
                        an institution is issued a Certificate of Program Registration (CoPR) and the program is officially listed in the 
                        TESDA Compendium of Registered Programs. The program is subjected to a compliance audit and in some instances surveillance upon 
                        receipt of complaint by TESDA.
                    </p>
                </div>
                <div class="text-gray-700 text-xl font-sans leading-relaxed">
                    <ol class="list-decimal list-inside ml-7 space-y-2">
                        <li>
                            <span class="px-2">
                                Frequently Asked Questions on Unified TVET Program Registration and Accreditation System (UTPRAS)
                            </span>
                            <ul class="[list-style-type:circle] list-inside ml-7 space-y-1">
                                <li>
                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                        <span class="text-blue-600 hover:underline">UTPRAS Guidelines</span>
                                    </a>
                                </li>
                                <li>
                                    <span>UTPRAS Downloadable Forms</span>
                                    <table class="border-gray-500 border mb-8 w-full">
                                        <thead class="leading-normal">
                                            <tr class="bg-gray-500 text-white">
                                                <th class="border-gray-500 border-r px-6 py-3 w-1/3">Form No.</th>
                                                <th class="border-gray-500 border-r px-6 py-3">Title</th>
                                            </tr>
                                        </thead>
                                        <tbody class="leading-relaxed">
                                            <tr class="bg-gray-100 text-gray-700">
                                                <td class="border-gray-500 border-r px-6 py-3 space-y-3">
                                                    <p>TESDA-OP-CO-01-F03</p>
                                                    <p>Rev.No.01-05/13/2025</p>
                                                </td>
                                                <td class="px-6 py-3">
                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                        <span class="text-blue-600 hover:underline">LETTER OF INTENT</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100 text-gray-700 border-gray-500 border-t">
                                                <td class="border-gray-500 border-r px-6 py-3 space-y-3">
                                                    <p>TESDA-OP-CO-01-F04</p>
                                                    <p>Rev.No.01-05/13/2025</p>
                                                </td>
                                                <td class="px-6 py-3">
                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                        <span class="text-blue-600 hover:underline">
                                                            PROGRAM REGISTRATION CHECKLIST OF REQUIREMENTS (Institution-based Training Program (WTR/RTP)
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100 text-gray-700 border-gray-500 border-t">
                                                <td class="border-gray-500 border-r px-6 py-3 space-y-3">
                                                    <p>TESDA-OP-CO-01-F11</p>
                                                    <p>Rev.No.01-05/13/2025</p>
                                                </td>
                                                <td class="px-6 py-3">
                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                        <span class="text-blue-600 hover:underline">COMPETENCY-BASED CURRICULUM</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100 text-gray-700 border-gray-500 border-t">
                                                <td class="border-gray-500 border-r px-6 py-3 space-y-3">
                                                    <p>TESDA-OP-CO-01-F13</p>
                                                    <p>Rev.No.01-05/13/2025</p>
                                                </td>
                                                <td class="px-6 py-3">
                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                        <span class="text-blue-600 hover:underline">LIST OF EQUIPMENT</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100 text-gray-700 border-gray-500 border-t">
                                                <td class="border-gray-500 border-r px-6 py-3 space-y-3">
                                                    <p>TESDA-OP-CO-01-F14</p>
                                                    <p>Rev.No.01-05/13/2025</p>
                                                </td>
                                                <td class="px-6 py-3">
                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                        <span class="text-blue-600 hover:underline">LIST OF TOOLS</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100 text-gray-700 border-gray-500 border-t">
                                                <td class="border-gray-500 border-r px-6 py-3 space-y-3">
                                                    <p>TESDA-OP-CO-01-F15</p>
                                                    <p>Rev.No.01-05/13/2025</p>
                                                </td>
                                                <td class="px-6 py-3">
                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                        <span class="text-blue-600 hover:underline">LIST OF CONSUMABLES/MATERIALS</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100 text-gray-700 border-gray-500 border-t">
                                                <td class="border-gray-500 border-r px-6 py-3 space-y-3">
                                                    <p>TESDA-OP-CO-01-F16</p>
                                                    <p>Rev.No.01-05/13/2025</p>
                                                </td>
                                                <td class="px-6 py-3">
                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                        <span class="text-blue-600 hover:underline">LIST OF INSTRUCTIONAL MATERIALS</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100 text-gray-700 border-gray-500 border-t">
                                                <td class="border-gray-500 border-r px-6 py-3 space-y-3">
                                                    <p>TESDA-OP-CO-01-F17</p>
                                                    <p>Rev.No.01-05/13/2025</p>
                                                </td>
                                                <td class="px-6 py-3">
                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                        <span class="text-blue-600 hover:underline">LIST OF PHYSICAL FACILITIES</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100 text-gray-700 border-gray-500 border-t">
                                                <td class="border-gray-500 border-r px-6 py-3 space-y-3">
                                                    <p>TESDA-OP-CO-01-F18</p>
                                                    <p>Rev.No.01-05/13/2025</p>
                                                </td>
                                                <td class="px-6 py-3">
                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                        <span class="text-blue-600 hover:underline">LIST OF OFF-CAMPUS FACILITIES</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100 text-gray-700 border-gray-500 border-t">
                                                <td class="border-gray-500 border-r px-6 py-3 space-y-3">
                                                    <p>TESDA-OP-CO-01-F19</p>
                                                    <p>Rev.No.01-05/13/2025</p>
                                                </td>
                                                <td class="px-6 py-3">
                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                        <span class="text-blue-600 hover:underline">LIST OF OFFICIALS</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100 text-gray-700 border-gray-500 border-t">
                                                <td class="border-gray-500 border-r px-6 py-3 space-y-3">
                                                    <p>TESDA-OP-CO-01-F20</p>
                                                    <p>Rev.No.01-05/13/2025</p>
                                                </td>
                                                <td class="px-6 py-3">
                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                        <span class="text-blue-600 hover:underline">LIST OF QUALIFIED TRAINERS</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100 text-gray-700 border-gray-500 border-t">
                                                <td class="border-gray-500 border-r px-6 py-3 space-y-3">
                                                    <p>TESDA-OP-CO-01-F21</p>
                                                    <p>Rev.No.01-05/13/2025</p>
                                                </td>
                                                <td class="px-6 py-3">
                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                        <span class="text-blue-600 hover:underline">LIST OF NON-TEACHING STAFF</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100 text-gray-700 border-gray-500 border-t">
                                                <td class="border-gray-500 border-r px-6 py-3 space-y-3">
                                                    <p>TESDA-OP-CO-01-F24</p>
                                                    <p>Rev.No.00-05/13/2025</p>
                                                </td>
                                                <td class="px-6 py-3">
                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                        <span class="text-blue-600 hover:underline">PROFILE SHEET</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100 text-gray-700 border-gray-500 border-t">
                                                <td class="border-gray-500 border-r px-6 py-3 space-y-3">
                                                    <p>TESDA-OP-CO-01-F25</p>
                                                    <p>Rev.No.00-05/13/2025</p>
                                                </td>
                                                <td class="px-6 py-3">
                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                        <span class="text-blue-600 hover:underline">
                                                            PROGRAM RECOGNITION CHECKLIST - Micro-Credential (WTR/RTP)
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100 text-gray-700 border-gray-500 border-t">
                                                <td class="border-gray-500 border-r px-6 py-3 space-y-3">
                                                    <p>TESDA-OP-CO-01-F26</p>
                                                    <p>Rev.No.00-05/13/2025</p>
                                                </td>
                                                <td class="px-6 py-3">
                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                        <span class="text-blue-600 hover:underline">
                                                            PROGRAM RECOGNITION CHECKLIST - Mobile Training Program (MTP)
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100 text-gray-700 border-gray-500 border-t">
                                                <td class="border-gray-500 border-r px-6 py-3 space-y-3">
                                                    <p>TESDA-OP-CO-01-F27</p>
                                                    <p>Rev.No.00-05/13/2025</p>
                                                </td>
                                                <td class="px-6 py-3">
                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                        <span class="text-blue-600 hover:underline">TRAINING PLAN (Micro-credential)</span>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="bg-gray-100 text-gray-700 border-gray-500 border-t">
                                                <td class="border-gray-500 border-r px-6 py-3 space-y-3">
                                                    <p>TESDA-OP-CO-01-F30</p>
                                                    <p>Rev.No.00-05/13/2025</p>
                                                </td>
                                                <td class="px-6 py-3">
                                                    <a href="#" target="_blank" rel="noopener noreferrer">
                                                        <span class="text-blue-600 hover:underline">
                                                            SHOP-LAYOUT (demonstrating Competency-Based TVET (CBTVET) delivery)
                                                        </span>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <span class="text-blue-600 hover:underline px-2">List of Technical Vocational Institutions (TVIs) with Registered Programs</span>
                            </a>
                        </li>
                        <li><span class="px-2">How to Apply for TVET Program Registration (UPTRAS Registration)</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
</x-layout-b>