<?php

declare(strict_types=1);

namespace QR\TeamleaderApiClient\Model\Aggregate;

/**
 * Class Address.
 */
class Address
{
    private ?string $line1 = null;

    private ?string $postalCode = null;

    private ?string $city = null;

    private ?string $country = null;

    public function getLine1(): string
    {
        return $this->line1;
    }

    public function setLine1(string $line1): void
    {
        $this->line1 = $line1;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

//    /**
//     * @return string
//     */
//    public function getAddressee()
//    {
//        return $this->addressee;
//    }

//    /**
//     * @param string $addressee
//     */
//    public function setAddressee($addressee)
//    {
//        $this->addressee = $addressee;
//    }
}
