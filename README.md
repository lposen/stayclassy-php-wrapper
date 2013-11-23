# An easy-to-use PHP wrapper for the StayClassy API!

### With this library, you can call [StayClassy's](https://www.stayclassy.org) amazing API with just a few lines of code.

Just install `StayClassy.class.php` into your root directory.  You can then reference it from the page in which you would like to pull the data.

The structure would look something like this:

```
require 'StayClassy.class.php';
$StayClassy = new StayClassy(YOUR_TOKEN_HERE);

$ai = $StayClassy->call('account-info', array(
	'cid' => 5417 
));

$name = $ai['name'];
echo $name;

```

### Easy, right?

No you don't have to wrestle with cURL.  Whew!
