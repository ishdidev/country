<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Algeria implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Algeria';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'DZ';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '213';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '01' => 'Adrar', '16' => 'Alger', '23' => 'Annaba',
            '44' => 'Aïn Defla', '46' => 'Aïn Témouchent',
            '05' => 'Batna', '07' => 'Biskra', '09' => 'Blida',
            '34' => 'Bordj Bou Arréridj', '10' => 'Bouira',
            '35' => 'Boumerdès', '08' => 'Béchar', '06' => 'Béjaïa',
            '02' => 'Chlef', '25' => 'Constantine', '17' => 'Djelfa',
            '32' => 'El Bayadh', '39' => 'El Oued', '36' => 'El Tarf',
            '47' => 'Ghardaïa', '24' => 'Guelma', '33' => 'Illizi',
            '18' => 'Jijel', '40' => 'Khenchela', '03' => 'Laghouat',
            '29' => 'Mascara', '43' => 'Mila', '27' => 'Mostaganem',
            '28' => 'Msila', '26' => 'Médéa', '45' => 'Naama',
            '31' => 'Oran', '30' => 'Ouargla', '04' => 'Oum el Bouaghi',
            '48' => 'Relizane', '20' => 'Saïda', '22' => 'Sidi Bel Abbès',
            '21' => 'Skikda', '41' => 'Souk Ahras', '19' => 'Sétif',
            '11' => 'Tamanghasset', '14' => 'Tiaret', '37' => 'Tindouf',
            '42' => 'Tipaza', '38' => 'Tissemsilt', '15' => 'Tizi Ouzou',
            '13' => 'Tlemcen', '12' => 'Tébessa',
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
        return 'AF';
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode(): string
    {
        return 'DZD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Algiers';
    }
}
