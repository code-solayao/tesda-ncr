@section('title', 'Technology Institute | TESDA-NCR')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout-b>
    <section class="bg-cover bg-center bg-no-repeat min-h-screen" style="background-image: url('{{ asset('images/bg-home.jpg') }}')"> 
        <div class="absolute inset-0 bg-black/40 backdrop-blur-xs"></div>
        <div class="relative mx-32 mt-16 py-24 z-10">
            <div class="mx-auto w-fit">
                <span class="text-white text-6xl font-bold uppercase">Technology Institute</span>
            </div>
        </div>
    </section>
    <div class="bg-white flex -mt-[660px] relative w-full">
        <aside class="bg-blue-100 flex flex-col group left-0 shadow-md w-64 z-10">
            <div class="px-6 py-10">
                <h3 class="text-lg font-bold uppercase">Contacts</h3>
                <ul class="space-y-8 py-7">
                    <li>Regional/District Offices</li>
                    <li>Technology Institute</li>
                </ul>
            </div>
        </aside>
        <main class="flex flex-1 px-16 py-12 overflow-y-auto">
            <div class="w-full h-fit space-y-8">
                <h2 class="text-3xl font-bold">
                    <span class="border-b-4 border-black">National Capital Region (NCR) - Regional Office</span>
                </h2>
                <div class="text-black text-xl border-l-4 border-blue-700 px-4 py-2 space-y-0.5">
                    <p class="text-blue-700 font-semibold">{{ $contacts[0]->affiliation }}</p>
                    <p class="font-medium uppercase">{{ $contacts[0]->name }}</p>
                    <p class="italic">{{ $contacts[0]->position }}</p>
                    <div class="address">
                        <span class="font-bold">Address: </span>
                        <span>{{ $contacts[0]->address }}</span>
                    </div>
                    <div class="telephone-number">
                        <span class="font-bold">Tel. No: </span>
                        <span>{{ $contacts[0]->telephone_number }}</span>
                    </div>
                    <div class="fax-number">
                        <span class="font-bold">Fax. No: </span>
                        <span>{{ $contacts[0]->fax_number }}</span>
                    </div>
                    <div class="email">
                        <span class="font-bold">Email: </span>
                        <span class="text-blue-700 underline">{{ $contacts[0]->email }}</span>
                    </div>
                </div>
                <h2 class="text-3xl font-bold">
                    <span class="border-b-4 border-black">National Capital Region (NCR) - District Office</span>
                </h2>
                @foreach ($contacts as $contact)
                    @continue($contact->id == 1)
                    @break($contact->id == 8)

                    <div class="text-black text-xl border-l-4 border-blue-700 px-4 py-2 space-y-0.5">
                        <p class="text-blue-700 font-semibold">{{ $contact->affiliation }}</p>
                        <p class="font-medium uppercase">{{ $contact->name }}</p>
                        <p class="italic">{{ $contact->position }}</p>
                        <div class="address">
                            <span class="font-bold">Address: </span>
                            <span>{{ $contact->address }}</span>
                        </div>
                        <div class="telephone-number">
                            <span class="font-bold">Tel. No: </span>
                            <span>{{ $contact->telephone_number }}</span>
                        </div>
                        <div class="fax-number">
                            <span class="font-bold">Fax. No: </span>
                            <span class="hidden">{{ $contact->fax_number }}</span>
                        </div>
                        <div class="email">
                            <span class="font-bold">Email: </span>
                            <span class="text-blue-700 underline">{{ $contact->email }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </div>
</x-layout-b>