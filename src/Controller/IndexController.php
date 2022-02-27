<?php
declare(strict_types = 1);

namespace App\Controller;

use App\DTO\Foo;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class IndexController
{
    public function __construct(private SerializerInterface $serializer)
    {
    }

    #[Route(
        path: '/',
        methods: [Request::METHOD_GET],
    )]
    public function __invoke(): JsonResponse
    {
        $json = '{"fooBar": 2}';

        dump($this->serializer->deserialize($json, Foo::class, 'json'));

        return new JsonResponse();
    }
}
