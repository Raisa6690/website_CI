<div class="row">
    <div class="col-md-12">
        <form action="<?php echo site_url('C_Member/addartikel/' . $this->session->userdata('id')) ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Post Artikel</strong></h3>
                </div>
                <div class="panel-body">
                    <p></p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Judul Artikel </label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" class="form-control" name="judulartikel" required="required"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Tanggal Artikel</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                        <input type="text" class="form-control datepicker" value="" name="tglartikel">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Isi Artikel</label>
                                <div class="col-md-9 col-xs-12">
                                    <textarea class="form-control" rows="5" name="isi" required="required"></textarea>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="panel-footer">
                    <button class="btn btn-primary pull-right">Save</button>
                </div>
            </div>
        </form>

    </div>
</div>