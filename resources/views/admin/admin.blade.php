@extends('layouts.layout')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">{{ $title }}</h4>
                  <!-- <p class="card-description">
                    Add class <code>.table-bordered</code>
                  </p> -->
                  <div class="table-responsive pt-3">
                    <table id="apprenants" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            Admin ID
                          </th>
                          <th>
                            Nom
                          </th>
                          <th>
                            Type
                          </th>
                          <th>
                            Telephone
                          </th>
                          <th>
                            Email
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
                        @foreach($admins as $admin)
                        <tr>
                          <td>
                            {{ $admin['id'] }}
                          </td>
                          <td>
                            {{ $admin['nom' ]}}
                          </td>
                          <td>
                            {{$admin['type']}}
                          </td>
                          <td>
                            {{$admin['telephone']}}
                          </td>
                          <td>
                            {{$admin['email']}}
                          </td>
                          <td>
                          @if($admin['status']==1)
                             <a class="updateAdminStatus" id="admin-{{$admin['id']}}" admin_id="{{$admin['id']}}" href="javascript:void(0)">
                             <i  style="font-size: 25px;" class="mdi mdi-bookmark-check" status="Active"></i>
                             </a>
                             @else
                             <a class="updateAdminStatus" id="admin-{{$admin['id']}}" admin_id="{{$admin['id']}}" href="javascript:void(0)">
                             <i  style="font-size: 25px;" class="mdi mdi-bookmark-outline" status="Inactive"></i>
                             </a>
                             @endif
                          </td>
                          <td>
                          @if($admin['type']=="apprenant")
                          <a  title="Supprimer Apprenant"  class="confirmDelete" href="javascript:void(0)" module="admin" moduleid="{{ $admin['id'] }}">
                                  <i style="font-size: 25px;" class="mdi mdi-file-excel-box"></i>
                              </a>
                          @endif
                          @if($admin['type']=="admin")
                          <a href="">
                          <i  style="font-size: 25px;" class="mdi mdi-file-document"></i>
                          </a>
                          <a  title="Edit admin" href="{{ url('admin/update') }}">
                                  <i style="font-size: 25px;" class="mdi mdi-pencil-box"></i>
                              </a>
                          @endif
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