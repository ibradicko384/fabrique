@extends('layouts.layout')
@section('content')
<div class="content-wrapper">
          <div class="row">
            <div class="col-lg-9 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Demande</h4>
                  <a style="max-width: 150px ;  float: right; display:inline-block;" href="{{ url('apprenant/ajouter')}}" class="btn btn-block btn-primary">Ajouter Section</a>
                  @if (Session::has('success_message'))
                             <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success:</strong> {{ Session::get('success_message')}}
                                <button type="button" class="Close" data-dismiss="alert" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                </button>
                             </div>
                     @endif
                  <div class="table-responsive pt-3">
                    <table id="marques" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            Jours
                          </th>
                          <th>
                            Nombre
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Actions
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($demandes as $demande)
                        <tr>
                          <td>
                            {{ $demande['id']}}
                          </td>
                          <td>
                             {{ $demande['plage_horaire']['jour_semaine'] }}                          
                          </td>
                          <td>
                             {{ $demande['plage_horaire']['capcitermaxe'] }}                          
                          </td>
                          <td>
                              @if ($demande->status == 0)  
                                  <h5 class="text-danger"> En attente</h5>
                              @else
                                   <h5>Approuvé</h5>
                              @endif
                           </td>
                          <td>
                          <a class="confirmDelete" href="javascript:void(0)" module="demande" moduleid="{{$demande['id']}}">
                          <i  style="font-size: 25px;" class="mdi mdi-file-excel-box"></i>
                          </a>
                         </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
 @endsection
