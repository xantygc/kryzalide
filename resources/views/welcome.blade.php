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
                        <input required="true" maxlength="7" type="text" class="form-control m-input" name="facestoken" id="facestoken" placeholder="Enter your token">
                    </div>
                    <div class="col m--align-left">
                        <button type="submit" class="btn btn-outline-brand">Send</button>
                        <button type="button" data-toggle="modal" data-target="#fellow_activate_modal" class="btn btn-outline-brand">Activate</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
        <br/>
        <div class="m-widget6">
          <div class="m-widget6__body">
            <div class="m-widget6__text m--align-center">
                <a class="m-btn m-btn--pill btn btn-outline-warning" onclick="wantToKnowMore();" href="#" role="button">What's this ? I want to know more !</a>
                <a class="m-btn m-btn--pill btn btn-outline-warning" onclick="letMeIn();" href="#" role="button">I am aware of this ! Let me in !</a>
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
              Let's cut to the chase: there is nothing misleading about this initiative.<br/> We pledge everything around this project will be carried out whilst complying with fundamental texts guaranteeing Human and Environmental rights as recognised by the United Nations.
            </div><br/>
            <div class="m-widget6__body">
              The goal of this initial phase will be to build a first fellowship based on real encounters. Where do we start? We've traveled from Europe to New Zealand to start a two-week roadtrip and launch the <b>FACES COMMUNITY</b>.
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
              News
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
                Active Fellows
            </h4><br>
            <span class="m-widget24__desc">
                in Faces Community 
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
                in Faces Community
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
                Referrer of
            </h4><br>
            <span class="m-widget24__desc">
                in Faces Community
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
                Referrered by
            </h4><br>
            <span class="m-widget24__desc">
                in Faces Community
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

<div class="modal fade" id="fellow_activate_modal" tabindex="-1" role="dialog" aria-labelledby="fellowAcitvateModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Activate your token</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {!! Form::open(['method' => 'post', 'enctype' => 'multipart/form-data',  'action' => 'FellowsController@activate', 'class' => 'm-form m-form--fit m-form--label-align-right']) !!}
      {{ csrf_field() }}
      <div class="modal-body">
          <div class="col form-group">
              <label for="token">Token</label>
              <input required="true" maxlength="7" type="text" class="form-control m-input" name="facestoken" id="facestoken" placeholder="Enter your token">
          </div>
          <div class="form-group">
            <label for="photo">Photo</label>
            <input required="true" type="file" name="photo" class="form-control-file" id="photo">
          </div>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="facescode" value="{{ $fellow->facesCode }}">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Send</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@stop