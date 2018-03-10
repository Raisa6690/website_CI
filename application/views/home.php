<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Study Fun For Kids</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        
        <div class="login-container lightmode">
        
            <div class="login-box animated fadeInDown">
                <div class="login-body">
					<div class="login-title"><strong>Study Fun For Kids</strong></div>
                    <form action="<?php echo site_url('main_controller/login'); ?>" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Username" name="username" required="required"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Password" name="password" required="required"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 pull-right">
                            <button class="btn btn-info btn-block">Login</button>
                        </div>
                    </form>
					<form action="<?php echo site_url('Regis_controller'); ?>" class="form-horizontal" method="post">
						<div class="form-daftar">
                        <div class="col-md-6 pull-left">
                            <button class="btn btn-info btn-block">Registrasi</button>
                        </div>
                    </div>	
					</form>
                </div>
				</div>
				
                <div class="login-footer">
                    <div class="pull-right">
                        &copy; Kelompok 3- RPL I
                    </div>
                </div>
            </div>
            
        </div>
        
    </body>
</html>