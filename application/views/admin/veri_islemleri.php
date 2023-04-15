<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/css/main.css">
<div id="main-content">
    <div class="container-fluid">
        <div class="clearfix">
            <div class="row">
                <div class="col-xl-12">
                    <hr>
                    <ul class="nav nav-tabs nav-justified">
                        <li class="nav-item">
                            <a href="#home2" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Masraf Merkezi Verileri</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile2" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Üretim Bilgisi Ekle</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile3" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Nakliye Sarfları Niğde</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile4" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Nakliye Sarfları Kırıkkale</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile5" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Nakliye Gelirleri (Verilen Hizmet Üzerinden)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile6" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Nakliye Gelirleri (Ürün Satışı Üzerinden)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile7" data-toggle="tab" aria-expanded="true" class="nav-link">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Nakliye Akaryakıt Litre Bilgileri</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile8" data-toggle="tab" aria-expanded="false" class="nav-link">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Nakliye Maaşları Verileri</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="home2">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="row clearfix">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Masraf Merkezi Verilerini Çek</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/masrafmerkezleri_verileri" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">Ekle</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Masraf Merkezi Verilerini Sil</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/masrafmerkezleri_verileri_sil" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">Sil</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Masraf Merkezi Verilerini Çek Excel</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/masrafmerkezleri_verileri_excel_al" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success"><i class="icon-arrow-down"></i> Download</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Masraf Merkezi Verilerini Upload Et</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">

                                                            <tr>
                                                                <td>Örnek Excel</td>
                                                                <td><a href="<?=base_url()?>uploads/exceller/masraf_merkezleri_ornek_excel.xlsx" download>İndir</a></td>
                                                            </tr>
                                                            <tr>
                                                                <form action="<?=base_url()?>admin/entegrasyon/masraf_import" method="post" enctype="multipart/form-data">

                                                                    <td><input type="file" name="uploadFile"></td>
                                                                    <td><input type="submit" name="submit" value="Upload" /></td>
                                                                </form>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile2">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="row clearfix">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Üretim Verilerini Çek</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/uretim_verileri" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">Ekle</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Üretim Verilerini Sil</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/uretim_verileri_sil" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">Sil</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Üretim Verilerini Çek Excel</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/uretim_verileri_excel_al" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success"><i class="icon-arrow-down"></i> Download</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Üretim Verilerini Upload Et</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">

                                                            <tr>
                                                                <td>Örnek Excel</td>
                                                                <td><a href="<?=base_url()?>uploads/exceller/ornek_uretim_verileri_exceli.xlsx" download>İndir</a></td>
                                                            </tr>
                                                            <tr>
                                                                <form action="<?=base_url()?>admin/entegrasyon/uretim_import" method="post" enctype="multipart/form-data">
                                                                    <td><input type="file" name="uploadFile"></td>
                                                                    <td><input type="submit" name="submit" value="Upload" /></td>
                                                                </form>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile3">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="row clearfix">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Sarfları Verilerini Çek (NİĞDE)</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/nakliye_sarflari_verileri" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">Ekle</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Sarfları Verilerini Sil (NİĞDE)</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/nakliye_sarflari_verileri_sil" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">Sil</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Sarfları Çek Excel (NİĞDE)</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/nakliye_sarflari_excel_al" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success"><i class="icon-arrow-down"></i> Download</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Sarfları Verilerini Upload Et (NİĞDE)</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">

                                                            <tr>
                                                                <td>Örnek Excel</td>
                                                                <td><a href="<?=base_url()?>uploads/exceller/ornek_nakliye_sarflari.xlsx" download>İndir</a></td>
                                                            </tr>
                                                            <tr>
                                                                <form action="<?=base_url()?>admin/entegrasyon/nakliye_sarflari_import" method="post" enctype="multipart/form-data">
                                                                    <td><input type="file" name="uploadFile"></td>
                                                                    <td><input type="submit" name="submit" value="Upload" /></td>
                                                                </form>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile4">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="row clearfix">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Sarfları Verilerini Çek (KIRIKKALE)</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/nakliye_sarflari_verileri_kirikkale" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">Ekle</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Sarfları Verilerini Sil (KIRIKKALE)</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/nakliye_sarflari_verileri_sil_kirikkale" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">Sil</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile5">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="row clearfix">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Gelirleri (Verilen Hizmet Üzerinden)</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/nakliye_faturalari_verileri" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">Ekle</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Gelirleri (Verilen Hizmet Üzerinden) Verilerini Sil</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/nakliye_faturalari_verileri_sil" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">Sil</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Gelirleri (Verilen Hizmet Üzerinden) Çek Excel (NİĞDE)</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/nakliye_gelirleri_excel_al" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success"><i class="icon-arrow-down"></i> Download</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Gelirleri (Verilen Hizmet Üzerinden) Verilerini Upload Et (NİĞDE)</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">

                                                            <tr>
                                                                <td>Örnek Excel</td>
                                                                <td><a href="<?=base_url()?>uploads/exceller/nakliye_gelirleri_excel_al.xlsx" download>İndir</a></td>
                                                            </tr>
                                                            <tr>
                                                                <form action="<?=base_url()?>admin/entegrasyon/nakliye_gelirleri_import" method="post" enctype="multipart/form-data">
                                                                    <td><input type="file" name="uploadFile"></td>
                                                                    <td><input type="submit" name="submit" value="Upload" /></td>
                                                                </form>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile6">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="row clearfix">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Gelirleri (Ürün Satışı Üzerinden)</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/nakliye_urun_satisindan_gelir" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">Ekle</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Gelirleri (Ürün Satışı Üzerinden) Verilerini Sil</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/nakliye_urun_satisindan_gelir_sil" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">Sil</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Gelirleri (Ürün Satışı Üzerinden) Çek Excel (NİĞDE)</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/nakliye_urun_satisindan_gelir_excel_al" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success"><i class="icon-arrow-down"></i> Download</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Gelirleri (Ürün Satışı Üzerinden) Verilerini Upload Et (NİĞDE)</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">

                                                            <tr>
                                                                <td>Örnek Excel</td>
                                                                <td><a href="<?=base_url()?>uploads/exceller/nakliye_urun_satisindan_gelir_excel_al.xlsx" download>İndir</a></td>
                                                            </tr>
                                                            <tr>
                                                                <form action="<?=base_url()?>admin/entegrasyon/nakliye_urun_satisindan_gelir_import" method="post" enctype="multipart/form-data">
                                                                    <td><input type="file" name="uploadFile"></td>
                                                                    <td><input type="submit" name="submit" value="Upload" /></td>
                                                                </form>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile7">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="row clearfix">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Akaryakıt Litre Bilgileri</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/nakliye_akaryakit_litre_hesabi" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">Ekle</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Akaryakıt Litre Bilgileri Sil</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/nakliye_akaryakit_litre_hesabi_sil" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">Sil</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Akaryakıt Litre Bilgileri Çek Excel</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/nakliye_akaryakit_gelir_excel_al" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success"><i class="icon-arrow-down"></i> Download</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Akaryakıt Litre Bilgileri Verilerini Upload Et (NİĞDE)</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">

                                                            <tr>
                                                                <td>Örnek Excel</td>
                                                                <td><a href="<?=base_url()?>uploads/exceller/nakliye_akaryakit_gelir_excel_al.xlsx" download>İndir</a></td>
                                                            </tr>
                                                            <tr>
                                                                <form action="<?=base_url()?>admin/entegrasyon/nakliye_akaryakit_import" method="post" enctype="multipart/form-data">
                                                                    <td><input type="file" name="uploadFile"></td>
                                                                    <td><input type="submit" name="submit" value="Upload" /></td>
                                                                </form>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile8">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="row clearfix">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Maaş Verilerini Çek</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/masrafmerkezleri_verileri_nakliye" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">Ekle</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Maaş Verilerini Sil</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/masrafmerkezleri_verileri_sil_nakliye" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">Sil</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Maaş Verilerini Çek Excel</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                            <form action="<?=base_url()?>admin/Entegrasyon/masrafmerkezleri_verileri_excel_al_nakliye" method="post">
                                                                <tr>
                                                                    <td>Başlangıç Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bitiş Tarihi</td>
                                                                    <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2"><button type="submit" style="float:right" class="btn btn-success"><i class="icon-arrow-down"></i> Download</button></td>
                                                                </tr>
                                                            </form>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-box">
                                                    <h1>Nakliye Maaş Verilerini Upload Et</h1>
                                                    <hr>
                                                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">

                                                            <tr>
                                                                <td>Örnek Excel</td>
                                                                <td><a href="<?=base_url()?>uploads/exceller/masraf_merkezleri_ornek_excel.xlsx" download>İndir</a></td>
                                                            </tr>
                                                            <tr>
                                                                <form action="<?=base_url()?>admin/entegrasyon/masraf_import_nakliye" method="post" enctype="multipart/form-data">

                                                                    <td><input type="file" name="uploadFile"></td>
                                                                    <td><input type="submit" name="submit" value="Upload" /></td>
                                                                </form>
                                                            </tr>

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
            <script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/mainscripts.bundle.js"></script>
            <script src="<?=base_url()?>assets/yeni_tema/js/pages/tables/jquery-datatable.js"></script>
