@extends('app')
@section('content')
<div class="row">
  <div class="col-xl-5">
    <img class="img-fluid" src="assets/app/media/img/misc/fellowship.jpg">
    <!--end:: Widgets/Blog-->
  </div> 
  <div class="col-xl-7">
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
              {!! $new->article !!}
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

<!--begin::Modal-->
<div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>This action is irreversible. Your profile will be deleted in <bold>FACES COMMUNITY</bold>.</p>
      </div>
      <div class="modal-footer">
        {!! Form::open(['method' => 'post',  'action' => 'FellowsController@leave', 'class' => 'm-form m-form--fit m-form--label-align-right']) !!}
        {{ csrf_field() }}
        <input type="hidden" name="facescode" value="{{ $fellow->facesCode }}">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Leave</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
@stop


