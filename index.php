<?

//session_start();

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

$rawData = file_get_contents("php://input");
if (isset($rawData)) {
    $jsonDecode = json_decode($rawData);
}


$imageArray = array(
    array('url' => '0', 'img_url'=>'1.jpg'),
    array('url' => '1', 'img_url'=>'2.jpg'),
    array('url' => '2', 'img_url'=>'3.jpg'),
    array('url' => '3', 'img_url'=>'4.jpg'),
    array('url' => '4', 'img_url'=>'5.jpg'),
    array('url' => '5', 'img_url'=>'1.jpg'),
    array('url' => '6', 'img_url'=>'2.jpg'),
    array('url' => '7', 'img_url'=>'3.jpg'),
    array('url' => '8', 'img_url'=>'4.jpg'),
    array('url' => '9', 'img_url'=>'5.jpg'),
    array('url' => '10', 'img_url'=>'1.jpg'),
    array('url' => '11', 'img_url'=>'2.jpg'),
);


if ($good_name != null) {
    $img_path = $imageArray[$good_name];
} else {
    $img_path = null;
}


$jsonMethod = $jsonDecode->{'method'};
$dataSetM = $jsonDecode->{'m'};
$dataSetN = $jsonDecode->{'n'};
//echo $jsonMethod;
//echo $dataSetM;
//echo $dataSetN;



if (!$jsonMethod == ' ajax') {

    echo $twig->render('base.html', array(
        'title' => 'Сайт на твиге',
        'page_name' => $page_name,
        'good_name' => $good_id,
        'img_path' => $img_path,
        'img_array' => $imageArray,
        'n'=> 2,
        'm'=> 0,
    ));

} else {

//    ob_start();

    $template = $twig->load('gallery.html');
    echo $template->renderBlock('galleryItem', array(
        'n'=> $dataSetN,
        'm'=> $dataSetM,
        'img_path' => $img_path,
        'img_array' => $imageArray,
    ));

//    $str = ob_get_contents();
//    ob_end_clean();
//    echo ($str);

}



//echo $page_name.'<br>';
////echo $img_path.'<br>';
//
//echo '<pre>';
//print_r ($img_path).'<br>';
//print_r ($url_array).'<br>';
//echo '</pre>';



?>



