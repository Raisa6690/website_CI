<div class="row">
    <form action="<?php echo site_url('C_Admin/addvideo') ?>" method="post" enctype="multipart/form-data">
        <table width="100%">
            <tr>
                <td width="50%" style="padding: 10px">
                    <!-- LOGIN WIDGET -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>New Video</h2>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Judul Video</label>
                                <input type="text" name="judul" class="form-control" placeholder="Judul Video" required=""/>
                            </div>
                            <div class="form-group">
                                <label>Jenis Video</label>
                                <br>
                                <input type="radio" name="jenis" value="tutorial" checked> Metode Pembelajaran / Tutorial
                                <br>
                                <input type="radio" name="jenis" value="lagu"> Lagu 
                            </div>
                            <div class="form-group">
                                <label >Tanggal Upload</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                    <input type="text" class="form-control datepicker" value="" name="tglartikel" required=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Ringkasan tentang videos</label>
                                <textarea name="ringkasan" class="form-control push-down-10" id="new_task" rows="4" placeholder="Ringkasan singkat tentang video" required=""></textarea> 
                            </div>       
                            <div class="form-group">
                                <label class="control-label">Videos</label>
                                <input type="file" class="fileinput btn-primary" name="video" id="filename" title="Browse file"/>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-2 pull-right">
                                <button class="btn btn-success btn-block" name="submit">Post</button>
                            </div>
                        </div>
                    </div>
                </td>
                </td>
            </tr>
        </table>
    </form>
</div>