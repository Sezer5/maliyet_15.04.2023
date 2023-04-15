    <div id="left-sidebar" class="sidebar">
        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="<?=base_url()?>uploads/logoA4.jpg" class="circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span><?=$this->session->oturum_uye['adsoy']?>,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?=$this->session->oturum_uye['yetki']?></strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="<?=base_url()?>uye/home/profilim"><i class="icon-user"></i>Profilim</a></li>

                        <li class="divider"></li>
                        <li><a href="<?=base_url()?>uye/login/logout"><i class="icon-power"></i>Logout</a></li>
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
                                <a href="<?=base_url()?>uye/home"><i class="fa fa-home"></i><span>Ana Sayfa</span></a>

                            </li>
                            <li>
                                <a href="<?=base_url()?>uye/home/profilim"><i class="fa fa-user"></i><span>Profilim</span></a>

                            </li>
                            <li class="">
                                <a href="#guncelmenuler" class="has-arrow" aria-expanded="false"><i class="fa fa-align-justify"></i><span>Güncel Menüler</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <li><a href="<?=base_url()?>uye/amortisman/amortisman">Amortisman</a></li>
                                    <li><a href="<?=base_url()?>uye/birimfiyat/birimfiyat">Birimfiyatlar & Parametreler</a></li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="#nakliye" class="has-arrow" aria-expanded="false"><i class="fa fa-truck"></i><span>Nakliye Maliyeti</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <li><a href="<?=base_url()?>uye/gerceklesennakliye/gerceklesennakliyemaliyetleri">Gerçekleşen Nakliye Maliyetleri</a></li>
                                    <li><a href="<?=base_url()?>uye/gerceklesennakliye/gerceklesennakliye">Gerçekleşen Nakliye Seferleri</a></li>
                                    <!--   <li><a href="<?=base_url()?>uye/birimfiyatnakliye/birimfiyatnakliye">Birimfiyatlar & Parametreler</a></li> -->
                                    <li><a href="<?=base_url()?>uye/lokasyonnakliye/lokasyonnakliye">Güncel Silobas Maliyetleri</a></li>
                                    <!--  <li><a href="<?=base_url()?>uye/lokasyonnakliye/nakliye_raporlari">Nakliye Raporları</a></li> -->
                                </ul>
                            </li>
                            <!--
                            <li class="">
                                <a href="#raporlamalar" class="has-arrow" aria-expanded="false"><i class="fa fa-file"></i><span>Rapormalar</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <li><a href="<?=base_url()?>uye/raporlamalar/raporlamalar">Güncel Raporlar</a></li>
                                    <li><a href="<?=base_url()?>uye/raporlamalar/Raporlamalargerceklesen">Gerçekleşen Raporlar</a></li>
                                </ul>
                            </li>
                            
                            <li class="">
                                <a href="#sorgumenuleri" class="has-arrow" aria-expanded="false"><i class="fa fa-database"></i><span>Sorgu Menüleri</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <li><a href="<?=base_url()?>uye/Logosorgulari/Logosorgulari">MM Logo Sorguları</a></li>
                                    <li><a href="<?=base_url()?>uye/Logoserversorgulari/Logoserversorgulari">MM Logo Server Sorguları</a></li>
                                    <li><a href="<?=base_url()?>uye/Logosorgulariyhy/Logosorgulariyhy">YHY Logo Sorguları</a></li>
                                    <li><a href="<?=base_url()?>uye/Logosorgulariyhy/Logosorgulariyhyserver">YHY Logo Server Sorguları</a></li>
                                    <li><a href="<?=base_url()?>uye/uretimsorgulari/uretimsorgulari">ÜRETİM Logo Sorguları</a></li>
                                    <li><a href="<?=base_url()?>uye/uretimsorgulari/uretimsorgulariserver">ÜRETİM Logo Server Sorguları</a></li>
                                </ul>
                            </li> 
                            <li class="">
                                <a href="#sorgumenuleri" class="has-arrow" aria-expanded="false"><i class="fa fa-database"></i><span>Entegrasyon Menüleri</span></a>
                                <ul aria-expanded="false" class="collapse" style="height: 0px;">
                                    <li><a href="<?=base_url()?>uye/Entegrasyon/Entegrasyon_export">MASRAF MERKEZİ DÜZENLEMELERİ</a></li>
                                    <li><a href="<?=base_url()?>uye/uretimduzenleme/uretimduzenleme">Üretim Düzenleme</a></li>
                                    <li><a href="<?=base_url()?>uye/Entegrasyon/veri_islemleri">Veri İşlemleri</a></li>
                                    
                                </ul>
                            </li>
                            -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="right_icon_bar">
        <ul>
            <li data-toggle="tooltip" data-placement="left" title="" data-original-title="Tablolardaki bütün verileri günceller."><a href="<?=base_url()?>uye/Butunguncellemeler/Butunguncellemeler"><i class="icon-reload"></i></a></li>

            <li><a href="javascript:void(0);" class="right_icon_btn"><i class="fa fa-angle-right"></i></a></li>
        </ul>

    </div>
    <script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
