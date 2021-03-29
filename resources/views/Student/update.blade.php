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
        
    </form>
@endsection