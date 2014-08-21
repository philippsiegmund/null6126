$(function() {
	$("#fileupload").fileinput({
		'showUpload' : false,
		'removeLabel' : '',
		'previewFileType' : 'text',
		'browseLabel' : '',
		'showPreview' : false,
		'browseClass' : 'btn btn-file',
		'removeClass' : 'btn btn-file',
	});
	$("#zipupload").fileinput({
		'showUpload' : false,
		'removeLabel' : '',
		'previewFileType' : 'text',
		'browseLabel' : '',
		'showPreview' : false,
		'browseClass' : 'btn btn-file',
		'removeClass' : 'btn btn-file',
	});
	$("#avatar-upload").fileinput({
		'showUpload' : false,
		'removeLabel' : '',
		'previewFileType' : 'text',
		'browseLabel' : '',
		'showPreview' : false,
		'browseClass' : 'btn btn-file',
		'removeClass' : 'btn btn-file',
	});

	$("#limage-upload").fileinput({
		'showUpload' : false,
		'removeLabel' : '',
		'previewFileType' : 'text',
		'browseLabel' : '',
		'showPreview' : false,
		'browseClass' : 'btn btn-file',
		'removeClass' : 'btn btn-file',
	});

	$("[name='is_admin']").bootstrapSwitch();
	$("[name='is_activated']").bootstrapSwitch();

	$("input#avatar-upload").change(function(e) {
		console.log(e);
		for (var i = 0; i < e.originalEvent.target.files.length; i++) {

			var file = e.originalEvent.target.files[i];

			var img = document.createElement("img");
			var reader = new FileReader();
			reader.onloadend = function() {
				img.src = reader.result;
				$(".img-circular-create").css('background-image', 'url(' + reader.result + ')');
			};
			reader.readAsDataURL(file);
		}

	});

	$('#ajax-location-search').on('submit', function() {

		$.post($(this).prop('action'), {
			"_token" : $(this).find('input[name=_token]').val(),
			"search" : $('#ajax-location-input').val(),
		}, function(data) {
			console.log(data);			
				document.getElementById("location-street").value = data.streetName;
				document.getElementById("location-num").value = data.streetNumber;
				document.getElementById("location-zip").value = data.zipcode;
				document.getElementById("location-city").value = data.city;
				document.getElementById("location-country").value = data.country;
				document.getElementById("location-lon").value = data.longitude;
				document.getElementById("location-lat").value = data.latitude;
				
				var map = L.map('leaf-located').setView([data.latitude, data.longitude], 5);
				
				L.tileLayer('//c.tile.stamen.com/watercolor/{z}/{x}/{y}.jpg', {maxZoom: 18}).addTo(map);
				
				var greenIcon = L.icon({
    				iconUrl: '/img/marker-icon.png',
    				shadowUrl: '/img/marker-shadow.png',

    				iconSize:     [25, 41], // size of the icon
    				shadowSize:   [41, 41], // size of the shadow
    				iconAnchor:   [23, 41], // point of the icon which will correspond to marker's location
    				shadowAnchor: [23, 41],  // the same for the shadow
    				popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
				});
				
				L.marker([data.latitude, data.longitude], {icon: greenIcon}).addTo(map);
				
		}, 'json');
		
		
		
		return false;
	});

});
