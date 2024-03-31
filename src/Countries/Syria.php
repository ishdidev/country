<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Syria implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Syria';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'SY';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '963';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'LA' => 'Al Lādhiqīyah', 'QU' => 'Al Qunayţirah', 'HA' => 'Al Ḩasakah',
            'RA' => 'Ar Raqqah', 'SU' => 'As Suwaydā ', 'DR' => 'Darٰā',
            'DY' => 'Dayr az Zawr', 'DI' => 'Dimashq', 'ID' => 'Idlib',
            'RD' => 'Rīf Dimashq', 'TA' => 'Ţarţūs', 'HL' => 'Ḩalab',
            'HM' => 'Ḩamāh', 'HI' => 'Ḩimş',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ar',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ar';
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
        return 'SYP';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Damascus';
    }
}
