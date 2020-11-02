<form class="form-horizontal" action="<?= site_url('Backend/save_register_homestay'); ?>" method="POST" enctype="multipart/form-data">
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title"><?= $title ?></h5>
            <input type="hidden" name="id_homestay" value="<?= (isset($id_homestay['id_homestay'])) ? md5($id_homestay['id_homestay']) : ''; ?>">
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <fieldset>
                <legend class="text-semibold">
                    <i class="icon-file-text2 position-left"></i>
                    Masukan Data HomeStay
                    <a class="control-arrow" data-toggle="collapse" data-target="#demo1">
                        <i class="icon-circle-down2"></i>
                    </a>
                </legend>

                <div class="collapse in" id="demo1">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Nama Home Stay</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="nama_homestay" placeholder="Masukan Nama Homestay" value="<?= (isset($id_homestay['nama_homestay'])) ? ($id_homestay['nama_homestay']) : ''; ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-3">Jenis</label>
                        <div class="col-lg-9">
                            <select name="id_jenis" class="form-control">
                                <?php
                                foreach ($jenis as $val) { ?>
                                    <option value="<?= $val['id_jenis']; ?>"><?= $val['nama_jenis']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Masukan Foto</label>
                        <div class="col-lg-9">
                            <input type="file" class="file-styled" name="foto">
                            <span class="help-block">Accepted formats: pdf, doc. Max file size 2Mb</span>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</form>