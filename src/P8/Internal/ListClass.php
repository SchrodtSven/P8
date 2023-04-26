<?php

declare(strict_types=1);
/**
 * Class representing arrays as objects
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8
 * @package P8
 * @version 0.1
 * @since 2023-04-25
 */

namespace  SchrodtSven\P8\Internal;

class ListClass implements \ArrayAccess, \Countable, \Iterator
{
    use ArrayAccessTrait;
    use IteratorTrait;

    public function __construct(protected array $content = [])
    {

    }

    public function count(): int 
    {
        return count($this->content);
    }

    public function getContent(): array
    {
        return $this->content;
    }

    

    public function join(string $glue = ' '): StringClass
    {
        return new StringClass((string) \implode($glue, $this->content));
    }
    
    public function push(mixed $value): self
    {
        array_push($this->content, $value);
        return $this;
    }


    public function pop(): mixed
    {
        return array_pop($this->content);
    }

    public function shift(): mixed
    {
        return array_shift($this->content);
    }

    public function unshift(mixed $value): self
    {
        array_unshift($this->content, $value);
        return $this;
    }



    public function walk(callable $callback): self
    {
        array_walk($this->content, $callback);
        return $this;
    }

    public function getRandomKey(int $num = 1): self
    {
        $r =  new \Random\Randomizer();
            return new self(
                $r->pickArrayKeys($this->content, $num)
            );
    }



    public function getRandomElement(int $num = 1): self
    {
            $tmp =  new self();
            if($num ===1) {
                return $tmp->push($this->content[$this->getRandomKey()]);
            } else {
                $tmp2 = $this->getRandomKey($num);
                for($i=0; $i < count($tmp2); $i++) {
                    $tmp->push($this->content[$i]);
                }

            return $tmp;
            }

            
    }
}