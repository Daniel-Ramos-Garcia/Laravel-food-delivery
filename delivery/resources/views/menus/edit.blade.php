@extends('layout')
@section('content')
<div class="app-main__inner">

                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-ribbon icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Menús Dashboard
                                        <div class="page-title-subheading">Platillos que ofrece el afiliado
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block">
                                      <a href="{{ route('menus.index') }}">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-danger">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-undo fa-w-20"></i>
                                            </span>
                                            Regresar
                                        </button>
                                      </a>
                                    </div>
                                    </div>
                                </div>
                        </div>

<!-- main section -->
<div class="row">
  @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
  @endif
</div>

<form action="{{ route('menus.update',$menu->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
           <div class="col-xs-6 col-sm-6 col-md-6">
             <div class="form-group">
                   <strong>Nombre:</strong>
                   <input type="text" name="nombre" class="form-control" value="{{$menu->nombre}}">
               </div>
           </div>

           <div class="col-xs-6 col-sm-6 col-md-6">
             <div class="form-group">
                   <strong>Precio:</strong><br>
                   <input type="number" name="precio" min="0.00" step="0.01" placeholder="0.00" value="{{$menu->precio}}"/>
                   <select class="btn-light" name="moneda">
                       <option value="USD$" <?php if($menu->moneda=='USD$'){ echo "selected"; } ?> >USD$</option>
                       <option value="Bs." <?php if($menu->moneda=='Bs.'){ echo "selected"; } ?> >Bs.</option>
                   </select>
               </div>
           </div>
           <div class="col-xs-6 col-sm-6 col-md-6">
             <div class="form-group">
                   <strong>¿Qué Incluye?</strong><br>
                   <textarea name="descripcion" cols="30">{{$menu->descripcion}}</textarea>
             </div>
           </div>

       <div class="col-xs-6 col-sm-6 col-md-6">
         <div class="form-group">
               <button type="submit" class="btn btn-success">Modificar</button>
           </div>
       </div>

      </div>
</form>


<!-- fin main -->
@endsection
