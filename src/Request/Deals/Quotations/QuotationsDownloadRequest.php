<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Request\Deals\Quotations;

use QR\TeamleaderApiClient\Request\MultipleMethodsTrait;
use QR\TeamleaderApiClient\Request\PostRequest;

/**
 * Class QuotationsDownloadRequest.
 */
class QuotationsDownloadRequest extends PostRequest
{
    use MultipleMethodsTrait;

    /**
     * QuotationsDownloadRequest constructor.
     *
     * @param string $id
     * @param string $format
     */
    public function __construct($id, $format)
    {
        $this->body['id'] = $id;
        $this->body['format'] = $format;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndpoint(): string
    {
        return 'quotations.download';
    }
}
