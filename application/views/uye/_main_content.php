<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-box">
                       <!--
                        <?php
                                $firstdate = date( 'Y' ) . '-01-01';
                                echo $firstdate;
                                $year = date('Y') . '-12-31';
                                echo $year;
                        ?>
                        <br><br><br><br><br>
                        <?php 
                            $date = new DateTime('now');
                            $date->modify('last day of this month');
                            echo $date->format('Yy-Mm-Dd');
                        ?>
						-->
						<hr>


                    <?php $baglan = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');

						$kur=$baglan->Currency;

						/*
						0 => Amerikan Doları  (USD)
						1 => Avustralya Doları (AUD)
						2 => Danimarka Kronu  (DKK)
						3 => Euro  (EUR)
						4 => Sterlin (GBP)
						*/

						?>
					<div class="col-md-4" style="display: inline-block;width:100%">
						<table class="table-bordered table table-responsive" style="width:100%;">
							<thead>
							<th>
								<h3>Niğde Hava Durumu</h3>
							</th>
							</thead>
							<tbody>
							<td>
								<img src="http://www.mgm.gov.tr/sunum/tahmin-show-2.aspx?m=NIGDE&basla=0&bitir=5&rC=111&rZ=fff" style="width:400px; height:70px;" alt="NIGDE" />
							</td>
							</tbody>
						</table>
					</div>
						<div class="col-md-3" style="display: inline-block;width:100%" >
							<table class="table table-bordered table-responsive" style="width:100%;">
								<thead>
								<tr>
									<th colspan="2">Dolar</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>Alış</td>
									<td>Satış</td>
								</tr>
								<tr>
									<td><?=$kur[0]->BanknoteBuying?></td>
									<td><?=$kur[0]->BanknoteSelling?></td>
								</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-3" style="display: inline-block;width:100%;">
							<table class="table table-bordered table-responsive" style="width:100%;">
								<thead>
								<tr>
									<th colspan="2">Euro</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>Alış</td>
									<td>Satış</td>
								</tr>
								<tr>
									<td><?=$kur[3]->BanknoteBuying?></td>
									<td><?=$kur[3]->BanknoteSelling?></td>
								</tr>
								</tbody>
							</table>
						</div>


                    </div>



                </div>
			</div>
			<div class="col-lg-12">
				<div class="col-md-5" style="display: inline-block">
					<table style="width: 100%;">
						<tr>
							<h3>Güncel Haberler</h3>
						</tr>
						<tr>
							<div style="font: normal 11px Arial; width: 500px; border: solid 1px #ccc; background: #fff; border-radius: 3px; box-shadow: 1px 1px 3px #ccc;">
								<h2 style="padding: 8px; margin: 0; height: 55px; border: 0; border-bottom: solid 1px #ccc;">
									<a href="https://www.trthaber.com/">
										<img src="https://trthaberstatic.cdn.wp.trt.com.tr/static/images/siteneEkle/logo_a_v3.png" alt="TRT Haber Haberler" style="border: none 0;">
									</a>
								</h2>
								<iframe frameborder="0" width="500" height="282" src="https://www.trthaber.com/sitene-ekle/mansetler-m/?haberSay=10&renk=a&baslik=1&resimler=1"></iframe>
								<div style="text-align: center;line-height: 23px;border-top: solid 1px #ccc; color: #666; margin-top: 5px;box-shadow: 0 -1px 3px #ccc;">
									<a style="text-decoration: none;color: #666; font: normal 11px Arial;" href="https://www.trthaber.com/">Güncel Haberler</a> &nbsp;|&nbsp; <a style="text-decoration: none;color: #666; font: normal 11px Arial;" href="https://www.trthaber.com/tum-mansetler.html">Haber Manşetleri</a>
								</div>
							</div>
						</tr>
					</table>
				</div>
				<div class="col-md-5" style="display: inline-block">
					<table style="width: 100%;">
						<tr>
							<h3>Ekonomi Haberleri</h3>
						</tr>
						<tr>
							<!-- BAŞLA: TRT Haber Sitene Ekle -->
							<div style="font: normal 11px Arial; width: 500px; border: solid 1px #ccc; background: #fff; border-radius: 3px; box-shadow: 1px 1px 3px #ccc;">
								<h2 style="padding: 8px; margin: 0; height: 55px; border: 0; border-bottom: solid 1px #ccc;">
									<a href="https://www.trthaber.com/">
										<img src="https://trthaberstatic.cdn.wp.trt.com.tr/static/images/siteneEkle/logo_a_v3.png" alt="TRT Haber Haberler" style="border: none 0;">
									</a>
								</h2>
								<iframe frameborder="0" width="500" height="282" src="https://www.trthaber.com/sitene-ekle/ekonomi-7/?haberSay=10&renk=a&baslik=1&resimler=1"></iframe>
								<div style="text-align: center;line-height: 23px;border-top: solid 1px #ccc; color: #666; margin-top: 5px;box-shadow: 0 -1px 3px #ccc;">
									<a style="text-decoration: none;color: #666; font: normal 11px Arial;" href="https://www.trthaber.com/">Güncel Haberler</a> &nbsp;|&nbsp; <a style="text-decoration: none;color: #666; font: normal 11px Arial;" href="https://www.trthaber.com/haber/ekonomi/">Ekonomi Haberleri</a>
								</div>
							</div>
							<!-- BİTİŞ: TRT Haber Sitene Ekle -->
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
