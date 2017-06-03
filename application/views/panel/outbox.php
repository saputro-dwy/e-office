
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">Surat Terkirim</li>
    </ol>
</div><!--/.row--><br />

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Surat Terkirim</div>
            <div class="panel-body">
                <b><i class="fa fa-filter fa-lg"></i> Filter &nbsp;&nbsp;</b>
                <div class="btn-group">
                    <a href="?all" class="btn <?php echo (isset($_GET["all"])) ? "btn-success active" : "btn-primary"; ?>"><i class="fa fa-list fa-lg"></i> Semua</a>
                    <div class="btn-group">
                        <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-chain fa-lg"></i> Dinas (<?php echo (isset($_GET["dinas"]) && $_GET["dinas"] != "") ? $_GET["dinas"] : "Semua" ?>) <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" style="height: 300px;overflow: scroll;">
                            <li><a href="?">Semua Dinas</a></li>
                            <?php foreach($daftar_dinas as $dinas): ?>
                                <li><a href="?id_dinas=<?php echo $dinas->id_dinas; ?>&dinas=<?php echo $dinas->nama_dinas; ?>"><?php echo $dinas->nama_dinas; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <table data-toggle="table" data-url="<?php //echo base_url("panel/json_inbox");?>"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                    <thead>
                    <tr>
                        <th data-field="id_pesan"  data-sortable="true">ID Surat</></th>
                        <th data-field="subjek"  data-sortable="true">Subjek</th>
                        <th data-field="isi_pesan"  data-sortable="true">Isi Pesan</th>
                        <th data-field="waktu" data-sortable="true">Waktu</th>
                        <th>Pilihan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($dikirim as $sr): ?>
                        <tr>
                            <td><?php echo $sr->id_pesan; ?></td>
                            <td><?php echo $sr->subjek; ?></td>
                            <td><?php echo strip_tags(character_limiter($sr->isi_pesan,20)); ?></td>
                            <td><?php echo $sr->waktu_kirim; ?></td>
                            <td>
                                <a href="<?php echo base_url("panel/baca_outbox/" . $sr->id_pesan); ?>" class="btn btn-success">Baca</a>
                                <a href="#" class="btn btn-warning">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><!--/.row-->

</div><!--/.main-->
