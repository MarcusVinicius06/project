@extends('portal.layouts.app')

@section('content')

@component('portal.components.header', ['urlImg'=> asset('img/eventos-header3.jpg') ])
  <h3 class="display-4">Eventos</h3>
@endcomponent

@section('portal_css')
    <style>

      .events>.container>.featurette{
        position: relative;
        z-index: 50;
      }

      /*.events .title-section{
        color: #ffffff;
      }*/

      .featurette-heading {
        font-weight: 400;
        line-height: 1;
        letter-spacing: -.05rem;
        font-size: 2.8rem;
      }

      .link-home{
        color: #389C42 !important;
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

    </style>
@endsection

<section class="section events" style="padding: 3.5rem 0;"  >
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
          <img  width="100%" height="300" src="{{ asset('img/home/sia.jpg') }}"  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Sia">
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
          <img  width="100%" height="300" src="{{ asset('img/home/eg1.jpg') }}"  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Encontro1">
        </div>
      </div>
      <hr class="my-4">
      <div class="row featurette">
          <div class="col-md-7">
            <a href="https://semanainfo.sje.ifmg.edu.br/" target="_blank" class="link-home">
              <h1  class="featurette-heading">Semana da Informática e Administração</h1>
            </a>
            <p class="lead">
                A Semana da Informática e Administração tem por finalidade a interdisciplinaridade dentro do curso, a socialização entre os estudantes e professores, abordagem de temas atuais da área. Durante a semana os estudantes terão oportunidade de apresentar e participar de trabalhos, minicursos, palestras, entre outras atividades nas diversas áreas do conhecimento.
            </p>
          </div>
          <div class="col-md-5">
            <img  width="100%" height="300" src="{{ asset('img/home/logo-semana-de-informatica-e-admin.png') }}"  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Sia">
          </div>
        </div>
        <hr class="my-4">
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <a href="https://www.ifmg.edu.br/portal/noticias/campus-sao-joao-evangelista-abre-inscricoes-para-a-xxv-semana-da-familia-rural" target="_blank" class="link-home">
            <h1 class="featurette-heading">Semana da Família Rural</h1></a>
            <p class="lead">A Semana da Família Rural é uma das maiores e mais tradicionais ações de Extensão realizada pelo Instituto Federal de Minas Gerais Campus São João Evangelista (IFMG SJE), estimulando uma maior aproximação entre a comunidade acadêmica e os produtores rurais locais. Além disso, possibilita aos discentes do IFMG SJE uma experiência única: atuar  junto aos servidores do Campus como instrutores dos cursos ministrados, consolidando a vivência dos conceitos abordados em sala, e dos resultados das pesquisas desenvolvidas, de forma prática.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img  width="100%" height="300" src="{{ asset('img/home/ev.1.png') }}"  class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" alt="Encontro1">
          </div>
        </div>
      <!-- END THE FEATURETTES -->
    </div>
</section>

@endsection