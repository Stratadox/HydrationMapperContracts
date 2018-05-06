<?php
declare(strict_types=1);

namespace Stratadox\HydrationMapper;

use Stratadox\HydrationMapping\MapsProperty;
use Stratadox\Specification\Contract\Satisfiable;

/**
 * Builds the property mapping.
 *
 * Specifies the details of a property.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface InstructsHowToMap
{
    /**
     * Follow the instruction for a property to obtain the property mapping.
     *
     * Produces the resulting property mapping.
     *
     * @param string $property The property to apply this instruction to.
     *
     * @return MapsProperty    The resulting property mapping.
     * @throws InvalidMapperConfiguration
     */
    public function followFor(string $property): MapsProperty;

    /**
     * Add a constraint for the value, to be checked before assigning.
     *
     * @param Satisfiable $constraint The constraint to verify.
     * @return InstructsHowToMap      The updated mapping instruction.
     */
    public function that(Satisfiable $constraint): InstructsHowToMap;
}
