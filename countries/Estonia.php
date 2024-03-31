<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Estonia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Estonia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'EE';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '372';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '37' => 'Harjumaa', '39' => 'Hiiumaa', '44' => 'Ida-Virumaa',
            '51' => 'Järvamaa', '49' => 'Jõgevamaa', '59' => 'Lääne-Virumaa',
            '57' => 'Läänemaa', '67' => 'Pärnumaa', '65' => 'Põlvamaa',
            '70' => 'Raplamaa', '74' => 'Saaremaa', '78' => 'Tartumaa',
            '82' => 'Valgamaa', '84' => 'Viljandimaa', '86' => 'Võrumaa',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'et',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'et';
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
        return 'EUR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Tallinn';
    }
}
