<?php

declare(strict_types=1);
/**
 * Class representing strings as objects
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8
 * @package P8
 * @version 0.1
 * @since 2023-04-25
 */

namespace  SchrodtSven\P8\Internal;

class StringClass implements \Stringable
{
    public function __construct(private string $content)
    {

    }

    public function prepend(string $begin): self
    {
        $this->content = $begin . $this->content;
        return $this;
    }

    public function append(string $end): self
    {
        $this->content .= $end;
        return $this;
    }

    public function quote(string $mark="'"): self
    {
        return $this->append($mark)->prepend($mark);
    }

    public function splitBy(string $separator): ListClass
    {
        return new ListClass(\explode($separator, $this->content));
    }

    public function __toString(): string
    {
        return $this->content;
    }

    public function ends(string $end): bool
    {
        return \str_ends_with($this->content, $end);
    }

    public function begins(string $begin): bool
    {
        return \str_starts_with($this->content, $begin);
    }

    public function contains(string $needle): bool
    {
        return \str_contains($this->content, $needle);
    }


    public function subString(int $offset, ?int $length = null, ?string $encoding = null): self
    {
        return new self(mb_substr($this->content, $offset, $length, $encoding));
    }

    public function length(): int
    {
        return \mb_strlen($this->content);
    }

    public function trim(): self
    {
        $this->content = trim($this->content);
        return $this;
    }
}