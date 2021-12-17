<?php

/**
 * Class DateHelper
 *
 * @package AndreasGlaser\Helpers
 */
class DateHelper
{
    /**
     * @param mixed       $date
     * @param string|null $format
     *
     * @return bool
     */
    public static function isDateTime($date, string $format = null): bool
    {
        if ($date instanceof \DateTime) {
            return true;
        }

        if (true === is_string($date)) {
            if (true === StringHelper::isBlank($date)) {
                return false;
            }
        } else {
            return false;
        }

        if ($format) {
            $dateTime = \DateTime::createFromFormat($format, $date);
        } else {
            try {
                $dateTime = new \DateTime($date);
            } catch (\Exception $e) {
                return false;
            }
        }

        if (false === $dateTime instanceof \DateTime) {
            return false;
        }

        return 0 === \DateTime::getLastErrors()['warning_count'];
    }

    /**
     * @param mixed              $string
     * @param \DateTimeZone|null $timezone
     * @param null               $null
     *
     * @return \DateTime|null
     * @throws \Exception
     */
    public static function stringToDateTime($string, DateTimeZone $timezone = null, $null = null)
    {
        return self::isDateTime($string) ? new \DateTime($string, $timezone) : $null;
    }

    /**
     * Tries to format given input.
     *
     * @param mixed  $dateTime
     * @param string $format
     * @param null   $null
     *
     * @return string|null
     * @throws \Exception
     */
    public static function formatOrNull($dateTime, $format = 'Y-m-d H:i:s', $null = null)
    {
        if ($dateTime instanceof \DateTime) {
            return $dateTime->format($format);
        } elseif (self::isDateTime($dateTime)) {
            return static::stringToDateTime($dateTime)->format($format);
        } else {
            return $null;
        }
    }

    /**
     * @param \DateTime $dateTime1
     * @param \DateTime $dateTime2
     *
     * @return int
     */
    public static function diffHours(\DateTime $dateTime1, \DateTime $dateTime2): int
    {
        $diff = $dateTime1->diff($dateTime2);
        $hours = $diff->h;
        $hours = $hours + ($diff->days * 24);

        return (int)$hours;
    }

    /**
     * @param \DateTime $dateTime1
     * @param \DateTime $dateTime2
     *
     * @return int
     */
    public static function diffDays(\DateTime $dateTime1, \DateTime $dateTime2): int
    {
        $diff = $dateTime1->diff($dateTime2);

        return (int)$diff->format('%a');
    }

    /**
     * @param \DateTime $dateTime1
     * @param \DateTime $dateTime2
     *
     * @return int
     */
    public static function diffMonths(\DateTime $dateTime1, \DateTime $dateTime2): int
    {
        $diff = $dateTime1->diff($dateTime2);

        return ((int)$diff->format('%y') * 12) + (int)$diff->format('%m');
    }

    /**
     * @param \DateTime $dateTime1
     * @param \DateTime $dateTime2
     *
     * @return int
     */
    public static function diffYears(\DateTime $dateTime1, \DateTime $dateTime2): int
    {
        $diff = $dateTime1->diff($dateTime2);

        return (int)$diff->y;
    }
}
