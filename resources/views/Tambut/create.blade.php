@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>tambut</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> tambut
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">kembali</a>
		</div>
		</div>
		<div class="panel-body">
		
			<form action="{{route('tambut.store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label class="control-label">Nama Barang</label>
				<input type="text" name="a" class="form-control" required="">
			</div>
			
			<div class="form-group">
				<label class="control-label">Jumlah</label>
				<input type="number" name="b" class="form-control" required="">
			</div>


			<div class="form-group">
				<label class="control-label">Peminjam</lable>
				<input type="text" name="c" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Tgl Pinjman</lable>
				<input type="date" name="d" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Tgl Kembali</lable>
				<input type="date" name="e" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Staff Hardware</lable>
				<input type="text" name="f" class="form-control" required="">
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