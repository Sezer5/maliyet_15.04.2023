
    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                       <hr>
                        <h1>Kırıkkale İstatistik Seçimi</h1>
                        <hr>
                        <table class="table-responsive table-bordered" style="width:100%;">
                            <thead>
                                <tr>
                                    <td>Ürün</td>
                                    <td>Seç</td>
                                </tr>
                            </thead>
                            <tbody>
                                <form action="<?=base_url()?>admin/Istatistikler_kirikkale/urun_sec" method="post">
                                    <tr>
                                        <td>
                                            <select name="urun_adi" style="width:100%;">
                                                <option value="KGM10">KGM10</option>
                                                <option value="KGM49">KGM49</option>
                                                <option value="KGM022">KGM022</option>
                                                <option value="KGM922">KGM922</option>
                                                <option value="KGM2">KGM2</option>
                                                <option value="KA40A">KA40A</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
                                        </td>
                                    </tr>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
