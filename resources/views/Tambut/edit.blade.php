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
			<form action="{{route('tambut.update',$tambut->id)}}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_method" value="put">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
				<label class="control-label">Nama Barang</label>
				<input type="text" name="a" value="{{$tambut->namabarang}}" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Jumlah</label>
				<input type="text" name="b" value="{{$tambut->jumlah}}" class="form-control" required="">
			</div>			

			<div class="form-group">
				<label class="control-label">Peminjam</label>
				<input type="text" name="c" value="{{$tambut->peminjam}}" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Tgl Pinjam</label>
				<input type="date" name="d" value="{{$tambut->tglpinjaman}}" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Tgl Kembali</label>
				<input type="date" name="e" value="{{$tambut->tglkembali}}" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Staff Hardware</label>
				<input type="text" name="f" value="{{$tambut->staffhardware}}" class="form-control" required="">
			</div>
			
			<div class="form-group">
				<label class="control-label">cover</label>
				<input type="file" name="cover" class="form-control" required="" value="{{$tambut->cover}}"></input>
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