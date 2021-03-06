@extends('layout')
@section('content')

<div class="app-main__inner">

                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-map-2 icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Zonas Dashboard
                                        <div class="page-title-subheading">Zonas de la Ciudad donde se hace el delivery.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    
                                    </div>
                                </div>
                        </div>
<div class="row">
  @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
  @endif

<!-- DataTable Grupos -->
          <div class="container">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">Zonas</h6>
            </div>
            <img class="image img-fluid" src="{{asset('public/images/zonas.jpg')}}" width="100%">
            <div class="card-body">
              <div class="table-responsive bg-white">
                <!-- container varios -->

                <div class="container-perm">
                <!-- fin container -->

                <table class="table table-bordered" id="tabla" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($zonas as $row)
                    <tr>
                      <td>{{ $row->nombre }}</td>
                      <td>{{ $row->descripcion }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              </div>
            </div>
          </div>
<!-- FIN DATATABLE-->

</div>
@endsection
