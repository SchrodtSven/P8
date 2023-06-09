# P8
Just another playground for testing new features of PHP8.0.x 
- nothing special to discover here   

<pre>

                                 .''.
       .''.             *''*    :_\/_:     .
      :_\/_:   .    .:.*_\/_*   : /\ :  .'.:.'.
  .''.: /\ : _\(/_  ':'* /\ *  : '..'.  -=:o:=-
 :_\/_:'.:::. /)\*''*  .|.* '.\'/.'_\(/_'.':'.'
 : /\ : :::::  '*_\/_* | |  -= o =- /)\    '  *
  '..'  ':::'   * /\ * |'|  .'/.\'.  '._____
      *        __*..* |  |     :      |.   |' .---"|
       _*   .-'   '-. |  |     .--'|  ||   | _|    |
    .-'|  _.|  |    ||   '-__  |   |  |    ||      |
    |' | |.    |    ||       | |   |  |    ||      |
 ___|  '-'     '    ""       '-'   '-.'    '`      |____    
</pre>

## Testing new features

### New Functions

- <code>str_contains()</code>, <code>str_starts_with()</code> and <code>str_ends_with()</code> 
     -see: <code>\SchrodtSven\P8\Internal\StringClass wrappers</code> (<code>::ends(), ::begins(), ::contains()</code>)

-  <code>get_debug_type(mixed $value): string</code> - has been added, which returns a type useful for error messages. Unlike <code>gettype()</code>, it uses canonical type names, returns class names for objects, and indicates the resource type for resources.
    public static function forceToBeStringClass(int|float|bool|string|null|array|\Stringable $content): self
    - see: <code>\SchrodtSven\P8\Internal\StringClass::forceToBeStringClass()</code> and test <code>test/StringClassTest</code>

### Null safe operator
 - see: <code>test/New/MixedTest.php</code>

### Match expression
- see: <code>\SchrodtSven\P8\New\MatchExample</code> and test (<code>test\Internal\MatchExampleTest</code>)


### Attributes
- see: <code>\SchrodtSven\P8\New\AttributeUser</code> and test (<code>test\New\AttributeUserTest</code>)


### Constructor promotion

- see: <code>\SchrodtSven\P8\New\ConstructorPromotion</code> and test (<code>test\Internal\ConstructorPromotionTest</code>)


### Named arguments

- see: <code>\SchrodtSven\P8\New\NamedArguments</code> and test (<code>test\Internal\NamedArgumentsTest</code>)

### Union types 

 - see: <code>\SchrodtSven\P8\Internal\StringClass</code> and test (<code>test\Internal\StringClassTest</code>)

### New return value static

- <code>static</code> (as in “late static binding”) can now be used as a return type

### New native class \PhpToken

-  Adds a new OOP interface being more memory efficient and faster. 
  - see: <code><test/TokenTest.php/</code>


### Nota bene 

- It is now possible to fetch the class name of an object using <code>$object::class</code>. The result is the same as <code>get_class($object)</code>.

- <code>new</code> and <code>instanceof</code> can now be used with arbitrary expressions, using <code>new (expression)(...$args)</code> and <code>$obj instanceof(expression)</code>.

- Some consistency fixes to variable syntax have been applied, for example writing <code>Foo::BAR::$baz</code> is now allowed.
- Added <code>Stringable</code> interface, which is automatically implemented if a class defines a <code>__toString()</code> method.
    - see: <code>\SchrodtSven\P8\Internal\StringClass</code> & test

- Traits can now define abstract private methods. Such methods must be implemented by the class using the trait.

 - <code>throw</code>can now be used as an expression. That allows usages like:<code><pre>
    $fn = fn() => throw new Exception('Exception in arrow function');
    $user = $session->user ?? throw new Exception('Must have user');
    </pre></code>

-  An optional trailing comma is now allowed in parameter lists.
<code><pre>
    function functionWithLongSignature(
       Type1 $parameter1,
       Type2 $parameter2, // <-- This comma is now allowed.
    ) 
    {
        // <-- insert your code here
    }
</pre></code>

- It is now possible to write <code>catch (Exception) </code> to catch an exception without storing it in a variable.

- Support for mixed type has been added.
    - see: <code>\SchrodtSven\P8\Internal\StringClass::forceToBeStringClass()</code> and test <code>test/StringClassTest</code>

    

## Appendix

### Development environment 

 Chronicler's duty: 

 - Box: MacBookAir M1 /2020 (PHP Development)
 - Box: iMac21,2 M1/2020 (PHP Development)
 - Box: Raspberry Pi 4 Model B Rev 1.1 (RDBMS, CI/CD)
 - OS: Darwin Marvell 22.3.0 Darwin Kernel Version 22.3.0; RELEASE_ARM64_T8103 arm64
 - OS: Linux raspberrypi 5.10.17-v7l+ #1403 SMP Mon Feb 22 11:33:35 GMT 2021 armv7l GNU/Linux
 - IDE: Visual Studio Code; version: 1.70.2 (Universal)
 - PHP: 8.2.4 (NTS); with Zend OPcache v8.2.0
 - Java: openjdk version "11.0.18" 2023-01-17; OpenJDK Runtime Environment  & OpenJDK Server VM
 - RDBMS: Sqlite version 3.39.5
 - CI/CD Pipeline: Jenkins 

## Outlook / Todos
 
- Adding documentation 
- Adding comments 
- Completing checks
- Adding unit tests for PHPUnit 
- Adding support for testing via <a href="https://github.com/SchrodtSven/P8Unitcheck">P8UnitCheck</a>
- Ensuring further PSR* compatibility
- Ensuring it to be shippable via <code>composer</code>


 Glück auf! 
