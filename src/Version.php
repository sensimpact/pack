<?php


namespace Sens\Impact;


class Version
{

  const VERSION = '1.0.1';

  public static function show()
  {
    echo 'Sens Impact. Version: ' . self::VERSION;
  }

}
