<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Mauritania implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Mauritania';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'MR';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '222';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '07' => 'Adrar', '03' => 'Assaba', '05' => 'Brakna',
            '08' => 'Dakhlet Nouâdhibou', '04' => 'Gorgol',
            '10' => 'Guidimaka', '01' => 'Hodh ech Chargui', '02' => 'Hodh el Gharbi',
            '12' => 'Inchiri', 'NKC' => 'Nouakchott', '09' => 'Tagant',
            '11' => 'Tiris Zemmour', '06' => 'Trarza',
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
        return 'MRU';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Nouakchott';
    }
}
