<div class="row">
<table width="100%">
	<tr>
	<td width="50%" style="padding: 10px">
		   <div class="panel panel-default">
		   <div class="panel-heading">
			   <div class="panel-title-box">
				   <h3>Kumpulan Artikel</h3>
			   </div>                                   
			   <ul class="panel-controls" style="margin-top: 2px;">
				                                 
			   </ul>                                   
		   </div>
			<?php foreach($artikel as $r)
			{ 
			   $namaupload= $this->main_model->pilih_user($r['id_user']);
			   ?>
			   <?php foreach($namaupload as $n){}?>
		   <div class="panel-body padding-0 scroll" style="height:280px">
			<div class="panel">
			<a href="#" class="list-group-item">
			 <img src="<?php echo base_url($n['foto']);?>" class="img-text" width="70" align="left"/>
				   <span class="contacts-title"><strong><?php echo $r['judulartikel'];?></strong></span>
                   <p><?php echo $r['isi'];?></p> 
					<p><?php echo $n['nama'];?></p> 
				    </a>
				   <div class="pull-left">
                     <a class="fa fa-comments" data-toggle="modal" data-target="#myModal<?php echo $r['id']?>"> </a>
			   </div>
			   </div>
			   <!-- Modal -->
				<div class="modal fade" id="myModal<?php echo $r['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<form action="<?php echo site_url('C_Member/addcomment/'.$this->session->userdata('id'))?>" class="form-horizontal" method="post" enctype="multipart/form-data">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times </span></button>
						<h4 class="modal-title" id="myModalLabel">Komentar</h4>
					  </div>
					  <div class="modal-body">
					  <?php foreach($comment as $c)
			   {
				   		$dataupload= $this->main_model->pilih_user($c['id_user']);
				   
			   }?>
						<?php foreach($dataupload as $d){}?>

					  <div class="panel">
						<a href="#" class="list-group-item">
							<img src="<?php echo base_url($d['foto']);?>" class="img-text" width="70" align="left"/>
				   			<span class="contacts-title"><strong><?php echo $d['nama'];?></strong></span>
                   			<p><?php echo $c['komentar'];?></p> 
				    		</a>
						</div>
						<textarea class="form-control" rows="5" name="komentar" required="required"></textarea>
					  </div>
					  <div class="modal-footer">
						<input type="submit" class="btn btn-primary" value="simpan">
					  </div>
					</div>
				  </div>
					</form>
				</div>
			   <?php }?>
				</div>
			</td>
		</tr>
	</table>
	</div>