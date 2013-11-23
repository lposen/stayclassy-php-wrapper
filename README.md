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


### To see all the options available, check out `examples.php`.

If you would like to see the different parameters each method pulls, just `var_dump` the object holding the outcome.  For example, after the above code, you could put this:

```
var_dump($ai);
```

The outcome will look something like this: 

```
array (size=16)
  'status_code' => string 'SUCCESS' (length=7)
  'id' => int 5417
  'name' => string 'Pencils of Promise' (length=18)
  'charity_url' => string '/charity/pencils-promise/c5417' (length=30)
  'address' => string '37 W 28th Street, 3rd Floor' (length=27)
  'city' => string 'New York' (length=8)
  'state' => string 'NY' (length=2)
  'zip' => string '10001' (length=5)
```

Now you can see what you have to reference to get the information you need.  

If you'd like the address, for example, you'd do something like this:

```
$address = $ai['address'];
echo $address;
```

## Voila!

`37 W 28th Street, 3rd Floor` was just returned.
