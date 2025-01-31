@extends('layout')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
    <script>
        Livewire.on('pageChanged', function() {
            console.log("ddd");

            // bisa dengan menentukan variabel top nya
            // window.scrollTo({
            //     top: 100,
            //     behavior: 'smooth'
            // });

            // saya akalin dengan menambahkan element div tambahan
            document.getElementById('CurrentScroll').scrollIntoView({
                behavior: 'smooth'
            });

        });
    </script>
@endpush

@section('content')
    <div class="container">
        <h1 class="mb-4">hallo, Load data with Livewire</h1>

        <div>
            @livewire('siswa-livewire')
        </div>
    </div>
@endsection
