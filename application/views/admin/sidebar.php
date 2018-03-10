<?php foreach($user as $u){};?>
<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li>
            <a href="#"><strong>STUDY FUN FOR KIDS</strong></a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="<?php echo base_url();?><?php echo $u['foto'];?>" alt="John Doe"/>
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="<?php echo base_url();?><?php echo $u['foto'];?>" alt="John Doe"/>
                </div>
                <div class="profile-data">
                    <div class="profile-data-name"><?php echo $u['nama'];?></div>
                    <div class="profile-data-title"><?php echo $u['level'];?></div>
                </div>
            </div>
        </li>
        <li class="xn-title">Navigation</li>
        <li>
            <a href="<?php echo site_url('C_Admin')?>"><span class="fa fa-desktop"></span> <span class="xn-text">Home</span></a>
        </li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Manage Member</span></a>
            <ul>
                <li><a href="<?php echo site_url('C_Admin/listuserview')?>"><span class="fa fa-info"></span>View Member</a></li>
            </ul>
        </li>
		<li class="xn-openable">
            <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Manage Admin</span></a>
            <ul>
				 <li><a href="<?php echo site_url('C_Admin/ViewAddAdmin')?>"><span class="fa fa-info"></span>Add Admin</a></li>
                <li><a href="<?php echo site_url('C_Admin/ViewAdmin')?>"><span class="fa fa-info"></span>View Admin</a></li>
            </ul>
        </li>
		<li class="xn-openable">
            <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Manage Video</span></a>
            <ul>
                <li><a href="<?php echo site_url('C_Admin/myvideos')?>"><span class="fa fa-info"></span>Upload Videos</a></li>
				<li><a href="<?php echo site_url('C_Admin/datavideos')?>"><span class="fa fa-info"></span>My Videos</a></li>
				<li><a href="<?php echo site_url('C_Admin/kumpulanvideos')?>"><span class="fa fa-info"></span>Kumpulan Videos</a></li>
            </ul>
        </li>
		<li class="xn-openable">
            <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Manage Artikel</span></a>
            <ul>
				<li><a href="<?php echo site_url('C_Admin/dataartikel')?>"><span class="fa fa-info"></span>Kumpulan Artikel</a></li>
            </ul>
        </li>
    </ul>
    <!-- END X-NAVIGATION -->
</div>