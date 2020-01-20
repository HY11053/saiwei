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
                <div class="position">您的当前位置：<a href="http://web.archive.org/web/20180822020910/http://www.cnsunway.com/">主页</a> &gt; <a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/">新闻中心</a> &gt; <a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/">集团新闻</a> &gt; </div>
                <hr style="border-bottom: 1px solid #ccc;margin: 20px 0;">
                <div><a href="javascript:;" onclick="swt()" target="_blank"><img src="/web/20180822020910im_/http://cnsunway.com/Public/images/listp.jpg"></a></div>
                <div class="listP">
                    <ul>
                        <li>
                            <div class="listP-t left">
                                <a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/1014.html" target="_blank">
                                    <img src="/web/20180822020910im_/http://cnsunway.com/uploads/allimg/180530/9-1P530152411I6-lp.jpg" width="160" height="140">
                                </a>
                            </div>
                            <div class="listP-text left">
                                <h2><a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/1014.html" target="_blank">赛维集团泰斗级专家舒奇老师亲身说法指导行业洗涤技术升级</a></h2>
                                <p>　　初夏的上海，赛维集团专家级顾问、全国洗染标准化技术委员会委员，中国商业联合会洗染专业委员会常务副主任、中国商业联合会洗染业专家委员会副主任，《中国洗衣》期刊副主编舒奇老师莅临赛维总部，指导开展针对于行业洗衣技术培训。参加此次技术培训会有赛...[<a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/1014.html" target="_blank">详细</a>]</p>
                            </div>
                        </li><li>
                            <div class="listP-t left">
                                <a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/896.html" target="_blank">
                                    <img src="/web/20180822020910im_/http://cnsunway.com/uploads/allimg/180425/9-1P4251051461L-lp.png" width="160" height="140">
                                </a>
                            </div>
                            <div class="listP-text left">
                                <h2><a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/896.html" target="_blank">赛维集团告诉你干洗店成本如何合理控制</a></h2>
                                <p>　　干洗店加盟成本是很多运营者都应该要考虑到的问题， 干洗店成本 应该怎么控制呢？赛维干洗加盟品牌认为， 干洗店成本 要科学合理的控制，取决的因素有很多，比如品牌、选址等，接下来赛维干洗详细为您解说干洗店加盟成本如何控制！ 1、加盟行业知名品牌 干洗...[<a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/896.html" target="_blank">详细</a>]</p>
                            </div>
                        </li><li>
                            <div class="listP-t left">
                                <a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/911.html" target="_blank">
                                    <img src="/web/20180822020910im_/http://cnsunway.com/uploads/180504/9-1P5041032542b.jpg" width="160" height="140">
                                </a>
                            </div>
                            <div class="listP-text left">
                                <h2><a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/911.html" target="_blank">高端干洗店加盟品牌，赛维更锁定中高端客户</a></h2>
                                <p>　　如何把干洗店的经营利润提高到最大化？相必这是很多人苦苦思考的一个问题。其实，如果把利润坐上去，一个很重要的关键就在于博取中高消费层次的消费者前来消费，就在于选择好的高端品牌进行 干洗店加盟 。 一般来说，中高消费层次的消费者，往往对价格不是很...[<a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/911.html" target="_blank">详细</a>]</p>
                            </div>
                        </li><li>
                            <div class="listP-t left">
                                <a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/910.html" target="_blank">
                                    <img src="/web/20180822020910im_/http://cnsunway.com/uploads/180504/9-1P5041032542b.jpg" width="160" height="140">
                                </a>
                            </div>
                            <div class="listP-text left">
                                <h2><a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/910.html" target="_blank">赛维，垂范打造中国干洗店加盟高效服务系统</a></h2>
                                <p>　　目前中国 干洗店加盟 市场品牌众多，呈现出的表面行同质化竞争现象十分严重，比如对于 干洗店加盟 扶持政策方面可谓大同小异，加盟竞争大搞价格战，但是要真正把 干洗店加盟 扶持政策落到实处，就必须要建立真正高效的 干洗店加盟 服务管理系统，就必须建立...[<a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/910.html" target="_blank">详细</a>]</p>
                            </div>
                        </li><li>
                            <div class="listP-t left">
                                <a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/907.html" target="_blank">
                                    <img src="/web/20180822020910im_/http://cnsunway.com/uploads/180503/9-1P503092950U9.jpg" width="160" height="140">
                                </a>
                            </div>
                            <div class="listP-text left">
                                <h2><a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/907.html" target="_blank">赛维洗衣告诉你：开干洗加盟店到底赚不赚钱？</a></h2>
                                <p>　　开干洗加盟店到底赚不赚钱?赛维相信对于这个问题很多人都想知道。那么赛维洗衣就带大家了解一下这个方面。首先赚钱的行业必须具备以下几个显著特征：低风险、高利润、操作简单、管理方便、客户稳定等，只要具备了这些特点，就可以说是一个完美的赚钱行业了，...[<a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/907.html" target="_blank">详细</a>]</p>
                            </div>
                        </li><li>
                            <div class="listP-t left">
                                <a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/905.html" target="_blank">
                                    <img src="/web/20180822020910im_/http://cnsunway.com/uploads/180502/9-1P502162133D2-lp.jpg" width="160" height="140">
                                </a>
                            </div>
                            <div class="listP-text left">
                                <h2><a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/905.html" target="_blank">赛维告诉你怎么保存清洁桑蚕丝才是最为合适的！</a></h2>
                                <p>　　现在的天气越来越热了，相信大家在衣物布料和床上用品的选择上，都更加倾向于桑蚕丝。在往年都会出现不少人把自己心爱的桑蚕丝衣物被洗坏的时候，那么桑蚕丝衣服究竟该如何进行清洗，赛维今天就告诉大家桑蚕丝服装清洁保存的注意事项； 1.桑蚕丝服装，首先绝...[<a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/905.html" target="_blank">详细</a>]</p>
                            </div>
                        </li><li>
                            <div class="listP-t left">
                                <a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/901.html" target="_blank">
                                    <img src="/web/20180822020910im_/http://cnsunway.com/uploads/allimg/180427/9-1P42G11959131-lp.jpg" width="160" height="140">
                                </a>
                            </div>
                            <div class="listP-text left">
                                <h2><a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/901.html" target="_blank">赛维洗衣：如何经营好一家洗衣店 ？</a></h2>
                                <p>　　近年来，随着经济发展和人们生活水平的提高，洗衣行业得到了迅速的发展，各种各样的洗衣店出现在了我们的眼里。现在开洗衣店，虽然有洗衣连锁中心的全方位的支持，但是要知道，决定干洗店最终是否赚钱的还是经营，那么对于开洗衣店的来说，如何才能经营好一...[<a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/901.html" target="_blank">详细</a>]</p>
                            </div>
                        </li><li>
                            <div class="listP-t left">
                                <a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/890.html" target="_blank">
                                    <img src="/web/20180822020910im_/http://cnsunway.com/uploads/allimg/180423/9-1P423133533D9-lp.jpg" width="160" height="140">
                                </a>
                            </div>
                            <div class="listP-text left">
                                <h2><a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/890.html" target="_blank">赛维集团干洗店加盟品牌：选址好促使干洗店利润节节攀升！</a></h2>
                                <p>　　干洗店加盟 利润的影响因素很多，其中就有业务量的影响，即客源影响。客源来自哪里?自然是来自干洗店周边人群，所以，干洗加盟店的选址非常重要。那么干洗店选址该怎么选呢?赛维集团 干洗店加盟 品牌为您解析干洗店选址的几个原则： 人群聚集 消费要有人才能...[<a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/890.html" target="_blank">详细</a>]</p>
                            </div>
                        </li><li>
                            <div class="listP-t left">
                                <a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/887.html" target="_blank">
                                    <img src="/web/20180822020910im_/http://cnsunway.com/uploads/allimg/180330/1-1P33012124S07.jpg" width="160" height="140">
                                </a>
                            </div>
                            <div class="listP-text left">
                                <h2><a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/887.html" target="_blank"><b>赛维集团召开洗涤装备环保技术升级研讨会</b></a></h2>
                                <p>　　人勤春来早，扬鞭马蹄疾。为了积极响应国家环保政策，赛维集团对洗涤装备环保方面高度重视，也是本着对赛维加盟创业者负责任的态度，今日赛维邀请中国轻工机械协会洗涤装备分会常务副秘书长沈克明莅临赛维总部，共同广泛探讨洗染行业未来发展思路，开展针对...[<a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/887.html" target="_blank">详细</a>]</p>
                            </div>
                        </li><li>
                            <div class="listP-t left">
                                <a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/886.html" target="_blank">
                                    <img src="/web/20180822020910im_/http://cnsunway.com/uploads/allimg/180316/1-1P316135Z00-L.jpg" width="160" height="140">
                                </a>
                            </div>
                            <div class="listP-text left">
                                <h2><a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/886.html" target="_blank"><b> 闵行区人大主任带企业调研团莅临赛维集团调研视察工作</b></a></h2>
                                <p>　　闵行区人大主任带领企业调研团莅临赛维集团调研视察工作 春雨绵绵，大地复苏，在这生机勃勃的季节，我们也迎来了尊贵的客人。3月15日的上午，在闵行区人大常委会主任庞竣的带领下，闵行区人大常委会办公室主任张珺、梅陇镇副镇长任伟萍等重要领导组成的企业...[<a href="/web/20180822020910/http://cnsunway.com/html/xinwenzhongxin/jituanxinwen/886.html" target="_blank">详细</a>]</p>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="s-page"><li>首页</li>
                    <li class="thisclass">1</li>
                    <li><a href="list_19_2.html">2</a></li>
                    <li><a href="list_19_3.html">3</a></li>
                    <li><a href="list_19_4.html">4</a></li>
                    <li><a href="list_19_5.html">5</a></li>
                    <li><a href="list_19_2.html">下一页</a></li>
                    <li><a href="list_19_5.html">末页</a></li>
                    <li><span class="pageinfo">共 <strong>5</strong>页<strong>49</strong>条</span></li>

                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <hr/>
    <div class="heightX"></div>
@stop