<?php
declare(strict_types=1);

namespace Stratadox\HydrationMapper;

use Throwable;

/**
 * Indicates that the mapper is configured incorrectly.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface InvalidMapperConfiguration extends Throwable
{
}
