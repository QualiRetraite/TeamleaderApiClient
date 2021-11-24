<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Webhook;

/**
 * Class WebhookBase.
 */
abstract class WebhookBase
{
    /**
     * WebhookBase constructor.
     *
     * @param string|null $url
     */
    public function __construct(private $url = null, private array $types = null)
    {
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return string[]
     */
    public function getTypes(): array
    {
        return $this->types;
    }

    /**
     * @param string[] $types
     */
    public function setTypes(array $types): void
    {
        $this->types = $types;
    }
}
