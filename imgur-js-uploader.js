(function( $ ){
	
	$.fn.imgurUploader = function() {
		var cont=0;
		return this.each(function() {
			$(this).hide();
			cont++;
			var gthis = this;
			var randomName = cont;
			$('<input type="file" id="imgur'+randomName+'" class="imguruploader-file">').insertAfter(this);
			if ($(this).val().length>0) {
				$('<div class="imguruploader-viewer" id="imgurv'+randomName+'"><img src="'+$(this).val()+'" /></div>').insertAfter(this);
			};
			$('#imgur'+randomName).on('change', function(){ 
			    var data = new FormData();
			    data.append('file', $('#imgur'+randomName).prop('files')[0]);
			    $.ajax({
			        type: 'POST',               
			        processData: false, // important
			        contentType: false, // important
			        data: data,
			        url: 'http://weblabor.mx/imgur-js-uploader/includes/uploader.php'
			    }).done(function(data) {
				    var object = jQuery.parseJSON(data);
				    var url = object->link;
				    if ($(gthis).val().length>0) {
				    	$('#imgurv'+randomName).find('img').attr('src',url);
				    } else {
				    	$('<div class="imguruploader-viewer" id="imgurv'+randomName+'"><img src="'+url+'" /></div>').insertAfter(gthis);	
				    }
		            
			  		$(gthis).val(url);
			  	})
			  	.fail(function() {
			    	console.log('error');
			  	}); 
			});
			return true;
		});
	};
	
})( jQuery );
