<?php
require_once 'src/P8/Autoload.php';
use SchrodtSven\P8\Internal\GenericDataProvider;
use SchrodtSven\P8\Internal\ListClass;
use SchrodtSven\P8\Internal\StringClass;

$code = new ListClass();
//$vendor = new GenericDataProvider();
$product = new GenericDataProvider('data/Product.json');
//$vendorNames = $vendor->getContent()->getRandomElement(25);
$list = new ListClass();








foreach ($product->getContent() as $item) {



    //var_dump($item);die;



    $txt = new StringClass($item->name);
    $midLength = ceil($txt->length() /2);
    $totalLength = $txt->length();
    
    $lastOffset = $totalLength - 1;

    $start = $txt->subString(0, rand(1, $midLength));

    $end = $txt->subString(rand($midLength, $lastOffset-3), $lastOffset);
    
    $mid = $txt->subString(rand(0, $midLength), rand(1, $midLength));

    $t = new ListClass(
        [
            $txt,
            $start,
            $end,
            $mid
        ]
    );


    $t->walk(function(&$assign) {
        $assign = (new StringClass($assign))->quote();
    });



    $list->push((new StringClass($t->join(', ')))->prepend('[')->append(']'));
    

    //$start = ($item)
    //Zuifalls zahl 1-5 für $start und $end, 5-8 für $contains
    // --> test str_begins_with; tr_ends_with; str_contains (new in PHP8!! --> see: StringClass!"!!")
    echo PHP_EOL;
}
$foo = $list->join(', ' . PHP_EOL);
echo (string) $foo;
//echo $list;
//var_dump((new StringClass('Lorem Ipsum'))->quote('"'));die;

