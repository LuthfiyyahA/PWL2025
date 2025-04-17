<?php

namespace App\Http\Controllers;

use Yajra\DataTables\Facades\DataTables;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index(Request $request)
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Level',
            'list' => ['Home', 'Level']
        ];

        $page = (object) [
            'title' => 'Daftar level yang tersedia dalam sistem'
        ];

        $activeMenu = 'level';

        if ($request->ajax()) {
            $data = Level::select(['level_id', 'level_kode', 'level_nama']);
            return DataTables::of($data)
                ->addColumn('aksi', function ($row) {
                    return '<a href="'.url('level/'.$row->level_id.'/edit').'" class="btn btn-warning btn-sm">Edit</a>
                            <form action="'.url('level/'.$row->level_id).'" method="POST" style="display:inline-block;">
                                '.csrf_field().method_field('DELETE').'
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus?\')">Hapus</button>
                            </form>';
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }

        return view('level.index', compact('breadcrumb', 'page', 'activeMenu'));
    }
}
