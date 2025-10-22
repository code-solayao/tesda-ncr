@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout-b>
    <section class="bg-cover bg-center bg-no-repeat min-h-screen" style="background-image: url('{{ asset('images/bg-home.jpg') }}')"> 
        <div class="absolute inset-0 bg-black/40 backdrop-blur-xs"></div>
        <div class="relative mx-32 mt-16 py-24 z-10">
            <div class="mx-auto w-fit">
                <span class="text-white text-6xl font-bold uppercase">@yield('contactsTitle', 'Contacts')</span>
            </div>
        </div>
    </section>
    <div class="bg-white flex -mt-[660px] relative w-full">
        <aside class="bg-blue-100 flex flex-col group left-0 shadow-md w-72 z-10">
            <div class="px-6 py-10">
                <h3 class="text-lg font-bold uppercase">Contacts</h3>
                <ul class="flex-1 overflow-y-auto space-y-8 pr-4 py-7">
                    <li>
                        <a href="{{ route('regional-district.offices') }}" 
                        class="text-gray-700 hover:text-white hover:bg-sky-500 flex items-center p-2 rounded-md space-x-3">
                            Regional/District Offices
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('technology.institute') }}" 
                        class="text-gray-700 hover:text-white hover:bg-sky-500 flex items-center p-2 rounded-md space-x-3">
                            Technology Institute
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <main class="flex flex-1 px-16 py-12 overflow-y-auto">
            <div class="w-full h-fit space-y-8">
                {{ $slot }}
            </div>
        </main>
    </div>
</x-layout-b>