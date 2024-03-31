<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country\countries;

use ishdidev\country\CountryInterface;

class China implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'China';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'CN';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '86';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '45' => 'Guangxi', '15' => 'Nei Mongol', '64' => 'Ningxia', '65' => 'Xinjiang',
            '54' => 'Xizang', '11' => 'Beijing', '50' => 'Chongqing', '31' => 'Shanghai',
            '12' => 'Tianjin', '34' => 'Anhui', '35' => 'Fujian', '62' => 'Gansu',
            '44' => 'Guangdong', '52' => 'Guizhou', '46' => 'Hainan', '13' => 'Hebei',
            '23' => 'Heilongjiang', '41' => 'Henan', '42' => 'Hubei', '43' => 'Hunan',
            '32' => 'Jiangsu', '36' => 'Jiangxi', '22' => 'Jilin', '21' => 'Liaoning',
            '63' => 'Qinghai', '61' => 'Shaanxi', '37' => 'Shandong', '14' => 'Shanxi',
            '51' => 'Sichuan', '71' => 'Taiwan', '53' => 'Yunnan', '33' => 'Zhejiang',
            '91' => 'Hong Kong', '92' => 'Macao', '' => 'Hong Kong Island', 'KOWLOON' => 'Kowloon',
            'NEW TERRITORIES' => 'New Territories',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'zh',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'zh';
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
        return 'CNY';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Beijing';
    }
}
