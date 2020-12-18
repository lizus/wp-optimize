# wp-optimize
优化一些WP中的内容，减少一些不必要的输出，做一些修改

## 使用方法：

* 下载：
```bash
git clone https://github.com/lizus/wp-optimize.git
# or 
composer require lizus/wp-optimize
```
* 复制`optimize`文件夹到主题包下
* 在`functions.php`中推荐使用`lizus/php-loaddir`载入：
```php
use Lizus\LoadDir\LoadDir;
LoadDir::load_files(__DIR__.'/optimize');
```
* 根据需要修改optimize中的文件