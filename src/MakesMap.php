<?php
declare(strict_types=1);

namespace Stratadox\HydrationMapper;

use Stratadox\Hydrator\Hydrates;

/**
 * Builds the mapping for a class.
 *
 * Maps a data structure to an aggregate.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface MakesMap
{
    /**
     * Add a property with optional mapping instructions.
     *
     * Declares a property mapping instruction.
     * Instructions for scalar properties are usually simple type casters.
     * When a property refers to a relationship, the mapping instructions
     * contain the details on how the relationship is loaded.
     * @see DefinesRelationships
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
    ): self;

    /**
     * Finalise the process and produce the mapped hydrator.
     *
     * Produces a hydrator, mapped according to the mapper configuration.
     * The resulting hydrator converts input data to an object graph.
     *
     * @return Hydrates The resulting hydrator.
     * @throws InvalidMapperConfiguration
     */
    public function finish(): Hydrates;
}
