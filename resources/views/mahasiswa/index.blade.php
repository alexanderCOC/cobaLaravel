@extends('layout.main')
@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">	
	<div class="row">	
		<div class="col-md-12">	
			<h1 class="mt-3">Daftar Mahasiswa</h1>

			<table class="table">
				<thead>
					<tr class="table-dark">
						<th scope="col">#</th>
						<th scope="col">NRP</th>
						<th scope="col">Nama</th>
						<th scope="col">Email</th>
						<th scope="col">Jurusan</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($mahasiswa as $row)
					<tr>
						<th scope="row">{{ $loop->iteration }}</th>
						<td>{{ $row->nrp }}</td>
						<td>{{ $row->nama }}</td>
						<td>{{ $row->email }}</td>
						<td>{{ $row->jurusan }}</td>
						<td>
							<a href="" class="badge bg-success">Edit</a>
							<a href="" class="badge bg-danger">Hapus</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection