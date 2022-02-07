<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bagian;

class BagianController extends Controller
{
    public function __construct(Bagian $bagian)
    {
        $this->bagianTable = $bagian;
    }

    public function index()
    {
        $bagian = $this->bagianTable->get();

        return view('pages.admin.bagian.index')->with(['bagian' => $bagian]);
    }

    public function add()
    {
        $bagian = $this->bagianTable->get();

        return view('pages.admin.bagian.bagian_form')->with(['bagian' => $bagian]);
    }

    public function edit($id)
    {
        $bagian = $this->bagianTable->where('id_bagian', $id)->first();

        return view('pages.admin.bagian.bagian_form_edit')->with(['bagian' => $bagian]);
    }

    public function create(Request $request)
    {   
        $bagian = $this->bagianTable->create($request->except('_token'));

        return redirect()->route('admin.bagian.index');
    }

    public function update(Request $request)
    {   
        $bagian = $this->bagianTable->where('id_bagian', $request->id_bagian)->update($request->except(['_token', 'id_bagian']));

        return redirect()->route('admin.bagian.index');
    }

    public function delete($id)
    {   
        $bagian = $this->bagianTable->where('id_bagian', $id)->delete();

        return redirect()->route('admin.bagian.index');
    }
}
