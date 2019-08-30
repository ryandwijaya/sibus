<div class="row">
    <div class="col-md-4">
        <div class="dt-card">
            <div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
                <span class="badge badge-success badge-top-right">Jumlah Bus</span>
                <div class="media">
                    <i class="fa fa-bus text-success icon-5x mr-xl-5 mr-3 align-self-center"></i>
                    <div class="media-body">
                        <p class="mb-1 h1"><?= count($bus) ?></p>
                        <span class="d-block text-light-gray">Unit</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="dt-card">
            <div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
                <span class="badge badge-info badge-top-right">Jadwal Keberangkatan</span>
                <div class="media">
                    <i class="fa fa-clock-o text-info icon-5x mr-xl-5 mr-3 align-self-center"></i>
                    <div class="media-body">
                        <p class="mb-1 h1"><?= count($jadwal) ?></p>
                        <span class="d-block text-light-gray">Jadwal</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="dt-card">
            <div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
                <span class="badge badge-primary badge-top-right">Jumlah Pemesanan</span>
                <div class="media">
                    <i class="fa fa-ticket text-primary icon-5x mr-xl-5 mr-3 align-self-center"></i>
                    <div class="media-body">
                        <p class="mb-1 h1"><?= count($pemesanan) ?></p>
                        <span class="d-block text-light-gray">Orang</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

    
</div>