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
            <div class="capa"></div>
            <img class="d-block w-100" src="{{ asset('img/carousel/formatura.JPG') }}" alt="First slide" height="500">
                <div class="container">
                        <div class="carousel-caption">
                        <h1>Depoimentos</h1>
                        <p>Devido ao grande fluxo de ex-alunos do curso de Sistemas de Informação, o Portal do Egresso disponibiliza uma área reservada para depoimentos de egressos formados na área em questão já atuando no mercado de trabalho.
                        </p>
                        <p><a class="btn btn-success btn-lg" href="{{ route('depoimentos') }}" role="button">veja mais</a></p>
                        </div>
                    </div>
                </div>
            <div class="carousel-item">
            <div class="capa"></div>
            <img class="d-block w-100" src="{{ asset('img/carousel/paletra-02.jpg') }}" alt="Second slide" height="500">
                <div class="container">
                    <div class="carousel-caption">
                      <h1>Eventos</h1>
                      <p>Durante o ano são realizados diversos eventos que visão fomentar o desenvolvimento intelectual de seus alunos e ex-alunos, assim sendo o Portal do Egresso disponibiliza uma sessão inteiramente voltada para eventos internos do Campus de São João Evangelista.</p>
                      <p><a class="btn btn-success btn-lg" href="{{ route('eventos') }}" role="button">Veja mais</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
            <div class="capa"></div>
            <img class="d-block w-100" src="{{ asset('img/carousel/oportunidades.png') }}" alt="Third slide" height="500">
                <div class="container">
                    <div class="carousel-caption">
                      <h1>Oportunidade</h1>
                      <p>O sucesso no mercado de trabalho e na vida pessoal dos nossos egressos é, também, o nosso sucesso. Devido á isso o Portal do Egresso disponibiliza uma guia com varias oportunidades de emprego sempre atualizadas para egressos cadastrados no nosso portal.</p>
                      <p><a class="btn btn-success btn-lg" href="{{ route('oportunidades') }}" role="button">veja mais</a></p>
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
                  <div class="carousel-inner carousel-inner-depoimentos" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item carousel-item-depoimentos active">

                      <div class="row">
                        <div class="col-md-4">
                          <div class="card mb-2 shadow-sm">
                            <div class="card-body text-center ">
                                <img class="rounded-circle rounded-circle-depoimentos" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
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
                                <img class="rounded-circle rounded-circle-depoimentos" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
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
                                <img class="rounded-circle rounded-circle-depoimentos" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
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
                    <div class="carousel-item carousel-item-depoimentos">

                      <div class="row">
                        <div class="col-md-4">
                          <div class="card mb-2 shadow-sm">
                            <div class="card-body text-center">
                                <img class="rounded-circle rounded-circle-depoimentos" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
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
                                <img class="rounded-circle rounded-circle-depoimentos" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
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
                                <img class="rounded-circle rounded-circle-depoimentos" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
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
                    <div class="carousel-item carousel-item-depoimentos">

                      <div class="row">
                        <div class="col-md-4">
                          <div class="card mb-2 shadow-sm">
                            <div class="card-body text-center">
                                <img class="rounded-circle rounded-circle-depoimentos" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
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
                                <img class="rounded-circle rounded-circle-depoimentos" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
                                  alt="Card image cap">
                              <h4 class="card-title">Card title</h4>
                              <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the
                                card's content. sandkjbkashdb as kjd as daksd ash kk da </p>
                              <a class="btn btn-outline-success">Button</a>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                          <div class="card mb-2 shadow-sm">
                            <div class="card-body text-center">
                                <img class="rounded-circle rounded-circle-depoimentos" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
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
    <div class="capa" ></div>
    <div class="container marketing">
      <div class="featurette text-center  ">
        <h1 class="title-section">Eventos</h1>
      </div>
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
          <img  width="100%" height="300" src="{{ asset('img/home/sia.jpg') }}"  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="SIA">
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
          <img  width="100%" height="300" src="{{ asset('img/home/eg1.jpg') }}"  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Encontro1">
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

        .title-section{
            padding-bottom: 2rem;
            padding-top: 2rem;
            color: #389c42;
            font-weight: 400;
            font-size: 2.8rem;
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
        background-image: url("img/carousel/paletra.jpg");
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
        font-size: 2.5rem;
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

      .carousel-item {
        height: 65vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }


    </style>
@endsection