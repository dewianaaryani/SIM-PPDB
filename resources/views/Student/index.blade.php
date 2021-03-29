@extends('layouts.app')

@section('title','Student')
@section('titleForm','Daftar Peserta didik')
@section('resource')
        
    <form class="d-flex">
    <a href="{{route('siswa.create')}}" class="btn btn-success">Tambah</a>
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
@endsection
@section('content')
    @if($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <p>{{$message}}</p>
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nis</th>
                <th scope="col">Name</th>
                <th scope="col">JK</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <th scope="row">{{++$i}}</th>
                    <td>{{$student->nis}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->gender}}</td>
                    
                    <td>
                        <form action="" method="get">
                            <a href="" class="btn btn-primary">Print</a>
                            <a href="{{route('siswa.edit',$student->id)}}" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-primary">Delete</a>
                        </form>
                    </td>
                </tr>      
            @endforeach  
        </tbody>
        
    </table>
    {{ $students->links() }}
@endsection


