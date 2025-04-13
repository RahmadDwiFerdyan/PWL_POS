@extends('layouts.app')

@section('content') 
<div class="container">
  <h1>Profil Saya</h1>
  <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="form-group">
      <label for="photo">Foto Profil</label>
      <input type="file" name="photo" id="photo" class="form-control">
    </div>
    
    <div class="form-group">
      <img src="{{ Storage::url('photo_user/' . $user->photo) }}" alt="Foto Profil" class="img-thumbnail" width="150">
    </div>

    <button type="submit" class="btn btn-primary">Update Foto Profil</button>
  </form>
</div>
@endsection
