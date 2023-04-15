<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4 class="mt-0 mb-3 header-title">Profil Düzenleme</h4>
                                <hr>
                                <?php if ($this->session->flashdata('sonuc')){ ?>
                                <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    Profil Güncelleme Başarılı Olmuştur.
                                </div>
                                <?php unset($_SESSION['sonuc']); }?>
                                <?php  foreach($veri as $rs){ ?>
                                <form action="<?=base_url()?>admin/home/profil_guncelle_admin/<?=$rs->Id?>" method="post">
									<table class="table-bordered table table-responsive">
										<tr>
											<td>E-mail</td>
											<td>Şifre</td>
											<td>Değiştir</td>
										</tr>
										<tr>
											<td><input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?=$rs->email?>"></td>
											<td><input type="text" class="form-control" id="exampleInputPassword1" name="password" value="<?=$rs->password?>"></td>
											<td><button type="submit" class="btn-success" style="float:right;">Gönder</button></td>
										</tr>
									</table>

                                </form> <?php } ?>
                            </div>
                        </div>
						<hr>
						<?php if($this->session->oturum_data["sysgeor"]==1){?>
							<div class="col-lg-6">
								<div class="card-box">
									<h4 class="mt-0 mb-3 header-title">Profil Düzenleme</h4>
									<hr>
									<?php if ($this->session->flashdata('sonuc')){ ?>
										<div class="alert alert-success alert-dismissable">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
											Profil Güncelleme Başarılı Olmuştur.
										</div>
										<?php unset($_SESSION['sonuc']); }?>
									<?php  foreach($kullanicilar as $rs){ ?>
										<form action="<?=base_url()?>admin/home/profil_guncelle_admin/<?=$rs->Id?>" method="post">
											<table class="table table-responsive table-bordered">
												<tr>
													<td>E-mail</td>
													<td>Şifre</td>
													<td>Değiştir</td>
												</tr>
												<tr>
													<td><input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?=$rs->email?>"></td>
													<td><input type="text" class="form-control" id="exampleInputPassword1" name="password" value="<?=$rs->password?>"></td>
													<td><button type="submit" class="btn-success" style="float:right;">Gönder</button></td>
												</tr>
											</table>


										</form> <?php } ?>
								</div>
							</div>

						<?php }?>

