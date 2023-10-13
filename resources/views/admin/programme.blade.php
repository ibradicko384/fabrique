@extends('layouts.layout')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Programme</h4>
                  <!-- <p class="card-description">
                    Add class <code>.table-bordered</code>
                  </p> --> 

                  <a style="max-width: 150px ;  float: right; display:inline-block;" href="{{ url('admin/adapprenant')}}" class="btn btn-block btn-primary">Ajouter Section</a>

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
                            Actions
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($plagehoraires as $plagehoraire)
                        <tr>
                          <td>
                            {{ $plagehoraire['id']}}
                          </td>
                          <td>
                            {{ $plagehoraire['jour_semaine']}}
                          </td>
                          <td>
                            {{ $plagehoraire['capcitermaxe']}}
                          </td>
                          <td>
                          <a href="{{ url('admin/adapprenant/'.$plagehoraire['id'])}}">
                          <i  style="font-size: 25px;" class="mdi mdi-pencil-box"></i>
                          </a>

                          <a class="confirmDelete" href="javascript:void(0)" module="plagehoraire" moduleid="{{$plagehoraire['id']}}">
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
</div>

 @endsection
