<?

namespace Sens\Impact\Utils;

/**
 * Utils String.
 * PHP Version 7.4
 *
 * @author  Dmitrii Novoselov (Sens Impact) <sens.impact@gmail.com>
 * @link    https://github.com/sensimpact
 * @link    https://t.me/sens_impact
 * @license Use it if you like it
 */
class Strings
{

  /**
   * Возвращает правильное склонение по числу
   *
   * \Sens\Impact\Utils\Strings::number(5, ['день', 'дня', 'дней']); // 5 дней
   *
   * @param int $number
   * @param array $titles
   * @return string
   */
  public static function number(int $number, array $titles): string
  {
    return "$number " . $titles[($number % 100 > 4 && $number % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][min($number % 10, 5)]];
  }

}
