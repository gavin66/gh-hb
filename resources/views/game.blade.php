<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="font/Arial.css?{{ $release }}"/>
    <link rel="stylesheet" type="text/css" href="css/ani.css?{{ $release }}"/>
    <link rel="stylesheet" type="text/css" href="css/index.css?{{ $release }}"/>
    <title>胖安达抢红包大战</title>
</head>
<script type="text/javascript">
  var rem = 100;
  rem = document.documentElement.clientWidth / 320 * 50;
  document.documentElement.style.fontSize = rem + 'px';
</script>
<body>
<div id="container">
    <audio src="media/bg.mp3?{{ $release }}" id="audio" loop="loop"></audio>
    <audio src="media/1.mp3?{{ $release }}" id="audio1"></audio>
    <audio src="media/2.mp3?{{ $release }}" id="audio2"></audio>
    <audio src="media/3.mp3?{{ $release }}" id="audio3"></audio>
    <div class="loading_div">
        <div class="loading_content">
            <div class="load_panda_div">
                <img src="img/load_panda.png?{{ $release }}" class="load_panda_img"/>
                <img src="img/load_panda_1.png?{{ $release }}" class="load_panda_img"/>
            </div>
            <div class="loading_out">
                <div class="loading_in">
                    <div class="loading_pre">

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="kv_div">
        <img src="img/icon1.png?{{ $release }}" class="icon1"/>
        <img src="img/icon2.png?{{ $release }}" class="icon2"/>
        <img src="img/icon3.png?{{ $release }}" class="icon3"/>
        <img src="img/icon4.png?{{ $release }}" class="icon4"/>
        <img src="img/icon5.png?{{ $release }}" class="icon5"/>
        <img src="img/icon6.png?{{ $release }}" class="icon6"/>
        <img src="img/logo.png?{{ $release }}" class="logo_img"/>
        <img src="img/active.png?{{ $release }}" class="active_img"/>
        <img src="img/title.png?{{ $release }}" class="title_img"/>
        <img src="img/panda_kv.png?{{ $release }}" class="panda_kv_img"/>
        <img src="img/start.png?{{ $release }}" class="start_btn"/>

    </div>
    <!--游戏页-->
    <div class="play_div">
        <div class="countDown_div">
            <div class="text1">6</div>
            <div class="line"></div>
            <div class="text2">0</div>
            <div class="line_1"></div>
        </div>
        <div class="mark_div">
            <p class="mark_num">0</p>
        </div>

        <div class="arrow_left arrow_btn"><img src="img/left_arrow.png?{{ $release }}"/><div class="touch_div_left"></div></div>
        <div class="arrow_right arrow_btn"><img src="img/right_arrow.png?{{ $release }}"/><div class="touch_div_right"></div></div>
        <div class="play_content">
            <div class="panda_div">
                <img src="img/play_img/panda.png?{{ $release }}" class="panda_img"/>
                <img src="img/panda_1.png?{{ $release }}" class="panda_img"/>
            </div>
            <img src="img/people.png?{{ $release }}" class="people_1 people_1_ani"/>
            <img src="img/people2.png?{{ $release }}" class="people_2 people_2_ani"/>
            <img src="img/people3.png?{{ $release }}" class="people_3 people_3_ani"/>
            <img src="img/red_pack_1.png?{{ $release }}" class="game_items pack_b"/>
        </div>
    </div>

    <!--结果页-->
    <div class="result_div">
        <img src="img/mark_word.png?{{ $release }}" class="mark_img"/>
        <div class="mark_pack_box">
            <img src="img/mark_pack.png?{{ $release }}"/>
            <p class="end_mark">999</p>
        </div>
        <img src="img/again_btn.png?{{ $release }}" class="again_btn"/>
        <!--<div class="btn_div">
            <img src="img/person_center.png" class="person_img"/>
            <img src="img/ranking.png" class="ranking_img ranking_btn"/>
        </div>-->
        <img src="img/share_btn.png?{{ $release }}" class="share_btn share_click"/>
    </div>

    <!--个人中心-->
    <div class="person_div">
        <img src="img/logo.png?{{ $release }}" class="logo_img"/>
        <img src="img/active.png?{{ $release }}" class="active_img"/>
        <div class="head_div">
            <img src="" class="head_img"/>
        </div>
        <p class="nickname"></p>
        <div class="person_content">
            <img src="img/peson_title.png?{{ $release }}" class="person_title"/>
            <img src="img/p_title.png?{{ $release }}" class="p_title_img"/>
            <!--<div class="mark_item">
                <p class="order">1</p>
                <p class="mark_number">999</p>
            </div>
            <div class="mark_item">
                <p class="order">2</p>
                <p class="mark_number">999</p>
            </div>
            <div class="mark_item">
                <p class="order">3</p>
                <p class="mark_number">999</p>
            </div>
            <div class="mark_item">
                <p class="order">4</p>
                <p class="mark_number">999</p>
            </div>
            <div class="mark_item">
                <p class="order">5</p>
                <p class="mark_number">999</p>
            </div>-->

        </div>
        <!--<div class="btn_group">
            <img src="img/ranking.png" class="ranking_img_2 ranking_btn"/>
            <img src="img/gohome.png" class="gohome_img"/>
        </div>-->
        <img src="img/share_btn.png?{{ $release }}" class="share_btn_1 share_click"/>
    </div>

    <!--排行榜-->
    <div class="ranking_div">
        <img src="img/logo.png?{{ $release }}" class="logo_img"/>
        <img src="img/active.png?{{ $release }}" class="active_img"/>
        <div class="ranking_content">
            <img src="img/rank_title.png?{{ $release }}" class="rank_title"/>
            <img src="img/ranking_img.png?{{ $release }}" class="rank_img_img"/>
            <div class="ranking_name">

            </div>

        </div>
        <div class="btn_group_1">
            <img src="img/gohome.png?{{ $release }}" class="gohome_img_1"/>
            <img src="img/person_center.png?{{ $release }}" class="person_img_end"/>
        </div>
    </div>



    <!--说明-->
    <div class="word_div">
        <div class="word_content">
            <img src="img/x.png?{{ $release }}" class="close_img"/>
            <img src="img/word.png?{{ $release }}" class="word_img"/>
        </div>
    </div>

    <!--分享浮层-->
    <div class="share_div">
        <img src="img/share_icon.png?{{ $release }}" class="share_icon"/>
    </div>

