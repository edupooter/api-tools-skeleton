<?php
namespace teste\V1\Rest\Incluir;

class IncluirResourceFactory
{
    public function __invoke($services)
    {
        return new IncluirResource();
    }
}
