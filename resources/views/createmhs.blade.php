@extends('AdminLayout/index')
@section('content')

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Data Mahasiswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="/store">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Your NIM</label>
                    <input type="text" class="form-control" id="NPM" name="NPM">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Your Name</label>
                    <input type="text" class="form-control" id="Name" name="Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Your Class</label>
                    <input type="text" class="form-control" id="Class" name="Class">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Your Address</label>
                    <input type="text" class="form-control" id="Address" name="Address">
                  </div>

                  <div class="form-group">
                        <label>Select Your Organization</label>
                        <select class="custom-select" id="organization_id" name="organization_id">
                            <option value="0"> Tidak Berorganisasi </option>
                            @foreach ($org as $item)
                            <option value="{{$item ->id}}">{{$item ->nama}}</option>
                            @endforeach
                        </select>
                      </div>

                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection