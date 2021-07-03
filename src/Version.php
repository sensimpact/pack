<?

namespace Sens\Impact;

class Version
{

  const VERSION = '1.1.1';

  /**
   * Выводит номер текущей версии библиотеки
   */
  public static function show()
  {
    echo 'Sens Impact. Version: ' . self::VERSION;
  }

}
