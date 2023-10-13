@extends('layouts.layout')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                @if (Session::has('success_message'))
                             <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success:</strong> {{ Session::get('success_message')}}
                                <button type="button" class="Close" data-dismiss="alert" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                                </button>
                             </div>
                     @endif
                  <h4 class="card-title">Apprenant</h4>
                  <!-- <p class="card-description">
                    Add class <code>.table-bordered</code>
                  </p> -->
                  <div class="table-responsive pt-3">
                    <table id="apprenants" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Apprenant ID
                          </th>
                          <th>
                            Nom
                          </th>
                          <th>
                            Prenom
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                           Status
                          </th>
                          <th>
                           Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($apprenantsActifs as $apprenantsActif)
                        <tr>
                          <td>
                            {{ $apprenantsActif['id'] }}
                          </td>
                          <td>
                            {{ $apprenantsActif['nom' ]}}
                          </td>
                          <td>
                            {{$apprenantsActif['prenom']}}
                          </td>
                          <td>
                            {{$apprenantsActif['email']}}
                          </td>
                            <td>
                            @if($apprenantsActif['status']==1)
                             <a class="updateApprenantStatus" id="apprenant-{{$apprenantsActif['id']}}" apprenant_id="{{$apprenantsActif['id']}}" href="javascript:void(0)">
                             <i  style="font-size: 25px;" class="mdi mdi-bookmark-check" status="Active"></i>
                             </a>
                             @else
                             <a class="updateAprprenantStatus" id="apprenant-{{$apprenantsActif['id']}}" apprenant_id="{{$apprenantsActif['id']}}" href="javascript:void(0)">
                             <i  style="font-size: 25px;" class="mdi mdi-bookmark-outline" status="Inactive"></i>
                             </a>
                             @endif
                            </td>
                            <td>
                            @if($apprenantsActif['status']==0)
                              <a  title="Supprimer Apprenant"  class="confirmDelete" href="javascript:void(0)" module="apprenantsActif" moduleid="{{ $apprenantsActif['id'] }}">
                                  <i style="font-size: 25px;" class="mdi mdi-file-excel-box"></i>
                              </a>
                             @endif
                             @if($apprenantsActif['status']==1)
                             <a href="">
                             <i  style="font-size: 25px;" class="mdi mdi-file-document"></i>
                             </a>
                          @endif
                            </td>
                          </td>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
     </div>

     <script>
      
     </script>

@endsection