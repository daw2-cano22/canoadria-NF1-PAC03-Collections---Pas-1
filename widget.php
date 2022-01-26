<?php
require_once("observable.php");
require_once("abstract_widget.php");

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

$widgetA->draw();
$widgetB->draw();

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

$widget1->draw();
$widget2->draw();



?>
