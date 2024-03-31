<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class DominicanRepublic implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Dominican Republic';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'DO';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '1809,1829,1849';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '33' => 'Cibao Nordeste', '34' => 'Cibao Noroeste', '35' => 'Cibao Norte',
            '36' => 'Cibao Sur', '37' => 'El Valle', '38' => 'Enriquillo',
            '39' => 'Higuamo', '40' => 'Ozama', '41' => 'Valdesia',
            '42' => 'Yuma',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'es',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'es';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'NA';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'DOP';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Santo Domingo';
    }
}
