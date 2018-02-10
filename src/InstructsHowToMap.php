<?php

declare(strict_types=1);

namespace Stratadox\HydrationMapper;

use Stratadox\HydrationMapping\MapsProperty;

/**
 * Builds a property mapping object.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface InstructsHowToMap
{
    /**
     * Follow the instruction for a property to obtain the property mapping.
     *
     * @param string $property
     * @return MapsProperty
     */
    public function followFor(string $property) : MapsProperty;
}
