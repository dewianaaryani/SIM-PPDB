@extends('layouts.app')
@section('title','Student')
@section('titleForm','Create Student')
@section('content')

@if($errors->any())
    <div class="alert alert-danger" role="alert">
        <strong>Spt ny ad yg slh</strong>
        <ul>
            @foreach( $errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('siswa.store')}}" method="post" enctype="multipart/form-data">
@csrf
    <div class="mb-3">
        <label  class="form-label">NIS</label>
        <input  class="form-control" name="nis" type="text">    
    </div>
    <div class="mb-3">
        <label  class="form-label">Nama</label>
        <input  class="form-control" name="name">    
    </div>
    <div class="mb-4">
        <label class="form-label">Jenis Kelamin</label>
        <select class="form-select" name="gender">
        <option>Choose...</option>
        <option>Laki-laki</option>
        <option>Perempuan</option>
        </select>
    </div>
    <div class="mb-3">
        <label  class="form-label">Tempat Tangal Lahir</label>
        <div class="row">
            <div class="col-md-4">
            <input  class="form-control" name="birth_place">    
            </div>
            <div class="col-md-4">
            <input  class="form-control" name="birth_date" type="date">    
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label  class="form-label">Alamat</label>
        <textarea name="address" id="" cols="20" rows="10" class="form-control"></textarea>    
    </div>
    <div class="mb-3">
        <label  class="form-label">Sekolah asal</label>
        <input  class="form-control" name="school">    
    </div>
    <div class="mb-4">
        <label class="form-label">Kelas</label>
        <select class="form-select" name="grade">
        <option>Choose...</option>
        <option>X (Sepuluh)</option>
        <option>XI (Sebelas)</option>
        <option>XII (Dua Belas)</option>
        </select>
    </div>
    <div class="mb-4">
        <label class="form-label">Jurusan</label>
        <select class="form-select" name="major">
        <option>Choose...</option>
        <option>RPL</option>
        <option>OTKP</option>
        <option>TKJ</option>
        <option>TBG</option>
        <option>HTL</option>
        <option>BDP</option>
        <option>MMD</option>
        </select>
    </div>
    <button class="btn btn-success">Save</button>
</form>
@endsection