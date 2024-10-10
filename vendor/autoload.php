require __DIR__ . '/vendor/autoload.php';

use BhaveshParante\HelloWorld\HelloWorld;

$greeting = new HelloWorld();
echo $greeting->sayHello();
