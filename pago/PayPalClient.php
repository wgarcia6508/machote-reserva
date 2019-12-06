<?php

namespace Pago;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;

ini_set('error_reporting', E_ALL); // or error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

class PayPalClient
{
    /**
     * Returns PayPal HTTP client instance with environment that has access
     * credentials context. Use this instance to invoke PayPal APIs, provided the
     * credentials have access.
     */
    public static function client()
    {
        return new PayPalHttpClient(self::environment());
    }

    /**
     * Set up and return PayPal PHP SDK environment with PayPal access credentials.
     * This sample uses SandboxEnvironment. In production, use LiveEnvironment.
     */
    public static function environment()
    {
        $clientId = "AUuoa91PgH-uy2KZ_l-cEcFY6Z7c42o5tV9nYysI_iwtzyHVQEvGY6FmfDKZR4XSfPZvPmRSNCXGPd8R";
        $clientSecret = "ECOmToyWqOgCMTvlVddf7dTQNe8rsP_NpJNjzbsjk8rguVW_cnBaqeuU5G3-IHusQCT0-r9f5OV9uvGr";
        return new SandboxEnvironment($clientId, $clientSecret);
    }
}