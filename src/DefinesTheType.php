<?php

namespace Stratadox\HydrationMapper;

/**
 * Builds the property mapping for a single type.
 *
 * Specifies the details of a type.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface DefinesTheType extends InstructsHowToMap
{
    /**
     * Makes the type mapping nullable.
     *
     * @return DefinesTheType The resulting property mapping.
     */
    public function nullable(): DefinesTheType;
}
