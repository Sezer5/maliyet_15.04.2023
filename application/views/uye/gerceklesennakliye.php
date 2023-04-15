<script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-box">
                        <form action="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliyesorgula" method="post">
                            <div class="form-group">
                                <table class="table-responsive table-bordered">
                                    <tr>
                                        <td style="width:50%"><label>Başlangıç Tarihi</label></td>
                                        <td style="width:50%"><input type="text" name="baslangic" class="form-control" placeholder="YYYY-AA-GG"></td>


                                    </tr>
                                    <tr>
                                        <td style="width:50%"><label>Bitiş Tarihi</label></td>
                                        <td style="width:50%"><input type="text" name="bitis" class="form-control" placeholder="YYYY-AA-GG"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%"><label>Lokasyon</label></td>
                                        <td style="width:50%"><input type="text" name="lokasyon" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align:right;"><button type="submit" class="btn btn-bordered-success waves-effect  width-md waves-light"><i class="ti-search"></i> SORGULA</button></td>
                                    </tr>
                                </table>



                            </div>


                        </form>
                    </div>

                </div>

                <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>

                <!-- Init js -->
                <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>

                <!-- App js -->
                <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>
