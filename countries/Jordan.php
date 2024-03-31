<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class Jordan implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Jordan';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'JO';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '962';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            'BA' => 'Al Balqā ', 'AQ' => 'Al ʽAqabah', 'AZ' => 'Az Zarqā ',
            'AT' => 'Aţ Ţafīlah', 'IR' => 'Irbid', 'JA' => 'Jerash',
            'KA' => 'Karak', 'MN' => 'Ma ān', 'MA' => 'Mafraq',
            'MD' => 'Mādabā', 'AJ' => 'ʽAjlūn', 'AM' => '‘Ammān',
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
        return 'JOD';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Amman';
    }
}
