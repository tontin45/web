<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <?php if($is_admin == true): ?>

      

        <!-- Product boxes -->
        <div class="row">
            <?php foreach ($products as $product): ?>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h4><b><?php echo $product['name']; ?></b></h4>
                        <p>Categoria: <?php echo $product['category']; ?></p>
                        <p>Peso: <?php echo $product['weight']; ?> kg</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-cube"></i>
                    </div>
                    <a href="<?php echo base_url('Controller_Products/') ?>" class="small-box-footer">Mas informacion <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- /.row -->

        <?php endif; ?>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
$(document).ready(function() {
    $("#dashboardMainMenu").addClass('active');
});
</script>
