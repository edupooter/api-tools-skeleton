<?php
return [
    'api-tools-versioning' => [
        'default_version' => 1,
        'uri' => [
            0 => 'teste.rest.teste',
            1 => 'teste.rest.incluir',
            2 => 'teste.rest.aaaaa',
        ],
    ],
    'service_manager' => [
        'factories' => [
            \teste\V1\Rest\Teste\TesteResource::class => \teste\V1\Rest\Teste\TesteResourceFactory::class,
            \teste\V1\Rest\Incluir\IncluirResource::class => \teste\V1\Rest\Incluir\IncluirResourceFactory::class,
            \teste\V1\Rest\Aaaaa\AaaaaResource::class => \teste\V1\Rest\Aaaaa\AaaaaResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'teste.rest.teste' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/teste[/:teste_id]',
                    'defaults' => [
                        'controller' => 'teste\\V1\\Rest\\Teste\\Controller',
                    ],
                ],
            ],
            'teste.rest.incluir' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/incluir[/:incluir_id]',
                    'defaults' => [
                        'controller' => 'teste\\V1\\Rest\\Incluir\\Controller',
                    ],
                ],
            ],
            'teste.rest.aaaaa' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/aaaaa[/:aaaaa_id]',
                    'defaults' => [
                        'controller' => 'teste\\V1\\Rest\\Aaaaa\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-rest' => [
        'teste\\V1\\Rest\\Teste\\Controller' => [
            'listener' => \teste\V1\Rest\Teste\TesteResource::class,
            'route_name' => 'teste.rest.teste',
            'route_identifier_name' => 'teste_id',
            'collection_name' => 'teste',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \teste\V1\Rest\Teste\TesteEntity::class,
            'collection_class' => \teste\V1\Rest\Teste\TesteCollection::class,
            'service_name' => 'teste',
        ],
        'teste\\V1\\Rest\\Incluir\\Controller' => [
            'listener' => \teste\V1\Rest\Incluir\IncluirResource::class,
            'route_name' => 'teste.rest.incluir',
            'route_identifier_name' => 'incluir_id',
            'collection_name' => 'incluir',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
                4 => 'POST',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => '10',
            'entity_class' => \teste\V1\Rest\Incluir\IncluirEntity::class,
            'collection_class' => \teste\V1\Rest\Incluir\IncluirCollection::class,
            'service_name' => 'incluir',
        ],
        'teste\\V1\\Rest\\Aaaaa\\Controller' => [
            'listener' => \teste\V1\Rest\Aaaaa\AaaaaResource::class,
            'route_name' => 'teste.rest.aaaaa',
            'route_identifier_name' => 'aaaaa_id',
            'collection_name' => 'aaaaa',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \teste\V1\Rest\Aaaaa\AaaaaEntity::class,
            'collection_class' => \teste\V1\Rest\Aaaaa\AaaaaCollection::class,
            'service_name' => 'aaaaa',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'teste\\V1\\Rest\\Teste\\Controller' => 'HalJson',
            'teste\\V1\\Rest\\Incluir\\Controller' => 'Json',
            'teste\\V1\\Rest\\Aaaaa\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'teste\\V1\\Rest\\Teste\\Controller' => [
                0 => 'application/vnd.teste.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'teste\\V1\\Rest\\Incluir\\Controller' => [
                0 => 'application/vnd.teste.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'teste\\V1\\Rest\\Aaaaa\\Controller' => [
                0 => 'application/vnd.teste.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'teste\\V1\\Rest\\Teste\\Controller' => [
                0 => 'application/vnd.teste.v1+json',
                1 => 'application/json',
            ],
            'teste\\V1\\Rest\\Incluir\\Controller' => [
                0 => 'application/vnd.teste.v1+json',
                1 => 'application/json',
            ],
            'teste\\V1\\Rest\\Aaaaa\\Controller' => [
                0 => 'application/vnd.teste.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \teste\V1\Rest\Teste\TesteEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'teste.rest.teste',
                'route_identifier_name' => 'teste_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \teste\V1\Rest\Teste\TesteCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'teste.rest.teste',
                'route_identifier_name' => 'teste_id',
                'is_collection' => true,
            ],
            \teste\V1\Rest\Incluir\IncluirEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'teste.rest.incluir',
                'route_identifier_name' => 'incluir_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \teste\V1\Rest\Incluir\IncluirCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'teste.rest.incluir',
                'route_identifier_name' => 'incluir_id',
                'is_collection' => true,
            ],
            \teste\V1\Rest\Aaaaa\AaaaaEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'teste.rest.aaaaa',
                'route_identifier_name' => 'aaaaa_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \teste\V1\Rest\Aaaaa\AaaaaCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'teste.rest.aaaaa',
                'route_identifier_name' => 'aaaaa_id',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools-content-validation' => [
        'teste\\V1\\Rest\\Incluir\\Controller' => [
            'input_filter' => 'teste\\V1\\Rest\\Incluir\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'teste\\V1\\Rest\\Incluir\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'nome',
                'description' => 'desc',
                'field_type' => 'string',
                'allow_empty' => true,
                'error_message' => 'erro',
            ],
        ],
    ],
];
