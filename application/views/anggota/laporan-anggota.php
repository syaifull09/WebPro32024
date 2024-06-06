<!-- Begin Page Content -->
<div class="container-fluid">

    <?=$this->session->flashdata('pesan');?>
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) {?>
                <div class="alert alert-danger" role="alert">
                <?=validation_errors();?>
                </div>
            <?php }?>
            <?=$this->session->flashdata('pesan');?>
            <a href="<?=base_url('laporan/cetak_laporan_pinjam');?>" target="_blank" class="btn btn-primary mb-3"><i class="fas fa-print"></i> </a>
            <a href="<?=base_url('laporan/laporan_pinjam_pdf');?>" target="_blank" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> </a>
            <a href="<?=base_url('laporan/export_excel_pinjam');?>" target="_blank" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> </a>
            <table class="table table-hover">
                <thead>
                <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col" nowrap>Member Sejak</th>
                        <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
$i = 1;
foreach ($anggota as $l) {?>
                   <tr>
                            <th scope="row"><?=$i++;?></th>
                            <td><?=$l['nama'];?></td>
                            <td><?=$l['email'];?></td>
                            <td><?=date('d F Y', $l['tanggal_input']);?></td>
                            <td>
                                <picture>
                                    <source srcset="" type="image/svg+xml">
                                    <img src="<?=base_url('assets/img/profile/') . $l['image'];?>" class="img-fluid img-thumbnail" alt="..." style="width:60px;height:80px;">
                                </picture>
                            </td>
                            <!--<td>
                                        <a href="<?
                                                    ?>" class="badge badge-info"><i class="fas fa-edit"></i> Ubah</a>
                                        <a href="<?
                                                    ?>" onclick="return confirm('Kamu yakin akan menghapus <?=$judul . ' ' . $b['judul_buku'];?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                                    </td> -->
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
