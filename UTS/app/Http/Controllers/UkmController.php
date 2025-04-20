<?php

namespace App\Http\Controllers;

use Yajra\DataTables\Facades\DataTables;
use App\Models\UkmModel;
use Illuminate\Http\Request;

class UkmController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar UKM',
            'list' => ['Home', 'UKM']
        ];

        $page = (object) [
            'title' => 'Daftar UKM yang terdaftar dalam sistem'
        ];

        $activeMenu = 'ukm';
        $ukm = UkmModel::all();

        return view('ukm.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'ukm' => $ukm, 'activeMenu' => $activeMenu]);
    }

    public function list(Request $request)
    {
        $ukm = UkmModel::select('ukm_id', 'nama', 'ketua_umum', 'tahun_berdiri');

        if ($request->nama) {
            $ukm->where('nama', $request->nama);
        }

        return datatables()->of($ukm)
            ->addIndexColumn()
            ->addColumn('aksi', function ($ukm) {
                $btn = '<a href="' . url('/ukm/' . $ukm->ukm_id) . '" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="' . url('/ukm/' . $ukm->ukm_id . '/edit') . '" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="' . url('/ukm/' . $ukm->ukm_id) . '">'
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
            'title' => 'Tambah UKM',
            'list' => ['Home', 'UKM', 'Tambah']
        ];

        $page = (object) [
            'title' => 'Tambah UKM baru'
        ];

        $activeMenu = 'ukm';

        return view('ukm.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100|unique:ukm,nama',
            'deskripsi' => 'nullable|string',
            'ketua_umum' => 'required|string|max:255',
            'tahun_berdiri' => 'required|string|max:5'
        ]);

        UkmModel::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'ketua_umum' => $request->ketua_umum,
            'tahun_berdiri' => $request->tahun_berdiri
        ]);

        return redirect('/ukm')->with('success', 'Data UKM berhasil disimpan');
    }

    public function show(string $id)
    {
        $ukm = UkmModel::find($id);

        $breadcrumb = (object) [
            'title' => 'Detail UKM',
            'list' => ['Home', 'UKM', 'Detail']
        ];

        $page = (object) [
            'title' => 'Detail UKM'
        ];

        $activeMenu = 'ukm';

        return view('ukm.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'ukm' => $ukm, 'activeMenu' => $activeMenu]);
    }

    public function edit(string $id)
    {
        $ukm = UkmModel::find($id);

        $breadcrumb = (object) [
            'title' => 'Edit UKM',
            'list' => ['Home', 'UKM', 'Edit']
        ];

        $page = (object) [
            'title' => 'Edit UKM'
        ];

        $activeMenu = 'ukm';

        return view('ukm.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'ukm' => $ukm, 'activeMenu' => $activeMenu]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:100|unique:ukm,nama,' . $id . ',ukm_id',
            'deskripsi' => 'nullable|string',
            'ketua_umum' => 'required|string|max:255',
            'tahun_berdiri' => 'required|string|max:5'
        ]);

        UkmModel::find($id)->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'ketua_umum' => $request->ketua_umum,
            'tahun_berdiri' => $request->tahun_berdiri
        ]);

        return redirect('/ukm')->with('success', 'Data UKM berhasil diubah');
    }

    public function destroy(string $id)
    {
        $check = UkmModel::find($id);
        if (!$check) {
            return redirect('/ukm')->with('error', 'Data UKM tidak ditemukan');
        }

        try {
            UkmModel::destroy($id);

            return redirect('/ukm')->with('success', 'Data UKM berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/ukm')->with('error', 'Data UKM tidak bisa dihapus karena masih terdapat data yang terkait dengan data ini');
        }
    }
}