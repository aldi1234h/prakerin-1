@extends('layouts.master')

@section('konten')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h10 class="m-0 font-weight-bold text-primary">
                        Data Kota
                        <a href=" {{route('kota.create')}} " class="btn btn-primary" style="float: right;">Tambah Data</a>
                    </h10>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama kota</th>
                                    <th>Kode kota</th>
                                    <th>provinsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($kota as $item)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td> {{$item->nama_kota}} </td>
                                        <td> {{$item->kode_kota}} </td>
                                        <td> {{$item->provinsi->nama_provinsi}} </td>
                                        <td>
                                            <center>
                                                <form action="{{ route('kota.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('Delete')
                                                    <a class="btn btn-success" href=" {{route('kota.edit', $item->id)}} ">
                                                        Edit
                                                    </a> 
                                                    <a class="btn btn-primary" href=" {{route('kota.show', $item->id)}} ">
                                                        Show
                                                    </a> 
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </center>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection