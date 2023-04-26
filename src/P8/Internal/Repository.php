<?php

declare(strict_types=1);
/**
 * Repository for getting (random) mock data
 * 
 * Providing possibility of accessing objects as arrays
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8
 * @package P8
 * @version 0.1
 * @since 2023-04-26
 */

namespace SchrodtSven\P8\Internal;
use SchrodtSven\P8\Internal\Person;

class Repository
{
    private ListClass $content;

    public function __construct(string $entity = 'person', int $amount = 1)
    {
        // @todo switch($entity)
        
        
        $this->content = new ListClass(
            \json_decode(
                \file_get_contents('data/person.json'),
                true
            )
        );
    }

    public function getById(int $id): mixed
    {
        return ($this->getPerson(
                $this->content->filterBy('id')->eq($id)->getContent()[$id-1]
            )
        );
        
    }



    public function getPerson(array $data): Person
    {
        $person = new Person();
        $data['doB'] = \DateTime::createFromFormat('Y-m-d', $data['yearBorn'] . '-02-12');
        unset($data['yearBorn']); 
        foreach ($data as $key => $value) {
            $person->$key = $value;
        }

        return $person;
    }
    public function getContent(): ListClass
    {
        return $this->content;
    }
}