@extends('AdminLayout/index')
@section('content')
<div class="container">
<div class="row">
</div>

    <h2><center>  Tabel Mahasiswa Informatika </center></h2>
    <br>

    <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NPM</th>
            <th scope="col">Name</th>
            <th scope="col">Class</th>
            <th scope="col">Organization</th>
            <th scope="col">Address</th>  
            <th colspan="2"><center>Action</center></th>  
        </tr>
        </thead>
        <tbody>



          @foreach ($mahasiswa as $item)
          
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->NPM}}</td>
              <td>{{$item->Name}}</td>
              <td>{{$item->Class}}</></td>
              <td>{{$item->organization->nama}}</td>
              <td>{{$item->Address}}</td>
              <td><a href="/list/detail/{{$item->slug}}" class="btn btn-primary btn-sm">Edit</a></td>
              <td>
                <form action="/list/delete/{{$item->slug}}" method="POST">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
              </td>

            </tr>
          @endforeach

        </tbody>
      </table>

     

         <div class="row">
          <a href="/createmhs" class="btn btn-success btn-sm">
              CREATE
          </a>
       </div>

        <div class="row">
      {{$mahasiswa->links('adminLayout.pagination')}}
      </div>
    @endsection