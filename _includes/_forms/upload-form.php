<div class="row">
	<div class="large-8 medium-10 small-12 columns text-center small-centered">
		<h1>Pipeline</h1>
		<p>Free From docoument management system</p>
		<form action="upload.php" method="post" data-abide>
			<fieldset>
				<legend>Applicant Details</legend>
				<div class="row">
					<div class="large-12 columns text-left">
						<?php 
							if(empty($errors) == false):
								output_errors($errors);
							endif;
						?>
					</div>
					<div class="small-12 columns">
						<div class="row collapse">
							<div class="small-3 large-2 columns">
								<span class="prefix">E-mail</span>
							</div>
							<div class="small-9 large-10 columns">
								<input name="email" type="text" <?php if(isset($_POST['email'])) echo "value=\"".$_POST['email']."\"" ?> readonly placeholder="Enter your email address to continue.">
							</div>
						</div>
					</div>
					<div class="small-12 columns text-center">
						<div id="drop-box">
							<p>Select Files</p>
						</div>
						<input type="file" name="upl" id="upl" />
					</div>
			</fieldset>
		</form>
	</div>
</div>