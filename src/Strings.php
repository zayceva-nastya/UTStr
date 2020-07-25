<?php

namespace App;

class Strings
{
      public function reversStr(string $str): string
    {
        return strrev($str);
    }

    public function upperStr(string $str): string
    {
        return strtoupper($str);
    }
}