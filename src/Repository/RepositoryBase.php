<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Repository;

use QR\TeamleaderApiClient\Http\ApiClient\ApiClientInterface;
use QR\TeamleaderApiClient\Request\RequestInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class RepositoryBase.
 */
abstract class RepositoryBase
{
    /**
     * RepositoryBase constructor.
     *
     * @param SerializerInterface&NormalizerInterface $serializer
     */
    public function __construct(protected ApiClientInterface $apiClient, protected SerializerInterface $serializer)
    {
    }

    /**
     * @param $data
     * @param $type
     *
     * @return mixed
     */
    protected function deserialize($data, $type)
    {
        return $this->serializer->deserialize($data, $type, 'json');
    }

    /**
     * @param $data
     */
    protected function normalize($data, array $context = []): array|string
    {
        return $this->serializer->normalize($data, 'json', $context);
    }

    /**
     * @param $responseClass
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    protected function handleRequest(RequestInterface $request, $responseClass)
    {
        $response = $this->apiClient->handle($request);
        $responseBody = $response->getBody()->getContents();

        return $this->deserialize($responseBody, $responseClass);
    }
}
