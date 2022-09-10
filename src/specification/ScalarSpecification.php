<?php

namespace Mnemesong\Scalarex\specification;

use Webmozart\Assert\Assert;

final class ScalarSpecification
{
    const T_AVG = 'avg';
    const T_COUNT = 'count';
    const T_MAX = 'max';
    const T_MIN = 'min';
    const T_LONG = 'long';
    const T_SHORT = 'short';
    const T_SUM = 'sum';

    protected string $type;
    protected ?string $field;
    protected string $name = '';

    /**
     * @param string $type
     * @param string|null $field
     */
    public function __construct(string $type, ?string $field = null)
    {
        Assert::inArray($type, self::getTypes());
        $this->type = $type;
        $this->setField($field);
    }

    /**
     * @param string $field
     * @return self
     */
    public function withField(string $field): self
    {
        $clone = clone $this;
        $clone->setField($field);
        return $clone;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function withName(string $name): self
    {
        $clone = clone $this;
        $clone->name = $name;
        return $clone;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
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
            self::T_SUM,
            self::T_LONG,
            self::T_SHORT,
        ];
    }

    protected function setField(?string $field): void
    {
        if(isset($field)) {
            Assert::stringNotEmpty($field);
        }
        $this->field = $field;
    }
}