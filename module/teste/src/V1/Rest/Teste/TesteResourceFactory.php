<?php
namespace teste\V1\Rest\Teste;

class TesteResourceFactory
{
    public function __invoke($services)
    {
        return new TesteResource();
    }
}
