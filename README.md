# php serializable closure

>实现闭包的序列化和反序列化

  
- 序列化任何闭包

- 序列化任意对象

- 不使用“eval”进行闭包序列化或非序列化

- 适用于任何支持闭包的PHP版本

- 支持PHP 7语法

- 处理“use（）”中引用/导入的所有变量，并自动包装

适当的序列化

- 处理递归闭包

- 处理魔术常量，如`__FILE__`、`__DIR__`、` __LINE_`、`___NAMESPACE__`、'__CLASS__`、，

`__TRAIT_`、`__METHOD_`和`__FUNCTION_`。

- 自动解析闭包中使用的所有类名、函数名和常量名

- 使用“#trackme”指令跟踪闭包的驻留源

- 简单且快速的解析器

- 执行非序列化闭包时可能发生的任何错误或异常都可以被捕获并正确处理

- 您可以无限次序列化/取消序列化任何闭包，即使是以前未序列化的闭包

（这是可能的，因为“eval（）”不用于非序列化）

- 处理静态闭包

- 支持加密签名的闭包

- 提供一个反射体，它可以为您提供有关序列化闭包的信息

- 为*SuperClosure*库提供分析器

- 自动检测何时需要序列化闭包的作用域和/或绑定对象

为了使闭包在反序列化后工作


## php版本

* PHP ^5.4 || ^7.0 || ^8.0

## 安装

- composer 命令

```php
composer require guirong/php-closure
```

- composer.json
  
```json
{
    "require": {
        "guirong/php-closure": "^1.0.1"
    }
}
```

### 快速开始

- 序列化

```php
\Guirong\PhpClosure\ClosureSerialize::serialize($closure_data);
```

  or

```php
\Guirong\PhpClosure\serialize($closure_data);
```


- 反序列化

```php
\Guirong\PhpClosure\ClosureSerialize::unserialize($serialize_data,$options);
```

or

```php
\Guirong\PhpClosure\unserialize($serialize_data,$options);
```

### 特别注意
- 序列化数据在写入到文件中时,文件函数会将单斜杠 "/" 转化为双斜杠 "//" ,如果读取文件内容后不做转化处理,将导致反序列化失败。为此你可以这样处理

```php

//base64 序列化转码
$serialize_data = base64_encode(
    \Guirong\PhpClosure\ClosureSerialize::serialize($closure_data)
);

file_put_contents('clourse.txt',$serialize_data);

$serialize_data = file_get_contents('clourse.txt');

//base64 序列化解码
$closure_data = \Guirong\PhpClosure\ClosureSerialize::unserialize(
    base64_decode($serialize_data),$options
);

```


