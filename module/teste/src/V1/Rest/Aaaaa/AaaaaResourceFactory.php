<?php
namespace teste\V1\Rest\Aaaaa;

class AaaaaResourceFactory
{
    public function __invoke($services)
    {
        return new AaaaaResource();
    }
}
