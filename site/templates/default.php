<h1><?= $page->title() ?></h1>
<?= $page->aufpluginfield() ?>



<?php

use auf\MegaSuperClass;

$mega = new MegaSuperClass('test');

echo $mega->test;

?>