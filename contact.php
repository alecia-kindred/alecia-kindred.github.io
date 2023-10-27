<?php include 'includes/header.php'; ?>

<div class="content">
	<h1>Get In Touch</h1>
	<p>Please fill out the form below to send me a message. I look forward to hearing from you!</p>

	<form action="/sendmail.php" class="cf" method="post">
		<fieldset class="fs2">
			<label for="first_name" class="req">First Name:</label><br>
			<input type="text" id="first_name" name="first_name" value="" maxlength="25" placeholder="Your First Name">
		</fieldset>
		<fieldset class="fs2">
			<label for="last_name" class="req">Last Name:</label><br>
			<input type="text" id="last_name" name="last_name" value="" maxlength="50" placeholder="Your Last Name">
		</fieldset>
		<fieldset>
			<label for="method" class="req">How would you like to be contacted?</label><br>
			<select id="method" name="method">
				<option value="Email" selected="">Email</option>
				<option value="Phone">Phone</option>
			</select>
		</fieldset>
		<fieldset class="fs2">
			<label for="email" class="req">Email:</label><br>
			<input type="text" id="email" name="email" value="" maxlength="50" placeholder="youremail@domain.com">
		</fieldset>
		<fieldset class="fs2">
			<label for="phone">Phone Number:</label><br>
			<input type="text" id="phone" name="phone" value="" placeholder="123-456-7890">
		</fieldset>
		<fieldset>
			<label for="message" class="req">Message:</label><br>
			<textarea id="message" name="message" placeholder="Your message to me!"></textarea>
		</fieldset>
		<div class="form_buttons">
			<button type="submit" name="submit">Send Message</button>
		</div>
	</form>
</div>

<?php include 'includes/footer.php'; ?>