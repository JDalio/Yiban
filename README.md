# Yiban-邮动历
## config.php
应用的配置和mysql的配置
## index.php
对于新应用的授权,利用try后的重定向进行的授权  
<pre>try {
    //轻应用获取access_token，未授权则跳转至授权页面
    $info = $iapp->perform();
} catch (YBException $ex) {
    //重定向对app授权
    Header('Location: ' . $appUrl);
    exit();
    echo $ex->getMessage();
}</pre>
## 目录权限问题  
img目录 777 权限（上传图片存储）  
其他目录、文件 755 权限
