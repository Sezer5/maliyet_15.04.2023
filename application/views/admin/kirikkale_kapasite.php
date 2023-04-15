
  <div id="main-content">
      <div class="container-fluid">
          <br>
          <div class="row clearfix">
              <div class="col-lg-12">
                  <center>
                      <h1>Kırıkkale Kapasiteleri</h1>
                  </center>
                  <div class="card">
                      <div class="body">
                          <ul class="nav nav-tabs">
                              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings"></a></li>
                          </ul>
                      </div>
                      <div class="tab-content">
                          <div class="tab-pane active" id="Settings">
                              <div class="body row">
                                  <div class="col-lg-6">
                                      <div class="responsive-table-plugin">
                                          <div class="table-rep-plugin">
                                              <div class="table-responsive" data-pattern="priority-columns">
                                                  <table id="tech-companies-1" class="table-striped mb-0 table-bordered" style="width:100%;">
                                                      <thead>
                                                          <tr>
                                                              <td colspan="9" style="text-align:center;">
                                                                  <h3>GM10</h3>
                                                              </td>
                                                          </tr>
                                                          <tr>
                                                              <th>Adı</th>
                                                              <th>KGM 10</th>
                                                              <th>KGM 49</th>
                                                              <th>KGM 022</th>
                                                              <th>KGM 922</th>
                                                              <th>KGM 2</th>
                                                              <th>KGM 1520</th>
                                                              <th>KGM 4090</th>
                                                              <th>Güncelle</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <?php foreach($gm10 as $is){?>
                                                          <form action="<?=base_url()?>admin/kirikkale_kapasite/kapasite_guncelle/<?=$is->Id?>" method="post">

                                                              <tr>
                                                                  <td><?=$is->adi?></td>
                                                                  <td><input type="text" name="kgm10" size="6" value="<?=$is->kgm10?>"></td>
                                                                  <td><input type="text" name="kgm49" size="6" value="<?=$is->kgm49?>"></td>
                                                                  <td><input type="text" name="kgm022" size="6" value="<?=$is->kgm022?>"></td>
                                                                  <td><input type="text" name="kgm922" size="6" value="<?=$is->kgm922?>"></td>
                                                                  <td><input type="text" name="kgm2" size="6" value="<?=$is->kgm2?>"></td>
                                                                  <td><input type="text" name="kgm1520" size="6" value="<?=$is->kgm1520?>"></td>
                                                                  <td><input type="text" name="kgm4090" size="6" value="<?=$is->kgm4090?>"></td>
                                                                  <input type="text" name="ka40a" size="6" value="0" hidden>
                                                                  <td><button class="waves-effect waves-light" style="background-color:#364db3"> <i class="icon-reload" style="color:white"></i> </button></td>
                                                              </tr>
                                                          </form>
                                                          <?php }?>
                                                      </tbody>
                                                  </table>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="responsive-table-plugin">
                                          <div class="table-rep-plugin">
                                              <div class="table-responsive" data-pattern="priority-columns">
                                                  <table id="tech-companies-1" class="table-striped mb-0 table-bordered" style="width:100%;">
                                                      <thead>
                                                          <tr>
                                                              <td colspan="7" style="text-align:center;">
                                                                  <h3>SARKAÇ</h3>
                                                              </td>
                                                          </tr>
                                                          <tr>
                                                              <th>Adı</th>
                                                              <th>KA40A</th>
                                                              <th>Güncelle</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <?php foreach($sarkac as $is){?>
                                                          <form action="<?=base_url()?>admin/kirikkale_kapasite/kapasite_guncelle/<?=$is->Id?>" method="post">

                                                              <tr>
                                                                  <td><?=$is->adi?></td>
                                                                  <td><input type="text" name="ka40a" size="6" value="<?=$is->ka40a?>"></td>
                                                                  <input type="text" name="kgm10" size="6" value="0" hidden>
                                                                  <input type="text" name="kgm49" size="6" value="0" hidden>
                                                                  <input type="text" name="kgm022" size="6" value="0" hidden>
                                                                  <input type="text" name="kgm922" size="6" value="0" hidden>
                                                                  <input type="text" name="kgm2" size="6" value="0" hidden>
                                                                  <input type="text" name="kgm1520" size="6" value="0" hidden>
                                                                  <input type="text" name="kgm4090" size="6" value="0" hidden>
                                                                  <td><button class="waves-effect waves-light" style="background-color:#364db3"> <i class="icon-reload" style="color:white"></i> </button></td>
                                                              </tr>
                                                          </form>
                                                          <?php }?>
                                                      </tbody>
                                                  </table>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
