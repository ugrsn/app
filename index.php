<?php

function getTitle()
{
    return 'Anasayfa';
}

$house = file_get_contents('https://www.potterapi.com/v1/sortingHat?key=$2a$10$UL7Usqkb3s/o8PPz.ZOxxe3JJtOKObSTkaxqdeONfjp4RhKdMDQuS');

?>

<?php

include_once 'header.php';

include_once 'navbar.php';

?>

<h1><?php echo getTitle(); ?></h1>

<p>Tebrikler! Seçmen şapka sizi <?php echo $house; ?> evine yerleştirdi.</p>

<?php

include_once 'footer.php';

?>
