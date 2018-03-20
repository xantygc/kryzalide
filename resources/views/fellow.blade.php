@extends('app')
@section('content')
<div class="row">
  <div class="col-xl-7">
    <img class="img-fluid" src="assets/app/media/img/misc/fellowship.jpg">
    <!--end:: Widgets/Blog-->
  </div>
  <div class="col-xl-5">
    <div class="text-center">
      <img style="max-height: 267px" class="img-fluid" src="{{ $fellow->photo }}">
    </div>
    <div class="m-portlet">
      <div class="m-portlet__body">
        <div class="m-widget6">
          <div class="m-widget6__body m--align-center">
            <a class="m-btn m-btn--pill btn btn-outline-danger" data-toggle="modal" data-target="#m_modal_1" href="#" role="button">Abandonar</a>
          </div>
          <br/>
          <div class="m-widget6__body m--align-center">
            {!! Form::open(['method' => 'post',  'action' => 'RelationshipsController@addRelationship', 'class' => 'm-form m-form--fit m-form--label-align-right']) !!}
                {{ csrf_field() }}
                <div class="m-m-form m-form--fit m-form--label-align-rightportlet__body form-row">
                    <div class="col form-group m-form__group">
                        <input required="true" maxlength="7" type="text" class="form-control m-input" name="padrino" id="padrino" placeholder="Introduce token de padrino">
                    </div>
                    <div class="col m--align-left">
                        <button type="submit" class="btn btn-outline-brand">Enviar</button>
                        <button type="button" data-toggle="modal" data-target="#m_modal_1_2" class="btn btn-outline-brand">Ver padrinos</button>
                    </div>
                </div>
                <input type="hidden" name="apadrinado" value="{{ $fellow->facesCode }}">
                <input type="hidden" name="facescode" value="{{ $fellow->facesCode }}">
            {!! Form::close() !!}
            {!! Form::open(['method' => 'post',  'action' => 'RelationshipsController@addRelationship', 'class' => 'm-form m-form--fit m-form--label-align-right']) !!}
                {{ csrf_field() }}
                <div class="m-m-form m-form--fit m-form--label-align-rightportlet__body form-row">
                    <div class="col form-group m-form__group">
                        <input required="true" maxlength="7" type="text" class="form-control m-input" name="apadrinado" id="apadrinado" placeholder="Introduce token de apadrinado">
                    </div>
                    <div class="col m--align-left">
                        <button type="submit" class="btn btn-outline-brand">Enviar</button>
                        <button type="button" data-toggle="modal" data-target="#m_modal_1_3" class="btn btn-outline-brand">Ver apadrinados</button>
                    </div>
                </div>
                <input type="hidden" name="padrino" value="{{ $fellow->facesCode }}">
                <input type="hidden" name="facescode" value="{{ $fellow->facesCode }}">
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>

    <!--end:: Widgets/Sales States-->
  </div>
</div>
<div class="row m-row--no-padding m-row--col-separator-xl">
  <div class="col-md-12 col-lg-6 col-xl-3">
    <!--begin::Total Profit-->
    <div class="m-widget24">           
        <div class="m-widget24__item">
            <h4 class="m-widget24__title">
                Fellows activos
            </h4><br>
            <span class="m-widget24__desc">
                en la comunidad 
            </span>
            <span class="m-widget24__stats m--font-brand">
                {{Session::get('fellows')}}
            </span>   
        </div>              
    </div>
    <!--end::Total Profit-->
  </div>
  <div class="col-md-12 col-lg-6 col-xl-3">
    <!--begin::New Feedbacks-->
    <div class="m-widget24">
       <div class="m-widget24__item">
            <h4 class="m-widget24__title">
                Likes
            </h4><br>
            <span class="m-widget24__desc">
                totales
            </span>
            <span class="m-widget24__stats m--font-info">
                {{Session::get('likes')}}
            </span>   
            <div class="m--space-10"></div>
        </div>    
    </div>
    <!--end::New Feedbacks--> 
  </div>
  <div class="col-md-12 col-lg-6 col-xl-3">
    <!--begin::New Orders-->
    <div class="m-widget24">
      <div class="m-widget24__item">
            <h4 class="m-widget24__title">
                Padrinos
            </h4><br>
            <span class="m-widget24__desc">
                en la comunidad
            </span>
            <span class="m-widget24__stats m--font-danger">
                {{Session::get('padrinos')}}
            </span>   
            <div class="m--space-10"></div>
        </div>    
    </div>
    <!--end::New Orders--> 
  </div>
  <div class="col-md-12 col-lg-6 col-xl-3">
    <!--begin::New Users-->
    <div class="m-widget24">
       <div class="m-widget24__item">
            <h4 class="m-widget24__title">
                Apadrinados
            </h4><br>
            <span class="m-widget24__desc">
                en la comunidad
            </span>
            <span class="m-widget24__stats m--font-success">
                {{Session::get('apadrinados')}}
            </span>   
            <div class="m--space-10"></div>
        </div>    
    </div>
    <!--end::New Users--> 
  </div>
</div>

<!--begin::Modal-->
<div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Abandonar Faces Community</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>Esta acción es irreversible. Si continúa no podrá volver a acceder a <bold>FACES COMMUNITY</bold>.</p>
      </div>
      <div class="modal-footer">
        {!! Form::open(['method' => 'post',  'action' => 'FellowsController@leave', 'class' => 'm-form m-form--fit m-form--label-align-right']) !!}
        {{ csrf_field() }}
        <input type="hidden" name="facescode" value="{{ $fellow->facesCode }}">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-danger">Abandonar</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->
<!--begin::Modal-->
<div class="modal fade" id="m_modal_1_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Padrinos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <div class="m-scrollable" data-scrollbar-shown="true" data-scrollable="true" data-max-height="200">
            @foreach(Session::get('listaPadrinos') as $key => $padrino)
              <p>{{$padrino}}</p>
            @endforeach
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->
<!--begin::Modal-->+
<div class="modal fade" id="m_modal_1_3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apadrinados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <div class="m-scrollable" data-scrollbar-shown="true" data-scrollable="true" data-max-height="200">
            @foreach(Session::get('listaApadrinados') as $key => $apadrinado)
              <p>{{$apadrinado}}</p>
            @endforeach
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!--end::Modal-->
@stop


