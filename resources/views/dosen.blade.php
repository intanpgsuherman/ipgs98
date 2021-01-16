{{-- @extends('AdminLayout/index')
@section('content')

<center> <h2>  Tabel Dosen Informatika </h2> </center>
<br>

    <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col"><center>NIP</center></th>
            <th scope="col"><center>Nama</center></th>
            <th scope="col"><center>Mata Kuliah</center></th>
            <th scope="col"><center>Alamat</center></th>  
        </tr>
        </thead>
        <tbody>



            @foreach ($dosen as $item)
          
            <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->NIP}}</td>
            <td>{{$item->Nama}}</td>
            <td><center>{{$item->MataKuliah}}</center></td>
            <td>{{$item->Alamat}}</td>
        
            @endforeach

        </tbody>
      </table>
    @endsection --}}


    @extends('adminLayout/index')
@section('content') 
<center> <h2>  Tabel Dosen Informatika </h2> </center>
<br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <td class="bg-primary">NIP</td>
        <td class="bg-danger">Nama</td>
        <td class="bg-info">MataKuliah</td>
        <td class="bg-success">alamat</td>
      </tr>
    </thead>
    <tbody>
        @foreach ($dosen as $item)
            
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td class="bg-primary"> {{$item->NIP}} </td>
            <td class="bg-danger"> {{$item->Nama}}</td>
            <td class="bg-info"> {{$item->MataKuliah}}</td>
            <td class="bg-success"> {{$item->Alamat}}</td>
        </tr>
        
        @endforeach
    </tbody>
  </table>
@endsection