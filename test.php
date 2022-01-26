<?php
require_once('class.collection.php');
require_once('abstract_widget.php');
require_once('observable.php');

class Foo{

  private $_name;
  private $_number;

  public function __construct($name, $number){
    $this->_name = $name;
    $this->_number = $number;
  }
  public function __toString() {
    return $this->_name . ' is number ' . $this->_number;
  }
}

//Model 1

$dat = new DataSource();

$widgetA = new BasicWidget();
$widgetB = new FancyWidget();

$dat->addObserver($widgetA);
$dat->addObserver($widgetB);

$dat->addRecord("drum", "$12.95", 1955);
$dat->addRecord("guitar", "$13.95", 2003);
$dat->addRecord("banjo", "$100.95", 1945);
$dat->addRecord("piano", "$120.95", 1999);



//Model 2

$dat2 = new DataSourceCano();

$widget1 = new BasicWidgetCano();
$widget2 = new FancyWidgetCano();

$dat2->addObserver2($widget1);
$dat2->addObserver2($widget2);

$dat2->addRecord2("Pablo", "Cruz", 2003, "SMX", 45685768);
$dat2->addRecord2("Josefo", "Montero", 1995, "SMX", 5645565);
$dat2->addRecord2("Antonio", "Perez", 1991, "DAW", 645454);
$dat2->addRecord2("Joel", "Moyano", 2003, "DAW", 46565656);
$dat2->addRecord2("Pablo", "Montoya", 2001, "SMX", 194500);
$dat2->addRecord2("Marco", "Antonio", 2000, "ARI", 56545452);



$widgets = new Collection();
$widgets->addItem($widgetA, "widgetA");
$widgets->addItem($widgetB, "widgetB");
$widgets->addItem($widget1, "widget1");
$widgets->addItem($widget2, "widget2");


$widgetPrimero = $widgets->getItem("widgetA");
$widgetSegundo = $widgets->getItem("widgetB");
$widgetTercero = $widgets->getItem("widget1");
$widgetCuarto = $widgets->getItem("widget2");

print $widgetPrimero->draw();
print $widgetSegundo->draw();
print $widgetTercero->draw();
print $widgetCuarto->draw();

$widgets->removeItem("widgetA");

try {
  $objWidget1 = $widgets->getItem("widgetA"); //throws KeyInvalidException
} catch (KeyInvalidException $kie) {
  print "The collection doesn't contain anything widget with the name 'widgetA'";
}


$modelos = new Collection();
$modelos->addItem($dat, "modelo 1");
$modelos->addItem($dat2, "modelo 2");

$objModelo1 = $modelos->getItem("modelo 1");
$objModelo2 = $modelos->getItem("modelo 2");


$modelos->removeItem("modelo 1"); 

try {
  $objModel1 = $modelos->getItem("modelo 1"); //throws KeyInvalidException
} catch (KeyInvalidException $kie) {
  print "<br/>The collection doesn't contain anything called 'modelo 1'";
}