# Yiban-邮动历
## config.php
应用的配置和mysql的配置
## index.php
对于新应用的授权,利用try后的重定向进行的授权
try {
    //轻应用获取access_token，未授权则跳转至授权页面
    $info = $iapp->perform();
} catch (YBException $ex) {
    //重定向对app授权
    Header('Location: ' . $appUrl);
    exit();
    echo $ex->getMessage();
}
