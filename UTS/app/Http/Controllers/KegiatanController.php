<?php

namespace App\Http\Controllers;


use Yajra\DataTables\Facades\DataTables;
use App\Models\UkmModel;
use App\Models\KegiatanModel;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Kegiatan',
            'list' => ['Home', 'Kegiatan']
        ];

        $page = (object) [
            'title' => 'Daftar Kegiatan yang terdaftar dalam sistem'
        ];

        $activeMenu = 'kegiatan_ukm';
        $ukm = UkmModel::all();

        return view('kegiatan.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'ukm' => $ukm, 'activeMenu' => $activeMenu]);
    }

    public function list(Request $request)
    {
        $kegiatan_ukms = KegiatanModel::with('ukm')->select('kegiatan_id', 'nama_kegiatan', 'ukm_id');

        if ($request->ukm_id) {
            $kegiatan_ukms->where('ukm_id', $request->ukm_id);
        }

        return DataTables::of($kegiatan_ukms)
            ->addIndexColumn()
            ->addColumn('aksi', function ($kegiatan_ukm) {
                $btn = '<a href="' . url('/kegiatan/' . $kegiatan_ukm->kegiatan_id) . '" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="' . url('/kegiatan/' . $kegiatan_ukm->kegiatan_id . '/edit') . '" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="' . url('/kegiatan/' . $kegiatan_ukm->kegiatan_id) . '">'
                    . csrf_field()
                    . method_field('DELETE')
                    . '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin menghapus data ini?\')">Hapus</button></form>';
                return $btn;
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah Kegiatan',
            'list' => ['Home', 'Kegiatan', 'Tambah']
        ];

        $page = (object) [
            'title' => 'Tambah Kegiatan Baru'
        ];

        $ukm = UkmModel::all();
        $activeMenu = 'kegiatan_ukm';

        return view('kegiatan.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'ukm'=>$ukm, 'activeMenu' => $activeMenu]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:100',
            'deskripsi_kegiatan' => 'required|string|max:255',
            'ukm_id' => 'required|integer'
        ]);

        KegiatanModel::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'deskripsi_kegiatan' => $request->deskripsi_kegiatan,
            'ukm_id' => $request->ukm_id
        ]);

        return redirect('kegiatan.index')->with('success', 'Data kegiatan UKM berhasil disimpan');
    }

    public function show(string $id)
    {
        $kegiatan_ukm = KegiatanModel::with('ukm')->find($id);

        $breadcrumb = (object) [
            'title' => 'Detail Kegiatan',
            'list' => ['Home', 'Kegiatan', 'Detail']
        ];

        $page = (object) [
            'title' => 'Detail kegiatan'
        ];

        $activeMenu = 'kegiatan_ukm';

        return view('kegiatan.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'kegiatan_ukm' => $kegiatan_ukm, 'activeMenu' => $activeMenu]);
    }

    public function edit(string $id)
    {
        $kegiatan_ukm = KegiatanModel::find($id);
        $ukm = UkmModel::all();

        $breadcrumb = (object) [
            'title' => 'Edit Kegiatan',
            'list' => ['Home', 'Kegiatan', 'Edit']
        ];

        $page = (object) [
            'title' => 'Edit kegiatan'
        ];

        $activeMenu = 'kegiatan_ukm';

        return view('kegiatan.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'kegiatan_ukm' => $kegiatan_ukm, 'ukm' => $ukm, 'activeMenu' => $activeMenu]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string|max:100',
            'deskripsi_kegiatan' => 'required|string|max:255',
            'ukm_id' => 'required|integer'
        ]);

        KegiatanModel::find($id)->update([
            'nama_kegiatan' => $request->nama_kegiatan,
            'deskripsi_kegiatan' => $request->deskripsi_kegiatan,
            'ukm_id' => $request->ukm_id
        ]);

        // Jika request AJAX, kembalikan respon JSON
        if ($request->ajax()) {
            return response()->json(['success' => 'Data UKM berhasil diubah']);
        }

        return redirect('kegiatan.index')->with('success', 'Data kegiatan berhasil diubah');
    }

    public function destroy(string $id)
    {
        $check = KegiatanModel::find($id);
        if (!$check) {
            return redirect('kegiatan.index')->with('error', 'Data kegiatan tidak ditemukan');
        }

        try {
            KegiatanModel::destroy($id);

            return redirect('kegiatan.index')->with('success', 'Data kegiatan berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('kegiatan.index')->with('error', 'Data kegiatan tidak bisa dihapus karena masih terdapat data yang terkait dengan data ini');
        }
    }
}