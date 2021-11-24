<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Serializer\FieldDescription\Model\User;

use QR\TeamleaderApiClient\Model\User\UserListView;

/**
 * Class UserListViewFieldDescription.
 */
class UserListViewFieldDescription extends UserFieldDescriptionBase
{
    /**
     * {@inheritdoc}
     *
     * @return class-string<\QR\TeamleaderApiClient\Model\User\UserListView>
     */
    public function getTargetClass()
    {
        return UserListView::class;
    }
}
