@extends('portal.layouts.app')

@section('content')
<!-- section carousel -->
<section>
    <div id="carouselExampleIndicators" class="carousel slide carousel-padding-top" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="http://placehold.it/900x350" alt="First slide">
                <div class="container">
                        <div class="carousel-caption text-left">
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="http://placehold.it/900x350" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                      <h1>One more for good measure.</h1>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                      <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="http://placehold.it/900x350" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                      <h1>One more for good measure.</h1>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                      <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev carousel-padding-top" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next carousel-padding-top" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- section sobre -->
<section class="text-center">
    <div class="container d-flex align-items-center section-sobre">
        <div>
            <h1 class="title-section">Sobre</h1>
            <p class="lead">Bem-vindo ao Portal do Egresso IFMG - SJE uma rede de comunicação entre egressos. Um portal no qual procura sanar dificuldades e aprimorar os relacionamentos entre alunos e ex- alunos.</p>
            <a href="{{ route('sobre') }}" class="btn btn-outline-success btn-lg my-2">Saiba mais</a>
        </div>
    </div>
</section>

<!-- section Depoimentos -->
<section class="bg-light py-4">
        <div class="text-center">
          <h1 class="title-section">Depoimentos</h1>
        </div>
        <div class="container my-4">
                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                  <!-- controls -->
                    <a class="controls carousel-control-prev carousel-padding-top" href="#multi-item-example" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="controls carousel-control-next carousel-padding-top" href="#multi-item-example" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
                  <!-- /Controls-->

                  <!--Slides-->
                  <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active">

                      <div class="row">
                        <div class="col-md-4">
                          <div class="card mb-2 shadow-sm">
                            <div class="card-body text-center ">
                                <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                  alt="Card image cap">
                              <h4 class="card-title">Card title</h4>
                              <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                              <a class="btn btn-outline-success">Button</a>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                          <div class="card mb-2 shadow-sm">
                            <div class="card-body text-center">
                                <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                alt="Card image cap">
                              <h4 class="card-title">Card title</h4>
                              <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                              <a class="btn btn-outline-success">Button</a>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                          <div class="card mb-2 shadow-sm">
                            <div class="card-body text-center">
                                <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                                  alt="Card image cap">
                              <h4 class="card-title">Card title</h4>
                              <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                              <a class="btn btn-outline-success">Button</a>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item">

                      <div class="row">
                        <div class="col-md-4">
                          <div class="card mb-2 shadow-sm">
                            <div class="card-body text-center">
                                <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                                  alt="Card image cap">
                              <h4 class="card-title">Card title</h4>
                              <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                              <a class="btn btn-outline-success">Button</a>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                          <div class="card mb-2 shadow-sm">
                            <div class="card-body text-center">
                                <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                                  alt="Card image cap">
                              <h4 class="card-title">Card title</h4>
                              <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                              <a class="btn btn-outline-success">Button</a>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                          <div class="card mb-2 shadow-sm">
                            <div class="card-body text-center">
                                <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                                  alt="Card image cap">
                              <h4 class="card-title">Card title</h4>
                              <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                              <a class="btn btn-outline-success">Button</a>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <!--/.Second slide-->

                    <!--Third slide-->
                    <div class="carousel-item">

                      <div class="row">
                        <div class="col-md-4">
                          <div class="card mb-2 shadow-sm">
                            <div class="card-body text-center">
                                <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
                                  alt="Card image cap">
                              <h4 class="card-title">Card title</h4>
                              <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                              <a class="btn btn-outline-success">Button</a>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                          <div class="card mb-2 shadow-sm">
                            <div class="card-body text-center">
                                <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
                                  alt="Card image cap">
                              <h4 class="card-title">Card title</h4>
                              <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                              <a class="btn btn-outline-success">Button</a>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                          <div class="card mb-2 shadow-sm">
                            <div class="card-body text-center">
                                <img class="rounded-circle" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
                                  alt="Card image cap">
                              <h4 class="card-title">Card title</h4>
                              <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                              <a class="btn btn-outline-success">Button</a>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <!--/.Third slide-->

                  </div>
                  <!--/.Slides-->

                </div>
                <!--/.Carousel Wrapper-->


              </div>
</section>

