@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> Edit Data Pegawai </div>

                <div class="panel-body">
                    {!! Form::model($pegawai,['method' => 'PATCH','route'=>['pegawai.update',$pegawai->id],'files'=>'true']) !!}
                <div class="form-group">
                    {!! Form::label('Nip', 'Nip') !!}
                    {!! Form::text('nip',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Nama Golongan', 'Nama Golongan') !!}
                    {!! Form::text('nama_golongan',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Nama Jabatan', 'Nama Jabatan') !!}
                    {!! Form::text('nama_jabatan',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Photo', 'Photo') !!}
                    {!! Form::file('photo',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection