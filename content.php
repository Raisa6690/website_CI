<div class="row">
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><strong>Timeline Order</strong></h3>
        </div>
        <div class="panel-body" style="background-color: antiquewhite">

<!-- START TIMELINE -->
<div class="timeline timeline-right">

    <?php foreach($order as $o){
        $waiter=$this->main_model->pilih_user($o['id_waiter']);
        foreach($waiter as $w){};
        ?>

    <!-- START TIMELINE ITEM -->
    <div class="timeline-item timeline-item-right">
        <div class="timeline-item-info"><?php echo $o['tgl_pesan']?></div>
        <div class="timeline-item-icon"><span class="fa fa-map-marker"></span></div>
        <div class="timeline-item-content">
            <div class="timeline-heading">
                <img src="<?php echo base_url();?><?php echo $w['foto']?>"/> <strong><?php echo $w['nama']?></strong> posted order meja <?php echo $o['no_meja']?>
            </div>
            <div class="timeline-body">
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nama Order</th>
                            <th>Quantity</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $listordermakanan = $this->E_Chef->list_cartmakanan($o['no_meja'],$o['status'],$o['tgl_pesan']);
                        $listorderminuman = $this->E_Chef->list_cartminuman($o['no_meja'],$o['status'],$o['tgl_pesan']);

                        foreach($listordermakanan as $lm){
                        ?>
                        <tr>
                            <td><?php echo $lm['nama_makanan']?></td>
                            <td><?php echo $lm['quantity']?></td>
                            <td></td>
                        </tr>
                        <?php
                        }
                        foreach($listorderminuman as $lmi){
                        ?>
                        <tr>
                            <td><?php echo $lmi['nama_minuman']?></td>
                            <td><?php echo $lmi['quantity']?></td>
                            <td></td>
                        </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <!-- END TIMELINE ITEM -->
    <?php }?>

</div>
</div>
</div>
<!-- END TIMELINE -->

</div>
</div>

