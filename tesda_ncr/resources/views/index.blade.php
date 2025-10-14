@section('title', 'TESDA - Home')

@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

<x-layout>
    <div class="text-6xl font-bold">
        TESDA
    </div>
</x-layout>