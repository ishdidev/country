<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class IvoryCoast implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Ivory Coast';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'CI';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '225';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '06' => '18 Montagnes', '16' => 'Agnébi', '17' => 'Bafing',
            '09' => 'Bas-Sassandra', '10' => 'Denguélé', '18' => 'Fromager',
            '02' => 'Haut-Sassandra', '07' => 'Lacs', '01' => 'Lagunes',
            '12' => 'Marahoué', '19' => 'Moyen-Cavally', '05' => 'Moyen-Comoé',
            '11' => 'Nzi-Comoé', '03' => 'Savanes', '15' => 'Sud-Bandama',
            '13' => 'Sud-Comoé', '04' => 'Vallée du Bandama', '14' => 'Worodougou',
            '08' => 'Zanzan',
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
        return 'Yamoussoukro';
    }
}
