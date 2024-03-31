<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Iran implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Iran';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'IR';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '98';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '32' => 'Alborz', '03' => 'Ardabīl', '06' => 'Būshehr',
            '08' => 'Chahār Maḩāll va Bakhtīārī', '04' => 'Eşfahān',
            '14' => 'Fārs', '27' => 'Golestān', '19' => 'Gīlān',
            '24' => 'Hamadān', '23' => 'Hormozgān', '15' => 'Kermān',
            '17' => 'Kermānshāh', '29' => 'Khorāsān-e Janūbī',
            '30' => 'Khorāsān-e Razavī', '31' => 'Khorāsān-e Shemālī',
            '10' => 'Khūzestān', '18' => 'Kohgīlūyeh va Būyer Aḩmad',
            '16' => 'Kordestān', '20' => 'Lorestān', '22' => 'Markazī',
            '21' => 'Māzandarān', '28' => 'Qazvīn', '26' => 'Qom',
            '12' => 'Semnān', '13' => 'Sīstān va Balūchestān', '07' => 'Tehrān',
            '25' => 'Yazd', '11' => 'Zanjān', '02' => 'Āz̄arbāyjān-e Gharbī',
            '01' => 'Āz̄arbāyjān-e Sharqī', '05' => 'Īlām',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'fa',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'fa';
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
        return 'IRR';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Tehran';
    }
}
