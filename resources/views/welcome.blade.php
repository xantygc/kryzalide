@extends('app')
@section('content')
<div class="row">
  <div class="col-xl-5">
    <!--begin:: Widgets/Blog-->
    <img class="img-fluid" src="assets/app/media/img/misc/fellowship.jpg">
    <div class="m-portlet">
      <div class="m-portlet__body">
        <div class="m-widget6">
            
            @if($errors->any())
            <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                <strong>¡Whooops!</strong> {{ $errors->first() }}
            </div>
            @endif
            {!! Form::open(['method' => 'post',  'action' => 'FellowsController@index', 'class' => 'm-form m-form--fit m-form--label-align-right']) !!}
                {{ csrf_field() }}
                <div class="m-m-form m-form--fit m-form--label-align-rightportlet__body form-row">
                    <div class="col form-group m-form__group">
                        <input required="true" maxlength="7" type="text" class="form-control m-input" name="facestoken" id="facestoken" placeholder="Introduce tu token">
                    </div>
                    <div class="col m--align-left">
                        <button type="submit" class="btn btn-outline-brand">Enviar</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
        <br/>
        <div class="m-widget6">
          <div class="m-widget6__body">
            <div class="m-widget6__text m--align-center">
                <a class="m-btn m-btn--pill btn btn-outline-warning" onclick="wantToKnowMore()" href="#" role="button">¿Qué es? quiero saber más</a>
                <a class="m-btn m-btn--pill btn btn-outline-warning" onclick="letMeIn()" href="#" role="button">¡Os conozco! dejadme entrar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end:: Widgets/Blog-->
  </div>
  <div class="col-xl-4">
    <!--begin:: Widgets/Sales States-->
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
    <!--end:: Widgets/Sales States-->
  </div>
  <div class="col-xl-3">
    <!--begin:: Widgets/Sales States-->
    <div class="m-portlet">
      <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
          <div class="m-portlet__head-title">
            <h3 class="m-portlet__head-text">
              Novedades
            </h3>
          </div>
        </div>
      </div>
      <div class="m-portlet__body" id="inner-right">
        @foreach($news as $key => $new)
        <div class="m-widget6">
          <div class="m-widget6__head">
            <div class="m-widget6__item">
              <span class="m-widget6__caption">
                {{ $new->title }}<br/><span class="text-right" style="font-size: 10px; font-style: italic; color: grey">{{ $new->created_at }}</span>
              </span>
              <br/>
            </div>
          </div>
          <div class="m-widget6__body">
            <div class="m-widget6__text">
              {{ $new->article }}
            </div>
          </div>

          <div class="m-widget6__foot">
            <div class="m-widget6__action m--align-right">

                <span id="newslike-{{ $new->id }}">{{ $new->like }}</span>
                <a href="#" onclick="like({{ $new->id }})"><i class="la la-thumbs-o-up"></i></a>
                <span id="newsunlike-{{ $new->id }}">{{ $new->unlike }}</span>
                 <a href="#" onclick="unlike({{ $new->id }})"><i class="la la-thumbs-o-down"></i></a>
            </div>
          </div>
        </div>
        @endforeach
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