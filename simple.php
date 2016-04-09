<?php include 'header.php'; ?>
	<h2>Simple examples</h2>
	<h4 class="w3-teal w3-tag">When creating</h4>
	<div class="w3-light-grey w3-padding-16 w3-container w3-border">
		<form method="get">
			<input id="image" class="image" type="text" />
			<input type="submit" />
		</form>
	</div>
	<h6>HTML</h6>
	<code data-type="codeeditor" data-color="black" data-lang="html"><?php echo htmlspecialchars('<form method="get">
	<input id="image" class="image" type="text" />
	<input type="submit" />
</form>'); ?></code>
	<h6>Javascript</h6>	
	<code data-type="codeeditor" data-color="black" data-lang="javascript">$('.image').imgurUploader();</code>

	<h4 class="w3-teal w3-tag w3-margin-top">When loading the input</h4>
	<div class="w3-light-grey w3-padding-16 w3-container w3-border">
		<form method="get">
			<input id="image" class="image" type="text" value="http://i.imgur.com/v2XEjln.jpg" />
			<input type="submit" />
		</form>
	</div>
	<h6>HTML</h6>
	<code data-type="codeeditor" data-color="black" data-lang="html"><?php echo htmlspecialchars('<form method="get">
	<input id="image" class="image" type="text" value="http://i.imgur.com/v2XEjln.jpg" />
	<input type="submit" />
</form>'); ?></code>
	<h6>Javascript</h6>	
	<code data-type="codeeditor" data-color="black" data-lang="javascript">$('.image').imgurUploader();</code>

<?php include 'footer.php'; ?>