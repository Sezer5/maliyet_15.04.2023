<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Niğtaş | Maliyet Yönetim</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=base_url()?>uploads/12.png">
    <link href="<?=base_url()?>assets/admin/js/sweet-alert.js" type="text/javascript" />
    <!-- Bootstrap Css -->
    <link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?=base_url()?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?=base_url()?>assets/admin/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="<?=base_url()?>uploads/12.png">

    <!-- Sweet Alert-->
    <link href="<?=base_url()?>assets/admin/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?=base_url()?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?=base_url()?>assets/admin/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/admin/libs/custombox/custombox.min.css" rel="stylesheet">
    <script src="assets/libs/custombox/custombox.min.js"></script>
</head>


<body>
    <div data-toggle="modal" data-target=".bs-example-modal-lg">
        <video id="video" style="width:100%;" autoplay muted loop>
            <source src="<?=base_url()?>uploads/film (2).mp4" type="video/mp4" />
        </video>




    </div>
    <!--  Modal content for the above example -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Yönetim Girişi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form action="<?=base_url()?>uye/Login/login_ol" method="post">

                        <div class="form-group mb-3">
                            <label for="emailaddress">Kullanıcı Adı</label>
                            <input name="user_id" class="form-control" type="text" id="emailaddress" required="" placeholder="Kullanıcı adı giriniz...">
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Şifre</label>
                            <input name="password" class="form-control" type="password" required="" id="password" placeholder="Şifre giriniz...">
                        </div>

                        <div class="form-group mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                <label class="custom-control-label" for="checkbox-signin">Beni Hatırla!</label>
                            </div>
                        </div>

                        <div class="form-group mb-0 text-center">
                            <button type="submit" class="btn btn-primary btn-block" id="sa-success">Giriş</button>
                        </div>

                    </form>
                </div>
                <marquee width="100%" behavior="alternate" height="100px">
                    <h3 style="color:blue"><img src="<?=base_url()?>assets/admin/images/11.png" alt="" height="22" class="logo-dark mx-auto"> Niğtaş Pazarlama Departmanı Tarafından Geliştirilmiştir.</h3>

                </marquee>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



    </div>
    <!-- end container -->
    </div>
    <script src="<?=base_url()?>assets/admin/js/vendor.min.js"></script>

    <!-- Sweet Alerts js -->
    <script src="<?=base_url()?>assets/admin/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Sweet alert init js-->
    <script src="<?=base_url()?>assets/admin/js/pages/sweet-alerts.init.js"></script>


    <!-- App js -->
    <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>
    <!-- end page -->
    <script src="<?=base_url()?>assets/admin/js/pages/sweet-alerts.init.js"></script>
    <script src="<?=base_url()?>assets/admin/libs/sweetalert2/sweetalert2.min.js"></script>
    <!-- Vendor js -->
    <script src="<?=base_url()?>assets/admin/js/vendor.min.js"></script>
    <script src="<?=base_url()?>assets/admin/js/vendor.min.js"></script>
    <!-- App js -->
    <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>

</body>

</html>
