<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Malta implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Malta';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'MT';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '356';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '01' => 'Attard', '02' => 'Balzan', '03' => 'Birgu',
            '04' => 'Birkirkara', '05' => 'Birżebbuġa', '06' => 'Bormla',
            '07' => 'Dingli', '08' => 'Fgura', '09' => 'Floriana', '10' => 'Fontana',
            '11' => 'Gudja', '13' => 'Għajnsielem', '14' => 'Għarb',
            '15' => 'Għargħur', '16' => 'Għasri', '17' => 'Għaxaq',
            '12' => 'Gżira', '19' => 'Iklin', '20' => 'Isla',
            '21' => 'Kalkara', '22' => 'Kerċem', '23' => 'Kirkop',
            '24' => 'Lija', '25' => 'Luqa', '26' => 'Marsa',
            '27' => 'Marsaskala', '28' => 'Marsaxlokk', '29' => 'Mdina',
            '30' => 'Mellieħa', '32' => 'Mosta', '33' => 'Mqabba',
            '34' => 'Msida', '35' => 'Mtarfa', '36' => 'Munxar',
            '31' => 'Mġarr', '37' => 'Nadur', '38' => 'Naxxar',
            '39' => 'Paola', '40' => 'Pembroke', '41' => 'Pietà',
            '42' => 'Qala', '43' => 'Qormi', '44' => 'Qrendi',
            '45' => 'Rabat Għawdex', '46' => 'Rabat Malta',
            '47' => 'Safi', '50' => 'San Lawrenz', '51' => 'San Pawl il-Baħar',
            '48' => 'San Ġiljan', '49' => 'San Ġwann', '52' => 'Sannat',
            '53' => 'Santa Luċija', '54' => 'Santa Venera', '55' => 'Siġġiewi',
            '56' => 'Sliema', '57' => 'Swieqi', '58' => 'Ta  Xbiex',
            '59' => 'Tarxien', '60' => 'Valletta', '61' => 'Xagħra',
            '62' => 'Xewkija', '63' => 'Xgħajra', '18' => 'Ħamrun',
            '64' => 'Żabbar', '65' => 'Żebbuġ Għawdex', '66' => 'Żebbuġ Malta',
            '67' => 'Żejtun', '68' => 'Żurrieq',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'mt', 'en',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'mt';
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
        return 'Valletta';
    }
}
