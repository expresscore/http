<?php
/**
 * This file is part of the ExpressCore package.
 *
 * (c) Marcin Stodulski <marcin.stodulski@devsprint.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace expresscore\http;

class HttpHeader {

    protected string $headerName = '';
    protected string $headerValue = '';

    public function __construct($headerName = '', $headerValue = '')
    {
        $this->headerName = $headerName;
        $this->headerValue = $headerValue;
    }

    public function getHeaderName() : string
    {
        return $this->headerName;
    }

    public function getHeaderValue() : string
    {
        return $this->headerValue;
    }
}
