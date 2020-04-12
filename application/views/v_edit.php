<div class="col-md-5">
<div id="map" style="height: 500px"></div>

</div>


<div class="col-md-7">

        <?php 

        
        
        echo form_open('home/edit/'.$data->id); 
        
        
        ?>
        <div class="form-group">
            <label>Nama Gunung</label>
            <input name="nama_gunung" value="<?= $data->nama_gunung ?>" placeholder="Masukan Nama Gunung" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" placeholder="Masukan Keterangan" id="" cols="30" rows="10" class="form-control"><?= $data->keterangan ?></textarea>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label>Latitude</label>
            <input name="latitude" value="<?= $data->latitude ?>" id="Latitude" placeholder="Masukan Latitude" class="form-control" required readonly>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label>Longitude</label>
            <input name="longitude" value="<?= $data->longitude ?>" id="Longitude" placeholder="Masukan Longitude" class="form-control" required readonly>
        </div>
        </div>
        <div class="form-group">
            <label>Status Gunung*</label>
                <select name="status" id="radius" class="form-control">
                <?php if ($data->status=='Normal Aktif') { ?>
                <option selected value="Normal Aktif">Normal Aktif</option>
                <option value="Waspada">Waspada</option>
                <option value="Siaga">Siaga</option>
                <option value="Awas">Awas</option>
                <?php } ?>
                <?php if ($data->status=='Waspada') { ?>
                <option value="Normal Aktif">Normal Aktif</option>
                <option selected value="Waspada">Waspada</option>
                <option value="Siaga">Siaga</option>
                <option value="Awas">Awas</option>
                <?php } ?>
                <?php if ($data->status=='Siaga') { ?>
                <option value="Normal Aktif">Normal Aktif</option>
                <option value="Waspada">Waspada</option>
                <option selected value="Siaga">Siaga</option>
                <option value="Awas">Awas</option>
                <?php } ?>
                <?php if ($data->status=='Awas') { ?>
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

        <div  class="form-grup ">
            <button type="submit" class="btn btn-primary" >Save</button>
            <button type="reset" class="btn btn-success" >Reset</button>
        </div>
        <?php echo form_close() ?>



        <script>
var curLocation=[0,0];
if (curLocation[0]==0 && curLocation[1]==0) {
	curLocation =[-7.2780317,109.9775643];	
}
var map = L.map('map').setView([-7.2780317,109.9775643], 6);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {

    maxZoom: 18,
    id: 'mapbox/streets-v11'
}).addTo(map);

map.attributionControl.setPrefix(false);

var marker = new L.marker(curLocation, {
	draggable:'true'
});

marker.on('dragend', function(event) {
var position = marker.getLatLng();
marker.setLatLng(position,{
	draggable : 'true'
	}).bindPopup(position).update();
	$("#Latitude").val(position.lat);
	$("#Longitude").val(position.lng).keyup();
});

$("#Latitude, #Longitude").change(function(){
	var position =[parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
	marker.setLatLng(position, {
	draggable : 'true'
	}).bindPopup(position).update();
	map.panTo(position);
});
map.addLayer(marker);
</script>
</div>

