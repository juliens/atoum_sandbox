<?php
namespace Test;

class Foo
{
    public function test() {}
}


class TypeHint
{
    public function foo(Foo $test)
    {
        $test->test();
    }

    public function foo2(Foo $test)
    {
    }
}
