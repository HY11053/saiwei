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
                <div class="position">您的当前位置：<a href="http://web.archive.org/web/20180822041001/http://www.cnsunway.com/">主页</a> &gt; <a href="/web/20180822041001/http://cnsunway.com/html/xinwenzhongxin/">新闻中心</a> &gt; <a href="/web/20180822041001/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/">集团新闻</a> &gt; 赛维集团泰斗级专家舒奇老师亲身说法指导行业洗涤技术升级</div>
                <hr style="border-bottom: 1px solid #ccc;margin: 20px 0;">
                <div><a href="http://web.archive.org/web/20180822041001/http://www.cnsunway.com/zt/getmDialog/?XMSJ"><img src="/web/20180822041001im_/http://cnsunway.com/Public/images/acdn1.gif" width="880"></a></div>
                <hr style="border-bottom: 1px solid #ccc;margin: 20px 0;">
                <h2 style="font-size:20px; color:#D23735; text-align:center; font-weight: bold; height:60px;">赛维集团泰斗级专家舒奇老师亲身说法指导行业洗涤技术升级</h2>
                <div class="pConT">

                    <div>
                        <div style="text-align: center;">
                            &nbsp;</div>
                        <div style="text-align: center;">
                            &nbsp;<img alt="" src="/web/20180822041001im_/http://cnsunway.com/uploads/allimg/180530/9-1P5301529253C.jpg" style="width: 800px; height: 531px;"></div>
                        &nbsp; &nbsp; &nbsp; &nbsp; 初夏的上海，赛维集团专家级顾问、全国洗染标准化技术委员会委员，中国商业联合会洗染专业委员会常务副主任、中国商业联合会洗染业专家委员会副主任，《中国洗衣》期刊副主编舒奇老师莅临赛维总部，指导开展针对于行业洗衣技术培训。参加此次技术培训会有赛维集团运营事业部总裁张增先生、赛维集团部分加盟商代表、赛维运营服务技术岗的代表老师，以及行业相关领导及部分随性人员一起参加了本次行业洗衣技术培训分享会。本着践行环保干洗、健康干洗的可持续发展精神，舒奇老师将自己在行业里数十年积累提炼的经营及技术智慧完全敞开的与参会人员分享。在舒奇老师看来，每一位加盟创业者都是整个洗染行业的一张名片，一张招牌，代表的是我们整个行业在新的历史时期新的发展环境之下应该承担的历史价值和社会责任。所以作为行业的领导品牌，我们有更大的责任和义务引领行业的每一次技术革新升级。让每一位加盟商创业伙伴都能学到更为前沿更为先进的干洗经营理念和技术。
                        <div style="text-align: center;">
                            <img alt="" src="/web/20180822041001im_/http://cnsunway.com/uploads/allimg/180530/9-1P53015294C10.jpg" style="width: 800px; height: 531px;"></div>
                        &nbsp;<br>
                        &nbsp; &nbsp; &nbsp; &nbsp; 舒奇老师从标准化、流程及工艺等洗衣技术上阐述了当下创新技术运用。在现场利用课件工具模式讲解各个环节的流程及重要。参加培训的各老师及学员，认真听讲，主动交流，积极发言，互动良好，气氛活泼，现场互动讲解推动培训活动的高潮跌宕。不仅如此，舒奇老师还向大家分享了从洗染业基本知识、洗涤工艺基础到服装洗涤事故预防，再到干洗、去渍技术等专业的技能创新运用，让大家增长了关于纺织品与服装洗涤实用技术方面的知识，并且实践运用到日常的洗衣经营管理当中去。
                        <div style="text-align: center;">
                            <img alt="" src="/web/20180822041001im_/http://cnsunway.com/uploads/allimg/180530/9-1P53015295KQ.jpg" style="width: 800px; height: 600px;"><br>
                            <br>
                            <img alt="" src="/web/20180822041001im_/http://cnsunway.com/uploads/allimg/180530/9-1P530153009125.jpg" style="width: 800px; height: 600px;"><br>
                            &nbsp;</div>
                        &nbsp; &nbsp; &nbsp; &nbsp;在研讨阶段，舒奇老师接受了学员的提问，并一一解答，用图形模式解答关键技术的运用，这些技术，大家不仅提高了对各自岗位的认知能力和操作能力，而且拓宽了在行业洗衣管理上的思路，受到了很多启发，学到了新的方法。
                        <div style="text-align: center;">
                            <img alt="" src="/web/20180822041001im_/http://cnsunway.com/uploads/allimg/180530/9-1P530152521a8.jpg" style="width: 779px; height: 594px;"></div>
                        &nbsp;<br>
                        &nbsp; &nbsp; &nbsp; &nbsp; 舒奇，作为赛维集团泰斗级专家，始终在行业标准化及技术创新领域里潜心耕耘。赛维集团同样如此，24年以来初心未变，始终坚持“赛维洗衣，责任第一”的经营服务理念，形成“品质标准化、经营连锁化、服务规范化、通讯网络化”的经营管理新格局，并不断结合市场主流思想，创新健康洗衣模式，将品牌锻造回归到人文关怀、消费者健康之上，从根本上切实支撑加盟商创业伙伴的财富梦想。<br>
                        &nbsp;<br>
                        &nbsp;<br>
                        &nbsp;<br>
                        &nbsp;<br>

                    </div>



                    <div class="clear"></div>
                    <div style="text-align:center"> <a href="http://web.archive.org/web/20180822041001/http://www.cnsunway.com/zt/getmDialog/" rel="nofollow" target="_blank"><img src="/web/20180822041001im_/http://cnsunway.com/Public/images/qq.gif"></a>　　<a href="/web/20180822041001/http://cnsunway.com/swt/" target="_blank"><img src="/web/20180822041001im_/http://cnsunway.com/Public/images/phone.gif"></a></div>
                    <div class="heightX"></div>
                </div>

                <div class="pages">
                    <div class="prev left">上一篇：<a href="/web/20180822041001/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/911.html">高端干洗店加盟品牌，赛维更锁定中高端客户</a> </div>
                    <div class="next left">下一篇：没有了 </div>
                </div>
                <div class="mininav">
                    <a href="javascript:" onclick="jscript:window.external.AddFavorite(document.location.href,document.title);"><img src="/web/20180822041001im_/http://cnsunway.com/Public/images/scbz.gif"></a>　<a href="/web/20180822041001/http://cnsunway.com/html/zoujinsaiwei/pinpaijianjie/"><img src="/web/20180822041001im_/http://cnsunway.com/Public/images/swjs.gif"></a>　<a href="/web/20180822041001/http://cnsunway.com/html/lianxiwomen/shanghaizongbu/"><img src="/web/20180822041001im_/http://cnsunway.com/Public/images/cclx.gif"></a>　<a href="/web/20180822041001/http://cnsunway.com/"><img src="/web/20180822041001im_/http://cnsunway.com/Public/images/fhsy.gif"></a>
                </div>
                <div class="heightX"></div>
                <div class="acticleRdgz">
                    <div class="articleli left">
                        <div class="articlelitj">猜<br>您<br>喜<br>欢</div>
                        <ul style="text-align: left;padding-left: 50px;">
                            <li><a href="/web/20180822041001/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/1014.html" target="_blank">赛维集团泰斗级专家舒奇老师亲身说法指导行业洗</a></li>
                            <li><a href="/web/20180822041001/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/896.html" target="_blank">赛维集团告诉你干洗店成本如何合理控制</a></li>
                            <li><a href="/web/20180822041001/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/911.html" target="_blank">高端干洗店加盟品牌，赛维更锁定中高端客户</a></li>
                            <li><a href="/web/20180822041001/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/910.html" target="_blank">赛维，垂范打造中国干洗店加盟高效服务系统</a></li>
                            <li><a href="/web/20180822041001/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/907.html" target="_blank">赛维洗衣告诉你：开干洗加盟店到底赚不赚钱？</a></li>
                            <li><a href="/web/20180822041001/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/905.html" target="_blank">赛维告诉你怎么保存清洁桑蚕丝才是最为合适的！</a></li>

                        </ul>
                    </div>
                    <div class="articleli left">
                        <div class="articlelitj">点<br>击<br>排<br>行</div>
                        <ul style="text-align: left;padding-left: 50px;">
                            <li><a href="/web/20180822041001/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/374.html" target="_blank">品牌升级过后，赛维洗衣都发生了哪些变化？</a></li>
                            <li><a href="/web/20180822041001/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/363.html" target="_blank">消费升级时代，看赛维洗衣的品牌化升级</a></li>
                            <li><a href="/web/20180822041001/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/379.html" target="_blank">赛维洗衣：踏踏实实做品牌</a></li>
                            <li><a href="/web/20180822041001/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/38.html" target="_blank">赛维干洗设备--干洗加盟店成功利器</a></li>
                            <li><a href="/web/20180822041001/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/905.html" target="_blank">赛维告诉你怎么保存清洁桑蚕丝才是最为合适的！</a></li>
                            <li><a href="/web/20180822041001/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/429.html" target="_blank">赛维洗衣 2017品牌跃迁升级</a></li>


                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="clear"></div>
    <hr/>
    <div class="heightX"></div>
@stop