@extends('layout.main')
@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">	
	<div class="row">	
		<div class="col-md-6">	
			<h1 class="mt-3">Daftar Mahasiswa</h1>

			<a href="{{url('/students/create')}}" class="btn btn-info my-3">Tambah Data Mahasiswa</a>

			@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
			@endif

			<ol class="list-group list-group-numbered">
				@foreach($students as $row)
				<li class="list-group-item d-flex justify-content-between align-items-start">
					<div class="ms-2 me-auto">
						<div class="fw-bold">{{ $row->nama }}</div>
					</div>
					<!-- <a href="{{ url('/students/') }}" class="badge bg-info">Detail</a> -->
					<a href="{{url('/students')}}/{{$row->id}}" class="badge bg-info">Detail</a>
				</li>
				@endforeach
			</ol>


		</div>
	</div>
</div>
@endsection