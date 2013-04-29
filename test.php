<?php
namespace Test\tests\units;


require_once __DIR__ . '/typehint.php';
require_once __DIR__ . '/atoum.phar';

use \Test\TypeHint as testedClass;

class TypeHint extends \atoum\test
{
    public function testTypeHintFail()
    {
        $class = new testedClass();
        $class->foo('');
    }
    public function testTypeHintSuccess()
    {
        $class = new testedClass();
        $class->foo2('');
    }
}
