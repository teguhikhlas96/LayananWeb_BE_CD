<?php

return [

    /*
    |--------------------------------------------------------------------------
    | JWT Authentication Secret
    |--------------------------------------------------------------------------
    |
    | Don't forget to set this value in your .env file. It should be a
    | random, 32-character string. You can use the `php artisan jwt:secret`
    | command to generate a new secret key.
    |
    */

    'secret' => env('JWT_SECRET'),

    /*
    |--------------------------------------------------------------------------
    | JWT Token Lifetime
    |--------------------------------------------------------------------------
    |
    | This value determines the lifetime of the JWT token in minutes. You can
    | adjust this value according to your needs. For example, to increase
    | the token lifetime to 1 hour, you can set this to 60.
    |
    */

    'ttl' => env('JWT_TTL', 60),

    /*
    |--------------------------------------------------------------------------
    | JWT Token Refresh Lifetime
    |--------------------------------------------------------------------------
    |
    | This value determines the lifetime of the JWT token refresh token in
    | minutes. You can adjust this value according to your needs. For example,
    | to increase the refresh token lifetime to 7 days, you can set this to 10080.
    |
    */

    'refresh_ttl' => env('JWT_REFRESH_TTL', 20160),

    /*
    |--------------------------------------------------------------------------
    | JWT Algorithm
    |--------------------------------------------------------------------------
    |
    | This value determines the algorithm used to sign the JWT token. You can
    | set this to any of the algorithms supported by the firebase/php-jwt
    | library. You can choose from 'HS256', 'HS384', 'HS512', 'RS256',
    | 'RS384', 'RS512', 'ES256', 'ES384', and 'ES512'.
    |
    */

    'algo' => env('JWT_ALGO', 'HS256'),

    /*
    |--------------------------------------------------------------------------
    | JWT Required Claims
    |--------------------------------------------------------------------------
    |
    | This array contains the required claims that must be present in the JWT
    | token payload. If any of these claims is not present in the payload,
    | the token will be considered invalid.
    |
    */

    'required_claims' => [
        'iss',
        'iat',
        'exp',
        'nbf',
        'sub',
        'jti',
    ],

    /*
    |--------------------------------------------------------------------------
    | JWT Blacklist Enabled
    |--------------------------------------------------------------------------
    |
    | This value determines whether JWT token blacklisting is enabled. When
    | blacklisting is enabled, the token will be invalidated if it is added
    | to the blacklist. You can enable or disable this feature as needed.
    |
    */

    'blacklist_enabled' => env('JWT_BLACKLIST_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | JWT Blacklist Grace Period
    |--------------------------------------------------------------------------
    |
    | When a JWT token is blacklisted, it will be invalidated immediately.
    | However, there may be a small grace period before the token is
    | actually removed from the blacklist. You can adjust the grace period
    | value here to ensure a smooth user experience.
    |
    */

    'blacklist_grace_period' => env('JWT_BLACKLIST_GRACE_PERIOD', 0),

    /*
    |--------------------------------------------------------------------------
    | JWT Refresh Token Name
    |--------------------------------------------------------------------------
    |
    | This value determines the name of the token used for refreshing the JWT
    | token. You can modify this value according to your needs. For example,
    | you can set this to 'refresh_token' instead of the default 'refresh_token'.
    |
    */

    'refresh_token_name' => 'refresh_token',

    /*
    |--------------------------------------------------------------------------
    | JWT Cookie Settings
    |--------------------------------------------------------------------------
    |
    | These values determine the settings for JWT cookies. By default, the
    | 'secure' option is set to true, meaning the cookie will only be sent
    | over HTTPS. If your application doesn't use HTTPS, you should set
    | the 'secure' option to false.
    |
    */

    'cookie' => [
        'domain' => env('JWT_COOKIE_DOMAIN', null),
        'path' => '/',
        'secure' => env('JWT_COOKIE_SECURE', true),
        'httponly' => true,
        'samesite' => null,
    ],

];
