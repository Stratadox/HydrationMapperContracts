<?php
declare(strict_types=1);

namespace Stratadox\HydrationMapper;

use Stratadox\Hydrator\Hydrates;

/**
 * Represents a choice between concrete types.
 *
 * Specifies the mapping of a possibly selected (sub)class.
 * @see DefinesRelationships::selectBy
 *
 * @package Stratadox\Hydrate
 * @author Stratadox
 */
interface RepresentsChoice
{
    /**
     * Add a property with optional mapping instructions.
     *
     * Declares a property for the potentially chosen class.
     * Allows mapping the properties of subclasses.
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
    ): self;

    /**
     * Finalise the process and produce a mapped hydrator.
     *
     * Produces the hydrator that will load this subclass (if selected).
     *
     * @return Hydrates The resulting hydrator.
     * @throws InvalidMapperConfiguration
     */
    public function finish(): Hydrates;
}
