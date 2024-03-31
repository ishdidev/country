<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Zimbabwe implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Zimbabwe';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'ZW';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '263';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BU' => 'Bulawayo', 'HA' => 'Harare', 'MA' => 'Manicaland',
            'MC' => 'Mashonaland Central', 'ME' => 'Mashonaland East',
            'MW' => 'Mashonaland West', 'MV' => 'Masvingo', 'MN' => 'Matabeleland North',
            'MS' => 'Matabeleland South', 'MI' => 'Midlands',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'en', 'sn', 'nd',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'en';
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
        return 'USD,ZAR,BWP,GBP,AUD,CNY,INR,JPY';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Harare';
    }
}
