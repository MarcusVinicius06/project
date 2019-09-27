@extends('portal.layouts.app')

@section('content')

@component('portal.components.header', ['urlImg'=> asset('img/egressos-header.jpg') ])
    <h1>Portal do Egresso</h1>
@endcomponent

<section class="my-4">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <p class="text-justify">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O Instituto Federal de Minas Gerais - campus São João Evangelista, com o intuito de sempre
            estar presente no dia a dia de seus alunos e egressos, proporcionar um contínuo intercâmbio
            de informações e construir um vínculo permanente, disponibiliza o Portal do Egresso. Esse
            Portal do Egressos tem como objetivo fomentar o mapeamento dos egressos no cenário
            profissional e Acadêmico, ao mesmo tempo, contribuir com a sua formação continua e o
            aperfeiçoamento do projeto pedagógico do curso Bacharelado em Sistemas de Informação do
            IFMG-SJE por meio da troca de informações. O sucesso no mercado de trabalho e na vida pessoal dos nossos egressos é, também, o nosso sucesso!
            Estender nossas relações para além do tempo da formação profissional é dar continuidade a
            uma história comum que começa no curso de graduação, mas não termina com a diplomação
            do aluno, segue com sua inserção profissional na sociedade e na educação ao longo da vida
            profissional. Precisamos do seu apoio neste processo para que possamos ter um canal de
            comunicação entre o egresso e o IFMG-SJE. Ao responder este questionário estará
            contribuindo com a qualidade de ensino ofertada no curso.
            </p>
        </div>
        <div class="col-md-6">
            <div class="container text-center">
                <figure class="figure">
                    <img class="card-img-right flex-auto d-none d-md-block" width="100%" height="330" src="http://placehold.it/600x330" alt="Card image cap">
                </figure>
            </div>
        </div>
        </div>
    </div>
</section>


@endsection