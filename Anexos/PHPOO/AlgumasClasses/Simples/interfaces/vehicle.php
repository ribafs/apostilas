<?php
class vehicle implements testdrive{

    /*** define public properties ***/

    /*** the color of the vehicle ***/
    public $color;

    /*** the number of doors ***/
    public $num_doors;

    /*** the price of the vehicle ***/
    public $price;

    /*** the shape of the vehicle ***/
    public $shape;

    /*** the brand of vehicle ***/
    public $brand;

    /*** the constructor ***/
    public function __construct(){
      echo 'About this Vehicle.<br />';
    }

    /*** define some public methods ***/

    /*** a method to show the vehicle price ***/
    public function showPrice(){
      echo 'This vehicle costs '.$this->price.'.<br />';
    }

    /*** a method to show the number of doors ***/
    public function numDoors(){
      echo 'This vehicle has '.$this->num_doors.' doors.<br />';
    }

    /*** method to drive the vehicle ***/
    public function drive(){
      echo 'VRRROOOOOOM!!!';
    }
    /**
    * a method to stop the car
    *
    * @access public
    *
    **/
    public function stop(){
      echo 'SSSCCRRREEEEEECCHH!!!<br />';
    }

} /*** end of class ***/

/*** declare our interface ***/
interface testdrive{
    /*** some functions that must be implemented ***/
    function drive();
    function stop();
}

/*** an new vehicle object ***/
$object = new vehicle;

/*** call some methods ***/
$object->drive();
$object->stop();
?> 


<?php
interface fax{
  public function dial();
  public function send();
  public function recieve();
}

interface printer{
  public function printBlack();
  public function printColor();
  public function printDraft();
  public function kick();
}

class printerFax implements fax, printer{
  public function dial(){ }
  public function send(){ }
  public function recieve(){ }
  public function printBlack(){ }
  public function printColor(){ }
  public function printDraft(){ }
  public function kick(){ }
}

  $object = new printerFax;
?>
