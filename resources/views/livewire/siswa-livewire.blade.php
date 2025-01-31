<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <hr>
    <div class="mb-3">
        <div class="row mb-4">
            <div class="col-md-4 ">
                <input type="search" wire:model.live.debounce.300ms="search" class="form-control form-control-sm"
                    placeholder="Cari sesuatu disini...">
            </div>

            <div class="col-md-4">
                <select style="width: 20%" class="form-select form-select-sm" wire:model.live='perPage'>
                    <option selected value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    @include('livewire.komponen.sorting-table', [
                        'nameSort' => 'nama',
                        'displayName' => 'Nama',
                    ])
                    @include('livewire.komponen.sorting-table', [
                        'nameSort' => 'jns_kelamin',
                        'displayName' => 'Gender',
                    ])
                    @include('livewire.komponen.sorting-table', [
                        'nameSort' => 'tgl_lahir',
                        'displayName' => 'Birth Date',
                    ])
                    <th>Address</th>
                    @include('livewire.komponen.sorting-table', [
                        'nameSort' => 'agama',
                        'displayName' => 'Religius',
                    ])
                    <th>Goldar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $item)
                    <tr wire:key="{{ $item->id }}">
                        <td>{{ $loop->index + $siswa->firstItem() }}</td>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jns_kelamin }}</td>
                        <td>{{ $item->tgl_lahir->translatedFormat('d F Y') }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->agama }}</td>
                        <td>{{ $item->goldar }}</td>
                        <td>
                            <button
                                onclick="confirm('Hapus Data {{ $item->nama }}?') || event.stopImmediatePropagation()"
                                wire:click="destroy({{ $item->id }})" class="btn btn-danger">X</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

        {{ $siswa->links() }}
        <div id="CurrentScroll"></div>
    </div>

</div>
