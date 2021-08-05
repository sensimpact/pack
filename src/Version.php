<?

namespace Sens\Impact;

/**
 * Version.
 * PHP Version 7.4
 *
 * @author  Dmitrii Novoselov (Sens Impact) <sens.impact@gmail.com>
 * @link    https://github.com/sensimpact
 * @link    https://t.me/sens_impact
 * @license Use it if you like it
 * @package General
 */
class Version
{

  const VERSION = '1.1.1';

  /**
   * Выводит номер текущей версии библиотеки
   *
   * \Sens\Impact\Version::show(); // Sens Impact. Version: 1.1.0
   */
  public static function show(): void
  {
    echo 'Sens Impact. Version: ' . self::VERSION;
  }

}
