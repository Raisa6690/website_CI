<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">                                
                <h3 class="panel-title">Admin</h3>
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
                        foreach ($listadmin as $a) {
                            ?>
                            <tr>
                                <td><?php echo $a['nama'] ?></td>
                                <td><?php echo $a['email'] ?></td>
                                <td><?php echo $a['username'] ?></td>
                                <td><a href="#" class="mb-control" data-box="#mb-delete1<?php echo $a['id'] ?>"><span class="fa fa-times"></span>													</a> 
                                    <div class="message-box animated fadeIn" data-sound="alert" id="mb-delete1<?php echo $a['id'] ?>">
                                        <div class="mb-container">
                                            <div class="mb-middle">
                                                <div class="mb-title"><span class="fa fa-times"></span><strong>Delete</strong> ?</div>
                                                <div class="mb-content">
                                                    <p>Are you sure you Delete Admin ?</p>
                                                </div>
                                                <div class="mb-footer">
                                                    <div class="pull-right">
                                                        <a href="<?php echo site_url('C_Admin/delete_admin/' . $a['id']); ?>" class="btn btn-success btn-lg">Ya</a>
                                                        <button class="btn btn-default btn-lg mb-control-close">Tidak</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>

            </div>
        </div>
    </div>
</div>	   