<!-- section Evento -->
<section class="section events imagem" style="padding: 3.5rem 0;"  >
    <div class="capa  " ></div>
    <div class="container marketing">
      <!-- START THE FEATURETTES -->
      <div class="row featurette">
        <div class="col-md-7">
          <a href="https://sia.sje.ifmg.edu.br/2019/" target="_blank" class="link-home">
            <h1  class="featurette-heading">Seminário de Integração Acadêmica(SIA)</h1>
          </a>
          <p class="lead">
            O SIA tem por finalidade a interdisciplinaridade entre os cursos de graduação disponíveis no IFMG - Campus São João Evangelista:
            Administração, Agronomia, Ciências Biológicas, Engenharia Florestal, Matemática e Sistemas de Informação. Durante a semana do evento,
            os estudantes terão a oportunidade de apresentar e participar de trabalhos, minicursos, palestras, entre outras atividades nas diversas
            áreas do conhecimento, aproveitando o momento para desenvolver interesse pela produção científica e aprimorar seus conhecimentos.
          </p>
        </div>
        <div class="col-md-5">
          <img  width="100%" height="300" src="http://placehold.it/600x350"  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Sia">
        </div>
      </div>
      <hr class="my-4">
      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <a href="https://www.sje.ifmg.edu.br/portal/index.php/noticias/104-alunos-de-congonhas-entre-os-melhores-das-americas" target="_blank" class="link-home">
          <h1 class="featurette-heading">Encontro de Ex-alunos do IFMG-SJE</h1></a>
          <p class="lead"> O Encontro de Egressos é um dia no qual todos que já passaram pela Instituição são convidados a retornarem ao Campus, para uma celebração dos bons momentos e das amizades feitas no passado. Além dos saudosos reencontros, a programação do evento proporciona atividades artísticas e culturais.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <!-- <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" data-src="holder.js/600x400?auto=yes&theme=thumb" alt="Card image cap"> -->
          <img  width="100%" height="300" src="http://placehold.it/600x350"  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Encontro1">
        </div>
      </div>
      <!-- END THE FEATURETTES -->
    </div>
</section>

  <!-- section oportunidades -->
<section class="text-center my-4">
    <div class="container d-flex align-items-center section-sobre">
        <div>
            <h1 class="title-section">Oportunidades</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="{{ route('oportunidades') }}" class="btn btn-outline-success btn-lg my-2">Saiba mais</a>
        </div>
    </div>
</section>
@endsection

@section('portal_css')
    <style>
        .btn-outline-success {
            color: #389c42 !important;;
            border-color: #389c42;
        }

        .btn-outline-success:hover {
            color: #fff !important;
            background-color: #389c42;
            border-color: #389c42;
        }
        .title-section{
            padding-bottom: 2rem;
            padding-top: 2rem;
            color: #389c42;
            font-weight: 400;
            font-size: 50px;
            font-weight: 300;
            line-height: 1;
            letter-spacing: -.05rem;
        }
        .section-sobre{
            min-height: 25rem;
        }

        .rounded-circle{
            width: 15rem;
            height: 15rem;
        }
        .imagem {
          position: relative;
        }
        .capa {
          background: rgba(0, 0, 0, 0.5);
          width: 100%;
          height: 100%;
          position: absolute;
          top: 0;
        }
      .events{
        background-image: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg");
        background-repeat: no-repeat;
        background-size: cover;
      }

      .events>.container>.featurette{
        position: relative;
        z-index: 50;
        color: #fff;
      }

      .events .title-section{
        color: #ffffff;
      }

      .featurette-heading {
        font-weight: 400;
        line-height: 1;
        letter-spacing: -.05rem;
        font-size: 2.8rem;
      }

      .link-home{
        color:#ffffff !important;
      }
      .link-home:hover{
        color: #389C42 !important;
      }
      .link-home:link{
        text-decoration:none;
      }

      .title{
        padding-bottom: 2rem;
        padding-top: 2rem;
        color: #ffffff;
        font-weight: 400;
        font-size: 50px;
        font-weight: 300;
        line-height: 1;
        letter-spacing: -.05rem;
      }

      .controls:hover{
        background-color: #0000002e;
      }
    </style>
@endsection