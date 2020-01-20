<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="applicable-device" content="pc">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="description" content="@yield('description')"/>
    <link href="/frontend/css/base.css" rel="stylesheet" type="text/css"/>
    <link href="/frontend/css/style.css" rel="stylesheet" type="text/css"/>
    <script src="/frontend/js/jquery-1.10.2.min.js"></script>
    <script src="/frontend/js/MSClass.js" type="text/javascript"></script>
    @yield('headlibs')
</head>
<body>
<div class="wrap">
    <!--头部-->
    <script type="text/javascript">
        $(function(){
            $(".ewm").hover(function(){
                $(this).children("div").show();
            },function(){
                $(this).children("div").hide();
            });
        });
    </script>
    <div class="top">
        <div class="box">
            <div class="right tel"><img src="/frontend/images/icon-phone.jpg" width="22" height="20" style="margin-top:4px;"/>免费咨询热线：400-619-7077</div>
            <div class="left wxico"><img src="/frontend/images/wxico.jpg" style="margin-top:4px;"/>中国五星好商机</div>
            <div class="left tips"><img src="/frontend/images/icon1.jpg" width="47" height="20" style="margin-top:4px;"/>全国众多品牌连锁加盟门店</div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="box">
        <div class="logo left"><img src="/frontend/images/logo.jpg"/></div>
        <div class="search left">
            <p>
            <form action="/search/" name="formsearch"  target="_blank">
                <input type="text" name="keyword" value="" style="width:507px; height:33px; margin-top:35px;border:1px solid #ccc" onclick="if(this.style.color!='black'){ this.value=''; this.style.color='black';}"/>
                <input type="hidden" name="kwtype" value="1">
                <input type="hidden" name="searchtype" value="titlekeyword">
                <input type="submit" value="" class="submit"/>
            </form>
            </p>
            <p class="grey">热门搜索：　<a href="/news/1010.html">干洗店投资多少钱</a> 　<a href="/news/909.html">赛维</a> 　<a href="/news/952.html">干洗店淡季</a>  </p>
        </div>
    </div>
    <div class="clear"></div>
    <div class="mainNav" style="background:#1DA3D0">
        <div class="box">
            <ul>
                <li style="width:95px;"><a href="http://www.cnsunway.com/">首页</a></li>

                <li style="width:95px;"><a href="http://www.cnsunway.com/html/zoujinsaiwei/" target="_blank">走进赛维</a></li>

                <li style="width:95px;"><a href="http://www.cnsunway.com/zt/xjj" target="_blank">我要加盟</a></li>

                <li style="width:95px;"><a href="http://www.cnsunway.com/html/xinwenzhongxin/" target="_blank">新闻中心</a></li>

                <li style="width:95px;"><a href="http://www.cnsunway.com/html/jiamengyoushi/" target="_blank">加盟优势</a></li>

                <li style="width:95px;"><a href="http://www.cnsunway.com/html/touzifangan/" target="_blank">投资方案</a></li>

                <li style="width:95px;"><a href="http://www.cnsunway.com/html/chenggonganli/" target="_blank">成功案例</a></li>

                <li style="width:95px;"><a href="http://www.cnsunway.com/html/fuwuzhichi/" target="_blank">服务支持</a></li>

                <li style="width:95px;"><a href="http://www.cnsunway.com/html/changjianwenti/" target="_blank">常见问题</a></li>

                <li style="width:95px;"><a href="http://www.cnsunway.com/html/chanpinshebei/" target="_blank">产品设备</a></li>

                <li style="width:95px;"><a href="http://video.cnsunway.com/" target="_blank">影视中心</a></li>

                <li style="width:95px;"><a href="http://www.cnsunway.com/html/lianxiwomen/" target="_blank">联系我们</a></li>

            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $(".mainNav ul li").hover(function(){
            $(this).addClass("navHover");
        },function(){
            $(this).removeClass("navHover");
        });
    });
