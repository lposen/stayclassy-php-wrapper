<h1>Test</h1>

<?php
/**
 * TESTING the stayclassy wrapper
 */

require 'StayClassy.class.php';
$StayClassy = new StayClassy('utvVCIjXQWPvXIU80VME');
$result = $StayClassy->call('account-info', array(
	'cid' => 5417
));
var_dump($result);
echo $result['name'];

?>