<?php

namespace Mnemesong\ScalarexTestUnit\specification;

use Mnemesong\Scalarex\specification\ScalarSpecification;
use PHPUnit\Framework\TestCase;

class ScalarSpecificationTest extends TestCase
{
    public function testBasics(): void
    {
        $spec = new ScalarSpecification('count');
        $this->assertEquals(null, $spec->getField());
        $this->assertEquals('count', $spec->getType());

        $newSpec = $spec->withField('name');
        $this->assertEquals('name', $newSpec->getField());
        $this->assertEquals(null, $spec->getField());
    }

    public function testTypes(): void
    {
        $typesList = ['avg', 'count', 'max', 'min', 'sum',];
        $this->assertEquals([], array_diff($typesList, ScalarSpecification::getTypes()));
        $this->assertEquals([], array_diff(ScalarSpecification::getTypes(), $typesList));
    }
}