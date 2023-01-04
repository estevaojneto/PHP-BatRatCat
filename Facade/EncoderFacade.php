<?php

class EncoderFacade
{
    public static function doHashEncode($data, $type)
    {
        switch ($type)
        {
            case 'base64':
                return base64_encode($data);
                break;
            case 'sha1':
                return sha1($data);
                break;
            case 'crc32':
                return crc32($data);
                break;
            case 'md5':
                return md5($data);
                break;
            default:
                return '';
                break;
        }
    }
}