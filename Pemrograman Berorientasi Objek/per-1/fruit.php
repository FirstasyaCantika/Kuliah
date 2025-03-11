<?php class fruit {
public $name;
public $color;

function set_name($name) {
    $this->name = $name;
}
function get_name(){
    return $this->name;
}
}
$apple = new fruit();
$banana = new fruit();
$dragonfruit = new fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');
$dragonfruit->set_name('DragonFruit');

echo $apple->get_name();
echo " ";
echo $banana->get_name();
echo " ";
echo $dragonfruit->get_name();

?>