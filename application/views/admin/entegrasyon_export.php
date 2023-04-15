<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-box">
                        <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                <form action="<?=base_url()?>admin/Entegrasyon/Entegrasyon_export2" method="post">
                                    <tr>
                                        <td>Başlangıç Tarihi</td>
                                        <td><input type="date" format="YYYY-MM-DD" name="baslangic" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Bitiş Tarihi</td>
                                        <td><input type="date" format="YYYY-MM-DD" name="bitis" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><button type="submit" style="float:right" class="btn btn-success">SORGULA</button></td>
                                    </tr>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
