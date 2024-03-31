<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace Ishdidev\Country\Countries;

use Ishdidev\Country\CountryInterface;

class Vietnam implements CountryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'Vietnam';
    }

    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return 'VN';
    }

    /**
     * {@inheritdoc}
     */
    public function getPhoneCode(): string
    {
        return '84';
    }

    /**
     * {@inheritdoc}
     */
    public function getStates(): array
    {
        return [
            '44' => 'An Giang', '43' => 'Bà Rịa–Vũng Tàu', '57' => 'Bình Dương',
            '58' => 'Bình Phước', '40' => 'Bình Thuận', '31' => 'Bình Định',
            '55' => 'Bạc Liêu', '54' => 'Bắc Giang', '53' => 'Bắc Kạn',
            '56' => 'Bắc Ninh', '50' => 'Bến Tre', '04' => 'Cao Bằng',
            '59' => 'Cà Mau', 'CT' => 'Cần Thơ', '30' => 'Gia Lai',
            '03' => 'Hà Giang', '63' => 'Hà Nam', 'HN' => 'Hà Nội',
            '15' => 'Hà Tây', '23' => 'Hà Tĩnh', '14' => 'Hòa Bình',
            '66' => 'Hưng Yên', '61' => 'Hải Dương', 'HP' => 'Hải Phòng',
            '73' => 'Hậu Giang', 'SG' => 'Hồ Chí Minh', '34' => 'Khánh Hòa',
            '47' => 'Kiên Giang', '28' => 'Kon Tum', '01' => 'Lai Châu',
            '41' => 'Long An', '02' => 'Lào Cai', '35' => 'Lâm Đồng',
            '09' => 'Lạng Sơn', '67' => 'Nam Định', '22' => 'Nghệ An',
            '18' => 'Ninh Bình', '36' => 'Ninh Thuận', '68' => 'Phú Thọ',
            '32' => 'Phú Yên', '24' => 'Quảng Bình', '27' => 'Quảng Nam',
            '29' => 'Quảng Ngãi', '13' => 'Quảng Ninh', '25' => 'Quảng Trị',
            '52' => 'Sóc Trăng', '05' => 'Sơn La', '21' => 'Thanh Hóa',
            '20' => 'Thái Bình', '69' => 'Thái Nguyên', '26' => 'Thừa Thiên–Huế',
            '46' => 'Tiền Giang', '51' => 'Trà Vinh', '07' => 'Tuyên Quang',
            '37' => 'Tây Ninh', '49' => 'Vĩnh Long', '70' => 'Vĩnh Phúc',
            '06' => 'Yên Bái', '71' => 'Điện Biên', 'DN' => 'Đà Nẵng',
            '33' => 'Đắk Lắk', '72' => 'Đắk Nông', '39' => 'Đồng Nai',
            '45' => 'Đồng Tháp',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getLanguages(): array
    {
        return [
            'vi',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getMainLanguage(): string
    {
        return 'vi';
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
        return 'VND';
    }

    /**
     * {@inheritdoc}
     */
    public function getCapital(): string
    {
        return 'Hanoi';
    }
}
