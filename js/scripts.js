$(document).ready(function(){
		$('#boton').click(function(){
			
			$('#salida').empty()
						.attr('class', 'st-gallery');
			var v=buscar.value;			
			
			var url='https://images-api.nasa.gov/search?media_type=image';
			
			if(v!='') 
				url+='&q='+v;
			
			$.get(url).done(function(datos){
				var total = datos.collection.metadata.total_hits;
				$('#resultados').text("Hay "+total+" imágenes")
								.attr('class', 'st-answer');
				
				for(let i=0; i<=total && i<30; i++){
					$('<img>').attr('class', 'image-api'+' '+'img-fluid')
								.attr('src',datos.collection.items[i].links[0].href)
								.appendTo('#salida');
				}				
			});
		});
	  }); 
