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
                  <h4 class="card-title">Envoyer une demande</h4>
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
                             
                  <form class="forms-sample" action="{{url('apprenant/ajouter')}}" method="post" >
                           @csrf
                    <div class="form-group">
                      <label for="jour_semaine"></label>
                      <select  class="form-control" id="plage_horaires_id" name="plage_horaires_id"
                                style="color: #000;"
                                >
                                  <option value="">Selecte</option>
                                  @foreach($getplageHoraires as $plageHoraire)
                                  <option value="{{ $plageHoraire['id'] }}" @if(!empty($category['plageHoraire_id'])
                                  && $category['plageHoraire_id']==$plageHoraire['id']) selected=""
                                  @endif
                                  >{{ $plageHoraire['jour_semaine'] }}</option>
                                  @endforeach
                              </select>
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