@extends('layouts.app')
@section('content')
<div class="container">

<div class=-"row">
		<center><h1>Data Tambut</h1></center>
		<div class="panel panel-primary">
		<div class ="panel-heading">Data tambut
		<div class="panel-title pull-right"><a href="/admin/tambut/create"> Tambah Data </a></div></div>
		
		<div class="panel-body"></div>
		<table class="table">
				<thead>
			<tr>
				<th>Nama Barang</th>
				<th>Gambar</th>
				<th>Jumlah</th>
				<th>Peminjaman</th>
				<th>Staff hardware</th>
				<th>TGl pinjaman</th>
				<th>TGl Kembali</th>
				<th colspan="3">Action</th>
			</tr>
			</thead>
			<body>
					@foreach($tambut as $data)
					<tr>
						<td>{{$data->namabarang}}</td>
						<td>{{$data->jumlah}}</td>
						<td>{{$data->peminjaman}}</td>
						<td>{{$data->tglpinjaman}}</td>
						<td>{{$data->tglkembali}}</td>
						<td>{{$data->staffhardware}}</td>
						<td>
							<button type="submit">
								<a href="{{ route('tambut.index') }}"><img src="{{asset('/img/'.$data->cover.'')}}" height="100px" width="100px"></a></button>
						</td><td>
							<a class="btn btn-warning" href="/admin/tambut/{{$data->id}}/edit">Edit</a>
						</td>
			
					
						
						
						<td>
						<form action="{{route('tambut.destroy',$data->id)}}" method="post">
							
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" >
							<input type="submit" class="btn btn-danger" value="delete">
							{{csrf_field()}}
						</form>
					</td>

					</tr>
					@endforeach
			</body>

		

		
		</div>
</div>


@endsection
