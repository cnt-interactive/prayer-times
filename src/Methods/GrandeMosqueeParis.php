<?php

namespace CntInteractive\PrayerTimes\Methods;


class GrandeMosqueeParis extends Method
{

    /**
     * @var array<float>
     */
    protected $angles = [
        'fajr' => 15,
        'isha' => 14,
    ];

    /**
     * @var float
     */
    protected $interval = 0;

    /**
     * @var string
     */
    protected $name = 'grandeMosqueeParis_general_authority';

    /**
     * Get fajr angle
     *
     * @return float
     */
    public function fajrAngle(): float
    {
        return $this->angles['fajr'];
    }

    /**
     * Get isha angle
     *
     * @return float
     */
    public function ishaAngle(): float
    {
        return $this->angles['isha'];
    }

    /**
     * Get Isha interval
     *
     * @return int
     */
    public function ishaInterval(): int
    {
        return $this->interval;
    }

    /**
     * Get method name
     *
     * @return mixed
     */
    public function name()
    {
        return $this->name;
    }
}