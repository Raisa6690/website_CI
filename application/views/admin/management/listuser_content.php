<div class="row">
   <div class="col-md-12">
	    <div class="panel panel-default">
         <div class="panel-heading">                                
              <h3 class="panel-title">Member</h3>
                 <ul class="panel-controls">
                     <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                     <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                 </ul>                                
                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
										
                                        <thead>
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
										<tbody>
										<?php 
											foreach ($member as $m){
										?>
											<tr>
												<td><?php echo $m['nama']?></td>
												<td><?php echo $m['email']?></td>
												<td><?php echo $m['username']?></td>
												<td><a href="#" class="mb-control" data-box="#mb-delete<?php echo $m['id']?>"><span class="fa fa-times"></span>													</a> 
												<div class="message-box animated fadeIn" data-sound="alert" id="mb-delete<?php echo $m['id']?>">
													<div class="mb-container">
														<div class="mb-middle">
															<div class="mb-title"><span class="fa fa-times"></span><strong>Delete</strong> ?</div>
															<div class="mb-content">
																<p>Are you sure you Delete Member ?</p>
															</div>
															<div class="mb-footer">
																<div class="pull-right">
																	<a href="<?php echo site_url('C_Admin/delete_member/'.$m['id']);?>" class="btn btn-success btn-lg">Ya</a>
																	<button class="btn btn-default btn-lg mb-control-close">Tidak</button>
																</div>
															</div>
														</div>
													</div>
												</div>
												</td>
											</tr>
										</tbody>
										<?php }?>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
	   <!-- MESSAGE BOX-->
