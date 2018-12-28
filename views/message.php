<?php
	if(isset($messageType))
	{
		echo '<div class="alert  alert-' . $messageType . '">' . $message . '</div>';
	}
	else
	{
		echo '<div class="alert alert-info">' . $message . '</div>';
	}

?>