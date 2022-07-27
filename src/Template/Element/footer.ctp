<!-- main-footer -->
<footer class="main-footer">
    <div id="container_footer" class="container-xxl py-5 padding-15">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="logo-widget footer-widget">
                        <div class="text">Ministerio de Coordinación y PLanificación<br><br>
                            <h5 style="color: #ffffff !important;">Gobierno de la Provincia de Corrientes</h5></div>
                        <ul id="icons-media" class="footer-social clearfix">
                            <li><a href="https://www.facebook.com/IIGHIChaco/" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/iighichaco?lang=es" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/iighiconicet/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UC0vPIQkJWfDRDOxCefvfL7A/featured?disable_polymer=1" target="_blank">
                                    <i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="link-widget footer-widget">
                        <div class="footer-title">Accesos rápidos</div>
                        <ul class="link-list">

                            <li>
                                <?= $this->Html->link(__('Institucional'), ['controller' => 'Institucional', 'action' => 'idecorrInformations']) ?>
                            </li>

                            <li><a href="?p=home#ejes">IDE</a></li>
                            <li><a href="?p=contact">Recursos</a></li>
                            <li><a href="?p=contact">Novedades</a></li>
                            <!--<li><a href="#">Future Team</a></li>-->
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="event-widget footer-widget">
                        <div class="footer-title">Novedades</div>
                        <div class="single-event">
                            <div class="link"><a href="#">Presentación del Nuevo Sitio Web de la IDECorr</a></div>
                            <div class="text"><i class="flaticon-small-calendar"></i>10 de Agosto de 2022</div>
                        </div>
                        <div class="single-event">
                            <div class="link"><a href="#">Presentación del Nuevo Geoportal <em></em></a></div>
                            <div class="text"><i class="flaticon-small-calendar"></i>10 de Agosto de 2022</div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="logo-widget footer-widget">
                        <figure class="footer-logo-2"><a href="https://www.corrientes.gob.ar/" target="_blank">
                                <?php echo $this->Html->image('hq720_2.jpg', ["alt" => '', 'width' => '300px'] ) ?>
                                </a></figure>
                    </div>
                </div>
            </div>
    </div>
</footer>
<!-- main-footer end -->

<!-- footer-bottom -->
<div class="footer-bottom">
    <div class="container">
        <div class="copyright"><a href="#">Infraestructura de Datos Espaciales de la Provincia de Corrientes
            (IDECorr)</a> | <a href="https://mcyp.corrientes.gob.ar/" target="_blank">
                Ministerio de Coordinación y Planificación - Gobierno de la Provincia de Corrientes</a>
            &copy; 2022 Todos los derechos reservados</div>
    </div>
</div>
<!-- footer-bottom end -->

