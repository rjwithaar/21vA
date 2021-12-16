<?php

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])) {
	echo 'Bedankt vor uw bericht';
} else {
	header('Location: /contact?error', 307);
}
