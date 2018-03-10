<?php foreach($userprofile as $up){};?>
<div class="panel-heading">
    <h3 class="panel-title"><strong>User Profile</strong></h3>
</div>
<div class="row">
    <div class="col-md-12">

        <form action="<?php echo site_url('C_Manager/updateprofileuser/'.$up['id'])?>" class="form-horizontal" method="post" enctype="multipart/form-data">

            <div class="panel panel-default tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Personal Data</a></li>
                    <li><a href="#tab-second" role="tab" data-toggle="tab">Update Data</a></li>
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
                                <input type="text" class="form-control" value="<?php echo $up['password']?>" disabled/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Nama Lengkap</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="form-control" value="<?php echo $up['nama']?>" disabled/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Address</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="form-control" value="<?php echo $up['address']?>" disabled/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Pendidikan</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="form-control" value="<?php echo $up['pendidikan']?>" disabled/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Tanggal Lahir</label>
                            <div class="col-md-2">
                                <?php
                                $date = explode('-', $up['tanggal_lahir']);
                                $year = $date[0];
                                $month = $date[1];
                                $day  = $date[2];
                                ?>

                                <input type="text" class="form-control" value="<?php echo $day; ?>" disabled/>
                                <span class="help-block">Day</span>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" value="<?php echo $month; ?>" disabled/>
                                <span class="help-block">Month</span>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" value="<?php echo $year; ?>" disabled/>
                                <span class="help-block">Year</span>
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

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Level</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="form-control" value="<?php echo $up['level']?>" disabled/>
                            </div>
                        </div>

                        <p></p>

                    </div>
                    <div class="tab-pane" id="tab-second">

                        <p></p>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Username</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="form-control" value="<?php echo $up['username']?>" name="userbaru"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Password</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="form-control" value="<?php echo $up['password']?>" name="passbaru"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Nama Lengkap</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="form-control" value="<?php echo $up['nama']?>" disabled/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Address</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="form-control" value="<?php echo $up['address']?>" name="addressbaru"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Pendidikan</label>
                            <div class="col-md-6 col-xs-12">
                                <input type="text" class="form-control" value="<?php echo $up['pendidikan']?>" name="pendbaru"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Tanggal Lahir</label>
                            <div class="col-md-2">
                                <?php
                                $date = explode('-', $up['tanggal_lahir']);
                                $year = $date[0];
                                $month = $date[1];
                                $day  = $date[2];
                                ?>

                                <input type="text" class="form-control" value="<?php echo $day; ?>" disabled/>
                                <span class="help-block">Day</span>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" value="<?php echo $month; ?>" disabled/>
                                <span class="help-block">Month</span>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" value="<?php echo $year; ?>" disabled/>
                                <span class="help-block">Year</span>
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

                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Level</label>
                            <div class="col-md-6 col-xs-12">
                                <select class="form-control select" name="levelbaru" data-displayInput="<?php echo $up['level']?>">
                                    <option>Manager</option>
                                    <option>Chef</option>
                                    <option>Kasir</option>
                                    <option>Waiter</option>
                                </select>
                            </div>
                        </div>

                        <p></p>

                        <div class="panel-footer">
                            <button class="btn btn-primary pull-right">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
                        </div>
                        </form>

                    </div>

            </div>

        </form>

    </div>
</div>