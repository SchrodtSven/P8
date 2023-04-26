<?php

declare(strict_types=1);
/**
 * Testing attributes
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8
 * @package P8
 * @version 0.1
 * @since 2023-04-25
 */

use PHPUnit\Framework\TestCase;
// use SchrodtSven\P8\New\Token;

class TokenTest extends TestCase
{

    public function testBasix(): void
    {
         $tokens = \PhpToken::tokenize(
            file_get_contents(
                                'src/P8/Internal/StringClass.php'
            )
        );

        foreach ($tokens as $token) {
            $this->assertInstanceOf(\PhpToken::class, $token);   
            $this->assertTrue(isset($token->id));   
            $this->assertTrue(isset($token->text));   
            $this->assertTrue(isset($token->line));   
            $this->assertTrue(isset($token->pos));   
        };
    }   

    /**
     * @dataProvider tokenProvider
     */
    public function testGetToken(int $tokenId, string $syntax, string $comment, string $tokenString): void
    {

        $token = new PhpToken($tokenId, $syntax);
        $this->assertSame($token->getTokenName(), $tokenString);  
    }

    public function tokenProvider(): array
    {
        return [
            [\T_ABSTRACT, 'abstract', 'Class Abstraction', 'T_ABSTRACT'], 
            [\T_AMPERSAND_FOLLOWED_BY_VAR_OR_VARARG, '&', 'Type declarations (available as of PHP 8.1.0)', 'T_AMPERSAND_FOLLOWED_BY_VAR_OR_VARARG'], 
            [\T_AMPERSAND_NOT_FOLLOWED_BY_VAR_OR_VARARG, '&', 'Type declarations (available as of PHP 8.1.0)', 'T_AMPERSAND_NOT_FOLLOWED_BY_VAR_OR_VARARG'], 
            [\T_AND_EQUAL, '&=', 'assignment operators', 'T_AND_EQUAL'], 
            [\T_ARRAY, 'array()', 'array(), array syntax', 'T_ARRAY'], 
            [\T_ARRAY_CAST, '(array)', 'type-casting', 'T_ARRAY_CAST'], 
            [\T_AS, 'as', 'foreach', 'T_AS'], 
            [\T_ATTRIBUTE, '#[', 'attributes (available as of PHP 8.0.0)', 'T_ATTRIBUTE'], 
            [\T_BAD_CHARACTER, '', 'anything below ASCII 32 except \t (0x09), \n (0x0a) and \r (0x0d) (available as of PHP 7.4.0)', 'T_BAD_CHARACTER'], 
            [\T_BOOLEAN_AND, '&&', 'logical operators', 'T_BOOLEAN_AND'], 
            [\T_BOOLEAN_OR, '||', 'logical operators', 'T_BOOLEAN_OR'], 
            [\T_BOOL_CAST, '(bool) or (boolean)', 'type-casting', 'T_BOOL_CAST'], 
            [\T_BREAK, 'break', 'break', 'T_BREAK'], 
            [\T_CALLABLE, 'callable', 'callable', 'T_CALLABLE'], 
            [\T_CASE, 'case', 'switch', 'T_CASE'], 
            [\T_CATCH, 'catch', 'Exceptions', 'T_CATCH'], 
            [\T_CLASS, 'class', 'classes and objects', 'T_CLASS'], 
            [\T_CLASS_C, '__CLASS__', 'magic constants', 'T_CLASS_C'], 
            [\T_CLONE, 'clone', 'classes and objects', 'T_CLONE'], 
            [\T_CLOSE_TAG, '?> or %>', 'escaping from HTML', 'T_CLOSE_TAG'], 
            [\T_COALESCE, '??', 'comparison operators', 'T_COALESCE'], 
            [\T_COALESCE_EQUAL, '??=', 'assignment operators (available as of PHP 7.4.0)', 'T_COALESCE_EQUAL'], 
            [\T_COMMENT, '// or #, and /* */', 'comments', 'T_COMMENT'], 
            [\T_CONCAT_EQUAL, '.=', 'assignment operators', 'T_CONCAT_EQUAL'], 
            [\T_CONST, 'const', 'class constants', 'T_CONST'], 
            [\T_CONSTANT_ENCAPSED_STRING, 'foo or \'bar\'', 'string syntax', 'T_CONSTANT_ENCAPSED_STRING'], 
            [\T_CONTINUE, 'continue', 'continue', 'T_CONTINUE'], 
            [\T_CURLY_OPEN, '{$', 'complex variable parsed syntax', 'T_CURLY_OPEN'], 
            [\T_DEC, '--', 'incrementing/decrementing operators', 'T_DEC'], 
            [\T_DECLARE, 'declare', 'declare', 'T_DECLARE'], 
            [\T_DEFAULT, 'default', 'switch', 'T_DEFAULT'], 
            [\T_DIR, '__DIR__', 'magic constants', 'T_DIR'], 
            [\T_DIV_EQUAL, '/=', 'assignment operators', 'T_DIV_EQUAL'], 
            [\T_DNUMBER, '0.12, etc.', 'floating point numbers', 'T_DNUMBER'], 
            [\T_DO, 'do', 'do..while', 'T_DO'], 
            [\T_DOC_COMMENT, '/** */', 'PHPDoc style comments', 'T_DOC_COMMENT'], 
            [\T_DOLLAR_OPEN_CURLY_BRACES, '${', 'complex variable parsed syntax', 'T_DOLLAR_OPEN_CURLY_BRACES'], 
            [\T_DOUBLE_ARROW, '=>', 'array syntax', 'T_DOUBLE_ARROW'], 
            [\T_DOUBLE_CAST, '(real), (double) or (float)', 'type-casting', 'T_DOUBLE_CAST'], 
            [\T_ECHO, 'echo', 'echo', 'T_ECHO'], 
            [\T_ELLIPSIS, '...', 'function arguments', 'T_ELLIPSIS'], 
            [\T_ELSE, 'else', 'else', 'T_ELSE'], 
            [\T_ELSEIF, 'elseif', 'elseif', 'T_ELSEIF'], 
            [\T_EMPTY, 'empty', 'empty()', 'T_EMPTY'], 
            [\T_ENCAPSED_AND_WHITESPACE, '$a', 'constant part of string with variables', 'T_ENCAPSED_AND_WHITESPACE'], 
            [\T_ENDDECLARE, 'enddeclare', 'declare, alternative syntax', 'T_ENDDECLARE'], 
            [\T_ENDFOR, 'endfor', 'for, alternative syntax', 'T_ENDFOR'], 
            [\T_ENDFOREACH, 'endforeach', 'foreach, alternative syntax', 'T_ENDFOREACH'], 
            [\T_ENDIF, 'endif', 'if, alternative syntax', 'T_ENDIF'], 
            [\T_ENDSWITCH, 'endswitch', 'switch, alternative syntax', 'T_ENDSWITCH'], 
            [\T_ENDWHILE, 'endwhile', 'while, alternative syntax', 'T_ENDWHILE'], 
            [\T_ENUM, 'enum', 'Enumerations (available as of PHP 8.1.0)', 'T_ENUM'], 
            [\T_END_HEREDOC, '', 'heredoc syntax', 'T_END_HEREDOC'], 
            [\T_EVAL, 'eval()', 'eval()', 'T_EVAL'], 
            [\T_EXIT, 'exit or die', 'exit(), die()', 'T_EXIT'], 
            [\T_EXTENDS, 'extends', 'extends, classes and objects', 'T_EXTENDS'], 
            [\T_FILE, '__FILE__', 'magic constants', 'T_FILE'], 
            [\T_FINAL, 'final', 'Final Keyword', 'T_FINAL'], 
            [\T_FINALLY, 'finally', 'Exceptions', 'T_FINALLY'], 
            [\T_FN, 'fn', 'arrow functions (available as of PHP 7.4.0)', 'T_FN'], 
            [\T_FOR, 'for', 'for', 'T_FOR'], 
            [\T_FOREACH, 'foreach', 'foreach', 'T_FOREACH'], 
            [\T_FUNCTION, 'function', 'functions', 'T_FUNCTION'], 
            [\T_FUNC_C, '__FUNCTION__', 'magic constants', 'T_FUNC_C'], 
            [\T_GLOBAL, 'global', 'variable scope', 'T_GLOBAL'], 
            [\T_GOTO, 'goto', 'goto', 'T_GOTO'], 
            [\T_HALT_COMPILER, '__halt_compiler()', '__halt_compiler', 'T_HALT_COMPILER'], 
            [\T_IF, 'if', 'if', 'T_IF'], 
            [\T_IMPLEMENTS, 'implements', 'Object Interfaces', 'T_IMPLEMENTS'], 
            [\T_INC, '++', 'incrementing/decrementing operators', 'T_INC'], 
            [\T_INCLUDE, 'include()', 'include', 'T_INCLUDE'], 
            [\T_INCLUDE_ONCE, 'include_once()', 'include_once', 'T_INCLUDE_ONCE'], 
            [\T_INLINE_HTML, '', 'text outside PHP', 'T_INLINE_HTML'], 
            [\T_INSTANCEOF, 'instanceof', 'type operators', 'T_INSTANCEOF'], 
            [\T_INSTEADOF, 'insteadof', 'Traits', 'T_INSTEADOF'], 
            [\T_INTERFACE, 'interface', 'Object Interfaces', 'T_INTERFACE'], 
            [\T_INT_CAST, '(int) or (integer)', 'type-casting', 'T_INT_CAST'], 
            [\T_ISSET, 'isset()', 'isset()', 'T_ISSET'], 
            [\T_IS_EQUAL, '==', 'comparison operators', 'T_IS_EQUAL'], 
            [\T_IS_GREATER_OR_EQUAL, '>=', 'comparison operators', 'T_IS_GREATER_OR_EQUAL'], 
            [\T_IS_IDENTICAL, '===', 'comparison operators', 'T_IS_IDENTICAL'], 
            [\T_IS_NOT_EQUAL, '!= or <>', 'comparison operators', 'T_IS_NOT_EQUAL'], 
            [\T_IS_NOT_IDENTICAL, '!==', 'comparison operators', 'T_IS_NOT_IDENTICAL'], 
            [\T_IS_SMALLER_OR_EQUAL, '<=', 'comparison operators', 'T_IS_SMALLER_OR_EQUAL'], 
            [\T_LINE, '__LINE__', 'magic constants', 'T_LINE'], 
            [\T_LIST, 'list()', 'list()', 'T_LIST'], 
            [\T_LNUMBER, '123, 012, 0x1ac, etc.', 'integers', 'T_LNUMBER'], 
            [\T_LOGICAL_AND, 'and', 'logical operators', 'T_LOGICAL_AND'], 
            [\T_LOGICAL_OR, 'or', 'logical operators', 'T_LOGICAL_OR'], 
            [\T_LOGICAL_XOR, 'xor', 'logical operators', 'T_LOGICAL_XOR'], 
            [\T_MATCH, 'match', 'match (available as of PHP 8.0.0)', 'T_MATCH'], 
            [\T_METHOD_C, '__METHOD__', 'magic constants', 'T_METHOD_C'], 
            [\T_MINUS_EQUAL, '-=', 'assignment operators', 'T_MINUS_EQUAL'], 
            [\T_MOD_EQUAL, '%=', 'assignment operators', 'T_MOD_EQUAL'], 
            [\T_MUL_EQUAL, '*=', 'assignment operators', 'T_MUL_EQUAL'], 
            [\T_NAMESPACE, 'namespace', 'namespaces', 'T_NAMESPACE'], 
            [\T_NAME_FULLY_QUALIFIED, '\App\Namespace', 'namespaces (available as of PHP 8.0.0)', 'T_NAME_FULLY_QUALIFIED'], 
            [\T_NAME_QUALIFIED, 'App\Namespace', 'namespaces (available as of PHP 8.0.0)', 'T_NAME_QUALIFIED'], 
            [\T_NAME_RELATIVE, 'namespace\Namespace', 'namespaces (available as of PHP 8.0.0)', 'T_NAME_RELATIVE'], 
            [\T_NEW, 'new', 'classes and objects', 'T_NEW'], 
            [\T_NS_C, '__NAMESPACE__', 'namespaces', 'T_NS_C'], 
            [\T_NS_SEPARATOR, '\\', 'namespaces', 'T_NS_SEPARATOR'], 
            [\T_NUM_STRING, '$a[0]', 'numeric array index inside string', 'T_NUM_STRING'], 
            [\T_OBJECT_CAST, '(object)', 'type-casting', 'T_OBJECT_CAST'], 
            [\T_OBJECT_OPERATOR, '->', 'classes and objects', 'T_OBJECT_OPERATOR'], 
            [\T_NULLSAFE_OBJECT_OPERATOR, '?->', 'classes and objects', 'T_NULLSAFE_OBJECT_OPERATOR'], 
            [\T_OPEN_TAG, '<?php, <? or <%', 'escaping from HTML', 'T_OPEN_TAG'], 
            [\T_OPEN_TAG_WITH_ECHO, '<?= or <%=', 'escaping from HTML', 'T_OPEN_TAG_WITH_ECHO'], 
            [\T_OR_EQUAL, '|=', 'assignment operators', 'T_OR_EQUAL'], 
            [\T_PLUS_EQUAL, '+=', 'assignment operators', 'T_PLUS_EQUAL'], 
            [\T_POW, '**', 'arithmetic operators', 'T_POW'], 
            [\T_POW_EQUAL, '**=', 'assignment operators', 'T_POW_EQUAL'], 
            [\T_PRINT, 'print()', 'print', 'T_PRINT'], 
            [\T_PRIVATE, 'private', 'classes and objects', 'T_PRIVATE'], 
            [\T_PROTECTED, 'protected', 'classes and objects', 'T_PROTECTED'], 
            [\T_PUBLIC, 'public', 'classes and objects', 'T_PUBLIC'], 
            [\T_READONLY, 'readonly', 'classes and objects (available as of PHP 8.1.0)', 'T_READONLY'], 
            [\T_REQUIRE, 'require()', 'require', 'T_REQUIRE'], 
            [\T_REQUIRE_ONCE, 'require_once()', 'require_once', 'T_REQUIRE_ONCE'], 
            [\T_RETURN, 'return', 'returning values', 'T_RETURN'], 
            [\T_SL, '<<', 'bitwise operators', 'T_SL'], 
            [\T_SL_EQUAL, '<<=', 'assignment operators', 'T_SL_EQUAL'], 
            [\T_SPACESHIP, '<=>', 'comparison operators', 'T_SPACESHIP'], 
            [\T_SR, '>>', 'bitwise operators', 'T_SR'], 
            [\T_SR_EQUAL, '>>=', 'assignment operators', 'T_SR_EQUAL'], 
            [\T_START_HEREDOC, '<<<', 'heredoc syntax', 'T_START_HEREDOC'], 
            [\T_STATIC, 'static', 'variable scope', 'T_STATIC'], 
            [\T_STRING, 'parent, self, etc.', 'identifiers, e.g. keywords like parent and self, function names, class names and more are matched. See also T_CONSTANT_ENCAPSED_STRING.', 'T_STRING'], 
            [\T_STRING_CAST, '(string)', 'type-casting', 'T_STRING_CAST'], 
            [\T_STRING_VARNAME, '${a', 'complex variable parsed syntax', 'T_STRING_VARNAME'], 
            [\T_SWITCH, 'switch', 'switch', 'T_SWITCH'], 
            [\T_THROW, 'throw', 'Exceptions', 'T_THROW'], 
            [\T_TRAIT, 'trait', 'Traits', 'T_TRAIT'], 
            [\T_TRAIT_C, '__TRAIT__', '__TRAIT__', 'T_TRAIT_C'], 
            [\T_TRY, 'try', 'Exceptions', 'T_TRY'], 
            [\T_UNSET, 'unset()', 'unset()', 'T_UNSET'], 
            [\T_UNSET_CAST, '(unset)', 'type-casting', 'T_UNSET_CAST'], 
            [\T_USE, 'use', 'namespaces', 'T_USE'], 
            [\T_VAR, 'var', 'classes and objects', 'T_VAR'], 
            [\T_VARIABLE, '$foo', 'variables', 'T_VARIABLE'], 
            [\T_WHILE, 'while', 'while, do..while', 'T_WHILE'], 
            [\T_XOR_EQUAL, '^=', 'assignment operators', 'T_XOR_EQUAL'], 
            [\T_YIELD, 'yield', 'generators', 'T_YIELD'], 
            [\T_YIELD_FROM, 'yield from', 'generators', 'T_YIELD_FROM']
    ];
    
    }


    
     

}