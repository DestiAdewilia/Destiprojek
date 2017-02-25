@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">golongan</div>
        <div class="panel-body">
        <a class="btn btn-success" href="{{url('golongan/create')}}">Tambah Data</a><br><br>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th>No</th>
                        <th>Kode golongan</th>
                        <th>Nama golongan</th>
                        <th>Besaran Uang</th>
                        <th colspan="3"><center>Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                @foreach ($golongan as $data)
                <tbody>
                    <tr> 
                        <td> {{$id++}} </td>
                        <td> {{$data->kode_golongan}} </td>
                        <td> {{$data->nama_golongan}}</td>
                        <td> Rp.{{$data->besaran_uang}}</td>
                        
                          <td><a href="{{route('golongan.edit',$data->id)}}" class="btn btn-warning">Edit</a></td>

                    </td>
                    <td>
                            <form method="POST" action="{{ route('golongan.destroy', $data->id)}}" accept-charset="UTF-8">
                                <input name="_method" type="hidden" value="DELETE">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini?');" value="Delete">
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection