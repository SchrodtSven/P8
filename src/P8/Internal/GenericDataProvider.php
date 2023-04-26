<?php

declare(strict_types=1);
/**
 * Generic class for providing mock data (structures) for test purposes
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8
 * @package P8
 * @version 0.1
 * @since 2023-04-25
 */

namespace SchrodtSven\P8\Internal;

class GenericDataProvider
{
    private HashMap $content;

    public function __construct(private string $dataStore = 'data/Vendor.json')
    {
        
        $this->content = new HashMap(\json_decode(\file_get_contents($dataStore)));
    }

    public function getContent(): HashMap
    {
        return $this->content;
    }


    public function getVendorWithProducts(): array
    {
        return [
            ['D\'Amore, Ebert and Effertz', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Kerluke-Swaniawski', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Adams-Bosco', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Lakin, Runolfsson and Wilkinson', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Bruen and Sons', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Walsh, Pfeffer and Harris', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Crist and Sons', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Renner-Hodkiewicz', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Jacobs, Mueller and Hodkiewicz', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Abernathy-Pagac', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Marquardt-Windler', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Roberts-Rowe', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Pfannerstill Inc', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Champlin Inc', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Flatley, Abshire and Collier', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Zulauf and Sons', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Schultz, Hegmann and Heathcote', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Fadel Inc', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Barrows-Legros', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Huels, Purdy and Parker', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Koss, Frami and Lowe', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Brakus, Gerlach and Kreiger', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Mante-Rutherford', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Swift-Wyman', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']], 
            ['Cremin LLC', ['Veal - Brisket, Provimi,bnls', 'Oil - Coconut', 'Cookie Dough - Peanut Butter', 'Milk - Homo', 'Soup - Campbells Tomato Ravioli', 'Molasses - Fancy', 'Stock - Fish', 'Beer - True North Lager', 'Apron', 'Peach - Fresh']]
        ];
    }
}