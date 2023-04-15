</div>
<!-- ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <h1>Üretim Sorgula SERVER</h1>
                        <hr>
                        <form action="<?=base_url()?>admin/uretimsorgulari/uretimsorgulariserver2" method="post">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Ürün</label>
                                <div class="col-md-3">
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
                                        <option value="YM07.083">Niğtaş 70</option>
                                        <option value="YM03.012">Niğtaş 80</option>
                                        <option value="YM05.001">Niğtaş 100</option>
                                        <option value="YM10.01">Hidrofil</option>
                                        <option value="YM20.003">Talk 2X</option>
                                        <option value="YM20.016">Talk 5X</option>
                                        <option value="YM07.078">Niğtaş 95K</option>
                                        <option value="YM07.076">Niğtaş 75K</option>
                                        <option value="YM07.074">Niğtaş 65K</option>
                                        <option value="YM09.082">Niğtaş 650K</option>
                                        <option value="YM06.061">Niğtaş 1K</option>
                                        <option value="YM06.065">Niğtaş 2K</option>
                                        <option value="YM06.068">Niğtaş 3K</option>
                                        <option value="YM06.071">Niğtaş 5K</option>
                                        <option value="YM06.055">Niğtaş 10K</option>
                                        <option value="YM07.082">Niğtaş GLS 926</option>
                                        <option value="YM10.02">Hidrofil K</option>
                                    </select>

                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">İstasyon</label>
                                <div class="col-md-3">
                                    <select class="form-control" name="istasyon">
                                        <option value="1DU">01 NOLU DEĞİRMEN</option>
                                        <option value="2DU">02 NOLU DEĞİRMEN</option>
                                        <option value="3DU">03 NOLU DEĞİRMEN</option>
                                        <option value="5DU">05 NOLU DEĞİRMEN</option>
                                        <option value="NUS.001">DİK DEĞİRMEN</option>
                                        <option value="KUS.003">03 NOLU KAPLAMA</option>
                                        <option value="KUS.004">04 NOLU KAPLAMA</option>
                                        <option value="KUS.005">06 NOLU KAPLAMA</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="simpleinput">Başlangıç</label>
                                <div class="col-md-3">
                                    <input type="text" id="simpleinput" class="form-control" name="baslangic" placeholder="AA/GG/YYYY">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="simpleinput">Bitiş</label>
                                <div class="col-md-3">
                                    <input type="text" id="simpleinput" class="form-control" name="bitis" placeholder="AA/GG/YYYY">
                                </div>
                                <button type="submit" class="btn btn-success btn width-md waves-effect waves-light">Sorgula</button>
                            </div>

                        </form>
                    </div>
