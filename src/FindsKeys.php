<?php
declare(strict_types=1);

namespace Stratadox\HydrationMapper;

/**
 * Retrieves the data key.
 *
 * Maps an object property to a differently named key.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface FindsKeys
{
    /**
     * Retrieves the data key.
     *
     * Finds the name of the key for this property mapping.
     *
     * @return string The data key for this property.
     */
    public function find(): string;
}
