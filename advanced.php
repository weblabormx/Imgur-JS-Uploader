<?php include 'header.php'; ?>
<style type="text/css">
	#imgur1 {
		display: none;
	}
</style>
	<h2>Advanced examples</h2>
	<p>These examples can be made with help of javascript and CSS.</p>
	
	<h4 class="w3-teal w3-tag w3-margin-top">Button Styled</h4>
	<div class="w3-light-grey w3-padding-16 w3-container w3-border w3-center">
		<form method="get">
			<div class="w3-margin-bottom">
				<span id="fakebutton" class="w3-tag w3-blue">Upload the image</span>
			</div>
			<input id="image" class="image" type="text" value="http://i.imgur.com/v2XEjln.jpg" />
		</form>
	</div>
	<h6>HTML</h6>
	<code data-type="codeeditor" data-color="black" data-lang="html"><?php echo htmlspecialchars('<form method="get">
	<div class="w3-margin-bottom">
		<span id="fakebutton" class="w3-tag w3-blue">Upload the image</span>
	</div>
	<input id="image" class="image" type="text" value="http://i.imgur.com/v2XEjln.jpg" />
</form>'); ?></code>
	<h6>Javascript</h6>	
	<code data-type="codeeditor" data-color="black" data-lang="javascript">$('.image').imgurUploader();
$('#fakebutton').on('click', function() {
	$('#imgur1').click();
});</code>

<?php include 'footer.php'; ?>
<script type="text/javascript">
		$('#fakebutton').on('click', function() {
			$('#imgur1').click();
		});
</script>