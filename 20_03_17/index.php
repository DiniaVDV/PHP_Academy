<pre>
<?php
require_once 'autoloader.php';

// $app = new Application();
$user = new User ('Den', 'email@email.com');

$aaa = new DBMessage('sd', 'kjhj', new DateTime(), $user);
$aaa->getDataOnId(3);

$aaa->promptFromQueryOnId[1] = 'Joy';

$aaa->save();

?>
    </pre>
