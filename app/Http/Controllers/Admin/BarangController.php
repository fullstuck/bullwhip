<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function __construct(Barang $barang)
    {
        $this->barangTable = $barang;
    }

    public function index()
    {
        $barang = $this->barangTable->paginate(10);

        return view('pages.admin.barang.index')->with(['barang' => $barang]);
    }

    public function add()
    {
        $barang = $this->barangTable->get();

        return view('pages.admin.barang.barang_form')->with(['barang' => $barang]);
    }

    public function edit($id)
    {
        $barang = $this->barangTable->where('id_barang', $id)->first();

        return view('pages.admin.barang.barang_form_edit')->with(['barang' => $barang]);
    }

    public function create(Request $request)
    {   
        $barang = $this->barangTable->create($request->except('_token'));

        return redirect()->route('admin.barang.index');
    }

    public function update(Request $request)
    {   
        $barang = $this->barangTable->where('id_barang', $request->id_barang)->update($request->except(['_token', 'id_barang']));

        return redirect()->route('admin.barang.index');
    }

    public function delete($id)
    {   
        $barang = $this->barangTable->where('id_barang', $id)->delete();

        return redirect()->route('admin.barang.index');
    }
}
