<!-- Sidebar -->
<aside class="main-sidebar sidebar-light elevation-4 wow zoomIn">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-dark" style="width: 280px; min-height: 100%; background-color: #dee2e6;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Información</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto text-sidebar">
            <li class="nav-item">

                <?=  $this->Html->link(
                    '¿Qué es una IDE?',
                    ['controller' => 'IdeInformations', 'action' => 'index', '?' => ['Categoria' => 'Proyecto']],
                    ['class' => 'nav-link text-dark']);
                ?>
            </li>
            <li>
                <?=  $this->Html->link(
                    'Datos',
                    ['controller' => 'IdeInformations', 'action' => 'datos', '?' => ['Categoria' => 'Proyecto']],
                    ['class' => 'nav-link text-dark']);
                ?>

            </li>
            <li>

                <?=  $this->Html->link(
                    'Metadatos',
                    ['controller' => 'IdeInformations', 'action' => 'pageInProgress', '?' => ['Categoria' => 'Proyecto']],
                    ['class' => 'nav-link text-dark']);
                ?>
            </li>
            <li>
                <?=  $this->Html->link(
                    'Servicios',
                    ['controller' => 'IdeInformations', 'action' => 'pageInProgress', '?' => ['Categoria' => 'Proyecto']],
                    ['class' => 'nav-link text-dark']);
                ?>
            </li>

            <li>
                <?=  $this->Html->link(
                    'Hardware y Software',
                    ['controller' => 'IdeInformations', 'action' => 'pageInProgress', '?' => ['Categoria' => 'Proyecto']],
                    ['class' => 'nav-link text-dark']);
                ?>
            </li>
            <li>
                <?=  $this->Html->link(
                    'Política y Marco Institucional',
                    ['controller' => 'IdeInformations', 'action' => 'pageInProgress', '?' => ['Categoria' => 'Proyecto']],
                    ['class' => 'nav-link text-dark']);
                ?>
            </li>
            <li>
                <?=  $this->Html->link(
                    'Recursos Humanos',
                    ['controller' => 'IdeInformations', 'action' => 'pageInProgress', '?' => ['Categoria' => 'Proyecto']],
                    ['class' => 'nav-link text-dark']);
                ?>
            </li>
            <li>
                <?=  $this->Html->link(
                    ' Normas y Especificaciones',
                    ['controller' => 'IdeInformations', 'action' => 'pageInProgress', '?' => ['Categoria' => 'Proyecto']],
                    ['class' => 'nav-link text-dark']);
                ?>
            </li>
        </ul>
        <hr>
    </div>
</aside>

<!-- Sidebar -->
