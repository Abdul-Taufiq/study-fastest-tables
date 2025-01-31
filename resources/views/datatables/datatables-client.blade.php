@extends('layout');
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.1/css/dataTables.bootstrap5.min.css" />
@endsection

@section('content')
    <div class="container">
        <h1 class="mb-4">WHO IS FAST!</h1>
        <h4>Livewire vs Fillament vs Datatables</h4>
    </div>

    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container">
        <h1 class="mb-4">hallo, Load data with Datatables Client</h1>
        <div class="mb-3">
            <table id="example" class="table table-bordered table-striped display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Birth Date</th>
                        <th>Address</th>
                        <th>Religius</th>
                        <th>Goldar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jns_kelamin }}</td>
                            <td>{{ $item->tgl_lahir->translatedFormat('d F Y') }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->agama }}</td>
                            <td>{{ $item->goldar }}</td>
                            {{-- <td>
                            <button wire:click="edit({{ $item->id }})" class="btn btn-warning">Edit</button>
                            <button wire:click="destroy({{ $item->id }})" class="btn btn-danger">Hapus</button>
                        </td> --}}
                        </tr>
                    @endforeach
                </tbody>

            </table>

            {{-- {{ $siswa->links() }} --}}
        </div>
    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        new DataTable('#example', {
            pageLength: 10
        });
    </script>
@endsection
