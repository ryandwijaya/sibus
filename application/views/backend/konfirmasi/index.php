<div class="row">
	<div class="col-md-12">
		
<div class="card border border-primary">

     <div class="card-header border-bottom border-primary">	         
     <h2 class="float-left">Data Konfirmasi</h2>
            <a href="<?= base_url() ?>pemesanan/print" class="btn btn-info float-right ml-3"><i class="icon icon-print"></i></a>
     </div>                        

                 
     <div class="card-body">              
                                         
         <!-- Tables -->
                                    <div class="table-responsive">

                                        <table id="data-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th style="width: 30px;">No</th>
                                                <th>Kode Tiket</th>
                                                <th>Nama</th>
                                                <th>Tujuan</th>
                                                <th>Nomor Rek</th>
                                                <th>Tgl Bayar</th>
                                                <th>Bayar Ke</th>
                                                <th>Bukti</th>
                                                
                                                <th class="text-center"><i class="icon icon-gears"></i></th>
                                               
                                            </tr>
                                            </thead>
                                            <tbody>
											<?php 
											$no = 1;
											foreach ($konfirmasi as $val): ?>
                                            <tr class="gradeX">
                                                <td style="width: 30px;"><?= $no ?></td>
                                                <td><?= $val['tiket_kode'] ?></td>
                                                <td><?= $val['tiket_nama'] ?></td>
                                                <td><?= $val['tujuan_lokasi'] ?></td>
                                                <td><?= $val['konfirmasi_no_rek'] ?></td>
                                                <td><?= $val['konfirmasi_tgl_bayar'] ?></td>
                                                <td><?= $val['konfirmasi_rekening'] ?></td>
                                                <td><a href="<?= base_url() ?>uploads/<?= $val['konfirmasi_bukti'] ?>"><?= $val['konfirmasi_bukti'] ?></a></td>
                                                
                                                <td class="text-center">
                                                    <?php if ($val['konfirmasi_status']!='valid'){ ?>
                                                        
                                                	<a href="<?= base_url() ?>admin/konfirmasi/do/<?= $val['konfirmasi_id'] ?>" onclick="return confirm('Yakin ingin mengkonfirmasi tiket dengan kode <?= $val['tiket_kode'] ?>?')" class="btn btn-success btn-sm" title="Konfirmasi"><i class="fa fa-check"></i></a>
                                                	<a href="<?= base_url() ?>admin/konfirmasi/delete/<?= $val['konfirmasi_id'] ?>" class="btn btn-danger btn-sm" title="Hapus Data" onclick="return confirm('Yakin ingin menghapus tiket dengan kode <?= $val['tiket_kode'] ?>?')"><i class="icon icon-trash"></i></a>

                                                    <?php }else{ ?>
                                                    <span class="text-success">Sudah Dikonfirmasi <br> <b><a href="<?= base_url() ?>printTiket/<?= $val['tiket_id'] ?>"> <i class="fa fa-print"></i> Print Tiket ?</a></b></span>
                                                    <?php } ?>

                                                </td>
                                               

                                            </tr>
											<?php $no++; endforeach ?>
                                            
                                            </tbody>
                                        </table>

                                    </div>
                                    <!-- /tables -->
                                    
     </div>                                                        
</div>		



	</div>
</div>



