<div id="map" style="height: 500px"></div>


<script>
        var map = L.map('map').setView([-7.2780317, 109.9775643], 8);


        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {

                maxZoom: 18,
                id: 'mapbox/dark-v10'
        }).addTo(map);


        var greenIcon = new L.Icon({
                iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
        });

        var goldIcon = new L.Icon({
                iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-gold.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
        });

        var redIcon = new L.Icon({
                iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
        });

        var blueIcon = new L.Icon({
                iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
        });



        <?php foreach ($pemetaan as $key => $value) { ?>

                <?php
                if ($value->warna == 'red') { ?>
                        L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>], {
                                icon: redIcon
                        }).bindPopup("<b><?= $value->nama_gunung ?></b><br>Status : <?= $value->status ?><br>Keterangan :  <?= $value->keterangan ?><br>Radius Bahaya : 20 Km").addTo(map);
                <?php } ?>

                <?php
                if ($value->warna == 'yellow') { ?>
                        L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>], {
                                icon: goldIcon
                        }).bindPopup("<b><?= $value->nama_gunung ?></b><br>Status : <?= $value->status ?><br>Keterangan :  <?= $value->keterangan ?><br>Radius Bahaya : 10 Km").addTo(map);
                <?php } ?>

                <?php
                if ($value->warna == 'green') { ?>
                        L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>], {
                                icon: greenIcon
                        }).bindPopup("<b><?= $value->nama_gunung ?></b><br>Status : <?= $value->status ?><br>Keterangan :  <?= $value->keterangan ?><br>Radius Bahaya : 3 Km").addTo(map);
                <?php } ?>

                <?php
                if ($value->warna == 'blue') { ?>
                        L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>], {
                                icon: blueIcon
                        }).bindPopup("<b><?= $value->nama_gunung ?></b><br>Status : <?= $value->status ?><br>Keterangan :  <?= $value->keterangan ?><br>Radius Bahaya : 300 m").addTo(map);
                <?php } ?>
        <?php } ?>

        <?php foreach ($geo as $key => $value) { ?>
                var jsonTest = new L.GeoJSON({
                        "type": "FeatureCollection",
                        "features": [{
                                "type": "Feature",
                                "properties": {},
                                "geometry": {
                                        "type": "Polygon",
                                        "coordinates": [
                                                [
                                                        [109.970913, -7.29215],
                                                        [110.001812, -7.28619],
                                                        [110.01709, -7.308325],
                                                        [110.004044, -7.329097],
                                                        [109.971256, -7.330289],
                                                        [109.963875, -7.314625],
                                                        [109.970913, -7.29215]
                                                ]
                                        ]
                                }
                        }]
                }, {
                        color: 'red',
                        opacity: 0.5,
                        weight: 0.5,
                        fillColor: 'white',
                        fillopacity: 0.001
                }).addTo(map).bindPopup("I am a polygon.");
        <?php } ?>
</script>
<?php if ($this->session->userdata('username') <> "") { ?>


        <div style="margin-top: 30">

                <div class="col-md-7">

                        <?php

                        if ($this->session->flashdata('pesan')) {
                                echo '<div class=" alert-success ">';
                                echo $this->session->flashdata('pesan');
                                echo '</div>';
                        }


                        echo form_open_multipart('upload/do_upload');


                        ?>
                        <div class="form-group">
                                <label>Upload GeoJson</label>
                                <input name="file" type="file" class="form-control" required>
                        </div>
                        <div class="form-grup">
                                <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        <?php echo form_close() ?>

                </div>



        </div>


<?php } ?>