<?php
class phone{
    public $make='';
    public $model='';
    public $ram='';
    public $storage='';
    public $battery='';
    public $color='';
    public $photos=true;
}

$iphone= new phone();
$iphone->wireless=true;
print_r( $iphone);


?>