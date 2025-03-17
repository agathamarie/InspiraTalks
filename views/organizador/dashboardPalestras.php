<!-- header -->
<?php
$cssEspecifico = "../css/dashboardPalestras.css"; 
$modalEspecifico = "Palestra";

require_once('../../controllers/palestras.php');
$palestrasController = new PalestrasController();
$palestras = [];


$model = new PalestrasModel();
$palestras = $model->getAll();
?>

<!-- header -->
<?php include('../components/navbar.php'); ?>

    <div id="contentAdm">
        
        <?php include('../components/crud.php'); ?>

        <?php include('../components/listaPalestra.php'); ?>

    </div>

</div>