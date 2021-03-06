<?php

/*
 * This file is part of the Passbook package.
 *
 * (c) Eymen Gunay <eymen@egunay.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Passbook\Pass;

/**
 * LocationInterface
 *
 * @author Eymen Gunay <eymen@egunay.com>
 */
interface LocationInterface
{
    /**
     * Sets location altitude
     *
     * @param float
     */
    public function setAltitude($altitude);

    /**
     * Gets location altitude
     *
     * @return float
     */
    public function getAltitude();

    /**
     * Sets location latitude
     *
     * @param float
     */
    public function setLatitude($latitude);

    /**
     * Gets location latitude
     *
     * @return float
     */
    public function getLatitude();

    /**
     * Sets location longitude
     *
     * @param float
     */
    public function setLongitude($longitude);

    /**
     * Gets location longitude
     *
     * @return float
     */
    public function getLongitude();

    /**
     * Sets location relevant text
     *
     * @param float
     */
    public function setRelevantText($relevantText);

    /**
     * Gets location relevant text
     *
     * @return float
     */
    public function getRelevantText();
}