<!-- Navbar & Hero Start -->


<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light navbar-ide-corrientes px-4 px-lg-5 py-3 py-lg-0">
        <a href="/ide_corrientes" class="navbar-brand p-0">
            <!--<h1 class="m-0"><i class="fa fa-tree me-2"></i><span class="fs-5">EL IMPENETRABLE</span></h1>-->
            <?php echo $this->Html->image('LOGO_idecorr.png', ["alt" => 'logo'] ) ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 nav-items">

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="li_Proyecto">Institucional</a>
                    <div class="dropdown-menu m-0">
                        <?=  $this->Html->link(
                            '¿Qué es la IDECorr?',
                            ['controller' => 'Institucional', 'action' => 'pageInProgress', '?' => ['Categoria' => 'Institucional']],
                            ['class' => 'dropdown-item']);
                        ?>
                        <?=  $this->Html->link(
                            'Organización',
                            ['controller' => 'Institucional', 'action' => 'pageInProgress', '?' => ['Categoria' => 'Institucional']],
                            ['class' => 'dropdown-item']);
                        ?>
                        <?=  $this->Html->link(
                            'Antecedentes',
                            ['controller' => 'Institucional', 'action' => 'pageInProgress', '?' => ['Categoria' => 'Institucional']],
                            ['class' => 'dropdown-item']);
                        ?>
                        <?=  $this->Html->link(
                            'Organismos Adheridos',
                            ['controller' => 'Institucional', 'action' => 'pageInProgress', '?' => ['Categoria' => 'Institucional']],
                            ['class' => 'dropdown-item']);
                        ?>

                        <?=  $this->Html->link(
                            'Reglamento',
                            ['controller' => 'Institucional', 'action' => 'pageInProgress', '?' => ['Categoria' => 'Integrantes']],
                            ['class' => 'dropdown-item']
                             );
                        ?>

                        <?=  $this->Html->link(
                            'Normativas',
                            ['controller' => 'Institucional', 'action' => 'pageInProgress', '?' => ['Categoria' => 'Integrantes']],
                            ['class' => 'dropdown-item']
                        );
                        ?>

                        <?=  $this->Html->link(
                            'Actas',
                            ['controller' => 'Institucional', 'action' => 'pageInProgress', '?' => ['Categoria' => 'Integrantes']],
                            ['class' => 'dropdown-item']
                        );
                        ?>


                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="li_Proyecto">Servicios</a>
                    <div class="dropdown-menu m-0">

                        <?=  $this->Html->link(
                            'Geoportal',
                            '../../geoportal/',
                            ['class' => 'dropdown-item', 'target' => '_blank']
                        );
                        ?>

                        <?=  $this->Html->link(
                            'Nuestros Mapas',
                            '',
                            ['class' => 'dropdown-item']
                        );
                        ?>


                        <?=  $this->Html->link(
                            'Mapas Escolares',
                            'https://www.ign.gob.ar/AreaServicios/Descargas/MapasEscolares',
                            ['class' => 'dropdown-item', 'target' => '_blank']
                        );
                        ?>


                        <?=  $this->Html->link(
                            'Salud',
                            'http://umap.openstreetmap.fr/es/map/sistema-de-salud-argentina-covid19_437454#8/-29.018/-57.299',
                            ['class' => 'dropdown-item', 'target' => '_blank']
                        );
                        ?>


                        <?=  $this->Html->link(
                            'Poblaciones',
                            'https://mapa.poblaciones.org/map/#/@-28.787308,-58.350822,8z/l=12201!v2!a2!w0,0,0,0,0',
                            ['class' => 'dropdown-item', 'target' => '_blank']
                        );
                        ?>

                        <?=  $this->Html->link(
                            'Serv. Meteorológico Nacional',
                            'https://www.smn.gob.ar/',
                            ['class' => 'dropdown-item', 'target' => '_blank']
                        );
                        ?>


                    </div>
                </div>

                <?=  $this->Html->link(
                    'IDE',
                    ['controller' => 'IdeInformations', 'action' => 'index', '?' => ['Categoria' => 'Timeline']],
                    ['class' => 'dnav-item nav-link', 'id' => "li_Timeline"]
                );
                ?>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="li_Proyecto">Recursos</a>
                    <div class="dropdown-menu m-0">
                        <?=  $this->Html->link(
                            'Datos',
                            ['controller' => 'Recursos', 'action' => 'index', '?' => ['Categoria' => 'Proyecto']],
                            ['class' => 'dropdown-item']);
                        ?>

                        <?=  $this->Html->link(
                            'Cartografía',
                            ['controller' => 'Recursos', 'action' => 'index', '?' => ['Categoria' => 'Integrantes']],
                            ['class' => 'dropdown-item']
                        );
                        ?>

                    </div>
                </div>

                <?=  $this->Html->link(
                    'Novedades',
                    ['controller' => 'Institucional', 'action' => 'pageInProgress', '?' => ['Categoria' => 'Documentacion']],
                    ['class' => 'dnav-item nav-link', 'id' => "li_Documentacion"]
                );
                ?>


                <?=  $this->Html->link(
                    'Contacto',
                    ['controller' => 'Institucional', 'action' => 'pageInProgress', '?' => ['Categoria' => 'Documentacion']],
                    ['class' => 'dnav-item nav-link', 'id' => "li_Documentacion"]
                );
                ?>
            </div>
        </div>
    </nav>
</header>

<!-- Navbar & Hero End -->
