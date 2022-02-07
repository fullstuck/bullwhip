<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Bagian;

class PegawaiController extends Controller
{
    public function __construct(Pegawai $pegawai, Bagian $bagian)
    {
        $this->pegawaiTable = $pegawai;
        $this->bagianTable = $bagian;
    }

    public function index()
    {
        $pegawai = $this->pegawaiTable->get();

        return view('pages.admin.pegawai.index')->with(['pegawai' => $pegawai]);
    }

    public function add()
    {
        $bagian = $this->bagianTable->get();

        return view('pages.admin.pegawai.pegawai_form')->with(['bagian' => $bagian]);
    }

    public function edit()
    {
        return view('pages.admin.pegawai.pegawai_form_edit');
    }

    public function create(Request $request)
    {   
        $pegawai = $this->pegawaiTable->create($request->except('_token'));

        return redirect()->route('admin.pegawai.index');
    }

    public function update(Request $request)
    {   
        $pegawai = $this->pegawaiTable->where('id_pegawai', $request->id_pegawai)->update($request->except(['_token', 'id_pegawai']));

        return redirect()->route('admin.pegawai.index');
    }

    public function delete($id)
    {   
        $pegawai = $this->pegawaiTable->where('id_pegawai', $id)->delete();

        return redirect()->route('admin.pegawai.index');
    }
}
