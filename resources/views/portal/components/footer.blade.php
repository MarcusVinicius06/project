<!-- FOOTER -->
<footer class="footer-area">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12 footer-col">
              <div class="footer-about">
                <h2 class="footer-about-title">Portal do Egresso</h2>
                <p>Bem-vindo ao Portal do Egresso IFMG - SJE uma rede de comunicação entre egressos. Um portal no qual procura sanar dificuldades e aprimorar os relacionamentos entre alunos e ex- alunos.</p>
                <div class="footer-social">
                  <a href="#" target="_blank">
                    <i class="fab fa-facebook-square"></i>
                  </a>
                  <a href="#" target="_blank">
                    <i class="fab fa-linkedin"></i>
                  </a>
                  <a href="#" target="_blank">
                    <i class="fab fa-google-plus"></i>
                  </a>
                  <a href="#" target="_blank">
                    <i class="fab fa-whatsapp-square"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-12 footer-col">
              <div class="footer-menu navbar-dark">
                <h2 class="footer-title">Navegação</h2>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="{{ route('portal') }}" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route('sobre') }}" class="nav-link">Sobre</a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route('depoimentos') }}" class="nav-link">Depoimentos</a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route('oportunidades') }}" class="nav-link">Oportunidades</a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ asset('/eventos') }}" class="nav-link">Eventos</a>
                    </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 col-sm-12 footer-col">
              <div class="footer-contact">
                <h2 class="footer-title">Contato</h2>
                <p><i class="fas fa-map-marker-alt"></i>&nbsp; Av. Primeiro de Junho, 1043 - Centro, São João Evangelista - MG, 39705-000</p>
                <p><i class="fas fa-phone"></i>&nbsp; 33 3412-2961 / 33 3412-2967</p>
                <p><i class="fas fa-envelope"></i>&nbsp; bsi.sje@ifmg.edu.br</p>
              </div>
            </div>
          </div>
          <div class="clearfix">
            <div class="footer-bottom float-left">
              <p> <small>Copyright &copy; <?php echo date('Y'); ?>,<strong><a href="https://www.ifmg.edu.br/portal/" target="_blank" >IFMG</a>.</strong> Desenvolvido por <a href="https://www.linkedin.com/in/f%C3%A1bio-henrique-andrade-campos-947804189/" target="_blank">Fábio Henrique Andrade Campos </a> e <a href="https://www.linkedin.com/in/marcusvinicius6/" target="_blank">Marcus Vinicius da Silva</a>. </small></p>
            </div>
            <a id="btn-backTop" class="footer-BackTop float-right" href="#">
              {{--  <i class="bottom-BackTop fa fa-chevron-circle-up"></i>--}}
              <i class="bottom-BackTop fas fa-chevron-circle-up"></i>
            </a>
          </div>

        </div><!-- End footer top area -->
      </footer>