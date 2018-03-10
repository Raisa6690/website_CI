<div class="row">
    <table width="100%">
        <td width="50%" style="padding: 10px">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>Kumpulan Video Tentang Metode Pembelajaran</h3>
                    </div>                                   
                    <ul class="panel-controls" style="margin-top: 2px;">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>                                       
                    </ul>                                   
                </div>                                
                <div class="panel-body padding-0 scroll" style="height:540px">
                    <div class="panel">
                        <?php
                        foreach ($video as $a) {
                            ?>
                            <a href="" class="list-group-item">
                                <img src="<?php echo base_url(); ?>/assets/images/gallery/nature-7.jpg" class="img-text" width="60" align="left"/>

                                <span class="contacts-title"><strong><?php echo $a['judul'] ?></strong></span> <br>
                                <small>Uploaded <?php echo $a['tglupload'] ?></small><br>
                                <p><?php echo $a['ringkasan'] ?></p>
                                <video width="480" height="270" controls>
                                    <source src="<?php echo base_url(); ?>/<?php echo $a['data'] ?>" type="video/mp4">
                                    Your browser does not support HTML5 video.
                                </video><br><br>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </td>
    </table>
</div>