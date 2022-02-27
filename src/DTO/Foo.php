<?php
declare(strict_types = 1);

namespace App\DTO;

use App\Enum\FooBar;

class Foo
{
    private FooBar $fooBar;

    public function getFooBar(): FooBar
    {
        return $this->fooBar;
    }

    public function setFooBar(FooBar $fooBar): self
    {
        $this->fooBar = $fooBar;

        return $this;
    }
}
