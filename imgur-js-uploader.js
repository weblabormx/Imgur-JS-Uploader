(function( $ ){
	
	$.fn.imgurUploader = function() {
		
		return this.each(function() {
			$(this).hide();
			
			var gthis = this;
			var randomName = Math.random().toString(36).substr(2, 5);
			$('<input type="file" id="imgur'+randomName+'" class="imguruploader-file">').insertAfter(this);
			if ($(this).val().length>0) {
				$('<div class="imguruploader-viewer" id="imgurv'+randomName+'"><img src="'+$(this).val()+'" /></div>').insertAfter(this);
			};
			$('#imgur'+randomName).on('change', function(){   
			    var data = new FormData();
			    data.append('image', $('#imgur'+randomName).prop('files')[0]);
			    $.ajax({
			        type: 'POST',               
			        processData: false, // important
			        contentType: false, // important
			        data: data,
			        url: 'includes/uploader.php'
			    }).done(function(url) {
				    
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


//console.log(obj.element.getAttribute("data-type"));
