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
                        {!! Form::open(['method' => 'post',  'action' => 'FellowsController@index', 'class' => 'm-form m-form--fit m-form--label-align-right']) !!}
                            {{ csrf_field() }}
                            <div class="m-m-form m-form--fit m-form--label-align-rightportlet__body form-row">
                                <div class="col form-group m-form__group">
                                    <input required="true" maxlength="7" type="text" class="form-control m-input" name="facestoken" id="facestoken" placeholder="Introduce token de padrino">
                                </div>
                                <div class="col m--align-left">
                                    <button type="submit" class="btn btn-outline-brand">Enviar</button>
                                    <button type="submit" class="btn btn-outline-brand">Ver padrinos</button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                        {!! Form::open(['method' => 'post',  'action' => 'FellowsController@index', 'class' => 'm-form m-form--fit m-form--label-align-right']) !!}
                            {{ csrf_field() }}
                            <div class="m-m-form m-form--fit m-form--label-align-rightportlet__body form-row">
                                <div class="col form-group m-form__group">
                                    <input required="true" maxlength="7" type="text" class="form-control m-input" name="facestoken" id="facestoken" placeholder="Introduce token de apadrinado">
                                </div>
                                <div class="col m--align-left">
                                    <button type="submit" class="btn btn-outline-brand">Enviar</button>
                                    <button type="submit" class="btn btn-outline-brand">Ver apadrinados</button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                      </div>
                    </div>
                  </div>
                </div>

                <!--end:: Widgets/Sales States-->
              </div>
            </div>

@stop


