<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\User;

use QR\TeamleaderApiClient\Model\Aggregate\Account;
use QR\TeamleaderApiClient\Model\Aggregate\Telephone;
use QR\TeamleaderApiClient\Model\ModelBase;

/**
 * Class UserBase.
 */
abstract class UserBase extends ModelBase
{
    private ?\QR\TeamleaderApiClient\Model\Aggregate\Account $account = null;

    private ?string $firstName = null;

    private ?string $lastName = null;

    private ?string $language = null;

    private ?string $email = null;

    private ?string $function = null;

    /**
     * @var Telephone[]
     */
    private ?array $telephones = null;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getFunction()
    {
        return $this->function;
    }

    public function setFunction(string $function): void
    {
        $this->function = $function;
    }

    /**
     * @return Account
     */
    public function getAccount()
    {
        return $this->account;
    }

    public function setAccount(Account $account): void
    {
        $this->account = $account;
    }

    /**
     * @return Telephone[]
     */
    public function getTelephones()
    {
        return $this->telephones;
    }

    /**
     * @param Telephone[] $telephones
     */
    public function setTelephones(array $telephones): void
    {
        $this->telephones = $telephones;
    }
}
