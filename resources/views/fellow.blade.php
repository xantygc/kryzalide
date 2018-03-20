@extends('app')
@section('content')
<div class="row">
  <div class="col-xl-5">
    <img class="img-fluid" src="assets/app/media/img/misc/fellowship.jpg">
        <div class="m-portlet">
          <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
              <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                  Faces Community
                </h3>
              </div>
            </div>
          </div>
          <div class="m-portlet__body">
            <div class="m-widget6">
              <div class="m-widget6__body">
                <div class="m-widget6__text">
                Lo dejamos claro: esta iniciativa no te llevará a ningún lado sospechoso. Nos comprometemos a que todo lo que se hará cumpla con los textos sobre los Derechos Humanos que reconocen las Naciones Unidas.
                </div><br/>
                <div class="m-widget6__body">
                En esta primera etapa se trata de formar una comunidad, a base de unos encuentros reales. ¿Dónde estamos empezando? Desde Europa, hemos viajado hasta Nueva Zelanda. Hemos empezado un <i>roadtrip</i> de 2 semanas para iniciar la <b>FACES COMMUNITY</b>.
                </div>
              </div>
            </div>
          </div>
        </div>


    <!--end:: Widgets/Blog-->
  </div>
  <div class="col-xl-5 offset-xl-2">
    <div class="text-center">
      <img style="max-height: 267px" class="img-fluid" src="{{ $fellow->photo }}">
    </div>
    <div class="m-portlet">
      <div class="m-portlet__body">
        <div class="m-widget6">
          <div class="m-widget6__body m--align-center">
            {!! Form::open(['method' => 'post',  'action' => 'RelationshipsController@addRelationship', 'class' => 'm-form m-form--fit m-form--label-align-right']) !!}
                {{ csrf_field() }}
                <div class="m-m-form m-form--fit m-form--label-align-rightportlet__body form-row">
                    <div class="col form-group m-form__group">
                        <input required="true" maxlength="7" type="text" class="form-control m-input" name="padrino" id="padrino" placeholder="Introduce token de padrino">
                    </div>
                    <div class="col m--align-left">
                        <button type="submit" class="btn btn-outline-brand">Enviar</button>
                        <button type="button" class="btn btn-outline-brand">Ver padrinos</button>
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
                        <button type="button" class="btn btn-outline-brand">Ver apadrinados</button>
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
@stop


