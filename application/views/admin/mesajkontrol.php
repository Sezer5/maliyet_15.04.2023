</div>
<!-- ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR ADMİNTO CHARTS BURADAN BAŞLIYOR -->

<div class="content-page">
    <!--
    <style>
        /* The flip box container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
        .flip-box {
            background-color: transparent;
            width: 300px;
            height: 200px;
            border: 1px solid #f1f1f1;
            perspective: 1000px;
            /* Remove this if you don't want the 3D effect */
        }

        /* This container is needed to position the front and back side */
        .flip-box-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        /* Do an horizontal flip when you move the mouse over the flip box container */
        .flip-box:hover .flip-box-inner {
            transform: rotateY(180deg);
        }

        /* Position the front and back side */
        .flip-box-front,
        .flip-box-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            /* Safari */
            backface-visibility: hidden;
        }

        /* Style the front side (fallback if image is missing) */
        .flip-box-front {
            background-color: #bbb;
            color: black;
        }

        /* Style the back side */
        .flip-box-back {
            background-color: #bbb;
            color: white;
            transform: rotateY(180deg);
        }

    </style>
    <div class="content">

        <!-- Start Content-->
    <div class="container-fluid">
        <!--
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/home.png" style=" width: 300px;
            height: 200px;">
                       


                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/Home" style="text-decoration:none;">
                            <h2>ANASAYFA</h2>
                            <p style="color:black;">Program anasayfası dönüşü</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/profiles.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/Home/profilim" style="text-decoration:none;">
                            <h2>PROFİLİM</h2>
                            <p style="color:black;">Profil bilgileri sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/asterics.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/tablolar/seperator_kapasite" style="text-decoration:none;">
                            <h2>SEPERATÖR KAPASİTELERİ</h2>
                            <p style="color:black;">Seperatör kapasiteleri bilgileri sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/coins.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/birimfiyat/birim_fiyat" style="text-decoration:none;">
                            <h2>BİRİM FİYATLAR</h2>
                            <p style="color:black;">Birim fiyatlarla ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/speed.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/kapasite/kapasite" style="text-decoration:none;">
                            <h2>KAPASİTE</h2>
                            <p style="color:black;">Kapasite ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/mercek.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/tuketim/tuketim" style="text-decoration:none;">
                            <h2>TÜKETİM</h2>
                            <p style="color:black;">Tüketim ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/battery.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/amortisman/amortisman" style="text-decoration:none;">
                            <h2>AMORTİSMAN</h2>
                            <p style="color:black;">Amortisman ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/thunder.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/enerji/enerji" style="text-decoration:none;">
                            <h2>ENERJİ</h2>
                            <p style="color:black;">Enerji ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/iscilik.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/iscilik/iscilik" style="text-decoration:none;">
                            <h2>İŞÇİLİK</h2>
                            <p style="color:black;">İşçilik ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/robotic.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/robotik/robotik" style="text-decoration:none;">
                            <h2>ROBOTİK</h2>
                            <p style="color:black;">Robotik ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/papersheet.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/yenihesapdoksanbes/yenihesapdoksanbes" style="text-decoration:none;">
                            <h2>95-75 YENİ HESAPLAMA</h2>
                            <p style="color:black;">95-75 Yeni Hesaplama ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/barchart.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/raporlamalar/raporlamalar" style="text-decoration:none;">
                            <h2>RAPORLAMALAR</h2>
                            <p style="color:black;">Raporlamalar ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/bluediamond.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/altiyuzellik/altiyuzellik" style="text-decoration:none;">
                            <h2>650K</h2>
                            <p style="color:black;">650K ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/micro.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/mikronize/mikronize" style="text-decoration:none;">
                            <h2>MİKRONİZE</h2>
                            <p style="color:black;">Mikronize ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/perc.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/mikronizeort/mikronizeort" style="text-decoration:none;">
                            <h2>MİKRONİZE ORTALAMA</h2>
                            <p style="color:black;">Mikronize Ortalama ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/truck.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/yurtici/yurtici" style="text-decoration:none;">
                            <h2>YURTİÇİ MALİYETLER</h2>
                            <p style="color:black;">Yurtiçi Maliyetler ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/ship.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/yurtdisi/yurtdisi" style="text-decoration:none;">
                            <h2>YURTDIŞI MALİYETLER</h2>
                            <p style="color:black;">Yurdışı Maliyetler ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/hammer.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/d01kirici/d01kirici" style="text-decoration:none;">
                            <h2>D01 KIRICI</h2>
                            <p style="color:black;">D01 Kırıcı ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/coated.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/kapli/kapli" style="text-decoration:none;">
                            <h2>KAPLI</h2>
                            <p style="color:black;">Kaplı ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/coatedpercent.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/kapliort/kapliort" style="text-decoration:none;">
                            <h2>KAPLI ORTALAMA</h2>
                            <p style="color:black;">Kaplı Ortalama ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/hidrofil.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/hidrofil/hidrofil" style="text-decoration:none;">
                            <h2>HİDROFİL</h2>
                            <p style="color:black;">Hidrofil ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/doublearrowsmall.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/yetmisbes_seksenbes/yetmisbes_seksenbes" style="text-decoration:none;">
                            <h2>75K - 85K</h2>
                            <p style="color:black;">75K - 85K ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/fourarrow.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/dcagilim/dcagilim" style="text-decoration:none;">
                            <h2>DCAGILIM</h2>
                            <p style="color:black;">Dcagilim ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flip-box" style="display:inline-block;">
                <div class="flip-box-inner">
                    <div class="flip-box-front">

                        <img src="<?=base_url()?>uploads/doublearrow.png" style=" width: 300px;
            height: 200px;">



                    </div>
                    <div class="flip-box-back">
                        <a href="<?=base_url()?>admin/kdag/kdag" style="text-decoration:none;">
                            <h2>KDAG</h2>
                            <p style="color:black;">Kdag ile ilgili bilgilerin sayfası</p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div> -->
        <?php   
    
 //   $this->load->library('Http');
//    $deneme='sezer';
  //  $someArray = [
    //  "username"   => "5336768394",
    //  "password" => "Nigtas2021*-",
//    ];

  //   $someJSON = json_encode($someArray);
//     $deneme= $this->http->post("https://mesajussu.turkcell.com.tr/api/api/integration/v2/login",$someJSON);
  //   $obj = json_decode($deneme);
    // $deger=0;     
            
//    foreach($obj as $key => $value) {
  //      if($key=="token"){
    //      $deger=$value;  
      //  };
//    };
  //  echo $deger;   
			$uyeler ="SELECT * FROM admin WHERE Id=1";
                                                    $uyelerliste = $this->db->query($uyeler);
                                                      foreach ($uyelerliste->result() as $ms){ 
                                                                 $this->load->library('Http');

        $mesaj= "$ms->adsoy";
        $numara="5514057077";
                                                                
													  }
        $deneme=0;
        $deneme = $this->http->post("http://10.51.0.24:8888/SendSMS.aspx?Numara=$numara&Mesaj=$mesaj'");
        echo $deneme;

       
       
            ?>
            <br><br>

    </div>
</div>
