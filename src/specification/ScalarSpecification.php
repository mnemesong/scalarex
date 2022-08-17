<?php

namespace Mnemesong\Scalarex\specification;

use Webmozart\Assert\Assert;

final class ScalarSpecification
{
    const T_AVG = 'avg';
    const T_COUNT = 'count';
    const T_MAX = 'max';
    const T_MIN = 'min';
    const T_SUM = 'sum';

    protected string $type;
    protected ?string $field = null;

    /**
     * @param string $type
     */
    public function __construct(string $type)
    {
        Assert::inArray($type, self::getTypes());
        $this->type = $type;
    }

    /**
     * @param string $field
     * @return self
     */
    public function withField(string $field): self
    {
        Assert::notEmpty($field, 'Field name should be not empty string');
        $clone = clone $this;
        $clone->field = $field;
        return $clone;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    /**
     * @return string[]
     */
    public static function getTypes(): array
    {
        return [
            self::T_AVG,
            self::T_COUNT,
            self::T_MAX,
            self::T_MIN,
            self::T_SUM
        ];
    }
}