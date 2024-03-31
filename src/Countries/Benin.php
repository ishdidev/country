<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Benin implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Benin';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'BJ';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '229';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'AL' => 'Alibori', 'AK' => 'Atakora', 'AQ' => 'Atlantique',
            'BO' => 'Borgou', 'CO' => 'Collines', 'DO' => 'Donga',
            'KO' => 'Kouffo', 'LI' => 'Littoral', 'MO' => 'Mono',
            'OU' => 'Ouémé', 'PL' => 'Plateau', 'ZO' => 'Zou',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fr',
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
        return 'XOF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Porto-Novo';
    }
}
