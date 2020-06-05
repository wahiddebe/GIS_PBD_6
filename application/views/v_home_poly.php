<div id="map" style="height: 500px"></div>


<script>
        var map = L.map('map').setView([-7.2780317, 109.9775643], 8);


        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {

                maxZoom: 18,
                id: 'mapbox/dark-v10'
        }).addTo(map);

        <?php foreach ($geo as $key => $value) { ?>
                var jsonTest = new L.GeoJSON(<?= $value->koordinat ?>, {
                        color: 'red',
                        opacity: 0.5,
                        weight: 0.5,
                        fillColor: '<?= $value->warna ?>',
                        fillopacity: 0.001
                }).addTo(map).bindPopup("<b><?= $value->nama_gunung ?></b><br>Status : <?= $value->status ?><br>Keterangan :  <?= $value->keterangan ?><br>");
        <?php } ?>
</script>