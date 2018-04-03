<?php
declare(strict_types=1);

namespace Stratadox\HydrationMapper;

use Stratadox\Hydrator\Hydrates;

/**
 * Represents a choice between concrete types.
 *
 * @package Stratadox\Hydrate
 * @author Stratadox
 */
interface RepresentsChoice
{
    /**
     * Add a property with optional mapping instructions.
     *
     * @param string                 $property The name of the  property to
     *                                         define.
     * @param InstructsHowToMap|null $howToMap Optional mapping instructions,
     *                                         defaults to string conversion.
     * @return RepresentsChoice                The updated choice.
     */
    public function with(
        string $property,
        InstructsHowToMap $howToMap = null
    ): RepresentsChoice;

    /**
     * Finalise the process and produce a mapped hydrator.
     *
     * @return Hydrates The resulting hydrator.
     */
    public function finish(): Hydrates;
}
