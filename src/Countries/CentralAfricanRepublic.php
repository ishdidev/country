<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class CentralAfricanRepublic implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Central African Republic';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'CF';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '236';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BB' => 'Bamingui-Bangoran', 'BGF' => 'Bangui', 'BK' => 'Basse-Kotto',
            'KB' => 'Gribingui', 'HM' => 'Haut-Mbomou', 'HK' => 'Haute-Kotto',
            'HS' => 'Haute-Sangha / Mambéré-Kadéï', 'KG' => 'Kémo-Gribingui',
            'LB' => 'Lobaye', 'MB' => 'Mbomou', 'NM' => 'Nana-Mambéré',
            'MP' => 'Ombella-Mpoko', 'UK' => 'Ouaka', 'AC' => 'Ouham',
            'OP' => 'Ouham-Pendé', 'SE' => 'Sangha', 'VK' => 'Vakaga',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fr', 'sg',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'fr';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'AF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'XAF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Bangui';
    }
}
