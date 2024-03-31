<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Cambodia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Cambodia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'KH';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '855';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '2' => 'Baat Dambang', '1' => 'Banteay Mean Chey', '3' => 'Kampong Chaam',
            '4' => 'Kampong Chhnang', '5' => 'Kampong Spueu', '6' => 'Kampong Thum',
            '7' => 'Kampot', '8' => 'Kandaal', '9' => 'Kaoh Kong', '10' => 'Kracheh',
            '23' => 'Krong Kaeb', '24' => 'Krong Pailin', '18' => 'Krong Preah Sihanouk',
            '11' => 'Mondol Kiri', '22' => 'Otdar Mean Chey', '12' => 'Phnom Penh',
            '15' => 'Pousaat', '13' => 'Preah Vihear', '14' => 'Prey Veaeng',
            '16' => 'Rotanak Kiri', '17' => 'Siem Reab', '19' => 'Stueng Traeng',
            '20' => 'Svaay Rieng', '21' => 'Taakaev',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'km',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'km';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'AS';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'KHR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Phnom Penh';
    }
}
