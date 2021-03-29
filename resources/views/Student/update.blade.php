@extends('layouts.app')
@section('title','Student')
@section('titleForm','Update Student')
@section('content')
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <strong>Ups ada yang salah nic</strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('siswa.update',$students->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Nis</label>
            <input class="form-control" type="text" name="nis" id="" value="{{$students->nis}}">
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input class="form-control" type="text" name="name" id="" value="{{$students->name}}">
        </div>
        <div class="form-group">
            <label for="">Gender</label>
            <select name="gender" id="" class="form-control">
                <option value="Laki-laki" {{$students->gender == 'Laki-laki' ? 'selected="selected"' : ''}}>Laki-laki</option>
                <option value="Perempuan" {{$students->gender == 'Perempuan' ? 'selected="selected"' : ''}}>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label  class="form-label">Tempat Tangal Lahir</label>
            <div class="row">
                <div class="col-md-4">
                <input  class="form-control" name="birth_place" value="{{$students->birth_place}}">    
                </div>
                <div class="col-md-4">
                <input  class="form-control" name="birth_date" type="date" value="{{$students->birth_date}}">    
                </div>
            </div>        
        </div>
        <div class="mb-3">
            <label  class="form-label">Alamat</label>
            <textarea name="address" id="" cols="20" rows="10" class="form-control">{{$students->address}}</textarea>    
        </div>
        <div class="form-group">
            <label for="">Asal Sekolah</label>
            <input class="form-control" type="text" name="school" id="" value="{{$students->school}}">
        </div>
        <div class="form-group">
            <label for="">Kelas</label>
            <select name="grade" id="" class="form-control">
                <option value="X (Sepuluh)" {{$students->grade == 'X (Sepuluh)' ? 'selected="selected"' : ''}}>X (Sepuluh)</option>
                <option value="XI (Sebelas)" {{$students->grade == 'XI (Sebelas)' ? 'selected="selected"' : ''}}>XI (Sebelas)</option>
                <option value="XII (Dua Belas)" {{$students->grade == 'XII (Dua Belas)' ? 'selected="selected"' : ''}}>XII (Dua Belas)</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Jurusan</label>
            <select name="major" id="" class="form-control">
                <option value="OTKP" {{$students->major == 'OTKP' ? 'selected="selected"' : ''}}>OTKP</option>
                <option value="TBG" {{$students->major == 'TBG' ? 'selected="selected"' : ''}}>TBG</option>
                <option value="RPL" {{$students->major == 'RPL' ? 'selected="selected"' : ''}}>RPL</option>
                <option value="HTL" {{$students->major == 'HTL' ? 'selected="selected"' : ''}}>HTL</option>
                <option value="TKJ" {{$students->major == 'TKJ' ? 'selected="selected"' : ''}}>TKJ</option>
                <option value="MMD" {{$students->major == 'MMD' ? 'selected="selected"' : ''}}>MMD</option>
                <option value="BDP" {{$students->major == 'BDP' ? 'selected="selected"' : ''}}>BDP</option>
            </select>
        </div>
    <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection