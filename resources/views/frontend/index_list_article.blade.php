@extends('frontend.frontend')
@section('title')@stop
@section('keywords')@stop
@section('description')@stop
@section('headlibs')
    <link href="/frontend/css/page.css" rel="stylesheet" type="text/css"/>
    <meta name="mobile-agent" content="format=html5; url={{str_replace('www.','m.',config('app.url'))}}">
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('www.','m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('www.','m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('www.','m.',config('app.url'))}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('www.','m.',config('app.url'))}}" >
    <link rel="canonical" href="{{config('app.url')}}"/>
@stop
@section('main')
    <div class="heightX"></div>
    <div class="content">
        <div class="box">
            <!--左侧-->
            <div class="listL left">
                <div class="subNav">
                    <ul>
                        <li>
                            <div class="mNav">项目概述</div>
                        </li>
                        <li>
                            <div class="lNav"><a href="/html/zoujinsaiwei/pinpaijianjie/">品牌简介</a></div>
                        </li>
                        <li class="cNav"> <div><a href="/html/zoujinsaiwei/xiangmugaishu/">项目概述</a></div> </li>
                        <li>
                            <div class="lNav"><a href="/html/zoujinsaiwei/pinpaiwenhua/">品牌文化</a></div>
                        </li>

                        <li>
                            <div class="lNav"><a href="/html/zoujinsaiwei/fazhanlicheng/">发展历程</a></div>
                        </li>

                        <li>
                            <div class="lNav"><a href="/html/zoujinsaiwei/saiweihuanjing/">赛维环境</a></div>
                        </li>

                        <li>
                            <div class="lNav"><a href="/html/zoujinsaiwei/saiweirongyu/">赛维荣誉</a></div>
                        </li>

                        <li>
                            <div class="lNav"><a href="/html/zoujinsaiwei/quanguofengongsi/">全国分公司</a></div>
                        </li>

                    </ul>
                </div>
                <div class="clear"></div>
                <div class="heightX"></div>
                <div class="kyxy">
                    <h2>开业喜讯</h2>
                    <div>
                        <ul id="kyxx">
                            <li style=" background:#FAFAFA">
                                <a href="/html/chenggonganli/eccy/1002.html" target="_blank">投资干洗店在勤奋中博弈人生</a>
                            </li>
                            <li>
                                <a href="/html/chenggonganli/dxs/979.html" target="_blank">加盟商分享：成功经营干洗加盟店</a>
                            </li>
                            <li style=" background:#FAFAFA">
                                <a href="/html/chenggonganli/dxs/978.html" target="_blank">加盟上海赛维干洗，创造别样人生</a>
                            </li>
                            <li>
                                <a href="/html/chenggonganli/eccy/880.html" target="_blank">她复制大品牌的成功，赚钱就是这</a>
                            </li>
                            <li style=" background:#FAFAFA">
                                <a href="/html/chenggonganli/nx/879.html" target="_blank">她，年过半百，收获创业成功</a>
                            </li>
                            <li>
                                <a href="/html/chenggonganli/eccy/878.html" target="_blank">她不做全职太太，选择加盟赛维干</a>
                            </li>
                            <li style=" background:#FAFAFA">
                                <a href="/html/chenggonganli/blh/877.html" target="_blank">加盟赛维干洗店，事业爱情双丰收</a>
                            </li>
                            <li>
                                <a href="/html/chenggonganli/eccy/876.html" target="_blank">有了赛维干洗大品牌支撑，我加盟</a>
                            </li>
                            <li style=" background:#FAFAFA">
                                <a href="/html/chenggonganli/blh/875.html" target="_blank">我们当地很需要赛维干洗加盟店，</a>
                            </li>
                            <li>
                                <a href="/html/chenggonganli/nx/874.html" target="_blank">感谢赛维干洗加盟， 我找到了人</a>
                            </li>

                        </ul>
                    </div>
                    <script type="text/javascript">

                        var Marquee1 = new Marquee("kyxx");

                        Marquee1.Direction = "top";

                        Marquee1.Step = 1;

                        Marquee1.Width = 214;

                        Marquee1.Height = 160;

                        Marquee1.Timer = 50;

                        Marquee1.DelayTime = 1000;

                        Marquee1.WaitTime = 3000;

                        Marquee1.ScrollStep = 31;

                        Marquee1.Start();

                    </script>
                    <div class="wykdbutton"><a href="/swt/" target="_blank"><img src="/frontend/images/wykd.gif"/></a></div>
                </div>
                <div class="heightX"></div>
                <div class="wmys">
                    <h2>我们的优势</h2>
                    <ul>
                        <li><span><a href="/html/jiamengyoushi/" target="_blank">1.品牌优势</a></span></li>
                        <div style="display: block;"><a href="/html/jiamengyoushi/" target="_blank"><img src="/frontend/images/ys1.jpg" width="214"></a></div>

                        <li><span><a href="/html/fuwuzhichi/badamianfei/" target="_blank">2.服务优势</a></span></li>
                        <div style="display: none;"><a href="/html/fuwuzhichi/badamianfei/" target="_blank"><img src="/frontend/images/ys2.jpg" width="214"></a></div>

                        <li><span><a href="/html/fuwuzhichi/peixunkecheng/" target="_blank">3.设备优势</a></span></li>
                        <div style="display: none;"><a href="/html/fuwuzhichi/peixunkecheng/" target="_blank"><img src="/frontend/images/ys3.jpg" width="214"></a></div>

                        <li><span><a href="/html/fuwuzhichi/peixunkecheng/" target="_blank">4.直营店优势</a></span></li>
                        <div style="display: none;"><a href="/html/fuwuzhichi/peixunkecheng/" target="_blank"><img src="/frontend/images/ys4.jpg" width="214"></a></div>

                        <li><span><a href="/html/jiamengyoushi/" target="_blank">5.模式优势</a></span></li>
                        <div style="display: none;"><a href="/html/jiamengyoushi/" target="_blank"><img src="/frontend/images/ys5.jpg" width="214"></a></div>

                        <li><span><a href="/html/jiamengyoushi/" target="_blank">6.技术优势</a></span></li>
                        <div style="display: none;"><a href="/html/jiamengyoushi/" target="_blank"><img src="/frontend/images/ys6.jpg" width="214"> </a></div>
                        <li><span><a href="/html/jiamengyoushi/" target="_blank">7.盈利模式优势</a></span></li>
                        <div style="display: none;"><a href="/html/jiamengyoushi/" target="_blank"><img src="/frontend/images/ys7.jpg" width="214"></a></div>
                        <li><span><a href="/html/fuwuzhichi/badamianfei/" target="_blank">8.售后优势</a></span></li>
                        <div style="display: none;"><a href="/html/fuwuzhichi/badamianfei/" target="_blank"><img src="/frontend/images/ys8.jpg" width="214"></a></div>
                        <li><span><a href="/html/chenggonganli/" target="_blank">9.成功案例</a></span></li>
                        <div style="display: none;"><a href="/html/chenggonganli/" target="_blank"><img src="/frontend/images/ys9.jpg" width="214"></a></div>
                    </ul>
                    <div class="ljzxbutton"><a href="/swt/" target="_blank"><img src="/frontend/images/ljzx.gif"></a></div>
                </div>
                <script type="text/javascript">

                    $(function(){

                        $(".wmys ul div").hide().eq(0).show();

                        $(".wmys ul li").hover(function(){

                            $(this).parent("ul").children("div").hide();

                            $(this).next("div").show();

                            $(".wmys ul li").children("span").css("font-weight","100");

                            $(this).children("span").css("font-weight","bold");

                        });

                    })

                </script>
                <div class="heightX"></div>
                <div class="rdgz">
                    <h2>全新盈利模式</h2>
                    <ul>
                        <li style=" background:#FAFAFA"><span class="top1">1</span> <a href="/html/changjianwenti/kaidianwenda/30.html" target="_blank">单店经营模式</a></li>
                        <li><span class="top">2</span> <a href="/html/changjianwenti/kaidianwenda/30.html" target="_blank">团体业务模式</a></li>
                        <li style=" background:#FAFAFA"><span class="top">3</span> <a href="/html/changjianwenti/kaidianwenda/30.html" target="_blank">发卡模式</a></li>
                        <li><span class="top">4</span> <a href="/html/changjianwenti/kaidianwenda/30.html" target="_blank">多点收衣模式</a></li>
                    </ul>
                </div>
                <div class="heightX"></div>
                <div class="ask">
                    <h2>开店疑问</h2>
                    <div style="margin-top:5px;"><img src="/frontend/images/kdyw.gif" width="214"/></div>
                    <div class="askTit"><img src="/frontend/images/ask.gif"/> <a href="/html/changjianwenti/kaidianwenda/1099.html" target="_blank">影响洗衣加盟店的利润大小都有哪</a></div>
                    <div class="askAns"><img src="/frontend/images/answer.gif"/>　　投资开 洗衣加盟店 ，可以说所以的投资者都是为了挣得高额的 洗</div>
                    <div class="askTit"><img src="/frontend/images/ask.gif"/> <a href="/html/changjianwenti/kaidianwenda/1098.html" target="_blank">如何才能持续的提高洗衣加盟店利</a></div>
                    <div class="askAns"><img src="/frontend/images/answer.gif"/>　　对市场有所了解的人都知道，干洗行业是当下非常热门的投资行业，</div>

                    <div class="askbutton"><a href="/swt/" target="_blank"><img src="/frontend/images/askljzx.gif"/></a>　<a href="/swt/" target="_blank"><img src="/frontend/images/asktel.gif"/></a></div>
                </div>

                <!--服务宗旨-->

                <div class="heightX"></div>
                <div class="fwzz">
                    <h2>服务宗旨</h2>
                    <ul>
                        <li><span class="left fwzzL">我们认为</span><span class="left fwzzR">　　满怀感激和关爱，发自内心地为所有客户服务，就象太阳普照万物一样地付出</span></li>
                        <li><span class="left fwzzL">我们知道</span><span class="left fwzzR">　　对待加盟商的不仅仅是利益，而是我们的诚意、爱心与责任心</span></li>
                        <li><span class="left fwzzL">我们坚守</span><span class="left fwzzR">　　"服务从心开始"——是我们全体赛维人对客户的共同承诺!</span></li>
                    </ul>
                    <div class="leftTel"><img src="/frontend/images/leftTel.png"/></div>
                </div>
            </div>
            <div class="pCon left">
                <!--<div><img src="/Public/images/cdn1.jpg" /></div>-->
                <div class=" heightX"></div>
                <div class="position">您的当前位置：<a href="http://www.cnsunway.com/">主页</a> &gt; <a href="/html/zoujinsaiwei/">走进赛维</a> &gt; <a href="/html/zoujinsaiwei/xiangmugaishu/">项目概述</a> &gt; </div>
                <hr style="border-bottom: 1px solid #ccc;margin: 20px 0;"/>
                <div> <a href="/swt/?{dede:rand/}" target="_blank"><img src="/frontend/images/acdn22.gif" width="880"/></a></div>


                <br/>
                <div class="article">
                    <div align="center">
                        <!-- <h2 style="font-size:16px;">走进赛维  /  项目概述</h2>-->
                        <h2 style="font-size:16px;">赛维洗衣服务集团有限公司</h2>
                    </div>
                    <br/>
                    <div> <h2 align="center">
                            &nbsp;</h2>
                        &nbsp;<br/>
                        赛维洗衣服务集团（简称：赛维集团）由赛维品牌创始人吴显胜先生于1994年创立于上海。现已发展成为集品牌管理、运营服务、营销推广、人才管理、干洗直营与特许经营、O2O洗衣平台、奢侈品护理、洗涤设备研发制造、洗涤技术服务与培训、赛维到家终端物流和集团干洗金融等为一体的综合型现代化服务集团。<br/>
                        赛维集团，上海总部大楼面积达众多多平方米，构建了一个庞大的综合管理运营体系。并分别在全国重点省会的中心城市5A级写字楼设立全国服务分公司，承担全国区域门店的营销服务职能，不断强化赛维洗衣品牌在终端消费者心目中的影响力、美誉度，为区域终端提供一站式、强有力的品牌营销推广支持。<br/>
                        通过多年的开拓创新，不断斩获各类荣誉百余项：中美企业峰会商业模式创新金奖，中国具投资价值十大竞争力洗衣连锁品牌，全国消费者放心品牌，全国十佳洗涤企业，中国质量万里行质量、服务信誉跟踪单位，全国妇女&ldquo;半边天&rdquo;洗衣连锁项目指定运营单位， CCTV发现之旅《创业之星》栏目联合运营伙伴，中国商业联合会洗染专业委员会副主任单位等。<br/>
                        &ldquo; 赛维洗衣，责任 &rdquo;，赛维集团始终坚持将阳光、时尚、健康、便捷的品牌形象深入到每个角落，服务广大消费者与创业合作伙伴，同时遵循现代企业管理制度，不断发展、完善、整合行业内外资源，为社会做出更多贡献，立志打造中国人家喻户晓的干洗品牌，并持续推动行业健康有序发展。<br/>
                    </div>

                    <div class="pConT" id="zl">
                        <p style="font-size:22px; text-align:center; font-weight:bold">如何获取？两种方式</p>
                        <div style="float:left; width:400px;margin-left:20px; font-weight:bold">方式一：填写留言直接获取</div><div style="float:left; width:400px;margin-left:20px; font-weight:bold">方式二：在线加盟顾问一对一索要</div>
                        <div class="way1 left" style=" margin-left:20px;">
                            <p class="way-text">请如实填写以下内容</p>
                            <form action="/plus/enroll.php" method="post">

                                <p>姓名：<input type="text" name="name" value=""/></p>
                                <p>电话：<input type="text" name="tel" value=""/></p>
                                <p>地址：<input type="text" name="address" value=""/></p>
                                <p style="margin-top:20px; text-align:center; padding-left:50px;"><input type="submit" class="button" style=" background:#FD7A2E; border:none; width:80px; color:#FFF;" value="确定"/>
                                    <input type="reset" class="button" style=" background:#FD7A2E; border:none; width:80px; color:#FFF;" value="重置"/>
                                </p>
                            </form>
                        </div>
                        <div class="way1 left" style=" margin-left:20px;">
                            <p style=" font-size:18px;">免费热线：</p>
                            <p style="font-size:22px; color:#D63611; font-weight:bold">400-619-7077</p>
                            <p>在线客服：08:00-23:00 <a href="/swt/" target="_blank" style=" background:#FD7A2E; border:none; width:40px; color:#FFF; float:none; padding:5px 10px;" class="button">立即索要</a></p>
                        </div>

                    </div>

                    <div style="text-align:center"> <a href="/swt/" target="_blank"><img src="/frontend/images/qq.gif"/></a>　　<a href="/swt/" target="_blank"><img src="/frontend/images/phone.gif"/></a></div>
                </div>
                <div style="margin-top:20px;"><a href="/swt/" target="_blank"><img src="/frontend/images/listf.jpg"/></a></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <hr/>
    <div class="heightX"></div>
@stop