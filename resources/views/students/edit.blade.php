@extends('layout.main')
@section('title', 'Form Tambah Mahasiswa')

@section('container')
<div class="container">	
	<div class="row">	
		<div class="col-md-8">	
			<h1 class="mt-3">Form Tambah Mahasiswa</h1>


			
<form method="post" action="{{url('/students')}}/{{$student->id}}">
<!-- <form method="post" action="/students/{{$student->id}}"> -->
@method('patch')
@csrf
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama" autocomplete="off" value="{{$student->nama}}">
     @error('nama')<div class="invalid-feedback">{{$message}}</div>@enderror
  </div>
  <div class="mb-3">
    <label for="nrp" class="form-label">NRP</label>
    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" placeholder="NRP" autocomplete="off" value="{{$student->nrp}}">
     @error('nrp')<div class="invalid-feedback">{{$message}}</div>@enderror
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" autocomplete="off" value="{{$student->email}}">
     @error('email')<div class="invalid-feedback">{{$message}}</div>@enderror
  </div>
   <div class="mb-3">
    <label for="jurusan" class="form-label">Jurusan</label>
    <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan" autocomplete="off" value="{{$student->jurusan}}">
  </div>
  <button type="submit" class="btn btn-primary">Ubah Data</button>
</form>

		</div>
	</div>
</div>
@endsection