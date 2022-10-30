<?php
require_once 'Classes/iFigure.php';
require_once 'Classes/Rectangle.php';
require_once 'Classes/Disk.php';
require_once 'Classes/FiguresCollection.php';

$figureCollection = new FiguresCollection();
$figureCollection->addFigure(new Rectangle(1, 2));
$figureCollection->addFigure(new Rectangle(3, 4));
$figureCollection->addFigure(new Disk(1));
$figureCollection->addFigure(new Disk(2));

echo $figureCollection->getTotalSquare();
echo '<br>';
echo $figureCollection->getTotalPerimeter();