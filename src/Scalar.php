<?php

namespace Mnemesong\Scalarex;

use Mnemesong\Scalarex\specification\ScalarSpecification;

class Scalar
{
    /**
     * @param string|null $field
     * @return ScalarSpecification
     */
    public static function avg(?string $field = null): ScalarSpecification
    {
        return new ScalarSpecification(ScalarSpecification::T_AVG, $field);
    }

    /**
     * @param string|null $field
     * @return ScalarSpecification
     */
    public static function count(?string $field = null): ScalarSpecification
    {
        return new ScalarSpecification(ScalarSpecification::T_COUNT, $field);
    }

    /**
     * @param string|null $field
     * @return ScalarSpecification
     */
    public static function min(?string $field = null): ScalarSpecification
    {
        return new ScalarSpecification(ScalarSpecification::T_MIN, $field);
    }

    /**
     * @param string|null $field
     * @return ScalarSpecification
     */
    public static function max(?string $field = null): ScalarSpecification
    {
        return new ScalarSpecification(ScalarSpecification::T_MAX, $field);
    }

    /**
     * @param string|null $field
     * @return ScalarSpecification
     */
    public static function sum(?string $field = null): ScalarSpecification
    {
        return new ScalarSpecification(ScalarSpecification::T_SUM, $field);
    }
}