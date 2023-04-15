
<script src="<?=base_url()?>assets/admin/excel_assets/jquery.min.js"></script>
</div>
<div class="content-page">
    <div class="content">

        <h2>Soru Import</h2>
        <hr>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-xl-2">

                    <form action="<?php echo base_url();?>admin/import/importFile" method="post" enctype="multipart/form-data">
                        Excel Dosyasını Seçiniz :
                        <table>
                            <tr>
                                <td><input type="file" name="uploadFile" value="" /></td>
                                <td><input type="submit" name="submit" value="Upload" /></td>
                            </tr>
                            <tr style="height:100px;"></tr>
                            <tr>
                                        <td>Örnek Excel Formatı</td>
                                        <td><a href="<?=base_url()?>uploads/ornek_excel.xlsx" download>
  İndir
</a></td>
                                    </tr>
                                    
                        </table>
                        <table>
                            <tr><a href="<?=base_url()?>admin/Home"> Geri Dön</a></tr>
                        </table>
                    </form>
                </div>
