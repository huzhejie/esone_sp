<?php 
class houseConfig {
  public $house_price = array (
    array(
      'label' => '500万以下',
      'value' => array(5000000)
    ),
    array(
      'label' => '500万至1000万',
      'value' => array(5000000, 10000000)
    ),
    array(
      'label' => '1000万至2000万',
      'value' => array(10000000, 20000000)
    ),
    array(
      'label' => '2000万至5000万',
      'value' => array(20000000, 50000000)
    ),
    array(
      'label' => '5000万以上',
      'value' => array(50000000)
    ),
  );

  public $house_area = array(
    array(
      'label' => '20以下',
      'value' => array(20)
    ),
    array(
      'label' => '20至40',
      'value' => array(20, 40)
    ),
    array(
      'label' => '40至70',
      'value' => array(40, 70)
    ),
    array(
      'label' => '70至100',
      'value' => array(70, 100)
    ),
    array(
      'label' => '100以上',
      'value' => array(100)
    ),
  );

}

?>
