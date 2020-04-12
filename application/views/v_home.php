<div id="map" style="height: 500px"></div>

<script>

var map = L.map('map').setView([-7.2780317,109.9775643], 7);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {

    maxZoom: 18,
    id: 'mapbox/dark-v10'
}).addTo(map);


<?php foreach ($pemetaan as $key => $value) { ?>
        
        <?php 
        if ($value->warna=='red') { ?>
                L.circle([<?= $value->latitude ?>,<?= $value->longitude ?>], {
        radius: <?= $value->radius ?>,
        color: '<?= $value->warna ?>',
        fillColor: '<?= $value->warna ?>',
        fillOpacity: 0.1,
        }).bindPopup("<b><?= $value->nama_gunung ?></b><br>Status : <?= $value->status ?><br>Keterangan :  <?= $value->keterangan ?><br>Radius Bahaya : 20 Km").addTo(map);
        <?php } ?>

        <?php 
        if ($value->warna=='yellow') { ?>
                L.circle([<?= $value->latitude ?>,<?= $value->longitude ?>], {
        radius: <?= $value->radius ?>,
        color: '<?= $value->warna ?>',
        fillColor: '<?= $value->warna ?>',
        fillOpacity: 0.1,
        }).bindPopup("<b><?= $value->nama_gunung ?></b><br>Status : <?= $value->status ?><br>Keterangan :  <?= $value->keterangan ?><br>Radius Bahaya : 10 Km").addTo(map);
        <?php } ?>

        <?php 
        if ($value->warna=='green') { ?>
                L.circle([<?= $value->latitude ?>,<?= $value->longitude ?>], {
        radius: <?= $value->radius ?>,
        color: '<?= $value->warna ?>',
        fillColor: '<?= $value->warna ?>',
        fillOpacity: 0.1,
        }).bindPopup("<b><?= $value->nama_gunung ?></b><br>Status : <?= $value->status ?><br>Keterangan :  <?= $value->keterangan ?><br>Radius Bahaya : 3 Km").addTo(map);
        <?php } ?>

        <?php 
        if ($value->warna=='blue') { ?>
                L.circle([<?= $value->latitude ?>,<?= $value->longitude ?>], {
        radius: <?= $value->radius ?>,
        color: '<?= $value->warna ?>',
        fillColor: '<?= $value->warna ?>',
        fillOpacity: 0.1,
        }).bindPopup("<b><?= $value->nama_gunung ?></b><br>Status : <?= $value->status ?><br>Keterangan :  <?= $value->keterangan ?><br>Radius Bahaya : 300 m").addTo(map);
        <?php } ?>
<?php } ?>

</script>