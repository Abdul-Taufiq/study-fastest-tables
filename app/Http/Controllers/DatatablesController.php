<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class DatatablesController extends Controller
{
    public function indexClientSide()
    {
        $siswa = Siswa::orderBy('created_at', 'DESC')->get();
        return view('datatables.datatables-client', compact('siswa'));
    }

    public function indexServerSide(Request $request)
    {
        if ($request->ajax()) {
            $data = Siswa::orderBy('created_at', 'DESC')->get();
            return datatables()->of($data)
                ->addColumn('tgl_lahir', function ($data) {
                    return $data->tgl_lahir->translatedFormat('d M Y');
                })
                ->addIndexColumn()
                ->make(true);
        }
        return view('datatables.datatables-server');
    }
}
