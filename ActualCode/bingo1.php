<?php $dbc = mysqli_connect('localhost','barkin','barkinbryce','bingo') ?>

Email address : <input type="text" name="email"
value="<?php if ( isset($_POST['email']))
	echo $_POST['email'];?>">