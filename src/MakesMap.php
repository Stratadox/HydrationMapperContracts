<?php

declare(strict_types=1);

namespace Stratadox\HydrationMapper;

use Stratadox\Hydrator\Hydrates;

/**
 * Builds the mapping for a class.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface MakesMap
{
    /**
     * Add a property with optional mapping instructions.
     *
     * @param string                 $property    The name of the property to
     *                                            define.
     * @param InstructsHowToMap|null $instruction Optional mapping instructions,
     *                                            defaults to string conversion.
     *
     * @return MakesMap                           The updated map builder.
     */
    public function property(
        string $property,
        InstructsHowToMap $instruction = null
    ): MakesMap;

    /**
     * Finalise the process and produce the mapped hydrator.
     *
     * @return Hydrates The resulting hydrator.
     */
    public function finish(): Hydrates;
}
