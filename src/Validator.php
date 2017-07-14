<?php

namespace KubaWerlos\HtmlValidator;

use RuntimeException;

class Validator
{
    /**
     * @param string $html
     *
     * @throws RuntimeException
     *
     * @return string
     */
    public static function validate($html)
    {
        $curlHandler = curl_init('https://validator.nu/?out=gnu');

        curl_setopt($curlHandler, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curlHandler, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curlHandler, CURLOPT_POSTFIELDS, $html);
        curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandler, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        curl_setopt($curlHandler, CURLOPT_HTTPHEADER, [
            'Content-type: text/html; charset=utf-8',
            'Content-Length: ' . mb_strlen($html),
        ]);

        $result = curl_exec($curlHandler);

        if (curl_getinfo($curlHandler, CURLINFO_HTTP_CODE) !== 200) {
            throw new RuntimeException('Curl error (are you connected to Internet?): ' . curl_error($curlHandler));
        }

        return $result;
    }
}
