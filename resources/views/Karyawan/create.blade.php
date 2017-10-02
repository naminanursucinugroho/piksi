@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Karyawan</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> Karyawan
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">kembali</a>
		</div>
		</div>
		<div class="panel-body">
		
			<form action="{{route('karyawan.store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label class="control-label">Nama </label>
				<input type="text" name="b" class="form-control" required="">
			</div>
			
			<div class="form-group">
				<label class="control-label">Alamat</label>
				<input type="text" name="a" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">E-mail</lable>
				<input type="text" name="c" class="form-control" required="">
			</div>
			
			<div class="form-group">
				<label class="control-label">cover</label>
				<input type="file" name="cover"  required="">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">simpan</button>
				<button type="reset" class="btn btn-danger">reset</button>
			</div>
			</form>
		</div>
		</div>
		</div>
		@endsection