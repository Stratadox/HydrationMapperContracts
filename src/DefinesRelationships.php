<?php
declare(strict_types=1);

namespace Stratadox\HydrationMapper;

use Stratadox\Proxy\ProducesProxyLoaders;

/**
 * Builds relationship instructions for in a property map.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface DefinesRelationships extends InstructsHowToMap
{
    /**
     * Defines the class that contains the collection.
     *
     * @param string $class         The collection class to contain the related
     *                              instances.
     *
     * @return DefinesRelationships The updated relationship definer.
     */
    public function containedInA(
        string $class
    ): DefinesRelationships;

    /**
     * Defines the object that produces proxy loaders.
     *
     * @param ProducesProxyLoaders $loader The proxy loader factory that lazily
     *                                     loads the related entities.
     *
     * @return DefinesRelationships        The updated relationship definer.
     */
    public function loadedBy(
        ProducesProxyLoaders $loader
    ): DefinesRelationships;

    /**
     * Defines the source data to be nested.
     *
     * @return DefinesRelationships The updated relationship definer.
     */
    public function nested(
    ): DefinesRelationships;

    /**
     * Defines a choice between concrete implementations.
     *
     * @param string $decisionKey   The name of the data key whose value will be
     *                              used to decide which hydrator to use.
     * @param array $choices        An associative array with the available
     *                              choices as keys, and hydrator instances as
     *                              values.
     *
     * @return DefinesRelationships The updated relationship definer.
     */
    public function selectBy(
        string $decisionKey,
        array $choices
    ): DefinesRelationships;

    /**
     * Add a property with optional mapping instructions.
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
    ): DefinesRelationships;
}
