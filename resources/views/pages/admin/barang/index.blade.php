@extends('layout.index')
@section('content')
  @include('pages.admin.navbar');
  @include('pages.admin.barang.barang_tambah');	
  @include('pages.admin.barang.barang_tabel');
@endsection
