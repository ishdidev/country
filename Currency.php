<?php

declare(strict_types=1);
/**
 * @author Ishadi Software Solutions <dev@ishdi.com>
 *
 * @version 1.0
 */

namespace ishdidev\country;

class Currency
{
    /**
     * @return array<string, string>
     */
    public function list(): array
    {
        return [
            'USD' => '$', 'CAD' => 'CA$', 'EUR' => '€', 'AED' => 'AED',
            'AFN' => 'Af', 'ALL' => 'ALL', 'AMD' => 'AMD', 'ARS' => 'AR$',
            'AUD' => 'AU$', 'AZN' => 'man.', 'BAM' => 'KM', 'BDT' => 'Tk',
            'BGN' => 'BGN', 'BHD' => 'BD', 'BIF' => 'FBu', 'BND' => 'BN$',
            'BOB' => 'Bs', 'BRL' => 'R$', 'BWP' => 'BWP', 'BYN' => 'Br',
            'BZD' => 'BZ$', 'CDF' => 'CDF', 'CHF' => 'CHF', 'CLP' => 'CL$',
            'CNY' => 'CN¥', 'COP' => 'CO$', 'CRC' => '₡', 'CVE' => 'CV$',
            'CZK' => 'Kč', 'DJF' => 'Fdj', 'DKK' => 'Dkr', 'DOP' => 'RD$',
            'DZD' => 'DA', 'EEK' => 'Ekr', 'EGP' => 'EGP', 'ERN' => 'Nfk',
            'ETB' => 'Br', 'GBP' => '£', 'GEL' => 'GEL', 'GHS' => 'GH₵',
            'GNF' => 'FG', 'GTQ' => 'GTQ', 'HKD' => 'HK$', 'HNL' => 'HNL',
            'HRK' => 'kn', 'HUF' => 'Ft', 'IDR' => 'Rp', 'ILS' => '₪',
            'INR' => 'Rs', 'IQD' => 'IQD', 'IRR' => 'IRR', 'ISK' => 'Ikr',
            'JMD' => 'J$', 'JOD' => 'JD', 'JPY' => '¥', 'KES' => 'Ksh',
            'KHR' => 'KHR', 'KMF' => 'CF', 'KRW' => '₩', 'KWD' => 'KD',
            'KZT' => 'KZT', 'LBP' => 'L.L.', 'LKR' => 'SLRs', 'LTL' => 'Lt',
            'LVL' => 'Ls', 'LYD' => 'LD', 'MAD' => 'MAD', 'MDL' => 'MDL',
            'MGA' => 'MGA', 'MKD' => 'MKD', 'MMK' => 'MMK', 'MOP' => 'MOP$',
            'MUR' => 'MURs', 'MXN' => 'MX$', 'MYR' => 'RM', 'MZN' => 'MTn',
            'NAD' => 'N$', 'NGN' => '₦', 'NIO' => 'C$', 'NOK' => 'Nkr',
            'NPR' => 'NPRs', 'NZD' => 'NZ$', 'OMR' => 'OMR', 'PAB' => 'B/.',
            'PEN' => 'S/.', 'PHP' => '₱', 'PKR' => 'PKRs', 'PLN' => 'zł',
            'PYG' => '₲', 'QAR' => 'QR', 'RON' => 'RON', 'RSD' => 'din.',
            'RUB' => 'RUB', 'RWF' => 'RWF', 'SAR' => 'SR', 'SDG' => 'SDG',
            'SEK' => 'Skr', 'SGD' => 'S$', 'SOS' => 'Ssh', 'SYP' => 'SY£',
            'THB' => '฿', 'TND' => 'DT', 'TOP' => 'T$', 'TRY' => 'TL',
            'TTD' => 'TT$', 'TWD' => 'NT$', 'TZS' => 'TSh', 'UAH' => '₴',
            'UGX' => 'USh', 'UYU' => '$U', 'UZS' => 'UZS', 'VEF' => 'Bs.F.',
            'VND' => '₫', 'XAF' => 'FCFA', 'XOF' => 'CFA', 'YER' => 'YR',
            'ZAR' => 'R', 'ZMK' => 'ZK', 'ZWL' => 'ZWL$'];
    }

    public function getSymbol(string $currencyCode): ?string
    {
        $currencies = $this->list();

        return $currencies[$currencyCode] ?? null;
    }
}
