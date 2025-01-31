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
        <h1 class="mb-4">hallo, Load data with Datatbles Server</h1>
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
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ route('datatables-server') }}',
                type: 'GET',
            },
            columns: [{
                    data: null,
                    sortable: false,
                    orderColumn: false,
                    ordering: false,
                    searchable: false,
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    },
                },
                {
                    data: 'nik',
                    name: 'nik'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'jns_kelamin',
                    name: 'jns_kelamin'
                },
                {
                    data: 'tgl_lahir',
                    name: 'tgl_lahir'
                },
                {
                    data: 'alamat',
                    name: 'alamat'
                },
                {
                    data: 'agama',
                    name: 'agama'
                },
                {
                    data: 'goldar',
                    name: 'goldar'
                },
            ],
            columnDefs: [{
                targets: -1,
                orderable: false,
            }, ]
        });
    </script>
@endsection
