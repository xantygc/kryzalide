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
              <div class="col-xl-7">
                <div class="text-center">
                  <img class="img-fluid" src="{{ $fellow->photo }}">
                </div>
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
                </div>

                <!--end:: Widgets/Sales States-->
              </div>
            </div>

@stop