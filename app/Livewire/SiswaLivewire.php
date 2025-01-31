<?php

namespace App\Livewire;

use App\Models\Siswa;
use Carbon\Carbon;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class SiswaLivewire extends Component
{
    use WithPagination;
    public $page = 1;
    public $perPage = 10;

    #[Url(history: true)] // untuk menambahkan history ke URL
    public $search = '';

    #[Url(history: true)]
    public $sortBy = 'created_at';

    #[Url(history: true)]
    public $sortDir = 'desc';

    public function updatingPage()
    {
        $this->dispatch('pageChanged');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        session()->flash('message', 'Data berhasil dihapus.');
    }

    public function setSortBy($field)
    {
        if ($this->sortBy === $field) {
            $this->sortDir = $this->sortDir === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDir = 'asc';
        }
        $this->sortBy = $field;
    }

    public function render()
    {
        // $siswa = Siswa::orderBy('created_at', 'DESC')->get();
        $siswa = Siswa::search($this->search)
            ->orderBy($this->sortBy, $this->sortDir)
            ->paginate($this->perPage);
        return view('livewire.siswa-livewire', compact('siswa'));
    }
}
