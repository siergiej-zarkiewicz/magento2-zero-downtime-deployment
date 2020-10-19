# Magento2 Zero Downtime Deployment Module
Magento 2 Zero Downtime Deployment

## Module resolved two exception:
* Please update your modules.
```php
1 exception(s):
Exception #0 (Magento\Framework\Exception\LocalizedException): Please update your modules: Run "composer install" from the Magento root directory.
The following modules are outdated:
Magento_Module schema: code version - 0.1.0, database version - 0.1.1
Magento_Module data: code version - 0.1.0, database version - 0.1.1

Exception #0 (Magento\Framework\Exception\LocalizedException): Please update your modules: Run "composer install" from the Magento root directory.
The following modules are outdated:
Magento_Module schema: code version - 0.1.0, database version - 0.1.1
Magento_Module data: code version - 0.1.0, database version - 0.1.1
<pre>#1 Magento\Framework\App\FrontController\Interceptor->Magento\Framework\Interception\{closure}() called at [vendor/amasty/aminvisiblecaptcha/Plugin/Predispatch.php:113]
#2 Amasty\InvisibleCaptcha\Plugin\Predispatch->aroundDispatch() called at [vendor/magento/framework/Interception/Interceptor.php:135]
#3 Magento\Framework\App\FrontController\Interceptor->Magento\Framework\Interception\{closure}() called at [vendor/magento/module-page-cache/Model/App/FrontController/BuiltinPlugin.php:73]
#4 Magento\PageCache\Model\App\FrontController\BuiltinPlugin->aroundDispatch() called at [vendor/magento/framework/Interception/Interceptor.php:135]
#5 Magento\Framework\App\FrontController\Interceptor->Magento\Framework\Interception\{closure}() called at [vendor/magento/framework/Interception/Interceptor.php:153]
#6 Magento\Framework\App\FrontController\Interceptor->___callPlugins() called at [generated/code/Magento/Framework/App/FrontController/Interceptor.php:26]
#7 Magento\Framework\App\FrontController\Interceptor->dispatch() called at [vendor/magento/framework/App/Http.php:116]
#8 Magento\Framework\App\Http->launch() called at [generated/code/Magento/Framework/App/Http/Interceptor.php:24]
#9 Magento\Framework\App\Http\Interceptor->launch() called at [vendor/magento/framework/App/Bootstrap.php:261]
#10 Magento\Framework\App\Bootstrap->run() called at [pub/index.php:40]
</pre>
```
* The configuration file has changed.
```php
1 exception(s):
Exception #0 (Magento\Framework\Exception\LocalizedException): The configuration file has changed. Run the "app:config:import" or the "setup:upgrade" command to synchronize the configuration.

Exception #0 (Magento\Framework\Exception\LocalizedException): The configuration file has changed. Run the "app:config:import" or the "setup:upgrade" command to synchronize the configuration.
<pre>#1 Magento\Framework\App\FrontController\Interceptor->Magento\Framework\Interception\{closure}() called at [vendor/amasty/aminvisiblecaptcha/Plugin/Predispatch.php:113]
#2 Amasty\InvisibleCaptcha\Plugin\Predispatch->aroundDispatch() called at [vendor/magento/framework/Interception/Interceptor.php:135]
#3 Magento\Framework\App\FrontController\Interceptor->Magento\Framework\Interception\{closure}() called at [vendor/magento/module-page-cache/Model/App/FrontController/BuiltinPlugin.php:73]
#4 Magento\PageCache\Model\App\FrontController\BuiltinPlugin->aroundDispatch() called at [vendor/magento/framework/Interception/Interceptor.php:135]
#5 Magento\Framework\App\FrontController\Interceptor->Magento\Framework\Interception\{closure}() called at [vendor/magento/framework/Interception/Interceptor.php:153]
#6 Magento\Framework\App\FrontController\Interceptor->___callPlugins() called at [generated/code/Magento/Framework/App/FrontController/Interceptor.php:26]
#7 Magento\Framework\App\FrontController\Interceptor->dispatch() called at [vendor/magento/framework/App/Http.php:116]
#8 Magento\Framework\App\Http->launch() called at [generated/code/Magento/Framework/App/Http/Interceptor.php:24]
#9 Magento\Framework\App\Http\Interceptor->launch() called at [vendor/magento/framework/App/Bootstrap.php:261]
#10 Magento\Framework\App\Bootstrap->run() called at [pub/index.php:40]
</pre>
```
