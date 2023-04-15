<script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-box">
                        <div class="col-xl-6">
                            <h1>Ürün Seçimi</h1>
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th colspan="5" style="text-align:center;width:60%;">ÜRÜNLER</th>
                                            <th style="text-align:center;width:35%;">ÜRÜN TİPİ</th>
                                            <th style="text-align:center;width:5%;">SORGULA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <form action="<?=base_url()?>admin/Istatistikler/urun_detay" method="post">
                                            <tr>
                                                <td colspan="5">
                                                    <div class="form-group row">
                                                        <div class="col-md-10">
                                                            <select class="form-control" name="urun">
                                                                <option value="YM09.077">Niğtaş 95</option>
                                                                <option value="YM09.075">Niğtaş 75</option>
                                                                <option value="YM09.073">Niğtaş 65</option>
                                                                <option value="YM09.081">Niğtaş 650</option>
                                                                <option value="YM03.001">Niğtaş 1</option>
                                                                <option value="YM03.004">Niğtaş 2</option>
                                                                <option value="YM03.005">Niğtaş 3</option>
                                                                <option value="YM03.007">Niğtaş 5</option>
                                                                <option value="YM03.008">Niğtaş 10</option>
                                                                <option value="YM03.009">Niğtaş 20</option>
                                                                <option value="YM03.010">Niğtaş 40</option>
                                                                <option value="YM03.011">Niğtaş 60</option>
                                                                <option value="YM03.012">Niğtaş 80</option>
                                                                <option value="YM05.001">Niğtaş 100</option>
                                                                <option value="YM10.01">Niğtaş Hidrofil</option>
                                                                <option value="YM07.078">Niğtaş 95K</option>
                                                                <option value="YM07.076">Niğtaş 75K</option>
                                                                <option value="YM07.082">Niğtaş GLS 926</option>
                                                                <option value="YM07.074">Niğtaş 65K</option>
                                                                <option value="YM09.082">Niğtaş 650K</option>
                                                                <option value="YM06.060">Niğtaş 1FK</option>
                                                                <option value="YM06.061">Niğtaş 1K</option>
                                                                <option value="YM06.065">Niğtaş 2K</option>
                                                                <option value="YM06.068">Niğtaş 3K</option>
                                                                <option value="YM06.071">Niğtaş 5K</option>
                                                                <option value="YM06.055">Niğtaş 10K</option>
                                                                <option value="YM10.02">Niğtaş Hidrofil K</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group row">
                                                        <div class="col-md-10">
                                                            <select class="form-control" name="uruntipi" required>
                                                                <option value=""></option>
                                                                <option value="1">Kaplı</option>
                                                                <option value="2">Mikronize</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><button class="btn btn-icon waves-effect waves-light btn-success"> <i class="fa fa-search"></i> </button></td>
                                            </tr>
                                        </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
