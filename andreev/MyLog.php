<?php

namespace andreev;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface {
    public function _write()
    {
        $dateLog = date('d.m.Y_H.i.s.v');
        foreach($this->log as $value) {
            echo $value . "\n\r";
            file_put_contents(__DIR__ . "\..\log\\$dateLog.log", $value . PHP_EOL, FILE_APPEND);
        }
    }
    public static function log($str)
    {
        MyLog::Instance()->log[] = $str;
    }
    public static function write()
    {
        MyLog::Instance()->_write();
    }
}