<div class="col-md-5">
    <div id="map" style="height: 500px"></div>
    <button id="convert" class="btn btn-warning">Tambahkan Koordinat</button>
</div>


<div class="col-md-7">

    <?php



    echo form_open('home/edit_poly/' . $data->id);


    ?>
    <div class="form-group">
        <label>Nama Gunung</label>
        <input name="nama_gunung" value="<?= $data->nama_gunung ?>" placeholder="Masukan Nama Gunung" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Keterangan</label>
        <textarea name="keterangan" placeholder="Masukan Keterangan" id="" cols="30" rows="10" class="form-control"><?= $data->keterangan ?></textarea>
    </div>
    <div class="form-group">
        <label>Koordinat</label>
        <textarea name="koordinat" placeholder="" id="result" cols="30" rows="10" class="form-control" readonly><?= $data->koordinat ?></textarea>
    </div>

    <div class="form-group">
        <label>Status Gunung*</label>
        <select name="status" id="radius" class="form-control">
            <?php if ($data->status == 'Normal Aktif') { ?>
                <option selected value="Normal Aktif">Normal Aktif</option>
                <option value="Waspada">Waspada</option>
                <option value="Siaga">Siaga</option>
                <option value="Awas">Awas</option>
            <?php } ?>
            <?php if ($data->status == 'Waspada') { ?>
                <option value="Normal Aktif">Normal Aktif</option>
                <option selected value="Waspada">Waspada</option>
                <option value="Siaga">Siaga</option>
                <option value="Awas">Awas</option>
            <?php } ?>
            <?php if ($data->status == 'Siaga') { ?>
                <option value="Normal Aktif">Normal Aktif</option>
                <option value="Waspada">Waspada</option>
                <option selected value="Siaga">Siaga</option>
                <option value="Awas">Awas</option>
            <?php } ?>
            <?php if ($data->status == 'Awas') { ?>
                <option value="Normal Aktif">Normal Aktif</option>
                <option value="Waspada">Waspada</option>
                <option value="Siaga">Siaga</option>
                <option selected value="Awas">Awas</option>
            <?php } ?>

        </select>
    </div>
    <div class="form-group">
        <label style="color: red">*Keterangan</label><br>
        <div class="col-md-3">

            <label>Normal Aktif</label><br>
            <label>Waspada</label><br>
            <label>Siaga</label><br>
            <label>Awas</label><br>
        </div>
        <div class="col-md-9" style="margin-bottom: 20px">

            <label>: Radius Bahaya 0 KM hingga 0.3 KM</label><br>
            <label>: Radius Bahaya 0.3 KM hingga 3 KM</label><br>
            <label>: Radius Bahaya 3 KM hingga 10 KM</label><br>
            <label>: Radius Bahaya 10 KM hingga 20 KM</label><br>
        </div>
        </select>
    </div>

    <div class="form-grup ">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="reset" class="btn btn-success">Reset</button>
    </div>
    <?php echo form_close() ?>



    <script>
        var map = L.map('map').setView([-7.2780317, 109.9775643], 7);
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // FeatureGroup is to store editable layers
        var drawnItems = L.geoJson(<?= $data->koordinat ?>).addTo(map);
        map.addLayer(drawnItems);
        var drawControl = new L.Control.Draw({
            edit: {
                featureGroup: drawnItems
            }
        });
        map.addControl(drawControl);

        map.on('draw:created', function(event) {
            var layer = event.layer,
                feature = layer.feature = layer.feature || {};
            feature.type = feature.type || "Feature";
            var props = feature.properties = feature.properties || {};
            drawnItems.addLayer(layer);
        });





        document.getElementById("convert").addEventListener("click", function() {
            var hasil = $('#result').html(JSON.stringify(drawnItems.toGeoJSON()));
        });
    </script>
</div>