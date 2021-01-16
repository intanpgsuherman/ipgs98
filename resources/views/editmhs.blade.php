@extends('adminLayout/index')
@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Mahasiswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="/list/update/{{$mahasiswa->slug}}">
                @method('patch')
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Your NIM</label>
                    <input type="text" class="form-control" id="NPM" name="NPM" value="{{$mahasiswa->NPM}}" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Your Name</label>
                    <input type="text" class="form-control" id="Name" name="Name" value="{{$mahasiswa->Name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Your Class</label>
                    <input type="text" class="form-control" id="Class" name="Class" value="{{$mahasiswa->Class}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Your Address</label>
                    <input type="text" class="form-control" id="Address" name="Address" value="{{$mahasiswa->Address}}">
                  </div>
                  <div class="form-group">
                        <label>Select Your Organization</label>
                        <select class="custom-select" id="organization_id" name="organization_id">
                          <option value="0" {{$mahasiswa->organization_id == "0" ? 'selected' : ''}}>Tidak Berorganisasi</option>
                          <option value="1" {{$mahasiswa->organization_id == "1" ? 'selected' : ''}}>Himpunan</option>
                          <option value="2" {{$mahasiswa->organization_id == "2" ? 'selected' : ''}}>BEM</option>
                        </select>
                      </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
@endsection