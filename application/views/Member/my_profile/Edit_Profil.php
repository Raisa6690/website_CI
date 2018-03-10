<div class="row">
  <div class="col-md-10">
	  <!-- START VALIDATIONENGINE PLUGIN -->
          <div class="block">
             <h4>My Profile</h4>                                
                    <form id="validate" role="form" class="form-horizontal" action="javascript:alert('Form #validate submited');">                                <div class="form-group">
                        	<label class="col-md-3 control-label">Username</label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[required,maxSize[8]] form-control"/>
                                            <span class="help-block">Required, max size = 8</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Password</label>
                                        <div class="col-md-9">
                                            <input type="password" class="validate[required,minSize[5],maxSize[10]] form-control" id="password"/>
                                            <span class="help-block">Required, min size = 5, max size = 10</span>
                                        </div>
                                    </div>    
									<div class="form-group">
                     					<label class="col-md-3 col-xs-12 control-label">Foto</label>
                      							<div class="col-md-6 col-xs-12">
						  								<input type="file" class="fileinput btn-primary" name="userfile" id="filename" title="Browse file"/></div>
                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Nama Lengkap</label>
                                        <div class="col-md-9    ">
                                            <input type="text" class="validate[required,custom[integer],min[18],max[120]] form-control"/>
                                            <span class="help-block">Required, integer, min value = 18, max = 120</span>
                                        </div>                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">No.HP</label>
                                        <div class="col-md-9">
                                            <input type="text" class="validate[required,creditCard] form-control"/>
                                            <span class="help-block">Required, your phone number</span>
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Email</label>
                                        <div class="col-md-9">
                                            <input type="text"class="validate[required,custom[url]] form-control"/>
                                            <span class="help-block">Required, url</span>
                                        </div>
                                    </div>                              
                                    <div class="form-group">                        
                                        <div class="col-md-12">
                                            <label class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="validate[required]" name="terms" value="1"/> Yang Sudah saya isi benar</label>
                                            </label>
                                        </div>
                                    </div>                                
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>                                                                
                                </form>
                            </div>                                               
                            <!-- END VALIDATIONENGINE PLUGIN -->

                        </div>