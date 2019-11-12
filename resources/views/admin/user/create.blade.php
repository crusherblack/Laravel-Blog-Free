@extends('template_backend.home')
@section('sub-judul','Tambah User')
@section('content')

  @if(count($errors)>0)
  	@foreach($errors->all() as $error)
  	<div class="alert alert-danger" role="alert">
      {{ $error }}
	</div>  		
  	@endforeach
  @endif

  @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	</div> 
  	
  @endif

  <form action="{{ route('user.store') }}" method="POST">
  @csrf
  <div class="form-group">
      <label>Nama User</label>
      <input type="text" class="form-control" name="name">
  </div>

  <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" name="email">
  </div>

  <div class="form-group">
      <label>Tipe User</label>
      <select class="form-control" name="tipe">
      	<option value="" holder>Pilih Tipe User</option>
      	<option value="1" holder>Administrator</option>
      	<option value="0" holder>Penulis</option>
      </select>
  </div>

   <div class="form-group">
      <label>Password</label>
      <input type="text" class="form-control" name="password">
  </div>

  <div class="form-group">
      <button class="btn btn-primary btn-block">Simpan User</button>
  </div>

  </form>


@endsection