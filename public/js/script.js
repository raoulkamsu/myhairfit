$(document).ready(function() {
//Function for preview image.
    $(function() {
        $(":file").change(function() {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
    function imageIsLoaded(e) {
        $('#message').css("display", "none");
        $('#preview').css("display", "block");
        $('#previewimg').attr('src', e.target.result);
    };
$('#type').change(afficher);
	function afficher()
	{
		var type = $('#type :selected').text();
		
		if(type === 'Client')
		{
			 $('#coiff').hide();
			 
		}
		else
		{
			$('#coiff').show();
		}
	};
	
	
    
	 $('#zip').keyup(function () {
                    var xhr = new XMLHttpRequest();
                    var url = "getCityState.php?code=" + $('#zip')[0].value;
                    xhr.open("GET", url, true);

                    xhr.onreadystatechange = function () {
                        if (xhr.readyState === 4) {
                            var json = JSON.parse(xhr.responseText);
                            var noeud = $('#sugestion')[0];
                            
                            while (noeud.firstChild != null) {
                                noeud.removeChild(noeud.firstChild);
                            }

                            if (json.length == 1) {
                                $('#city').val(json[0]['city_area']);
                                $('#prov').val(json[0]['province']);
                            } else if (json.length < 1000) {
                                $('#city').val('');
                                $('#prov').val('');
                                var select = document.createElement('select');
                                select.name = "city_area";
                                select.id = "cityDDL";
                                select.onchange = change;

                                for (var i = 0; i < json.length; i++) {
                                    var option = document.createElement('option');
                                    option.value = json[i]['province'];

                                    var text = document.createTextNode(json[i]['city_area'] + " - " + json[i]['province']);
                                    option.appendChild(text);

                                    select.appendChild(option);
                                }

                                noeud.appendChild(select);

                            }


                        }
                    };

                    xhr.send(null);
                });
    
    
});
