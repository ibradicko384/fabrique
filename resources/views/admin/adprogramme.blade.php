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
                  <h4 class="card-title">Ajouter un Programme</h4>
                  @if($errors->any())
                         <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                @foreach($errors->all() as $error)
                                   <li>{{ $error }}</li>
                                   @endforeach
                                 <button type="button" class="Close" data-dismiss="alert" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                </button>
                             </div>
                             @endif
                             
                  <form class="forms-sample" @if(empty($plagehoraire['id'])) action="{{url('admin/adapprenant')}}"
                         @else 
                         action="{{url('admin/adapprenant/'.$plagehoraire['id'])}}"
                         @endif
                         method="post" enctype="multipart/form-data">
                           @csrf


                    <div class="form-group">
                      <label for="jour_semaine"></label>
                      <input type="text" class="form-control" id="jour_semaine" name="jour_semaine" placeholder="Entrer le jour_semaine de la marque"
                      @if(!empty($plagehoraire['jour_semaine'])) value="{{$plagehoraire['jour_semaine']}}" @else value="{{old('jour_semaine')}}" @endif>
                     </div>

                     <div class="form-group">
                      <label for="capcitermaxe"></label>
                      <input type="Number" class="form-control" id="capcitermaxe" name="capcitermaxe" placeholder="Entrer le nombre"
                      @if(!empty($plagehoraire['capcitermaxe'])) value="{{$plagehoraire['capcitermaxe']}}" @else value="{{old('capcitermaxe')}}" @endif>
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