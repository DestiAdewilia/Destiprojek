@extends('layouts.app')

@section('content')
	
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">Tambah Data golongan</div>
		<div class="panel-body">
			<form method="POST" action="{{url('golongan')}}">
			 	{{csrf_field()}}
				<div class="form-group">
					<label>Kode golongan</label>
					<input class="form-control" type="text" name="kode_golongan" placeholder="Masukkan Kode golongan">
				</div>

				<div class="form-group">
					<label>Nama golongan</label>
					<input class="form-control" type="text" name="nama_golongan" placeholder="Masukkan Nama golongan">
				</div>

				<div class="form-group">
					<label>Besaran Uang</label>
					<input class="form-control" type="text" name="besaran_uang" placeholder="Masukkan Besaran Uang">
				</div>

				<div class="form-group">
					<input class="btn btn-success" type="submit" name="submit" value="Tambah">
				</div>
			</form>
		</div>
	</div>
</div>

@stop
