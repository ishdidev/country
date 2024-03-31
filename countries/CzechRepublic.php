<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class CzechRepublic implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Czech Republic';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'CZ';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '420';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'JM' => 'Jihomoravský kraj', 'JC' => 'Jihočeský kraj', 'KA' => 'Karlovarský kraj',
            'KR' => 'Královéhradecký kraj', 'LI' => 'Liberecký kraj', 'MO' => 'Moravskoslezský kraj',
            'OL' => 'Olomoucký kraj', 'PA' => 'Pardubický kraj', 'PL' => 'Plzeňský kraj',
            'PR' => 'Praha, hlavní město', 'ST' => 'Středočeský kraj', 'VY' => 'Vysočina',
            'ZL' => 'Zlínský kraj', 'US' => 'Ústecký kraj',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'cs', 'sk',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'cs';
    }

    /**
     * {@inheritdoc}
     */
    public function getContinent(): string
    {
        return 'EU';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'CZK';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Prague';
    }
}
