<script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-box">
                        <h1>Masraf Sorgula</h1>
                        <hr>
                        <form action="<?=base_url()?>admin/logosorgulariyhy/logosorgulariyhy2server" method="post">


                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Masraf Türü</label>
                                <div class="col-md-3">
                                    <select class="form-control" name="masrafturu">
                                        <option value="730.3.033">Enerji</option>
                                        <option value="720.1.100">İşçilik</option>
                                        <option value="gug">GÜG</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="simpleinput">Başlangıç</label>
                                <div class="col-md-3">
                                    <input type="text" id="simpleinput" class="form-control" name="baslangic" placeholder="YYYY/AA/GG">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label" for="simpleinput">Bitiş</label>
                                <div class="col-md-3">
                                    <input type="text" id="simpleinput" class="form-control" name="bitis" placeholder="YYYY/AA/GG">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <button type="submit" class="btn-secondary">Secondary</button>
                                </div>
                            </div>

                        </form>

                    </div>
