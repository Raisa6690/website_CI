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
            <a href="<?php echo site_url('C_Member')?>"><span class="fa fa-desktop"></span> <span class="xn-text">Home</span></a>
        </li>
        <li>
            <a href="<?php echo site_url('C_Member/userprofileview')?>"><span class="fa fa-desktop"></span> <span class="xn-text">View Profil</span></a>
        </li>
		<li class="xn-openable">
            <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Artikel</span></a>
            <ul>
                <li><a href="<?php echo site_url('C_Member/myartikel')?>"><span class="fa fa-info"></span>My Artikel</a></li>
				<li><a href="<?php echo site_url('C_Member/postartikel')?>"><span class="fa fa-info"></span>Post Artikel</a></li>
            </ul>
        </li>
		<li class="xn-openable">
            <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Video</span></a>
            <ul>
                <li><a href="<?php echo site_url('C_Member/metodepelajar')?>"><span class="fa fa-info"></span>Metode Pembelajaran</a></li>
				<li><a href="<?php echo site_url('C_Member/laguanak')?>"><span class="fa fa-info"></span>Lagu anak-anak</a></li>
            </ul>
        </li>
    </ul>
    <!-- END X-NAVIGATION -->
</div>