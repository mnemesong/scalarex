<?php

namespace Mnemesong\ScalarexTestUnit;

use Mnemesong\Scalarex\Scalar;
use Mnemesong\Scalarex\specification\ScalarSpecification;
use PHPUnit\Framework\TestCase;

class ScalarTest extends TestCase
{
    public function testAvg()
    {
        $spec = Scalar::avg();
        $this->assertEquals(new ScalarSpecification('avg', null), $spec);

        $spec = Scalar::avg('age');
        $this->assertEquals(new ScalarSpecification('avg', 'age'), $spec);
    }

    public function testCount()
    {
        $spec = Scalar::count();
        $this->assertEquals(new ScalarSpecification('count', null), $spec);

        $spec = Scalar::count('age');
        $this->assertEquals(new ScalarSpecification('count', 'age'), $spec);
    }

    public function testSum()
    {
        $spec = Scalar::sum();
        $this->assertEquals(new ScalarSpecification('sum', null), $spec);

        $spec = Scalar::sum('age');
        $this->assertEquals(new ScalarSpecification('sum', 'age'), $spec);
    }

    public function testMin()
    {
        $spec = Scalar::min();
        $this->assertEquals(new ScalarSpecification('min', null), $spec);

        $spec = Scalar::min('age');
        $this->assertEquals(new ScalarSpecification('min', 'age'), $spec);
    }

    public function testMax()
    {
        $spec = Scalar::max();
        $this->assertEquals(new ScalarSpecification('max', null), $spec);

        $spec = Scalar::max('age');
        $this->assertEquals(new ScalarSpecification('max', 'age'), $spec);
    }
}