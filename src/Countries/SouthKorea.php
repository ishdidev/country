<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class SouthKorea implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'South Korea';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'KR';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '82';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '26' => 'Busan-gwangyeoksi', '43' => 'Chungcheongbuk-do', '44' => 'Chungcheongnam-do',
            '27' => 'Daegu-gwangyeoksi', '30' => 'Daejeon-gwangyeoksi', '42' => 'Gangwon-do',
            '29' => 'Gwangju-gwangyeoksi', '41' => 'Gyeonggi-do', '47' => 'Gyeongsangbuk-do',
            '48' => 'Gyeongsangnam-do', '28' => 'Incheon-gwangyeoksi', '49' => 'Jeju-teukbyeoljachido',
            '45' => 'Jeollabuk-do', '46' => 'Jeollanam-do', '50' => 'Sejong', '11' => 'Seoul-teukbyeolsi',
            '31' => 'Ulsan-gwangyeoksi',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'ko',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'ko';
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
        return 'KRW';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Seoul';
    }
}
