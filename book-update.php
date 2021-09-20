<?php
require "vendor/autoload.php";

$config = require "config.php";

$engine = $config['engine'];
$host = $config['host'];
$user = $config['user'];
$pass = $config['password'];

use App\DB\Engine\Mysql;
use App\DB\Engine\MongoDB;
use App\Db\Database;


if ($engine == "mysql") {
    $driver = new Mysql($host, $user, $pass, "book_app");
} elseif ($engine =="mongodb") {
    $driver = new MongoDB("", "", "", "", "", []);
}
$db = new Database();
$db->setDriver($driver);

$book_id = $_GET['id'];
$author_id = $_GET['authorId'];
$book_name = $_GET['book'];
$author_name = $_GET['author_name'];

$book_update = $db->update("book",$book_id,[["name"=>$book_name]]);
$author_update = $db->update("author",$author_id,[["author_name"=>$author_name]]);



?>

<?php include "_shared/header.php";?>
<?php
if($book_update && $author_update){
    echo "<p class='text-center'>Kitap başarıyla güncellendi</p>";
    echo "<br>";
    echo "<div class='d-flex justify-content-center'><a href='http://localhost/homework5-hw5_grup3/index.php' class='btn btn-primary mt-5'>Anasayfaya geri dön</a></div>";
}
?>

<?php include "_shared/footer.php";?>