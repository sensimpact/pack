<?php


namespace Sens\Impact;


class Pack
{

  const VERSION = '1.0.1';

  public static function check()
  {
    $version = self::VERSION;
    echo "It's work! After update :)\n Version: $version";
  }

}
