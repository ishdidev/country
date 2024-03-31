<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Morocco implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Morocco';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'MA';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '212';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '09' => 'Chaouia-Ouardigha', '10' => 'Doukhala-Abda', '05' => 'Fès-Boulemane',
            '02' => 'Gharb-Chrarda-Beni Hssen', '08' => 'Grand Casablanca', '14' => 'Guelmim-Es Smara',
            '04' => 'L Oriental', '15' => 'Laâyoune-Boujdour-Sakia el Hamra', '11' => 'Marrakech-Tensift-Al Haouz',
            '06' => 'Meknès-Tafilalet', '16' => 'Oued ed Dahab-Lagouira', '07' => 'Rabat-Salé-Zemmour-Zaer',
            '13' => 'Souss-Massa-Drâa', '12' => 'Tadla-Azilal', '01' => 'Tanger-Tétouan',
            '03' => 'Taza-Al Hoceima-Taounate',
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
        return 'MAD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Rabat';
    }
}
