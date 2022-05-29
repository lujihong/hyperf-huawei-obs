## 华为云OBS
### 基于华为云官方最新 OBS PHP SDK v3.21.6 修改，兼容在hyperf框架php8.0环境中使用，并修复部分问题。

### 安装
```
composer require lujihong/huawei-obs
```
### 配置
hyperf框架中使用，如果config/autoload目录没有file.php文件则执行以下命令：
```
php bin/hyperf.php vendor:publish lujihong/huawei-obs
```
或直接file.php文件中新增：
```
'obs' => [
    'driver' => \Obs\Adapter\ObsAdapterFactory::class,
    'enable_coroutine_handler' => false, //是否启用协程处理器
    'key' => env('OBS_ACCESS_ID'),
    'secret' => env('OBS_ACCESS_KEY'),
    'bucket' => env('OBS_BUCKET'),
    'endpoint' => env('OBS_ENDPOINT'),
    'cdn_domain' => env('OBS_CDN_DOMAIN', ''), //没有CDN域名则不填，默认会自动生成访问域名
    'ssl_verify' => env('OBS_SSL_VERIFY', false), // <true|false> true to use 'https://' and false to use 'http://'. default is false
]
```

### 如何使用
可参考示例 或 华为官方文档

hyperf框架可参考文档使用：https://hyperf.wiki/2.2/#/zh-cn/filesystem