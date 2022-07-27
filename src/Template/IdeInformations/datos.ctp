<?= $this->Html->css('ide_informations.css') ?>

<?= $this->element('header')?>


<div class="container-xxl">


    <div class="row" style="min-height: 100%;">


        <div class="col-lg-2 col-md-12 col-sm-12 wow zoomIn" style="margin-left: -11px;">
            <?= $this->element('sidebar')?>
        </div>
        <div class="col-lg-10 col-md-12 col-sm-12 wow zoomIn" style="padding-top: 20px">
            <h3 class="title">Datos</h3>
            <hr>
            <p class="p-text">
                Una Infraestructura de Datos Espaciales (IDE) es un sistema de información integrado por un conjunto de recursos (catálogos,
                servidores, programas, datos, aplicaciones, páginas Web,…) dedicados a gestionar Información Geográfica (mapas, ortofotos,
                imágenes de satélite, topónimos,…), disponibles en Internet, que cumplen una serie de condiciones de interoperabilidad
                (normas, especificaciones, protocolos, interfaces,…),
                y que permiten que un usuario, utilizando un simple navegador, pueda utilizarlos y combinarlos según sus necesidades.
            </p>

            <figure>
                <?php echo $this->Html->image('ide/ide.jpg', ["alt" => 'imagen', 'id' => 'ide_img_ide', 'class' => ['img-fluid']] ) ?>
                <figcaption>
                    <p style="text-align: center;">Estructura de una IDE. Fuente:
                        <a href="https://docplayer.es/79287310-Infraestructura-de-datos-espaciales-del-peru.html" target="_blank">
                            Secretaría de Gobierno Digital. Gobierno de Perú
                        </a></p>

                </figcaption>
            </figure>

        </div>


    </div>

</div>


<?= $this->element('footer')?>
