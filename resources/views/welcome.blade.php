@extends('app')
@section('content')
            <div class="row">
              <div class="col-xl-4">
                <!--begin:: Widgets/Blog-->
                <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force">
                  <div class="m-portlet__head m-portlet__head--fit">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-action">
                        <!--button type="button" class="btn btn-sm m-btn--pill  btn-brand">
                          Blog
                        </button-->
                      </div>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <div class="m-widget19">
                      <div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides" style="min-height-: 286px">
                        <!--img src="assets/app/media/img//blog/blog1.jpg" alt=""-->
                        <!--h3 class="m-widget19__title m--font-light">
                          Introducing New Feature
                        </h3-->
                        <div class="m-widget19__shadow"></div>
                      </div>
                      <div class="m-widget19__content">
                        <div class="m-widget19__header">
                          <!--div class="m-widget19__user-img">
                            <img class="m-widget19__img" src="assets/app/media/img//users/user1.jpg" alt="">
                          </div-->
                          <div class="m-widget19__info">
                            <span class="m-widget19__username">
                              El mejor momento de mi vida
                            </span>
                            <br>
                            <span class="m-widget19__time">
                              12-12-2018
                            </span>
                          </div>
                        </div>
                        <div class="m-widget19__body">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry scrambled it to make text of the printing and typesetting industry scrambled a type specimen book text of the dummy text of the printing printing and typesetting industry scrambled dummy text of the printing.
                        </div>
                      </div>
                      <!--div class="m-widget19__action">
                        <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">
                          Read More
                        </button>
                      </div-->
                    </div>
                  </div>
                </div>
                <!--end:: Widgets/Blog-->
              </div>
              <div class="col-xl-4">
                <!--begin:: Widgets/Announcements 1-->
                <div class="m-portlet m--bg-metal m-portlet--bordered-semi m-portlet--skin-dark ">
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
                    <!--begin::Widget 7-->
                    <div class="m-widget7 m-widget7--skin-dark">
                      <div class="m-widget7__desc">
                        Lo dejamos claro: esta iniciativa no te llevará a ningún lado sospechoso. Nos comprometemos a que todo lo que se hará cumpla con los textos sobre los Derechos Humanos que reconocen las Naciones Unidas.
                      </div>
                      <div class="m-widget7__desc">
                        En esta primera etapa se trata de formar una comunidad, a base de unos encuentros reales. ¿Dónde estamos empezando? Desde Europa, hemos viajado hasta Nueva Zelanda. Hemos empezado un <i>roadtrip</i> de 2 semanas para iniciar la <b>FACES COMMUNITY</b>.
                      </div>
                    </div>
                    <!--end::Widget 7-->
                  </div>
                </div>
                <!--end:: Widgets/Announcements 1-->
              </div>
              <div class="col-xl-4">
                <!--begin:: Widgets/Sales States-->
                <div class="m-portlet m-portlet--full-height ">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Novedades
                        </h3>
                      </div>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    @foreach($news as $key => $new)
                    <div class="m-widget6">
                      <div class="m-widget6__head">
                        <div class="m-widget6__item">
                          <span class="m-widget6__caption">
                            {{ $new->title }}
                          </span>
                        </div>
                      </div>
                      <div class="m-widget6__body">
                        <div class="m-widget6__text">
                          {{ $new->article }}
                        </div>
                      </div>
                      <div class="m-widget6__foot">
                        <div class="m-widget6__action m--align-right">
                          <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">
                            Export
                          </button>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
                <!--end:: Widgets/Sales States-->
              </div>
            </div>

@stop