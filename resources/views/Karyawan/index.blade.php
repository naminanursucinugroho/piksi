@extends('layouts.app')
@section('content')
<div class="container">

<div class=-"row">
		<center><h1>Data Karyawan</h1></center>
		<div class="panel panel-primary">
		<div class ="panel-heading">Data KARYAWAN
		<div class="panel-title pull-right"><a href="/admin/karyawan/create"> Tambah Data </a></div></div>
		
		<div class="panel-body"></div>
		<table class="table">
				<thead>
			<tr>
				<th>Nama</th>
				<th>Gambar</th>
				<th>Alamat</th>
				<th>E-mail</th>
				<th colspan="3">Action</th>
			</tr>
			</thead>
			<body>
					@foreach($karyawan as $data)
					<tr>
						<td>{{$data->nama}}</td>
						<td>{{$data->alamat}}</td>
						<td>{{$data->email}}</td>
						<td>
							<button type="submit">
								<a href="{{ route('karyawan.index') }}"><img src="{{asset('/img/'.$data->cover.'')}}" height="100px" width="100px"></a></button>
						</td><td>
							<a class="btn btn-warning" href="/admin/karyawan/{{$data->id}}/edit">Edit</a>
						</td>
			
					
						
						
						<td>
						<form action="{{route('karyawan.destroy',$data->id)}}" method="post">
							
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
