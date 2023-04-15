<!doctype html>
<html lang="en">

<head>
    <title><img src="<?=base_url()?>uploads/1_(1)1.png" alt="" style="width:20px;"></title>
    <script type="text/javascript">
        message = "Niğtaş A.Ş. Maliyet Yönetimi ";

        function step() {
            message = message.substr(1) + message.substr(0, 1);
            document.title = message.substr(0, 15);
        }

    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/toastr/toastr.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/charts-c3/plugin.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/css/main.css">
    <script src="<?=base_url()?>assets/admin/js/pages/draggable.init.js"></script>
    <script src="<?=base_url()?>assets/admin/dragpage1.js"></script>
    <script src="<?=base_url()?>assets/admin/dragpage2.js"></script>

</head>
<script>
    $(function() {
        // photo upload
        $('#btn-upload-photo').on('click', function() {
            $(this).siblings('#filePhoto').trigger('click');
        });

        // plans
        $('.btn-choose-plan').on('click', function() {
            $('.plan').removeClass('selected-plan');
            $('.plan-title span').find('i').remove();

            $(this).parent().addClass('selected-plan');
            $(this).parent().find('.plan-title').append('<span><i class="fa fa-check-circle"></i></span>');
        });
    });

</script>
<?php 
if(isset($_POST['search']))
{
    echo $search = $_POST['search'];
}
?>

<script>
    document.onkeydown = function(evt) {
        var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
        if (keyCode == 27) {
            //your function call here
            document.test.submit();

        }
    }

</script>
<form name="test" action="<?=base_url()?>admin/login/logout" method="POST">

</form>

<?php if($this->session->oturum_data["sysgeor"]=='1'){ ?>
<form name="test2" action="<?=base_url()?>admin/home/sysggeor" method="POST">

</form>
<?php }else{ ?>
<form name="test2" action="<?=base_url()?>admin/home" method="POST">

</form>
<?php }?>
<script>
    document.onkeydown = function(evt) {
        var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
        if (evt.ctrlKey && evt.altKey && evt.which == 89) {
            //your function call here
            document.test2.submit();

        }
    }

</script>

<?php 
if(isset($_POST['search']))
{
    echo $search = $_POST['search'];
}
?>
<script type="text/javascript">
    $(document).ready(function() {

        if (localStorage.getItem("my_app_name_here-quote-scroll") != null) {
            $(window).scrollTop(localStorage.getItem("my_app_name_here-quote-scroll"));
        }

        $(window).on("scroll", function() {
            localStorage.setItem("my_app_name_here-quote-scroll", $(window).scrollTop());
        });

    });

</script>

<body onload="setInterval(step,100)" data-theme="light" class="font-nunito">
    <div id="wrapper" class="theme-cyan">

        

        <!-- Top navbar div start -->
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <marquee>
                        <img src="<?=base_url()?>uploads/1_(1)1.png" alt="" style="width:20px;"> Niğtaş Pazarlama Departmanı Tarafından Geliştirilmiştir.

                    </marquee>
                </div>

                <div class="navbar-right">
                    <form id="navbar-search" class="navbar-form search-form">
                        <input value="" class="form-control" placeholder="Search here..." type="text">
                        <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                    </form>

                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                    <i class="fa fa-bell"></i>
                                    <span class="notification-dot"></span>
                                </a>
                                <ul class="dropdown-menu notifications">
                                    <li class="header"><strong>You have 4 new Notifications</strong></li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-info text-warning"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                                    <span class="timestamp">10:00 AM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-like text-success"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                                    <span class="timestamp">11:30 AM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-pie-chart text-info"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                                    <span class="timestamp">04:00 PM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-info text-danger"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Error on website analytics configurations</p>
                                                    <span class="timestamp">Yesterday</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?=base_url()?>admin/login/logout" class="icon-menu"><i class="fa fa-power-off"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
