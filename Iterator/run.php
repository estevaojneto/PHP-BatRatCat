<?php declare(strict_types=1);

spl_autoload_register(function ($class) {
    include $class . '.class.php';
});

$animals_json = file_get_contents(dirname(__DIR__).'/data.json');

$felines = new FelineIterator($animals_json);
$rodents = new RodentIterator($animals_json);
$carnivore = new CarnivoreIterator($animals_json);

echo "==== FELINE ITERATOR EXAMPLE ====".PHP_EOL;
foreach ($felines as $animal => $data)
{
    print_r($data);
}
echo "\n\n\n";

echo "==== RODENT ITERATOR EXAMPLE ====".PHP_EOL;
foreach ($rodents as $animal => $data)
{
    print_r($data);
}
echo "\n\n\n";

echo "==== CARNIVORE ITERATOR EXAMPLE ====".PHP_EOL;
echo "RUN.PHP FILE SAYS: Iterator, find me all carnivore animals!".PHP_EOL;
foreach ($carnivore as $animal => $data)
{
    print_r($data);
}
echo "\n\n\n";