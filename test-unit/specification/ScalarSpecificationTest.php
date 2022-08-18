<?php

namespace Mnemesong\ScalarexTestUnit\specification;

use Mnemesong\Scalarex\specification\ScalarSpecification;
use PHPUnit\Framework\TestCase;

class ScalarSpecificationTest extends TestCase
{
    public function testBasics(): void
    {
        $spec1 = new ScalarSpecification('count');
        $this->assertEquals(null, $spec1->getField());
        $this->assertEquals('count', $spec1->getType());
        $this->assertEquals('', $spec1->getName());

        $spec2 = $spec1->withField('name');
        $this->assertEquals('name', $spec2->getField());
        $this->assertEquals(null, $spec1->getField());
        $this->assertEquals('', $spec2->getName());

        $spec3 = $spec2->withName('namesNum');
        $this->assertEquals('', $spec2->getName());
        $this->assertEquals('namesNum', $spec3->getName());
    }

    public function testTypes(): void
    {
        $typesList = ['avg', 'count', 'max', 'min', 'sum',];
        $this->assertEquals([], array_diff($typesList, ScalarSpecification::getTypes()));
        $this->assertEquals([], array_diff(ScalarSpecification::getTypes(), $typesList));
    }
}