    <div id="left-sidebar" class="sidebar">
        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="<?=base_url()?>uploads/logoA4.jpg" class="circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span><?=$this->session->oturum_data['adsoy']?>,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?=$this->session->oturum_data['yetki']?></strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="<?=base_url()?>admin/home/profilim"><i class="icon-user"></i>Profilim</a></li>

                        <li class="divider"></li>
                        <li><a href="<?=base_url()?>admin/login/logout"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
                <hr>


            </div>
            <!-- Nav tabs -->
            <ul class="nav">
                <div class="tab-pane" id="setting">
                    <ul class="list-unstyled mt-3">
                        <li class="d-flex align-items-center mb-2">
                            <label class="toggle-switch theme-switch">
                                <input type="checkbox">
                                <span class="toggle-switch-slider"></span>
                            </label>
                            <span class="ml-3">Gece Modu</span>
                        </li>
                    </ul>


                </div>
            </ul>
            <hr>
            <div class="tab-content padding-0">
                <div class="tab-pane active" id="menu">
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul id="main-menu" class="metismenu li_animation_delay">
                            <li>
                                <a href="<?=base_url()?>admin/home"><i class="fa fa-home"></i><span>Ana Sayfa</span></a>

                            </li>
                            <li>
                                <a href="<?=base_url()?>admin/home/profilim"><i class="fa fa-user"></i><span>Profilim</span></a>

                            </li>
                            <li class="">
                                <a href="#maliyetler" class="has-arrow" aria-expanded="false"><i class="fa fa-tags"></i><span>Ürün Maliyetleri</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <li><a href="<?=base_url()?>admin/maliyetler/maliyetler">Niğde Merkez / Güncel</a></li>
                                    <li><a href="<?=base_url()?>admin/maliyetler/satis_maliyetleri">Satış Maliyetleri</a></li>
                                    <li><a href="<?=base_url()?>admin/gerceklesenmaliyetler/gerceklesenmaliyetler">Niğde Merkez / Gerçekleşen</a></li>
                                    <li><a href="<?=base_url()?>admin/Kirikkale_Maliyetler_Guncel/Kirikkale_Maliyetler_Guncel">Kırıkkale / Güncel</a></li>
                                    <li><a href="<?=base_url()?>admin/Kirikkale_Maliyetler_Gerceklesen/Kirikkale_Maliyetler_Gerceklesen">Kırıkkale / Gerçekleşen</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#ozettablolar" class="has-arrow" aria-expanded="false"><i class="fa fa-table"></i><span>Niğde Özet Tablolar</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <li><a href="<?=base_url()?>admin/mikronizeort/mikronizeort">Güncel Mikronize Ort.</a></li>
                                    <li><a href="<?=base_url()?>admin/kapliort/kapliort">Güncel Kaplı Ort.</a></li>
                                    <li><a href="<?=base_url()?>admin/granul/granul">Güncel Granül</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#guncelmenuler" class="has-arrow" aria-expanded="false"><i class="fa fa-align-justify"></i><span>Güncel Menüler</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <li><a href="<?=base_url()?>admin/amortisman/amortisman">Amortisman</a></li>
                                    <li><a href="<?=base_url()?>admin/birimfiyat/birimfiyat">Birimfiyatlar & Parametreler</a></li>
                                    <li><a href="<?=base_url()?>admin/kapasite/kapasite">İstasyonlar & Kapasiteler</a></li>
                                    <li><a href="<?=base_url()?>admin/Kirikkale_kapasite/Kirikkale_kapasite">Kırıkkale Kapasiteler</a></li>
                                    <li><a href="<?=base_url()?>admin/enerji/enerji">Enerji</a></li>
                                    <li><a href="<?=base_url()?>admin/mikronize/mikronize">Mikronize</a></li>
                                    <li><a href="<?=base_url()?>admin/Kirikkale_mamuller/Kirikkale_mamuller">Kırıkkale Mamuller</a></li>
                                    <li><a href="<?=base_url()?>admin/kapli/kapli">Kaplı</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#gerceklesenmenuler" class="has-arrow" aria-expanded="false"><i class="fa fa-align-justify"></i><span>Gerçekleşen Menüler</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <?php if($this->session->oturum_data['sysgeor']==1){?>

                                    <li><a href="<?=base_url()?>admin/dagilimgerceklesen/dagilimgerceklesen">Dağılımlar</a></li> <?php } ?>
                                    <li><a href="<?=base_url()?>admin/masrafmerkezler/masrafmerkezler">Masraf Merkezleri</a></li>
                                    <li><a href="<?=base_url()?>admin/gerceklesendegerlerduzenleme/gerceklesendegerlerduzenleme">MM Düzenleme</a></li>
                                    <li><a href="<?=base_url()?>admin/uretimduzenleme/uretimduzenleme">Üretim Düzenleme</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#gerceklesenmenuler" class="has-arrow" aria-expanded="false"><i class="fa fa-align-justify"></i><span>Gerçekleşen Menüler Kırıkkale</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <?php if($this->session->oturum_data['sysgeor']==1){?>

                                    <li><a href="<?=base_url()?>admin/dagilimgerceklesen/dagilimgerceklesen">Dağılımlar Kırıkkale</a></li> <?php } ?>
                                    <li><a href="<?=base_url()?>admin/masrafmerkezlerkirikkale/masrafmerkezlerkirikkale">Masraf Merkezleri Kırıkkale</a></li>
                                    <li><a href="<?=base_url()?>admin/gerceklesendegerlerduzenleme/gerceklesendegerlerduzenleme">MM Düzenleme Kırıkkale</a></li>
                                    <li><a href="<?=base_url()?>admin/uretimduzenleme/uretimduzenleme">Üretim Düzenleme Kırıkkale</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#istatistikler" class="has-arrow" aria-expanded="false"><i class="fa  fa-bar-chart-o"></i><span>İstatistikler</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <li><a href="<?=base_url()?>admin/Istatistikler/istatistiksecimi">Niğde İstatistikleri</a></li>
                                    <li><a href="<?=base_url()?>admin/Istatistikler_kirikkale/kirikkaleistatistiksecimi">Kırıkkale İstatistikleri</a></li>
									<li><a href="<?=base_url()?>admin/gerceklesendegerler/gerceklesendegerler">Gerçekleşen MKG</a></li>

								</ul>
                            </li>
                            <li class="">
                                <a href="#nakliye" class="has-arrow" aria-expanded="false"><i class="fa fa-truck"></i><span>Nakliye Maliyeti</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <li><a href="<?=base_url()?>admin/gerceklesennakliye/gerceklesennakliyemaliyetleri">Gerçekleşen Nakliye Maliyetleri</a></li>
                                    <li><a href="<?=base_url()?>admin/gerceklesennakliye/gerceklesennakliye">Gerçekleşen Nakliye Seferleri</a></li>
                                    <!--   <li><a href="<?=base_url()?>admin/birimfiyatnakliye/birimfiyatnakliye">Birimfiyatlar & Parametreler</a></li> -->
                                    <li><a href="<?=base_url()?>admin/lokasyonnakliye/lokasyonnakliye">Güncel Silobas Maliyetleri</a></li>
                                    <li><a href="<?=base_url()?>admin/lokasyonnakliye/nakliye_raporlari">Nakliye Raporları</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#nakliye" class="has-arrow" aria-expanded="false"><i class="fa fa-gift"></i><span>Ambalaj Maliyeti</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <li><a href="<?=base_url()?>admin/ambalajmaliyeti/otomatikpaketleme">Otomatik Paketleme</a></li>
                                    <li><a href="<?=base_url()?>admin/ambalajmaliyeti/bigbagpaketleme">Bigbag Mikronize Paketleme</a></li>
                                    <li><a href="<?=base_url()?>admin/ambalajmaliyeti/granulmanuelpaketleme">Granül Manuel Torba Paketleme</a></li>
                                    <li><a href="<?=base_url()?>admin/ambalajmaliyeti/granulbigbagpaketleme">Granül Bigbag Paketleme</a></li>
                                    <li><a href="<?=base_url()?>admin/ambalajmaliyeti/stoklamamaliyeti">Stoklama Maliyeti</a></li>
                                    <li><a href="<?=base_url()?>admin/ambalajmaliyeti/sevkiyatmaliyeti">Sevkiyat Maliyeti</a></li>
                                    <!-- <li><a href="<?=base_url()?>admin/ambalajmaliyeti/ambalajmaliyeti">Ambalaj Malzemeleri Fiyatı</a></li> -->
                                </ul>
                            </li>
                            <li class="">
                                <a href="#raporlamalar" class="has-arrow" aria-expanded="false"><i class="fa fa-file"></i><span>Rapormalar</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <li><a href="<?=base_url()?>admin/raporlamalar/raporlamalar">Güncel Raporlar</a></li>
                                    <li><a href="<?=base_url()?>admin/raporlamalar/Raporlamalargerceklesen">Gerçekleşen Raporlar</a></li>
                                </ul>
                            </li>
                            <!--
                            <li class="">
                                <a href="#sorgumenuleri" class="has-arrow" aria-expanded="false"><i class="fa fa-database"></i><span>Sorgu Menüleri</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <li><a href="<?=base_url()?>admin/Logosorgulari/Logosorgulari">MM Logo Sorguları</a></li>
                                    <li><a href="<?=base_url()?>admin/Logoserversorgulari/Logoserversorgulari">MM Logo Server Sorguları</a></li>
                                    <li><a href="<?=base_url()?>admin/Logosorgulariyhy/Logosorgulariyhy">YHY Logo Sorguları</a></li>
                                    <li><a href="<?=base_url()?>admin/Logosorgulariyhy/Logosorgulariyhyserver">YHY Logo Server Sorguları</a></li>
                                    <li><a href="<?=base_url()?>admin/uretimsorgulari/uretimsorgulari">ÜRETİM Logo Sorguları</a></li>
                                    <li><a href="<?=base_url()?>admin/uretimsorgulari/uretimsorgulariserver">ÜRETİM Logo Server Sorguları</a></li>
                                </ul>
                            </li> -->
                            <li class="">
                                <a href="#sorgumenuleri" class="has-arrow" aria-expanded="false"><i class="fa fa-database"></i><span>Entegrasyon Menüleri</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <li><a href="<?=base_url()?>admin/Entegrasyon/Entegrasyon_export">MASRAF MERKEZİ DÜZENLEMELERİ</a></li>
                                    <li><a href="<?=base_url()?>admin/uretimduzenleme/uretimduzenleme">Üretim Düzenleme</a></li>
                                    <li><a href="<?=base_url()?>admin/Entegrasyon/veri_islemleri">Veri İşlemleri</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="right_icon_bar">
        <ul>
            <li data-toggle="tooltip" data-placement="left" title="" data-original-title="Güncel maliyetlerde bütün tabloların excellerini alır."><a href="<?=base_url()?>admin/Butunexceller/Butunexceller"><i class="fa fa-file-excel-o"></i></a></li>
            <li data-toggle="tooltip" data-placement="left" title="" data-original-title="Kırıkkale güncel maliyetlerindeki bütün tabloların excellerini alır."><a href="<?=base_url()?>admin/kirikkale_butunexceller/butunexceller"><i class="fa fa-file-excel-o"></i></a></li>
            <li data-toggle="tooltip" data-placement="left" title="" data-original-title="Gerçekleşen maliyetlerin bütün verilerini yedekler."><a href="<?=base_url()?>admin/Raporlamalar/Raporalgerceklesen"><i class="fa fa-file"></i></a></li>
            <li data-toggle="tooltip" data-placement="left" title="" data-original-title="Gerçekleşen nakliye maliyetlerinin bütün verilerini yedekler."><a href="<?=base_url()?>admin/Raporlamalar/Raporalgerceklesen_nakliye"><i class="fa fa-truck"></i></a></li>
            <li data-toggle="tooltip" data-placement="left" title="" data-original-title="Güncel maliyetlerin bütün verilerini yedekler."><a href="<?=base_url()?>admin/Raporlamalar/Raporal"><i class="fa fa-file"></i></a></li>
            <li data-toggle="tooltip" data-placement="left" title="" data-original-title="Tablolardaki bütün verileri günceller."><a href="<?=base_url()?>admin/Butunguncellemeler/Butunguncellemeler"><i class="icon-reload"></i></a></li>

            <li><a href="javascript:void(0);" class="right_icon_btn"><i class="fa fa-angle-right"></i></a></li>
        </ul>

    </div>
    <script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
