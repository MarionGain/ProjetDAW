<?php
/**
 *
 */
class Icone
{
  public $pos_x;
  public $pos_y;
  public $sprite;

  function __construct($x,$y,$img)
  {
    $this->pos_x=$x;
    $this->pos_y=$y;
    $this->sprite=$img;
  }
  public function getPositionX()
  {
    return $this->pos_x;
  }
  public function getPositionY()
  {
    return $this->pos_y;
  }
  public function setPositionX($x)
  {
    $this->pos_x=$x;
  }
  public function setPositionY($y)
  {
    $this->pos_y=$y;
  }
  public function getSprite()
  {
    return $this->sprite;
  }
  public function setSprite($img)
  {
    $this->sprite=$img;
  }
  public __toString()
  {
    return "Position X: ".$this->pos_x."\n Position Y: ".$this->pos_y."\n Sprite: ".$this->sprite;
  }
}
?>
