@extends('layouts.app')
@section('content')
<div class="container">

<div class=-"row">
		<center><h1>Data barang</h1></center>
		<div class="panel panel-primary">
		<div class ="panel-heading">Data barang
		<div class="panel-title pull-right"><a href="/admin/barang/create"> Tambah Data </a></div></div>
		
		<div class="panel-body"></div>
		<table class="table">
				<thead>
			<tr>
				<th>Nama</th>
				<th>Stok</th>
				<th>Harga</th>
				<th>Gambar</th>
				<th colspan="3">Action</th>
			</tr>
			</thead>
			<body>
					@foreach($barang as $data)
					<tr>
						<td>{{$data->nama}}</td>
						<td>{{$data->stok}}</td>
						<td>{{$data->harga}}</td>
						<td>
							<src type="submit">
								<a href="{{ route('barang.index') }}"><img src="{{asset('/img/'.$data->cover.'')}}" height="100px" width="100px"></a></button>
						</td><td>
							<a class="btn btn-warning" href="/admin/barang/{{$data->id}}/edit">Edit</a>
						</td>
			
					
						
						
						<td>
						<form action="{{route('barang.destroy',$data->id)}}" method="post">
							
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
