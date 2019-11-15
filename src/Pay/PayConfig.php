<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/10/30
 * Time: 17:22
 */

namespace MeiQuick\Config\Library\Pay;


class PayConfig
{
    // ================================================== 支付宝配置 ==================================================
    public static function alipayConfig()
    {
        return [
            'app_id' => '2018051060083265',
            'notify_url' => env('ALIPAY_NOTIFY_URL', 'http://client.test.meiquick.com/pay/alipay/notify'),
            'return_url' => env('ALIPAY_RETURN_URL', 'http://client.test.meiquick.com'),
            'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAjzGdad/tc+K3p7r2NTXMte7WGiOC2rv/bXiqVGJ9ko79eVu3Khol5J2kad9BTPAAtQpR/5/1Xo9Os0jjshd6zQ6o+Wkcs+snZIJWzrdx3aHeZi6fhg02I5zr6tqj3Y4CA70MW87ESGEuT/I1wL1KWG6AeD+SIwqABXXzW/Semhwj6vXNdi3ixXAocRp5W/HW991X1tAjbknzoolxqvYzSxZXJmt0pOg/HOsVV6ZASjKaH0trNHi0AOADFD40OoHvfAasBf8h/ot4AbZSduePyP8EJNxkFQuNfTWKYY6A3ANjn2W5cem+xkNaLyrJeNuZJcBU40n3RNPberOtaazn9wIDAQAB',
            'private_key' => 'MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQC44yYjZ7s9R+t1KhPqCPS+LtZndVan8cr8rDgDuPcMop9Tlz3Sb+ocfElESCe+EWvwXftZXltFMzz+7vHr7LjIsTZDaf3E0HeA+bliL/GGFp+kBuaNeEPoq4WzLfRRw3C4r1/+jmxCme+z2hRMKXkZOoCXtbG1QcmTq3dzDm55IgbTFkPKclPCsxrjQx166KZxvyyNBO5RiGUQ/TcTB1gpdTEV1ocsi1R4KFH1VnKe0ZKvTNDeKaAjA3eL6gksUrx6SMi9zHoGmkVIJp/+MvP3hbfCff+D3gVHCJFreWkGV7g9tXke6M4MQqvUJ92/bVZMtdsameV+eXpkySU3oTOJAgMBAAECggEATK5BChwipybl/AEIo181io9Icz5SQ3NgGe2ficO0CvSDmhq3FElAUrIlfQFkIkt9dgK0lXsx5YB7wsv9YDkc5nfBJrKWAoPnnIF2Jsf1pwRJD7Gg+3muyJgi6o6brzGc1aw+5wfQ1MqdhP1kv7XPuOvvm3xLCP8RCILsFrcckHYcqKtoVFtWT4gDpIPaP5yMOOdWbpwmVCHaB0lw2CZhhLAubTRXONz2bPxd/IZmF4o9DW3mSnT0t1lflsthK+ZgZmA27nl8+o77xLi3dTw//rimnJE1snwiasZxr9MqvA2iZ5lv+MsNm2lxvMvIpC8Brq3Fe5JwtmHdtjpm7y2+hQKBgQDkqAgLGDmS/NZ9XcFDgQIJSAMwzbdb/Bq094RCXAd7bK0wtFC04IOFTviWYbnsicp9TUgy/M0k05KYWx6baVndjV+lBNHRE1ecWJUApj9QMHPjpz1Z45q2t0z+Ur7KmhhQWWOZFXBjq5F4YFZRhvuVi+uE3jzRKeNLznRV9obm/wKBgQDO/zGWXSO3L67oDaUMz+DLgaY25Ry4IHoSTaLimQmfbspwk/qfrk8mhDnizhYXBYgIrkAkroTKYkRvyfJWFM2P+7N9YPOLetQRDvI5hbVywWJhaGZdbYmMwGrdTRsThN+IPd704Kt8yUN50vLFgzhK+ssu2FUDvxMMq79eAK8tdwKBgDdSMB//DG7znTFXrZqXa9azBZKZMvOeWxfNisJDYcwKzxwphB0+9JMcOCiqHEGOVN9cA0vSvg9a4Ozbntwa8RMZUTqrn9flxhydke9GSastDdzWaZGF77ilQIuHmYGLJrbJ6b7v4PE8YUWuiTPQZK4Z3DGZUz2H1OZSXPMvYhQhAoGBAK3zIpa7mqH8vj1gCg2kO8KJJ0cGboYFNNBg0bse5ElI73J/yKOb9gPmJkcE7OdXzKOO23R3/DufLOfMi4vvW3feC04XxVK3W7MiHkhcpsjS3nwBIdTtkiPoJ2XlwBU9GiQB6nVawIHTGJMtxLpatVm9PDYXsgm97qI9SkoSxSOtAoGBAJyEVTCx32jv/5M8S4ZrRB3qT8n5rbqcCy+vbkv5KeR1/nQJ5QWXrZJfsKJdGmBs9n3pH/0QYMEnkpzcf3f7zZcpcySBeWDQg28HuR/wSrNQwsFEU9ash15AFhZRtzvDr4B7cI3cFT7ApOhvmtqc0zn6TA2wZdUS4ahcGpWMZJnh',
            'log' => [ // optional
                'file' => './runtime/logs/pay/alipay.log',
                'level' => 'info', // 建议生产环境等级调整为 info，开发环境为 debug
                'type' => 'single', // optional, 可选 daily.
                'max_file' => 30, // optional, 当 type 为 daily 时有效，默认 30 天
            ],
            'http' => [ // [Guzzle] optional
                'timeout' => 5.0,
                'connect_timeout' => 5.0,
                // 更多配置项请参考 [Guzzle](https://guzzle-cn.readthedocs.io/zh_CN/latest/request-options.html)
            ],
            'mode' => 'normal', // optional,设置此参数，将进入沙箱模式
        ];
    }

    // ================================================== 微信支付配置 ==================================================
    public static function wxpayConfig()
    {
        return [
            'appid' => 'wx4b286799aeb143c0', // APP APPID
            'app_id' => 'wx4b286799aeb143c0', // 公众号 APPID
            'miniapp_id' => 'wxbffa24fea77a728b', // 小程序 APPID
            'mch_id' => '1318394101',
            'key' => 'okIHQT0PB3oAOeBtWJ82vQcPilgR3naH',
            'notify_url' => env('WXPAY_NOTIFY_URL', 'http://client.test.meiquick.com/pay/wxpay/notify'),
            'cert_client' => __DIR__ . '/cert/weixin_app_cert.pem', // optional, 退款，红包等情况时需要用到
            'cert_key' => __DIR__ . '/cert/weixin_app_key.pem',// optional, 退款，红包等情况时需要用到
            'log' => [ // optional
                'file' => './runtime/logs/pay/wepay.log',
                'level' => 'info', // 建议生产环境等级调整为 info，开发环境为 debug
                'type' => 'single', // optional, 可选 daily.
                'max_file' => 30, // optional, 当 type 为 daily 时有效，默认 30 天
            ],
            'http' => [ // optional
                'timeout' => 5.0,
                'connect_timeout' => 5.0,
                // 更多配置项请参考 [Guzzle](https://guzzle-cn.readthedocs.io/zh_CN/latest/request-options.html)
            ],
            'mode' => 'normal', // optional,设置此参数，将进入沙箱模式
        ];
    }
}
