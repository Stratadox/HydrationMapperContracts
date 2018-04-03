<?php
declare(strict_types=1);

namespace Stratadox\HydrationMapper;

use Stratadox\Proxy\ProducesProxyLoaders;

/**
 * Builds the property mapping for a relationship.
 *
 * Specifies the details of a relationship.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface DefinesRelationships extends InstructsHowToMap
{
    /**
     * Defines the class that contains the collection.
     *
     * Defines a collection class for this relationship.
     * When not defined, a numeric array will be used instead.
     *
     * @param string $class         The collection class to contain the related
     *                              instances.
     *
     * @return DefinesRelationships The updated relationship definer.
     */
    public function containedInA(string $class): self;

    /**
     * Defines the object that produces proxy loaders.
     *
     * Declares a proxy loader for the relationship.
     * Required for lazily loaded relationships.
     * Ignored for eagerly loaded relationships.
     *
     * @param ProducesProxyLoaders $loader The proxy loader factory that lazily
     *                                     loads the related entities.
     *
     * @return DefinesRelationships        The updated relationship definer.
     */
    public function loadedBy(ProducesProxyLoaders $loader): self;

    /**
     * Defines the source data to be nested.
     *
     * Marks the relationship as originating from nested data.
     * Allows loading data from json and similar formats.
     *
     * @return DefinesRelationships The updated relationship definer.
     */
    public function nested(): self;

    /**
     * Defines a choice between concrete implementations.
     *
     * Maps interfaces or parent classes to the correct concrete classes.
     * Enables single-table inheritance and similar inheritance mapping schemes.
     * @see RepresentsChoice
     *
     * @param string $decisionKey   The name of the data key whose value will be
     *                              used to decide which hydrator to use.
     * @param array $choices        An associative array with the available
     *                              choices as keys, and choice representations
     *                              as values.
     *
     * @return DefinesRelationships The updated relationship definer.
     */
    public function selectBy(string $decisionKey, array $choices): self;

    /**
     * Add a property with optional mapping instructions.
     *
     * Declares a property for the related class.
     * Allows mapping the deeper levels of an aggregate.
     *
     * @param string                 $property    The name of the  property to
     *                                            define.
     * @param InstructsHowToMap|null $instruction Optional mapping instructions,
     *                                            defaults to string conversion.
     *
     * @return DefinesRelationships               The updated relationship definer.
     */
    public function with(
        string $property,
        InstructsHowToMap $instruction = null
    ): self;
}
