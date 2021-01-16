@extends('AdminLayout/index')
@section('content')

<center> <h2>  Tabel Organization </h2> </center>
<br>

    <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col"><center>Nama</center></th>
            <th scope="col"><center>Slug</center></th>>  
        </tr>
        </thead>
        <tbody>



            @foreach ($organization as $item)
          
            <tr>
            <td>{{$item->nama}}</td>
            <td>{{$item->slug}}</td>
        
            @endforeach

        </tbody>
      </table>
    @endsection