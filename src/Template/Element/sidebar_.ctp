<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light elevation-4">
    <!-- TRaigo los datos de la sesion-->



    <!-- Sidebar -->
    <div class="sidebar">

        <nav class="mt-2">



            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-close" id="configuracion">

                    <a href="#" class="nav-link" id="title-system">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Configuración
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <?=  $this->Html->link(
                                '<i class="far fa-circle nav-icon"></i> Inicio',
                                ['controller' => 'SystemsConfigurations', 'action' => 'index'], ['class' => 'nav-link', 'escape' => false,
                                    'id' => 'nav-icon-system-inicio']) ?>
                        </li>


                        <li class="nav-item">
                            <?=  $this->Html->link(
                                '<i class="far fa-circle nav-icon"></i> Destinos',
                                ['controller' => 'Destinos', 'action' => 'index'], ['class' => 'nav-link', 'escape' => false,
                                'id' => 'nav-icon-system-Destinos']) ?>
                        </li>

                        <li class="nav-item">
                            <?=  $this->Html->link(
                                '<i class="far fa-circle nav-icon"></i> Grupos de Trabajo',
                                ['controller' => 'Worksgroups', 'action' => 'index'], ['class' => 'nav-link', 'escape' => false,
                                'id' => 'nav-icon-system-Worksgroups']) ?>
                        </li>

                        <li class="nav-item">
                            <?=  $this->Html->link(
                                '<i class="far fa-circle nav-icon"></i> Lotes',
                                ['controller' => 'Lotes', 'action' => 'index'], ['class' => 'nav-link', 'escape' => false,
                                'id' => 'nav-icon-system-Lotes']) ?>
                        </li>

                        <li class="nav-item">
                            <?=  $this->Html->link(
                                '<i class="far fa-circle nav-icon"></i> Parcelas',
                                ['controller' => 'Parcelas', 'action' => 'index'], ['class' => 'nav-link', 'escape' => false,
                                'id' => 'nav-icon-system-Parcelas']) ?>
                        </li>

                        <li class="nav-item">
                            <?=  $this->Html->link(
                                '<i class="far fa-circle nav-icon"></i> Productos',
                                ['controller' => 'Productos', 'action' => 'index'], ['class' => 'nav-link', 'escape' => false,
                                'id' => 'nav-icon-system-Productos']) ?>
                        </li>

                        <li class="nav-item">
                            <?=  $this->Html->link(
                                '<i class="far fa-circle nav-icon"></i> Maquinas',
                                ['controller' => 'Maquinas', 'action' => 'index'], ['class' => 'nav-link', 'escape' => false,
                                'id' => 'nav-icon-system-Maquinas']) ?>
                        </li>


                        <li class="nav-item">
                            <?=  $this->Html->link(
                                '<i class="far fa-circle nav-icon"></i> Operarios',
                                ['controller' => 'Operarios', 'action' => 'index'], ['class' => 'nav-link', 'escape' => false,
                                'id' => 'nav-icon-system-Operarios']) ?>
                        </li>

                        <li class="nav-item">
                            <?=  $this->Html->link(
                                '<i class="far fa-circle nav-icon"></i> Propietarios',
                                ['controller' => 'Propietarios', 'action' => 'index'], ['class' => 'nav-link', 'escape' => false,
                                'id' => 'nav-icon-system-Propietarios']) ?>
                        </li>

                        <li class="nav-item">
                            <?=  $this->Html->link(
                                '<i class="far fa-circle nav-icon"></i> Constantes',
                                ['controller' => 'Constantes', 'action' => 'index'], ['class' => 'nav-link', 'escape' => false,
                                'id' => 'nav-icon-system-Constantes']) ?>
                        </li>

                        <li class="nav-item">
                            <?=  $this->Html->link(
                                '<i class="far fa-circle nav-icon"></i> Metodología de Costos',
                                ['controller' => 'MetodCostos', 'action' => 'index'], ['class' => 'nav-link', 'escape' => false,
                                'id' => 'nav-icon-system-MetodCostos']) ?>
                        </li>


                        <li class="nav-item">
                            <?=  $this->Html->link(
                                '<i class="far fa-circle nav-icon"></i> Salarios',
                                ['controller' => 'OperariosMaquinas', 'action' => 'index'], ['class' => 'nav-link', 'escape' => false,
                                'id' => 'nav-icon-system-OperariosMaquinas']) ?>
                        </li>

                        <li class="nav-item">
                            <?=  $this->Html->link(
                                '<i class="far fa-circle nav-icon"></i> Precios por Destinos',
                                ['controller' => 'DestinosProductos', 'action' => 'index'], ['class' => 'nav-link', 'escape' => false,
                                'id' => 'nav-icon-system-DestinosProductos']) ?>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<?= $this->Html->script('simm.js') ?>
