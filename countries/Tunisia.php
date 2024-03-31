<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Tunisia implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Tunisia';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'TN';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '216';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '12' => 'Ariana', '13' => 'Ben Arous', '23' => 'Bizerte',
            '31' => 'Béja', '81' => 'Gabès', '71' => 'Gafsa',
            '32' => 'Jendouba', '41' => 'Kairouan', '42' => 'Kasserine',
            '73' => 'Kebili', '14' => 'La Manouba', '33' => 'Le Kef',
            '53' => 'Mahdia', '82' => 'Medenine', '52' => 'Monastir',
            '21' => 'Nabeul', '61' => 'Sfax', '43' => 'Sidi Bouzid',
            '34' => 'Siliana', '51' => 'Sousse', '83' => 'Tataouine',
            '72' => 'Tozeur', '11' => 'Tunis', '22' => 'Zaghouan',
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
        return 'TND';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Tunis';
    }
}
