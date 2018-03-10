 
<?php foreach($user as $u){}?>
<div class="row">
    <div class="col-md-12">
   	<div class="timeline timeline-right">
   		 <!-- START TIMELINE ITEM -->
		<?php foreach($artikel as $a){ ?>
                                <div class="timeline-item timeline-item-right">
                                    <div class="timeline-item-info"><?php echo $a['tglartikel'];?></div>
                                    <div class="timeline-item-icon"><span class="fa fa-globe"></span></div>
                                    <div class="timeline-item-content">
                                        <div class="timeline-heading">
                                            <img src="<?php echo base_url($u['foto'])?>"/> 
											<a href="#"><?php echo $u['nama'];?></a> added article <a href="#"><?php echo $a['judulartikel'];?></a>
                                        </div>
                                        <div class="timeline-body">
                                            <p><?php echo $a['isi'];?></p>                                         
                                        </div>                        
                                        <div class="timeline-footer">
                                            <a href="#"><?php echo $u['nama'];?></a>
                                        </div>
                                    </div>
                                </div>
		<?php }?>
                                <!-- END TIMELINE ITEM -->