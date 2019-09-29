@extends('portal.layouts.app')

@section('content')

@component('portal.components.header', ['urlImg'=> asset('img/oportunidades.png') ])
  <h3 class="display-4">Oportunidades</h3>
@endcomponent

@section('portal_csss')

@endsection

<section class="my-4">

        <!-- Page Content -->
        <div class="container">

                <!-- Project One -->
                <div class="row">
                  <div class="col-md-5">
                    <a href="https://www.vagas.com.br/institucional/">
                      <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('img/oportunidades/vagas.png') }}" alt="">
                    </a>
                  </div>
                  <div class="col-md-7">
                    <h2>Vagas.com</h2>
                    <p>Desenvolver soluções tecnológicas para encontrar e selecionar os melhores talentos para as empresas. Para os candidatos, promover o desenvolvimento em suas carreiras para que encontrem as melhores empresas, gratuitamente.</p>
                    <a class="btn btn-outline-success" href="https://www.vagas.com.br/institucional/">Veja mais</a>
                  </div>
                </div>
                <!-- /.row -->

                <hr class="my-4">

                <!-- Project Two -->
                <div class="row">
                  <div class="col-md-5">
                    <a href="https://www.catho.com.br/lp/acathofunciona/home?utm_expid=.fPgmK4iATz699aGeY7oy1w.1&utm_referrer=https%3A%2F%2Fdev.sje.ifmg.edu.br%2Fegressosbsi%2Foportunidades.html">
                      <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('img/oportunidades/emp.jpg') }}" alt="">
                    </a>
                  </div>
                  <div class="col-md-7">
                    <h2>Catho</h2>
                    <p>A Catho é direcionada para todos aqueles que buscam agilidade no processo de recolocação, desde diretores até estagiários.</p>
                    <a class="btn btn-outline-success" href="https://www.catho.com.br/lp/acathofunciona/home?utm_expid=.fPgmK4iATz699aGeY7oy1w.1&utm_referrer=https%3A%2F%2Fdev.sje.ifmg.edu.br%2Fegressosbsi%2Foportunidades.html">Veja mais</a>
                  </div>
                </div>
                <!-- /.row -->

                <hr class="my-4">

                <!-- Project Three -->
                <div class="row">
                  <div class="col-md-5">
                    <a href="https://www.empregos.com.br/">
                      <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('img/oportunidades/empreg.jpg') }}" alt="">
                    </a>
                  </div>
                  <div class="col-md-7">
                    <h2>Empregos.com.br</h2>
                    <p>Hoje com mais de 4.6 milhões de currículos profissionais, uma margem de 170 mil empresas cadastradas em seu sistema e mais de 120 mil vagas disponíveis em todo o país.</p>
                    <a class="btn btn-outline-success" href="https://www.empregos.com.br/">Veja mais</a>
                  </div>
                </div>
                <!-- /.row -->
                <hr class="my-4">

                <!-- Pagination -->
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>

              </div>
              <!-- /.container -->
    </section>

@endsection