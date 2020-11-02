<form class="form-horizontal" action="<?= site_url('Backend/save_register_rumahmakan'); ?>" method="POST" enctype="multipart/form-data">
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title"><?= $title ?></h5>
            <input type="hidden" name="id_rumahmakan" value="<?= (isset($id_rumahmakan['id_rumahmakan'])) ? md5($id_rumahmakan['id_rumahmakan']) : ''; ?>">
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
                    Masukan Data Rumah Makan
                    <a class="control-arrow" data-toggle="collapse" data-target="#demo1">
                        <i class="icon-circle-down2"></i>
                    </a>
                </legend>

                <div class="collapse in" id="demo1">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Nama Rumah Makan</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="nama_rumahmakan" placeholder="Masukan Nama Rumah Makan" value="<?= (isset($id_rumahmakan['nama_rumahmakan'])) ? ($id_rumahmakan['nama_rumahmakan']) : ''; ?>" />
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
                        <label class="col-lg-3 control-label">Jam Buka</label>
                        <div class="col-lg-9">
                            <input type="time" class="form-control" name="jam_buka" placeholder="Masukan Jam Buka" value="<?= (isset($id_rumahmakan['jam_buka'])) ? ($id_rumahmakan['jam_buka']) : ''; ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Jam Tutup</label>
                        <div class="col-lg-9">
                            <input type="time" class="form-control" name="jam_tutup" placeholder="Masukan Jam Tutup" value="<?= (isset($id_rumahmakan['jam_tutup'])) ? ($id_rumahmakan['jam_tutup']) : ''; ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Keterangan</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="keterangan" placeholder="Masukan Keterangan" value="<?= (isset($id_rumahmakan['keterangan'])) ? ($id_rumahmakan['keterangan']) : ''; ?>" />
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