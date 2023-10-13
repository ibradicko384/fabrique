@extends('layouts.layout')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Paramètre</h3>
                  <!-- <h6 class="font-weight-normal mb-0">Modifier le mot de passe</h6> -->
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Modifier les details de l'admin</h4>
                         @if (session('success'))
                             <div class="alert alert-success">
                                <button type="button" class="Close" data-dismiss="alert" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                </button>
                              {{ session('success') }}
                             </div>
                           @endif
                           @if (session('error'))
                             <div class="alert alert-success">
                              {{ session('error') }}
                             </div>
                           @endif
                  <form class="forms-sample" action="{{url('admin/update')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                      <label >Admin type</label>
                      <input type="text" class="form-control"  value="{{Auth::guard('admin')->user()->type}}" readonly="">
                    </div>
                    <div class="form-group" >
                      <label>Admin nom d'utilisateur/Email</label>
                      <input type="email" class="form-control" id="admin_email" name="admin_email"  value="{{Auth::guard('admin')->user()->email}}">
                    </div>

                    <div class="form-group">
                      <label for="admin_name">Nom</label>
                      @error('admin_name')
                             <div class="text text-danger">
                             {{$message}}
                           </div>
                      @enderror
                      <input type="text" class="form-control" id="admin_name" name="admin_name" placeholder=""
                      value="{{Auth::guard('admin')->user()->nom}}" >
                      <div id="check_password"></div>
                    <div class="form-group">
                      <label for="admin_mobile">Mobile</label>
                      @error('admin_mobile')
                             <div class="text text-danger">
                             {{$message}}
                           </div>
                      @enderror
                      <input type="text" class="form-control" id="admin_mobile" name="admin_mobile" placeholder=""
                      value="{{Auth::guard('admin')->user()->telephone}}" maxlentgh="10"
                      minlentgh="10">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
 </div>
@endsection