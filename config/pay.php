<?php

return [
    'alipay' => [
        'app_id'         => '2016092800612074',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEApIoAlZHDYV4APgUKOqEkg9SRun3xvGUZcLBHH7dQUxLVgUiln7lkTOqmWHslHo1uRDnIhWXSU0vtvezzfG43Cnt2yc7Y5UhVztDmDml4GjqNASDhvoQzWIzg84RwoLt6LrBAg2Hyre+pzdnVmPC/GKRFNUEP87tnWkV0PR8/JV3xSy5tV8/mDLlI1WLhBHS9pLGFzu3hH6uoRWeMgpoSbb0ZcUgPt8wYtU9ESHSiiJKD1uNrdLR9Ck2LdENOL5sf8zdhIvCxHWihqldyclYJ4sTt9W/W07ktE7ScgWsXdxCZPtjNaaKUA77MfGe8lnI/5j+li4WsC44AbW0i4JntewIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEA1qJV4IFPUiQuXhH97GzEBhB/qt51K5w5wxynURtja83Mem5H+1Bq7Opg1EzAXQcuWVa0oePq8VYD+R6rVPHwDHKML67IZIm4zu/GYIxh+3NcyaqMcnO3/pk4KJROs4WfO8/4WGZCbyhfiZuKdR8iEmxVg/JpEqfI2UXUGhZBKK7bPPTmYv0/dWv6BT/AjKzx3QnISgA/1x3pytazxM1qr0n2/WjeN4Rt0wRldtQCux1s6kwgrLQKI0le0CsxAu5+lcPrrkCDjSs57jZ1dg+/JqJZSAAXkeNEKGqmC4sfKPzbUDAmCEaBXFCDJyQNwBpAs2jXf1QEDP8qIVNw5pjejQIDAQABAoIBACK3DvzI7XNztqwwbMmYrfvtHzkb0gfDtPQB5m4P5/y/xJroy2uyjhjTr+WmpFZnmu+IPp8QpidyqiHY/A05NIJO5K2xr2fTfri5v3ROQGrTNebIVv8MCG59ib/GfRQ8QI0EDj7+CzC/bvRq2/IlnvUr4Ij+5E/II4xA5xVxFAjoM2lL97iIhUlqwtiddhZwL+1ZYDhT6JVrn+zp9fxdNboMxctPPuV6iCu9iQBjolPJsC4v10bzO5BH3sTPZITQ3cPm2Ytfwrnjiu67DfChSbqxHPaNfuOXhR/wem4L0JJxdHVbqONqa3XTLC0EQusdEyfs8vlyxBrBBPO67IHdNQECgYEA7C95E0i6XMPFyvcbfNAw6+E76SnxRmpHY8f9NWmVbWpoL3JlJK6jqkQ4TSfeij3c7NLbvFGEstTwFvFDCzVWu7SPz+1P9/zobtN+E3zhH+Zf9dLdy+E8nWPuDURqHz0X50Da/6xDH2JrQRFCCcLp0FhJdrstO79AgzsaGUgzI+UCgYEA6KQB4tY/EvLzwBKT+EqInxBAshEU8RXK/sC6H7meuaoP9be3jDXDpXWK3pbp0Aa3//97FGXAL50YMVh6kR/2XuBRuxif1I5e4p7sPiQXxEAw0KC9T1WwS2S2se4zAFmWWCuJvqEaA+DPw4er60YHU9Vrn/vZjvsfEdJTnN1XdYkCgYEAzRO3dIgc0Xln4AFKS8jWAaqTg7RYfITBsiEvelZQWi4fgrs4mW5OTARqQoxQzgZDMxsvksfRihoc0j7wsOXChr+Uc72iRzjBdaGMAk3XiARX5DIRRfsvz5W6WKjD4JYCkFifD4s6ySCC8n+SsLkenjpap46FCzDYSlpiIfuv9AUCgYEA2fvTSJk3wKmle/Psclpkaabw9+jJlpy0+L/dppxm/dE74yGh+t7l08Ovu6Hss9+XyWe6DALLcdHhOVuOfS1VzNCjxIvuN1yvy+jds9xd6KW9F7+FozDHX92e0lo/r7RCC5vAFb8egUPFaZFWpb2YYBU6I035LOBg3HIXpoQ/zwECgYBoOeO6at9B5fPDp9ScQGo/I7XL5GZMMdyxDGzExPnRIENcomKsawwVb0MwbUOKJhLu6cG7AQVM3OiUc2CYfCbO7tm6yeL9fHLZNVslx0lW6P4l8GENOgbPtpW/E+xOFvpRlmW3VBEcri2rn3yAQN3EAg1lV3fVEfpzI+Sp5i9PZg==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],

    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];