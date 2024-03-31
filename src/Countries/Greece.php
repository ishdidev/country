<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Greece implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Greece';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'GR';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '30';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'A' => 'Anatoliki Makedonia kai Thraki', 'I' => 'Attiki',
            'G' => 'Dytiki Ellada', 'C' => 'Dytiki Makedonia', 'F' => 'Ionia Nisia',
            'D' => 'Ipeiros', 'B' => 'Kentriki Makedonia', 'M' => 'Kriti',
            'L' => 'Notio Aigaio', 'J' => 'Peloponnisos', 'H' => 'Sterea Ellada',
            'E' => 'Thessalia', 'K' => 'Voreio Aigaio',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'el',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'el';
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
        return 'Athens';
    }
}