</script>
@yield('main')
<div class="footer">
    <div class="bottompage">
        <div class="bottombg" style="background:#414141">
            <div class="bottom_content">
                <div class="bottom_logo" style="background: none"></div>
                <div class="bottom_fgx"></div>
                <div class="bottom_dwzk" style="background:#414141"> <div class="bottom_dwz">
                        <p><a class="bottom_dwzd" href="http://www.cnsunway.com/html/zoujinsaiwei/">走进赛维</a></p>

                        <p><a href="http://www.cnsunway.com/html/zoujinsaiwei/pinpaijianjie/">品牌简介</a></p>

                        <p><a href="http://www.cnsunway.com/html/zoujinsaiwei/xiangmugaishu/">项目概述</a></p>

                        <p><a href="http://www.cnsunway.com/html/zoujinsaiwei/pinpaiwenhua/">品牌文化</a></p>

                        <p><a href="http://www.cnsunway.com/html/zoujinsaiwei/fazhanlicheng/">发展历程</a></p>

                        <p><a href="http://www.cnsunway.com/html/zoujinsaiwei/saiweihuanjing/">赛维环境</a></p>

                        <p><a href="http://www.cnsunway.com/html/zoujinsaiwei/saiweirongyu/">赛维荣誉</a></p>

                        <p><a href="http://www.cnsunway.com/zt/pr/">危机公关</a></p>

                        <p><a href="http://www.cnsunway.com/html/zoujinsaiwei/quanguofengongsi/">全国分公司</a></p>

                        <p><a href="http://www.cnsunway.com/zt/shwy/">售后服务</a></p>
                    </div><div class="bottom_dwz">
                        <p><a class="bottom_dwzd" href="http://www.cnsunway.com/html/jiamengyoushi/">加盟优势</a></p>

                        <p><a href="http://www.cnsunway.com/html/jiamengyoushi/pinpaiyoushi/">品牌优势</a></p>

                        <p><a href="http://www.cnsunway.com/html/jiamengyoushi/meitiguanggaoyoushi/">媒体广告优势</a></p>

                        <p><a href="http://www.cnsunway.com/html/jiamengyoushi/peixunyoushi/">培训优势</a></p>

                        <p><a href="http://www.cnsunway.com/html/jiamengyoushi/shangquankaochayoushi/">商圈考察优势</a></p>

                        <p><a href="http://www.cnsunway.com/html/jiamengyoushi/yinglimoshi/">盈利模式</a></p>
                    </div><div class="bottom_dwz">
                        <p><a class="bottom_dwzd" href="http://www.cnsunway.com/html/touzifangan/">投资方案</a></p>

                        <p><a href="http://www.cnsunway.com/html/touzifangan/sanxingdian/">三星店</a></p>

                        <p><a href="http://www.cnsunway.com/html/touzifangan/sixingdian/">四星店</a></p>

                        <p><a href="http://www.cnsunway.com/html/touzifangan/wuxingdian/">五星店</a></p>

                        <p><a href="http://www.cnsunway.com/html/touzifangan/qijiandian/">旗舰店</a></p>

                        <p><a href="http://www.cnsunway.com/html/touzifangan/touzihuibao/">投资回报</a></p>
                    </div><div class="bottom_dwz">
                        <p><a class="bottom_dwzd" href="http://www.cnsunway.com/html/chenggonganli/">成功案例</a></p>

                        <p><a href="http://www.cnsunway.com/html/chenggonganli/eccy/">二次创业</a></p>

                        <p><a href="http://www.cnsunway.com/html/chenggonganli/bljz/">白领兼职</a></p>

                        <p><a href="http://www.cnsunway.com/html/chenggonganli/nmzf/">农民致富</a></p>

                        <p><a href="http://www.cnsunway.com/html/chenggonganli/dxs/">大学生创业</a></p>

                        <p><a href="http://www.cnsunway.com/html/chenggonganli/blh/">80后创业</a></p>

                        <p><a href="http://www.cnsunway.com/html/chenggonganli/nx/">女性致富</a></p>
                    </div><div class="bottom_dwz">
                        <p><a class="bottom_dwzd" href="http://www.cnsunway.com/html/changjianwenti/">常见问题</a></p>

                        <p><a href="http://www.cnsunway.com/html/changjianwenti/kaidianwenda/">开店问答</a></p>

                        <p><a href="http://www.cnsunway.com/html/changjianwenti/feiyongwenda/">费用问答</a></p>

                        <p><a href="http://www.cnsunway.com/html/changjianwenti/shebeiwenda/">设备问答</a></p>

                        <p><a href="http://www.cnsunway.com/html/changjianwenti/fuwuzhichi/">服务支持</a></p>

                        <p><a href="http://www.cnsunway.com/html/changjianwenti/jingyingwenda/">经营问答</a></p>
                    </div><div class="bottom_dwz">
                        <p><a class="bottom_dwzd" href="http://www.cnsunway.com/html/chanpinshebei/">产品设备</a></p>

                        <p><a href="http://www.cnsunway.com/html/chanpinshebei/shebeigongchangjieshao/">设备工厂介绍</a></p>

                        <p><a href="http://www.cnsunway.com/html/chanpinshebei/ganxishebei/">干洗设备</a></p>

                        <p><a href="http://www.cnsunway.com/html/chanpinshebei/fuzhushebei/">辅助设备</a></p>

                        <p><a href="http://www.cnsunway.com/html/chanpinshebei/shuixishebei/">水洗设备</a></p>

                        <p><a href="http://www.cnsunway.com/html/chanpinshebei/hongganshebei/">烘干设备</a></p>
                    </div> </div>
                <div class="bottom_fgxh"></div>
                <div class="bottom_ewm">
                    <div class="bottom_dizhidianhua">
                        <p style=" float:left; color:#dcdcdc; font-size:12px; font-family:SimSun; line-height:20px; margin-left:10px;">公司地址：上海市闵行区双柏路1289号甲</p>
                        <p style=" float:left; color:#dcdcdc; font-size:12px; font-family:SimSun; line-height:20px; margin-left:10px;">免费热线：400-619-7077</p>
                        <p style=" float:left; color:#dcdcdc; font-size:12px; font-family:SimSun; line-height:20px; margin-left:10px;">售后电话：400-889-1599</p>
                    </div>
                    <div style="margin-left:10px;">
                        <p>
                        <form action="http://www.cnsunway.com/plus/search.php" name="formsearch" id="fsearch" target="_blank">
                            <input type="text" value="" name="keyword" style="width:151px; height:29px; margin-top:35px;"/>
                            <input type="hidden" name="kwtype" value="1">
                            <input type="hidden" name="searchtype" value="titlekeyword">
                            <input type="submit" value="" class="submit"/>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="buttom_hfgx"></div>
            <div class="buttom_xtbbj" style="">
                <div class="buttom_xtb"><img src="/frontend/images/bottom1.png" width="49" height="49"/>
                    <p><a>项目概述</a></p>
                </div>
                <div class="buttom_xtb1"><img src="/frontend/images/bottom2.png" width="49" height="49"/>
                    <p><a>盈利模式</a></p>
                </div>
                <div class="buttom_xtb1"><img src="/frontend/images/bottom3.png" width="49" height="49"/>
                    <p><a>营销模式</a></p>
                </div>
                <div class="buttom_xtb1"><img src="/frontend/images/bottom4.png" width="49" height="49"/>
                    <p><a>视频中心</a></p>
                </div>
                <div class="buttom_xtb1"><img src="/frontend/images/bottom5.png" width="49" height="49"/>
                    <p><a>服务支持</a></p>
                </div>
                <div class="buttom_xtb1"><img src="/frontend/images/bottom6.png" width="49" height="49"/>
                    <p><a>加盟流程</a></p>
                </div>
                <div class="buttom_xtb1"><img src="/frontend/images/bottom7.png" width="49" height="49"/>
                    <p><a>投资规模</a></p>
                </div>
                <div class="buttom_xtb1"><img src="/frontend/images/bottom8.png" width="49" height="49"/>
                    <p><a>加盟条件</a></p>
                </div>
            </div>
            <div style="margin:0 auto; height:30px;">
                <p style="color:#9c9c9c; line-height:35px; text-align:center; background:#303030" class="copy"><script src="/frontend/js/copyright.js" language="javascript" charset="gbk"></script> 版权所有   <a href="http://www.miitbeian.gov.cn/" target="_blank">沪ICP备10213364号-5</a></p>
            </div>
        </div>
    </div>

    <!--底部--><!--底部--><!--底部--><!--底部--><!--底部--><!--底部--><!--底部--><!--底部-->

