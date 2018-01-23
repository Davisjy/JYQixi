<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>七夕我爱你-旌商商城爱你一万年表白纪念系统</title>
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
    </style>
</head>

<body>

  <div class="container">  
 <form id="contact" action="qixi.php" method="get">
    <h3>七夕我爱你</h3>
    <h4>请填写以下内容，然后让你爱的人看之后的页面!</h4>
    <fieldset>
      <input placeholder="你的昵称" name="me" type="text" tabindex="1" required>
    </fieldset>
    <fieldset>
      <input placeholder="爱的人昵称" name="you" type="text" tabindex="2" required>
    </fieldset>
	<fieldset>
      <textarea placeholder="你想说的话限128字内" name="yi" tabindex="5" required></textarea>
    </fieldset>
	<fieldset>
      <input placeholder="终极表白语10字内" name="wu" type="text" tabindex="2" required>
    </fieldset>
	  <!-- <fieldset>
   <input placeholder="想说的第二句话限32字内" name="er" type="text" tabindex="2" required>
    </fieldset>
	<fieldset>
      <input placeholder="想说的第三句话限20字内" name="san" type="text" tabindex="2" required>
    </fieldset>
	<fieldset>
      <input placeholder="想说的第四句话限28字内" name="si" type="text" tabindex="2" required>
    </fieldset>	
	<fieldset>
      <input placeholder="终极表白语10字内" name="wu" type="text" tabindex="2" required>
    </fieldset>	-->
    <fieldset>
      <input placeholder="年：如2014" name="year" type="text" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="月：如7" name="yue" type="text" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="日：如20" name="ri" type="text" tabindex="4" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">提交</button>
    </fieldset>
  </form>
  <h4 class="STYLE1">如果您希望更多人终成眷属，就点击复制链接分享给朋友吧!</h4>
  <a href="http://jcbgoods.com/category-1256-b0.html" target="_blank"><img src="../ai/img/gg.jpg" border="0"></a>
  <h4 class="STYLE1"><a href="http://www.jcbgoods.com">旌商商城</a></h4>
  <script type="text/javascript" src="http://c.ibangkf.com/i/c-jcbgoods.js"></script>
</div>
<script>
        var imgUrl = "http://www.jcbgoods.com/themes/68ecshopcom_360buy/images/misc/lib/img/e/logo.png";
        var lineLink = "http://weixin.jcbgoods.com/ad/77ai";
        var descContent = '旌商商城，\n\n七夕爱你永不变';
        var shareTitle = '旌商商城爱你一万年表白系统';
        var appid = '';
         
        function shareFriend() {
            WeixinJSBridge.invoke('sendAppMessage',{
                "appid": appid,
                "img_url": imgUrl,
                "img_width": "200",
                "img_height": "200",
                "link": lineLink,
                "desc": descContent,
                "title": shareTitle
            }, function(res) {
                //_report('send_msg', res.err_msg);
            })
        }
        function shareTimeline() {
            WeixinJSBridge.invoke('shareTimeline',{
                "img_url": imgUrl,
                "img_width": "200",
                "img_height": "200",
                "link": lineLink,
                "desc": descContent,
                "title": shareTitle
            }, function(res) {
                   //_report('timeline', res.err_msg);
            });
        }
        function shareWeibo() {
            WeixinJSBridge.invoke('shareWeibo',{
                "content": descContent,
                "url": lineLink,
            }, function(res) {
                //_report('weibo', res.err_msg);
            });
        }
        // 当微信内置浏览器完成内部初始化后会触发WeixinJSBridgeReady事件。
        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
            // 发送给好友
            WeixinJSBridge.on('menu:share:appmessage', function(argv){
                shareFriend();
            });
            // 分享到朋友圈
            WeixinJSBridge.on('menu:share:timeline', function(argv){
                shareTimeline();
            });
            // 分享到微博
            WeixinJSBridge.on('menu:share:weibo', function(argv){
                shareWeibo();
            });
        }, false);
</script>
</body>
</html>