</div>
</body>
<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
  wx.config(<?php echo $app->jssdk->buildConfig(array('onMenuShareTimeline', 'onMenuShareAppMessage'), false) ?>);
  wx.ready(function(){
    // config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready函数中。
    wx.onMenuShareTimeline({
      title: '国航胖安达抢红包大战！', // 分享标题
      link: '', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
      imgUrl: '{{ asset('img/share_icon.jpg') }}', // 分享图标
      success: function () {
        // 用户确认分享后执行的回调函数
        console.log('分享朋友圈成功');
        _hmt.push(['_trackEvent', '游戏结束页_分享好友_分享朋友圈', 'event']);
      },
      cancel: function () {
        // 用户取消分享后执行的回调函数
        console.log('取消朋友圈分享');
      }
    });

    wx.onMenuShareAppMessage({
      title: '国航胖安达抢红包大战！', // 分享标题
      desc: '助力冬奥会，叫上小伙伴走起吧！', // 分享描述
      link: '', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
      imgUrl: '{{ asset('img/share_icon.jpg') }}', // 分享图标
      type: 'link', // 分享类型,music、video或link，不填默认为link
      dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
      success: function () {
        // 用户确认分享后执行的回调函数
        console.log('分享用户成功');
        _hmt.push(['_trackEvent', '游戏结束页_分享好友_分享好友', 'event']);
      },
      cancel: function () {
        // 用户取消分享后执行的回调函数
        console.log('取消用户分享');
      }
    });

  });
</script>
<script src="js/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/catPlug.js?{{ $release }}" type="text/javascript" charset="utf-8"></script>
<script src="js/index.js?{{ $release }}" type="text/javascript" charset="utf-8"></script>
<script>
  var _hmt = _hmt || [];
  (function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?c9e7e83f1b731e76518e40f623a76e60";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
  })();
</script>
</html>