</div>
<style type="text/css">
    #divR a {margin-top:0px;}
    .w1000>ul>a{margin-top:0px;}
    .t_1{margin-top: -10px;}
</style>
<!--slide-->
<script src="/frontend/js/unslider.js"></script>
<script type="text/javascript">

    $(function() {
        //$('.banner').unslider();
        var unslider =$('.banner').unslider({
            speed: 3000,               //  The speed to animate each slide (in milliseconds)
            delay: 5000,              //  The delay between slide animations (in milliseconds)
            complete: function() {},  //  A function that gets called after every slide animation
            keys: true,               //  Enable keyboard (left, right) arrow shortcuts
            dots: true,               //  Display dot navigation
            fluid: false              //  Support responsive design. May break non-responsive designs
        });

        $('.unslider-arrow').click(function() {
            var fn = this.className.split(' ')[1];
            //  Either do unslider.data('unslider').next() or .prev() depending on the className
            unslider.data('unslider')[fn]();
        });
    });

    $(document).ready(function() {
        $(".h").hover(function(){
            var i = $(this).index();
            $(this).siblings().removeClass("hot1h").removeClass("hot2h").removeClass("hot3h").removeClass("hot4h").removeClass("hot5h").removeClass("hot6h").removeClass("hot7h").removeClass("hot8h").removeClass("hot9h").removeClass("hot10h").removeClass("hot11h").removeClass("hot12h").removeClass("hot13h");
            $(this).addClass("hot"+i+"h");
        });
    });
</script>
<script type="text/javascript">
    $(function(){
        $(".ishgconright div").hide().eq(0).show();
        $(".ishgconleft li").hover(function(){
            $(this).addClass("ishghover").siblings().removeClass("ishghover");
            $(".ishgconright div").hide().eq($(this).index()).show();
        });
    });
</script>
@yield('footerlibs')
</body>
</html>