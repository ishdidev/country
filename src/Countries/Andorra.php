<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Andorra implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Andorra';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'AD';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '376';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '07' => 'Andorra la Vella', '02' => 'Canillo', '03' => 'Encamp',
            '08' => 'Escaldes-Engordany', '04' => 'La Massana', '05' => 'Ordino',
            '06' => 'Sant Julià de Lòria',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ca',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ca';
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
        return 'Andorra la Vella';
    }
}
