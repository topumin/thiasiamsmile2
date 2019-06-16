  $(document).ready(function () {

		//Open street  Map
		// <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194.5224438524618!2d-9.14134115436509!3d38.732520997971825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd19339f3edd7c7d%3A0xf84dde0c8a258b88!2zUi4gRGUgRG9uYSBFc3RlZsOibmlhIDE1NUEsIDEwMDAtMTU0IExpc2JvYSwg4LmC4Lib4Lij4LiV4Li44LmA4LiB4Liq!5e0!3m2!1sth!2sth!4v1560670670380!5m2!1sth!2sth" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		var coord = [38.73249, -9.14122]; // <--- coordinates here

		var map = L.map('map-canvas', { scrollWheelZoom:false}).setView(coord, 19);

		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 22,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
		}).addTo(map);

		L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
		attribution: ''
		}).addTo(map);

		// custom icon
		var customIcon = L.icon({
		iconUrl: 'img/mapmarker.png',
		iconSize:     [64, 64], // size of the icon
		iconAnchor:   [32, 63] // point of the icon which will correspond to marker's location
		});

		// marker object, pass custom icon as option, add to map         
		var marker = L.marker(coord, {icon: customIcon}).addTo(map);
});