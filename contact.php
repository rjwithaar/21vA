<h1>Neem contact met ons op</h1>
<?php if(isset($_GET['error'])) { echo 'Vul alle velden in'; } ?>
<form method="post" action="/handle.php">
	<label for="name">Naam</label>
	<input type="text" name="name" id="name">
	<label for="email">E-mail</label>
	<input type="email" name="email" id="email">
	<label for="phone">Telefoon</label>
	<input type="text" name="phone" id="phone">
	<input type="submit" name="submit" value="Verzenden">
</form>