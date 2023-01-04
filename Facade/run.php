<?php declare(strict_types=1);

spl_autoload_register(function ($class) {
    include $class . '.php';
});

$animals_json = file_get_contents(dirname(__DIR__).'/data.json');

$animals = json_decode($animals_json, true);

foreach ($animals as $animal)
{
    echo "Animal name:".$animal['name'].PHP_EOL;
    echo "SHA1-encoded name:".EncoderFacade::doEncode($animal['name'], 'sha1').PHP_EOL;
    echo "CRC32-encoded name:".EncoderFacade::doEncode($animal['name'], 'crc32').PHP_EOL;
    echo "MD5-encoded name:".EncoderFacade::doEncode($animal['name'], 'md5').PHP_EOL;
    echo "Base64-encoded name:".EncoderFacade::doEncode($animal['name'], 'base64').PHP_EOL;
    echo "\n";
}
