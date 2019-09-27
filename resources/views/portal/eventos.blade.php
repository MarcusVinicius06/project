@extends('portal.layouts.app')

@section('content')

@component('portal.components.header', ['urlImg'=> asset('img/eventos-header3.jpg') ])
    <h1>Eventos</h1>
@endcomponent

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


@endsection