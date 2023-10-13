@extends('layouts.layout')
@section('content')
<div class="content-wrapper">
          <div class="row">
            <div class="col-lg-9 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Demande</h4>
                  <div class="table-responsive pt-3">
                    <table id="marques" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            Nom
                          </th>
                          <th>
                            Prenom
                          </th>
                          <th>
                            Revservation
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
                             {{ $demande['apprenant']['nom'] }}                          
                          </td>
                          <td>
                             {{ $demande['apprenant']['prenom'] }}                          
                          </td>
                          <td>
                             {{ $demande['plage_horaire']['jour_semaine'] }}                          
                          </td>
                          <td>
                          @if($demande['status']==1)
                             <a class="updateDemandeStatus" id="demande-{{$demande['id']}}" demande_id="{{$demande['id']}}" href="javascript:void(0)">
                             <i  style="font-size: 25px;" class="mdi mdi-bookmark-check" status="Active"></i>
                             </a>
                             @else
                             <a class="updateDemandeStatus" id="demande-{{$demande['id']}}" demande_id="{{$demande['id']}}" href="javascript:void(0)">
                             <i  style="font-size: 25px;" class="mdi mdi-bookmark-outline" status="Inactive"></i>
                             </a>
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
