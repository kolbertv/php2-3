<?
require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

$url_array = explode("/", $_SERVER['REQUEST_URI']);
if ($url_array[1] == "") {
    $page_name = "index";
} else {
    $page_name = $url_array[1];
    $good_name = $url_array[2];
}


$imageArray = array(
    array('url' => '0', 'img_url'=>'1.jpg'),
    array('url' => '1', 'img_url'=>'2.jpg'),
    array('url' => '2', 'img_url'=>'3.jpg'),
    array('url' => '3', 'img_url'=>'4.jpg'),
    array('url' => '4', 'img_url'=>'5.jpg'),
    array('url' => '5', 'img_url'=>'1.jpg'),
);


if ($good_name != null) {
    $img_path = $imageArray[$good_name];
} else {
    $img_path = null;
}


echo $twig->render('base.html', array(
    'title' => 'Сайт на твиге',
    'page_name' => $page_name,
    'good_name' => $good_id,
    'img_path' => $img_path,
    'img_array' => $imageArray,
));

//echo $page_name.'<br>';
////echo $img_path.'<br>';
//
//echo '<pre>';
//print_r ($img_path).'<br>';
//print_r ($url_array).'<br>';
//echo '</pre>';



?>



