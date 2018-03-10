<?php foreach($userprofile as $up){};?>
<div class="panel-heading">
    <h3 class="panel-title"><strong>Profile</strong></h3>
</div>
<div class="row">
    <div class="col-md-12">

        <form action="<?php echo site_url('C_Member/updateprofileuser/'.$up['id'])?>" class="form-horizontal" method="post" enctype="multipart/form-data">

            <div class="panel panel-default tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">My Profile</a></li>
                    <li><a href="#tab-second" role="tab" data-toggle="tab">Edit Profil</a></li>
                </ul>
                <div class="panel-body tab-content">
                    <div class="tab-pane active" id="tab-first">
                        <p></p>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Username</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="form-control" value="<?php echo $up['username']?>" disabled/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Password</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="password" class="form-control" value="<?php echo $up['password']?>" disabled/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Nama Lengkap</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="form-control" value="<?php echo $up['nama']?>" disabled/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">No. HP</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="form-control" value="<?php echo $up['nohp']?>" disabled/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Email</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="form-control" value="<?php echo $up['email']?>" disabled/>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Foto</label>
                            <div class="col-md-2">
                                <div class="profile" style="width: auto">
                                    <img src="<?php echo base_url();?><?php echo $up['foto'];?>" alt="John Doe" style="width: 200px"/>
                                </div>
                            </div>
                        </div>

                        <p></p>

                    </div>
                    <div class="tab-pane" id="tab-second">

                        <p></p>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Username</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="form-control" value="<?php echo $up['username']?>"disabled/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Password</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="password" class="form-control" value="<?php echo $up['password']?>"disabled/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Nama Lengkap</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="form-control" value="<?php echo $up['nama']?>" name="namabaru"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">No. HP</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="form-control" value="<?php echo $up['nohp']?>" name="nohpru"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Email</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="form-control" value="<?php echo $up['email']?>" name="emailru"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Foto</label>
                            <div class="col-md-2">
                                <div class="profile" style="width: auto">
                                    <img src="<?php echo base_url();?><?php echo $up['foto'];?> " name="fotoru" style="width: 200px"/>
									<input type="text" name="fotolama" value="<?php echo $up['foto']?>" hidden="hidden"?>
									<input type="file" class="fileinput btn-primary" name="userfile" id="filename" title="Browse file"/>

                                </div>
                            </div>
                        </div>
						
                        <p></p>

                        <div class="panel-footer">
                            <button class="btn btn-primary pull-right">Save<span class="fa fa-floppy-o fa-right"></span></button>
                        </div>
                        </form>
                    </div>
            </div>
        </form>

    </div>
</div>