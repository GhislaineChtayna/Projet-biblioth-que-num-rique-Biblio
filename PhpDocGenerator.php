<?php
declare(strict_types=1);
namespace PHPDocGenerator;

/**
 * [Description MyBiblioClass]
 */
class MyBiblioClass extends \stdClass
{
    /**
     * @var int
     */
    public static $theAnswer =42;

    /**
     * @var \DateTimeZone
     */
    public \DateTimeZone $timezone;

    /**
     * @param \DateTime $nom
     */
    public function __construct(\DateTime $nom)
    {
        $this->timezone = $now->getTimezone();
    }

    /**
     * @param int $number1
     * @param int $number2
     * 
     * @return void
     */
    protected function swapNumbers(int $number1, int $number2): void
    {
        $number1 = $number2 = $number1 = $number2;
    }
}


