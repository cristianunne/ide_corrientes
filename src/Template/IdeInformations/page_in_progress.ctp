
<?= $this->Html->css('ide_informations.css') ?>
<?= $this->element('header')?>

<div class="container-xxl">


    <div class="row" style="min-height: 100%;">


        <div class="col-lg-2 col-md-12 col-sm-12 wow zoomIn" style="margin-left: -11px;">
            <?= $this->element('sidebar')?>
        </div>
        <div class="col-lg-10 col-md-12 col-sm-12 wow zoomIn" style="padding-top: 150px; padding-bottom: 150px;">

            <?php echo $this->Html->image('pagina-construccion.jpg', ["alt" => '', 'class' => ['pagina-works']] ) ?>

        </div>

    </div>

</div>


<?= $this->element('footer')?>
