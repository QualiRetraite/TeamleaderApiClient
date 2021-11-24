<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model;

/**
 * Class RelationBase.
 */
abstract class RelationBase extends ModelBase
{
    /**
     * RelationBase constructor.
     */
    public function __construct(private ?string $type = null, string $id = null)
    {
        $this->setId($id);
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }
}
