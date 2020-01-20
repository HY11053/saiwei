@extends('frontend.frontend')
@section('title'){{config('app.title')}}@stop
@section('keywords'){{config('app.keywords')}}@stop
@section('description'){{config('app.description')}}@stop
@section('headlibs')
    <meta property="og:type" content="image"/>
    <meta property="og:image" content="http://www.cnsunway.com/swlogo.jpg"/>
    <link href="/frontend/css/index.css" rel="stylesheet" type="text/css"/>
    <link href="/frontend/css/index2.css" rel="stylesheet" type="text/css"/>
    <meta name="mobile-agent" content="format=html5; url={{str_replace('www.','m.',config('app.url'))}}">
    <meta http-equiv="mobile-agent" content="format=wml; url={{str_replace('www.','m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=xhtml; url={{str_replace('www.','m.',config('app.url'))}}" />
    <meta http-equiv="mobile-agent" content="format=html5; url={{str_replace('www.','m.',config('app.url'))}}" />
    <link rel="alternate" media="only screen and(max-width: 640px)" href="{{str_replace('www.','m.',config('app.url'))}}" >
    <link rel="canonical" href="{{config('app.url')}}"/>
@stop
@section('main')
    <!--banner-->
    <div class="banner" style="background:url(/frontend/images/b180427.jpg) no-repeat top center"> <a href="javascript:void(0)" class="unslider-arrow prev" style="position:absolute; margin-top:175px; left:150px; z-index:1"> <img src="/frontend/images/prev.png"/></a> <a href="javascript:void(0)" class="unslider-arrow next" style="position:absolute; margin-top:175px; right:150px; z-index:1"> <img src="/frontend/images/next.png"/></a>
        <ul>
            <li style=" background:url(/frontend/images/b180427.jpg) no-repeat top center; height:500px;" onclick="window.open('/swt')"></li>
            <li style=" background:url(/frontend/images/b180402.jpg) no-repeat top center; height:500px; cursor:pointer" onclick="window.open('/zt/20180402/?XMSJ_BANNER')"></li>
            <li style=" background:url(/frontend/images/banner20170615.jpg) no-repeat top center; height:500px; cursor:pointer" onclick="openZoosUrl('chatwin','&amp;e=banner_20170615');return false;"></li>
            <li style=" background:url(/frontend/images/daka.jpg) no-repeat top center; height:500px;" onclick="window.open('/swt')"></li>
            <li style=" background:url(/frontend/images/nb1.jpg) no-repeat top center; height:500px; cursor:pointer" onclick="window.open('/swt')"></li>
        </ul>
    </div>
    <!--内容-->
    <div class="clear"></div>
    <div class="hotNav">
        <div class="box">
            <li class="hot" style="line-height:35px; font-size:20px;  font-weight:bold; background:#DFDFDF">热 门<br/>
                类 别</li>
            <li class="h hot1" style="cursor:pointer" onclick="window.open('/html/zoujinsaiwei/xiangmugaishu/')"><a href="http://www.cnsunway.com/html/zoujinsaiwei/xiangmugaishu/">项目概述</a></li>
            <li class="h hot2" style="cursor:pointer" onclick="window.open('/html/jiamengyoushi/yinglimoshi/')"><a href="http://www.cnsunway.com/html/jiamengyoushi/yinglimoshi/" class="black">盈利模式</a></li>
            <li class="h hot3" style="cursor:pointer" onclick="window.open('/html/chenggonganli/')"><a href="http://www.cnsunway.com/html/chenggonganli/">成功案例</a></li>
            <li class="h hot4" style="cursor:pointer" onclick="window.open('/html/yingshizhongxin/')"><a href="http://www.cnsunway.com/html/yingshizhongxin/">视频中心</a></li>
            <li class="h hot5" style="cursor:pointer" onclick="window.open('/html/fuwuzhichi/')"><a href="http://www.cnsunway.com/html/fuwuzhichi/">服务支持</a></li>
            <li class="h hot6" style="cursor:pointer" onclick="window.open('/html/touzifangan/')"><a href="http://www.cnsunway.com/html/touzifangan/">投资规模</a></li>
            <li class="h hot7" style="cursor:pointer" onclick="window.open('/html/woyaojiameng/jiamengliucheng/')"><a href="http://www.cnsunway.com/html/woyaojiameng/jiamengliucheng/">加盟流程</a></li>
            <li class="h hot8" style="cursor:pointer" onclick="window.open('/html/woyaojiameng/touzichengben')"><a href="http://www.cnsunway.com/html/woyaojiameng/touzichengben">投资成本</a></li>
            <li class="h hot9" style="cursor:pointer" onclick="window.open('/html/touzifangan/touzihuibao/')"><a href="http://www.cnsunway.com/html/touzifangan/touzihuibao/">投资回报</a></li>
            <li class="h hot10" style="cursor:pointer" onclick="window.open('/html/fuwuzhichi/badamianfei/')"><a href="http://www.cnsunway.com/html/fuwuzhichi/badamianfei/">八大支持</a></li>
            <li class="h hot11" style="cursor:pointer" onclick="window.open('/html/zoujinsaiwei/fazhanlicheng/')"><a href="http://www.cnsunway.com/html/zoujinsaiwei/fazhanlicheng/">品牌发展</a></li>
            <li class="h hot12" style="cursor:pointer" onclick="window.open('/html/changjianwenti/')"><a href="http://www.cnsunway.com/html/changjianwenti/">常见问题</a></li>
            <li class="h hot13" style="cursor:pointer" onclick="window.open('/html/zoujinsaiwei/weijigongguan/')"><a href="http://www.cnsunway.com/html/zoujinsaiwei/weijigongguan/">危机公关</a></li>
            <!--<li class="hot14"><a href="">项目概述</a></li>-->
        </div>
    </div>
    <div class="content">
        <div class="box">
            <div style="width:815px; float:left">
                <div style="overflow:hidden">
                    <div class="islide left"> <script language="javascript">
                            linkarr = new Array();
                            picarr = new Array();
                            textarr = new Array();
                            var swf_width=343;
                            var swf_height=364;
                            //文字颜色|文字位置|文字背景颜色|文字背景透明度|按键文字颜色|按键默认颜色|按键当前颜色|自动播放时间|图片过渡效果|是否显示按钮|打开方式
                            var configtg='0xffffff|0|0x4DB3A8|5|0xffffff|0xC5DDBC|0x000033|2|3|1|_blank';
                            var files = "";
                            var links = "";
                            var texts = "";
                            //这里设置调用标记
                            linkarr[1] = "/plus/view.php?aid=215";
                            picarr[1]  = "/frontend/images/1-15091Q00353450.jpg";
                            textarr[1] = "赛维影视中心为您提供各类个性化";
                            for(i=1;i<picarr.length;i++){
                                if(files=="") files = picarr[i];
                                else files += "|"+picarr[i];
                            }
                            for(i=1;i<linkarr.length;i++){
                                if(links=="") links = linkarr[i];
                                else links += "|"+linkarr[i];
                            }
                            for(i=1;i<textarr.length;i++){
                                if(texts=="") texts = textarr[i];
                                else texts += "|"+textarr[i];
                            }

                            document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');

                            document.write('<param name="movie" value="/templets/default/images/bcastr3.swf"><param name="quality" value="high">');

                            document.write('<param name="menu" value="false"><param name=wmode value="opaque">');

                            document.write('<param name="FlashVars" value="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&bcastr_config='+configtg+'">');

                            document.write('<embed src="/templets/default/images/bcastr3.swf" wmode="opaque" FlashVars="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&bcastr_config='+configtg+'&menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); document.write('</object>');
                        </script> </div>
                    <div class="inews left">
                        <dl>
                            <dt>
                                <h2 class="ibg"><span class="newHover"><a href="/html/xinwenzhongxin/jituanxinwen/">集团新闻</a></span> <span><a href="/html/xinwenzhongxin/meitibaodao/">媒体报道</a></span> <span><a href="/html/changjianwenti/">加盟资讯</a></span> <span><a href="/html/woyaojiameng/touzichengben/">投资成本</a></span></h2>
                            </dt>
                            <dd class="newlist">
                                @foreach($newslists as $newslist)
                                    @if($loop->first)
                                    <div class="imedia"> <div class="left imediahumb"><a href="/{{$newslist->arctype->real_path}}/{{$newslist->id}}.html" target="_blank"><img src="{{$newslist->litpic}}" alt="{{$newslist->title}}" width="140" height="100"/></a></div>
                                        <div class="left imediacon">
                                            <h3><a href="/{{$newslist->arctype->real_path}}/{{$newslist->id}}.html" target="_blank">{{$newslist->title}}</a></h3>
                                            <p>{{str_limit($newslist->description,50,'...')}}[<a href="/{{$newslist->arctype->real_path}}/{{$newslist->id}}.html" class="yellow">详情</a>]</p>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                                <ul>
                                    @foreach($newslists as $newslist)
                                        @if(!$loop->first)
                                            <li><a href="/{{$newslist->arctype->real_path}}/{{$newslist->id}}.html" title="{{$newslist->title}}" target="_blank">{{$newslist->title}}</a><span class="right">[{{date('Y-m-d',strtotime($newslist->created_at))}}]</span></li>
                                         @endif
                                    @endforeach
                                </ul>
                            </dd>
                            <dd class="newlist">
                                @foreach($meitinewslists as $meitinewslist)
                                    @if($loop->first)
                                        <div class="imedia"> <div class="left imediahumb"><a href="/{{$meitinewslist->arctype->real_path}}/{{$meitinewslist->id}}.html" target="_blank"><img src="{{$meitinewslist->litpic}}" alt="{{$meitinewslist->title}}" width="140" height="100"/></a></div>
                                            <div class="left imediacon">
                                                <h3><a href="/{{$meitinewslist->arctype->real_path}}/{{$meitinewslist->id}}.html" target="_blank">{{$meitinewslist->title}}</a></h3>
                                                <p>{{str_limit($meitinewslist->description,50,'...')}}[<a href="/{{$meitinewslist->arctype->real_path}}/{{$meitinewslist->id}}.html" class="yellow">详情</a>]</p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                <ul>
                                    @foreach($meitinewslists as $meitinewslist)
                                        @if(!$loop->first)
                                            <li><a href="/{{$meitinewslist->arctype->real_path}}/{{$meitinewslist->id}}.html" title="{{$meitinewslist->title}}" target="_blank">{{$meitinewslist->title}}</a><span class="right">[{{date('Y-m-d',strtotime($meitinewslist->created_at))}}]</span></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </dd>
                            <dd class="newlist">
                                @foreach($jmnews as $jmnew)
                                    @if($loop->first)
                                        <div class="imedia"> <div class="left imediahumb"><a href="/{{$jmnew->arctype->real_path}}/{{$jmnew->id}}.html" target="_blank"><img src="{{$jmnew->litpic}}" alt="{{$jmnew->title}}" width="140" height="100"/></a></div>
                                            <div class="left imediacon">
                                                <h3><a href="/{{$jmnew->arctype->real_path}}/{{$jmnew->id}}.html" target="_blank">{{$jmnew->title}}</a></h3>
                                                <p>{{str_limit($jmnew->description,50,'...')}}[<a href="/{{$jmnew->arctype->real_path}}/{{$jmnew->id}}.html" class="yellow">详情</a>]</p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                <ul>
                                    @foreach($jmnews as $jmnew)
                                        @if(!$loop->first)
                                            <li><a href="/{{$jmnew->arctype->real_path}}/{{$jmnew->id}}.html" title="{{$jmnew->title}}" target="_blank">{{$jmnew->title}}</a><span class="right">[{{date('Y-m-d',strtotime($jmnew->created_at))}}]</span></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </dd>
                            <dd class="newlist">
                                @foreach($touzinews as $touzinew)
                                    @if($loop->first)
                                        <div class="imedia"> <div class="left imediahumb"><a href="/{{$touzinew->arctype->real_path}}/{{$touzinew->id}}.html" target="_blank"><img src="{{$touzinew->litpic}}" alt="{{$touzinew->title}}" width="140" height="100"/></a></div>
                                            <div class="left imediacon">
                                                <h3><a href="/{{$touzinew->arctype->real_path}}/{{$touzinew->id}}.html" target="_blank">{{$touzinew->title}}</a></h3>
                                                <p>{{str_limit($touzinew->description,50,'...')}}[<a href="/{{$touzinew->arctype->real_path}}/{{$touzinew->id}}.html" class="yellow">详情</a>]</p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                <ul>
                                    @foreach($touzinews as $touzinew)
                                        @if(!$loop->first)
                                            <li><a href="/{{$touzinew->arctype->real_path}}/{{$touzinew->id}}.html" title="{{$touzinew->title}}" target="_blank">{{$touzinew->title}}</a><span class="right">[{{date('Y-m-d',strtotime($touzinew->created_at))}}]</span></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </dd>
                            <script type="text/javascript">
                                $(function(){
                                    $(".inews dd").hide().eq(0).show();
                                    $(".ibg span").hover(function(){
                                        $(this).addClass("newHover").siblings().removeClass("newHover");
                                        $(".inews dd").hide().eq($(this).index()).show();
                                    });
                                });
                            </script>
                        </dl>
                    </div>
                </div>
                <div class="jjjm">
                    <div class="jj left"><img src="/frontend/images/jj.jpg" width="150"/></div>
                    <div class="jjhot left">
                        <div style="margin-top:15px; margin-left:10px; height:99px; overflow:hidden"> <span class="jmbg"><a href="http://www.cnsunway.com/html/changjianwenti/feiyongwenda/472.html" target="_blank" title="2017年降低干洗店成本的方法有哪些">2017年降低干洗店成本的方法有哪</a></span>
                            <span class="jmbg"><a href="http://www.cnsunway.com/html/changjianwenti/feiyongwenda/477.html" target="_blank" title="干洗店成本的控制因素有哪些">干洗店成本的控制因素有哪些</a></span>
                            <span class="jmbg"><a href="http://www.cnsunway.com/html/changjianwenti/fuwuzhichi/566.html" target="_blank" title="西安开干洗店怎么样？市场前景如何？">西安开干洗店怎么样？市场前景如</a></span>
                            <span class="jmbg"><a href="http://www.cnsunway.com/html/changjianwenti/fuwuzhichi/567.html" target="_blank" title="洗店设备选择：赛维洗衣加盟实力强">洗店设备选择：赛维洗衣加盟实力</a></span>
                            <span class="jmbg"><a href="http://www.cnsunway.com/html/changjianwenti/fuwuzhichi/560.html" target="_blank" title="淡季一家小型干洗店一个月有多少利润？">淡季一家小型干洗店一个月有多少</a></span>
                            <span class="jmbg"><a href="http://www.cnsunway.com/html/changjianwenti/fuwuzhichi/540.html" target="_blank" title="赛维干洗店连锁加盟利润怎么样？">赛维干洗店连锁加盟利润怎么样？</a></span>
                        </div>
                        <div class="jjsearch">
                            <form action="http://www.cnsunway.com/plus/search.php" name="formsearch"  target="_blank">
                                <input type="text" name="keyword" style="width:365px; height:30px;"/>
                                <input type="hidden" name="kwtype" value="1">
                                <input type="hidden" name="searchtype" value="titlekeyword">
                                <input type="submit" class="jjs" value="搜索"/>
                                <a href="http://www.cnsunway.com/swt/" target="_blank"><img src="/frontend/images/askljzx.gif"></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div style="width:325px; float:left;margin-left:10px;">
                <div class="ivideo" style="height:239px;">
                    <dl>
                        <dt>
                            <h2 class="ibg"><span class="newHover"><a href="http://www.cnsunway.com/html/zoujinsaiwei/saiweihuanjing/">公司形象</a></span> </h2>
                        </dt>
                        <dd style="margin-top:-10px;">
                            <img src="/frontend/images/5592087788336.jpg!300X300.jpg" width="325" height="200"/>
                        </dd>
                    </dl>
                </div>
                <div class="itsfw">
                    <dl>
                        <dt>
                            <h2 class="ibg">
                                <p style=" font-size:18px; color:#FFF">★<a href="http://www.cnsunway.com/html/fuwuzhichi/" style="color:#FFF">赛维特色服务与支持</a></p>
                            </h2>
                        </dt>
                        <dd>
                            <li><span></span><a href="http://www.cnsunway.com/html/fuwuzhichi/" target="_blank">360度交钥匙工程</a></li>
                            <li><span></span><a href="http://www.cnsunway.com/html/fuwuzhichi/" target="_blank">知名商圈考察</a></li>
                            <li><span></span><a href="http://www.cnsunway.com/html/fuwuzhichi/" target="_blank">专业特色服务</a></li>
                            <li><span></span><a href="http://www.cnsunway.com/html/fuwuzhichi/" target="_blank">全新盈利模式</a></li>
                        </dd>
                    </dl>
                    <div style="text-align:center; height:40px; margin-top:5px;"><a href="http://www.cnsunway.com/swt/" target="_blank"><img src="/frontend/images/askljzx.gif"></a>　<a href="http://www.cnsunway.com/swt/" target="_blank"><img src="/frontend/images/asktel.gif"></a></div>
                </div>
            </div>
        </div>

        <!--案例-->

        <div class="clear"></div>
        <div class="heightX"></div>
        <div class="b1" style="padding-top:90px; height:690px;">

            <!--视频-->

            <div class="heightX"></div>
            <div class="box"><img src="/frontend/images/t1.gif" width="1150" usemap="#Map" border="0"/>
                <map name="Map" id="Map">
                    <area shape="rect" coords="959,36,1122,77" href="http://www.cnsunway.com/swt/" target="_blank"/>
                </map>
            </div>
            <div class="icy box">
                <div class="icychannel left">
                    <ul>

                        <li class="icychannelhover">
                            <a href="http://www.cnsunway.com/html/chenggonganli/eccy/">二次创业</a>
                        </li>

                        <li>
                            <a href="http://www.cnsunway.com/html/chenggonganli/bljz/">白领兼职</a>
                        </li>

                        <li>
                            <a href="http://www.cnsunway.com/html/chenggonganli/nmzf/">农民致富</a>
                        </li>

                        <li>
                            <a href="http://www.cnsunway.com/html/chenggonganli/dxs/">大学生创业</a>
                        </li>

                        <li>
                            <a href="http://www.cnsunway.com/html/chenggonganli/blh/">80后创业</a>
                        </li>

                        <li>
                            <a href="http://www.cnsunway.com/html/chenggonganli/nx/">女性致富</a>
                        </li>

                    </ul>
                </div>
                <!--1-->

                <div class="icycon left">
                    <ul id="icycongd1">
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/eccy/880.html" target="_blank"><img src="/frontend/images/1-1G201131H3F7.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/eccy/880.html" target="_blank" class="ye14">她复制大品牌的成功，赚钱就是这</a></p>
                                    <p>　　现在很多行业的生意都不好做，许多人都想找个赚钱的行业转行，由于14亿人洗衣市场的巨大，很多人士都纷纷投..[<a href="http://www.cnsunway.com/html/chenggonganli/eccy/880.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/eccy/878.html" target="_blank"><img src="/frontend/images/1-1G13013325Y22.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/eccy/878.html" target="_blank" class="ye14">她不做全职太太，选择加盟赛维干</a></p>
                                    <p>　　家住河南省郑州市的王先生一直从事房地产项目，收入颇丰，生活富足。王先生的爱人长期在家做全职太太，现在..[<a href="http://www.cnsunway.com/html/chenggonganli/eccy/878.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/eccy/876.html" target="_blank"><img src="/frontend/images/1-1G12910254Xb.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/eccy/876.html" target="_blank" class="ye14">有了赛维干洗大品牌支撑，我加盟</a></p>
                                    <p>　　我是在2017年的10月投资加盟的赛维干洗店，在没有开干洗店之前，一直和老公在当地一个企业老老实实的工作，..[<a href="http://www.cnsunway.com/html/chenggonganli/eccy/876.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/eccy/873.html" target="_blank"><img src="/frontend/images/1-1G12G33125504.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/eccy/873.html" target="_blank" class="ye14">开赛维干洗加盟店，坚持就会有成</a></p>
                                    <p>　　我是2016年11月开始开干洗店的。因为之前在服装厂上班，工资不高，后来了解到我们一个朋友开干洗店赚钱了，..[<a href="http://www.cnsunway.com/html/chenggonganli/eccy/873.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/eccy/870.html" target="_blank"><img src="/frontend/images/1-1G124131531525.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/eccy/870.html" target="_blank" class="ye14">干洗行业前景市场良好，加盟赛维</a></p>
                                    <p>　　赵先生是一位有创业梦想的中年人，做事果断，敢想敢做，在他身上，我们看到的是那份成熟与自信！赵先生有着..[<a href="http://www.cnsunway.com/html/chenggonganli/eccy/870.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/eccy/863.html" target="_blank"><img src="/frontend/images/1-1G12213560MB.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/eccy/863.html" target="_blank" class="ye14">赛维干洗加盟，更多90后创业的大</a></p>
                                    <p>　　近年来，每年毕业生人数不断增长，大学生工作难的问题一度上头条，毕业等于失业不再是一句玩笑话，很多大学..[<a href="http://www.cnsunway.com/html/chenggonganli/eccy/863.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/eccy/860.html" target="_blank"><img src="/frontend/images/1-1G11G04HaV.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/eccy/860.html" target="_blank" class="ye14">赛维洗衣好品牌，助她创业不艰辛</a></p>
                                    <p>　　创业可不是件简单的事，就拿开干洗加盟店来说吧，大家都觉得很好，市场稳定，利润也不错，但是就因为准入门..[<a href="http://www.cnsunway.com/html/chenggonganli/eccy/860.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/eccy/856.html" target="_blank"><img src="/frontend/images/1-1G115105S64a.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/eccy/856.html" target="_blank" class="ye14">机会留给有准备的人，赛维干洗成</a></p>
                                    <p>　　机会总是留给有准备的人。山东济南的江先生的成功来源于他对目标的执着和努力，选择加盟赛维干洗到现在生意..[<a href="http://www.cnsunway.com/html/chenggonganli/eccy/856.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/eccy/855.html" target="_blank"><img src="/frontend/images/1-1G1141419463N.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/eccy/855.html" target="_blank" class="ye14">充分认准赛维干洗加盟项目  下岗</a></p>
                                    <p>　　创业要选择最适合自己的行业。如今，很多人对于选择创业项目都十分迷茫，不敢创业，是因为有无数个不确定的..[<a href="http://www.cnsunway.com/html/chenggonganli/eccy/855.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/eccy/852.html" target="_blank"><img src="/frontend/images/1-1G113110610254.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/eccy/852.html" target="_blank" class="ye14">加盟赛维干洗，实现“高会计”到</a></p>
                                    <p>　　拥有好的商业眼光是创业成功的重要基础，江西南昌的高先生原来是他们当地一家企业的会计，在去年年初辞职创..[<a href="http://www.cnsunway.com/html/chenggonganli/eccy/852.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>

                    </ul>
                </div><!--2-->

                <div class="icycon left">
                    <ul id="icycongd2">
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/bljz/845.html" target="_blank"><img src="/frontend/images/1-1G10Q05302924.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/bljz/845.html" target="_blank" class="ye14">赛维员工加盟赛维干洗，工作、创</a></p>
                                    <p>　　我从事赛维洗衣服务集团广东分公司的投资加盟顾问工作，如今也成了赛维洗衣的加盟商，具有了赛维人的双重身..[<a href="http://www.cnsunway.com/html/chenggonganli/bljz/845.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/bljz/408.html" target="_blank"><img src="/frontend/images/1-1F609164014963.png" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/bljz/408.html" target="_blank" class="ye14">赛维洗衣NSW3507 凤岭天空店</a></p>
                                    <p>　　店铺编号：NSW3507 凤岭天空店 店铺地址：广西省南宁市青秀区盘古路2-8号龙凤首缘809号铺 店主：耿文波..[<a href="http://www.cnsunway.com/html/chenggonganli/bljz/408.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/bljz/409.html" target="_blank"><img src="/frontend/images/1-1F609163955P2.png" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/bljz/409.html" target="_blank" class="ye14">赛维洗衣NSW4753 华都景盛苑店</a></p>
                                    <p>　　店铺编号：NSW4753 华都景盛苑店 店铺地址：新疆自治区乌鲁木齐市米东区振兴北路华都景盛苑100号-01室 店主..[<a href="http://www.cnsunway.com/html/chenggonganli/bljz/409.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/bljz/410.html" target="_blank"><img src="/frontend/images/1-1F60916393QI.png" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/bljz/410.html" target="_blank" class="ye14">赛维洗衣NSW3858 府秀江南店</a></p>
                                    <p>　　店铺编号：NSW3858府秀江南店 店铺地址：山西省长治市城区捉马西大街府秀江南D5-10号 店主：岳扬..[<a href="http://www.cnsunway.com/html/chenggonganli/bljz/410.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/bljz/11.html" target="_blank"><img src="/frontend/images/1-150Q4102114947.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/bljz/11.html" target="_blank" class="ye14">NSW3157，事业与家庭的缔造者</a></p>
                                    <p>　　店号：NSW3157 店铺地址: 西昌路于与环城南路交叉路口中央丽城60号商铺 店铺开业日期：2015年5月9日 店主：..[<a href="http://www.cnsunway.com/html/chenggonganli/bljz/11.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/bljz/20.html" target="_blank"><img src="/frontend/images/1-150Q4100615305.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/bljz/20.html" target="_blank" class="ye14">路，就在你的脚下---记NSW2770店</a></p>
                                    <p>　　店号： NSW2770 地址：昆明市五华区茭菱路 88 号创意英国泰晤士大道 27 号 开业日期： 2015 年 2 月 5 日 ..[<a href="http://www.cnsunway.com/html/chenggonganli/bljz/20.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/bljz/21.html" target="_blank"><img src="/frontend/images/1-150Q4095J0646.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/bljz/21.html" target="_blank" class="ye14">NSW1999店美丽与智慧并存，白成</a></p>
                                    <p>　　店号：NSW1999 店址：贵州省黔西南都匀市龙里县的1999号 开业时间：2014年10月26日 店长：周玮英、邓洁 NSW..[<a href="http://www.cnsunway.com/html/chenggonganli/bljz/21.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/bljz/25.html" target="_blank"><img src="/frontend/images/1-150Q4100HD64.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/bljz/25.html" target="_blank" class="ye14">商贸公司老板加盟赛维，NSW3137</a></p>
                                    <p>　　店号：NSW3137店 店址：江西宜春泸州北路 开业时间：2015年5月2日 店主：马先生 成功的人，更懂得投资！一..[<a href="http://www.cnsunway.com/html/chenggonganli/bljz/25.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/bljz/234.html" target="_blank"><img src="/frontend/images/1-1G20414545LR-lp.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/bljz/234.html" target="_blank" class="ye14">NSW3893—一个朝着目标不断前进</a></p>
                                    <p>　　店号：NSW3893 一个努力朝着自己目标前进的人，整个世界都会为你让路 今天我们的主人公是来自于黑龙江省哈..[<a href="http://www.cnsunway.com/html/chenggonganli/bljz/234.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/bljz/254.html" target="_blank"><img src="/frontend/images/1-1G20415321J03-lp.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/bljz/254.html" target="_blank" class="ye14">贵州都匀再添新店，营业7天要开</a></p>
                                    <p>　　成功案例，店主:沈女士
                                        开业时间：2015年5月15日
                                        店铺编号：NSW3072
                                        店铺地址：贵州省凯里市博南路行政..[<a href="http://www.cnsunway.com/html/chenggonganli/bljz/254.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>

                    </ul>
                </div><!--3-->

                <div class="icycon left">
                    <ul id="icycongd3">
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/nmzf/865.html" target="_blank"><img src="/frontend/images/1-1G122140059495.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/nmzf/865.html" target="_blank" class="ye14">赛维干洗加盟，中年男人投资创业</a></p>
                                    <p>　　40岁这个尴尬的年纪，说年轻不年轻，说老又不老。没有年轻男人的冲劲，也没有从头再来的勇气。没有成熟男人..[<a href="http://www.cnsunway.com/html/chenggonganli/nmzf/865.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/nmzf/857.html" target="_blank"><img src="/frontend/images/1-1G11510560IB.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/nmzf/857.html" target="_blank" class="ye14">加盟赛维洗衣重振创业雄风，经营</a></p>
                                    <p>　　“加盟赛维洗衣项成为我这辈子一件比较幸运的事。”来自宁夏银川的石先生当谈起自己当初选择加盟赛维洗衣时..[<a href="http://www.cnsunway.com/html/chenggonganli/nmzf/857.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/nmzf/849.html" target="_blank"><img src="/frontend/images/1-1G10913200CK.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/nmzf/849.html" target="_blank" class="ye14">加盟赛维洗衣，开启人生新篇</a></p>
                                    <p>　　来自安徽合肥的江先生在前年的时候还是一个勤勤恳恳的工程施工技术人员，去年春天因为工伤，江先生不得不离..[<a href="http://www.cnsunway.com/html/chenggonganli/nmzf/849.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/nmzf/411.html" target="_blank"><img src="/frontend/images/1-1F60916391L00.png" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/nmzf/411.html" target="_blank" class="ye14">赛维洗衣NSW4969 朝阳店</a></p>
                                    <p>　　店铺编号：NSW4969 朝阳店 店铺地址：江西省宜春市袁州区朝阳路190号附10.11号 店主：文萍，陈艳红..[<a href="http://www.cnsunway.com/html/chenggonganli/nmzf/411.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/nmzf/412.html" target="_blank"><img src="/frontend/images/1-1F609163Z15J.png" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/nmzf/412.html" target="_blank" class="ye14">赛维洗衣NSW1989 秀峰店</a></p>
                                    <p>　　店铺编号：NSW1989 秀峰店 店铺地址：云南省文山市秀峰路143号 店主：杨成斌..[<a href="http://www.cnsunway.com/html/chenggonganli/nmzf/412.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/nmzf/15.html" target="_blank"><img src="/frontend/images/1-150Q4101J41E.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/nmzf/15.html" target="_blank" class="ye14">喜迎劳动节，NSW3119盛大开业！</a></p>
                                    <p>　　店号：NSW3119 店址：山东省日照市岚山区岚山街道胡家林村（岚山区水产局西500米） 开业时间：2015年4月30..[<a href="http://www.cnsunway.com/html/chenggonganli/nmzf/15.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/nmzf/24.html" target="_blank"><img src="/frontend/images/1-150Q4100UN29.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/nmzf/24.html" target="_blank" class="ye14">一鸣惊人，赛维洗衣红安店盛大开</a></p>
                                    <p>　　加盟店编号：NSW2668店 加盟店地址：黄冈市红安县城关镇陵园大道第二小学 开业时间：2015年2月3日 店长：王..[<a href="http://www.cnsunway.com/html/chenggonganli/nmzf/24.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/nmzf/89.html" target="_blank"><img src="/frontend/images/1-150625094301411-lp.png" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/nmzf/89.html" target="_blank" class="ye14">加盟商访谈：对话NSW2257号加盟</a></p>
                                    <p>　　为数多达约10000余家赛维洗衣的加盟店中，日进万金的自然不在少数，但是NSW2247号店11月8日开业当天，会员..[<a href="http://www.cnsunway.com/html/chenggonganli/nmzf/89.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/nmzf/90.html" target="_blank"><img src="/frontend/images/1-150Q4100501A3.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/nmzf/90.html" target="_blank" class="ye14">开业不到1小时 办卡客户金额已破</a></p>
                                    <p>　　加盟店编号：NSW2525 加盟店地址：广东省茂名市西粤南路111号大院25号商铺 开业时间：2015年1月9日9点 收衣..[<a href="http://www.cnsunway.com/html/chenggonganli/nmzf/90.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>

                    </ul>
                </div><!--4-->

                <div class="icycon left">
                    <ul id="icycongd4">
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/dxs/866.html" target="_blank"><img src="/frontend/images/1-1G12312510WW.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/dxs/866.html" target="_blank" class="ye14">加盟赛维干洗，让年轻人 创业变</a></p>
                                    <p>　　年轻人，不是只有进入企业才能发挥自己的作用，也不是只有在办公桌的一方天地才能完成自己的使命。现在的年..[<a href="http://www.cnsunway.com/html/chenggonganli/dxs/866.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/dxs/862.html" target="_blank"><img src="/frontend/images/1-1G12213522V06.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/dxs/862.html" target="_blank" class="ye14">选对干洗加盟实力品牌--赛维，创</a></p>
                                    <p>　　一名外国语学院毕业的女大学生，面对出国、外企这些人生途径上的诱惑，选择了放弃。凭着自己对事业的执着和..[<a href="http://www.cnsunway.com/html/chenggonganli/dxs/862.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/dxs/861.html" target="_blank"><img src="/frontend/images/1-1G11G0463TJ.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/dxs/861.html" target="_blank" class="ye14"> 梦想变成现实，加盟赛维干洗成</a></p>
                                    <p>　　尽管刚走出大学校门，可23岁的小杨却已创业当了半年多赛维干洗加盟店的小老板。说起大学生创业，她建议大学..[<a href="http://www.cnsunway.com/html/chenggonganli/dxs/861.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/dxs/858.html" target="_blank"><img src="/frontend/images/1-1G11613210Y60.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/dxs/858.html" target="_blank" class="ye14">没有相关经验，赛维干洗加盟店开</a></p>
                                    <p>　　我是毕业半年后就开始创业的。”常先生说，“我希望有更多的同龄人知道我的创业历程，从而也让他们相信，只..[<a href="http://www.cnsunway.com/html/chenggonganli/dxs/858.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/dxs/850.html" target="_blank"><img src="/frontend/images/1-1G110094559295.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/dxs/850.html" target="_blank" class="ye14">加盟赛维干洗搞创业 ，大学毕业</a></p>
                                    <p>　　对于很多简单创业的人来说，刘先生的创业经历可以算是丰富至极，从大学时代，他就有了勤工俭学的经历。正是..[<a href="http://www.cnsunway.com/html/chenggonganli/dxs/850.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/dxs/441.html" target="_blank"><img src="/frontend/images/1-1F620101534292.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/dxs/441.html" target="_blank" class="ye14">情侣豪情创业，洗衣成就梦想</a></p>
                                    <p>　　引言： 大学毕业了，几分喜悦，几分彷徨。。。。。 这不是一切的结束，这只是一种新的刚刚开始。。。 从此..[<a href="http://www.cnsunway.com/html/chenggonganli/dxs/441.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/dxs/413.html" target="_blank"><img src="/frontend/images/1-1F609163R3U3.png" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/dxs/413.html" target="_blank" class="ye14">赛维洗衣NSW2833 凤岗店</a></p>
                                    <p>　　店铺编号：NSW2833 凤岗店 店铺地址：广东省东莞市凤岗镇永盛北路（建行对面） 店主：廖浚文..[<a href="http://www.cnsunway.com/html/chenggonganli/dxs/413.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/dxs/414.html" target="_blank"><img src="/frontend/images/1-1F609163PRH.png" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/dxs/414.html" target="_blank" class="ye14">赛维洗衣NSW3384 金塔店</a></p>
                                    <p>　　店铺编号：NSW3384 金塔店 店铺地址：陕西韩城市金塔路与韩塬南路交叉口向南20米 店主：王璐..[<a href="http://www.cnsunway.com/html/chenggonganli/dxs/414.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/dxs/22.html" target="_blank"><img src="/frontend/images/1-150Q4101131G0.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/dxs/22.html" target="_blank" class="ye14">开春报喜，NSW2728店2个月办1700</a></p>
                                    <p>　　店铺编号：NSW2728店 店铺地址：江苏省盐城市亭湖区盐马路22号华兴商业综合楼 开业时间：1月28日 店长：周..[<a href="http://www.cnsunway.com/html/chenggonganli/dxs/22.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/dxs/92.html" target="_blank"><img src="/frontend/images/1-150Q4100204440.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/dxs/92.html" target="_blank" class="ye14">寒冷挡不住赚钱，赛维带给你温暖</a></p>
                                    <p>　　加盟店编号：NSW2718店 加盟店地址：吉林省长春市朝阳区地矿花园16栋102号 开业时间：目前处于试营业阶段 ..[<a href="http://www.cnsunway.com/html/chenggonganli/dxs/92.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>

                    </ul>
                </div><!--5-->

                <div class="icycon left">
                    <ul id="icycongd5">
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/blh/877.html" target="_blank"><img src="/frontend/images/1-1G13013113Q50.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/blh/877.html" target="_blank" class="ye14">加盟赛维干洗店，事业爱情双丰收</a></p>
                                    <p>　　有人说这个社会不是没有商机，而是缺乏发现商机的慧眼，赛维干洗店加盟连锁品牌的加盟商张萌对此很是赞同，..[<a href="http://www.cnsunway.com/html/chenggonganli/blh/877.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/blh/875.html" target="_blank"><img src="/frontend/images/1-1G12910211cA.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/blh/875.html" target="_blank" class="ye14">我们当地很需要赛维干洗加盟店，</a></p>
                                    <p>　　几年前偶然的一次聚会，听见一个朋友说他的某个亲戚在上海开干洗店赚钱买房了，当时有些不敢置信，因为在我..[<a href="http://www.cnsunway.com/html/chenggonganli/blh/875.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/blh/872.html" target="_blank"><img src="/frontend/images/1-1G12G3364YL.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/blh/872.html" target="_blank" class="ye14">加盟赛维干洗，投资成本回收快</a></p>
                                    <p>　　陕西市高新区的李先生以前是建材行业的一名员工，工资待遇一般，工作又苦又累，而且还没有多大的上升空间，..[<a href="http://www.cnsunway.com/html/chenggonganli/blh/872.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/blh/869.html" target="_blank"><img src="/frontend/images/1-1G12413114QJ.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/blh/869.html" target="_blank" class="ye14"> 告别三天两头出差的日子，加盟</a></p>
                                    <p>　　　辽宁锦州的曹先生之前是当地一家重型汽车配件销售人员，因为工作的需要经常需要去全国各地出差，而曹先生..[<a href="http://www.cnsunway.com/html/chenggonganli/blh/869.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/blh/864.html" target="_blank"><img src="/frontend/images/1-1G122135Z9117.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/blh/864.html" target="_blank" class="ye14">赛维洗衣加盟商感慨：生命太短没</a></p>
                                    <p>　　浑浑噩噩的过着每一天，也许是生活过于安逸，到了而立之年的我从未想过要拥有自己的一份事业。一年前和大学..[<a href="http://www.cnsunway.com/html/chenggonganli/blh/864.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/blh/848.html" target="_blank"><img src="/frontend/images/1-1G109131401355.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/blh/848.html" target="_blank" class="ye14">对传统夫妻干洗店说再见， 加盟</a></p>
                                    <p>　　张先生江西人，早年随妻子来江苏南京来创业。 六朝古都的“人物之俊彦，山川之灵秀”使得张先生深深地喜欢..[<a href="http://www.cnsunway.com/html/chenggonganli/blh/848.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/blh/417.html" target="_blank"><img src="/frontend/images/1-1F60915412S94.png" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/blh/417.html" target="_blank" class="ye14">赛维洗衣NSW2169 小勐拉店</a></p>
                                    <p>　　店铺编号：NSW2169 小勐拉店 店铺地址：缅甸小勐拉龙城酒店对面 店主：熊茜..[<a href="http://www.cnsunway.com/html/chenggonganli/blh/417.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/blh/416.html" target="_blank"><img src="/frontend/images/1-1F609153QB30.png" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/blh/416.html" target="_blank" class="ye14">赛维洗衣NSW6333 枫丹白鹭店</a></p>
                                    <p>　　店铺编号：NSW6333 枫丹白鹭店 店铺地址：福建省福州市晋安区新店镇秀峰路185号高佳苑三期4#1 店主：李春莲..[<a href="http://www.cnsunway.com/html/chenggonganli/blh/416.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/blh/415.html" target="_blank"><img src="/frontend/images/1-1F609153134a5.png" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/blh/415.html" target="_blank" class="ye14">赛维洗衣NSW5900 康达时代店</a></p>
                                    <p>　　店铺编号：NSW5900 康达时代店 店铺地址：天津市滨海新区大街66号 店主：康宁..[<a href="http://www.cnsunway.com/html/chenggonganli/blh/415.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/blh/8.html" target="_blank"><img src="/frontend/images/1-150Q410242K42.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/blh/8.html" target="_blank" class="ye14">心想客户，情系赛维--明星顾问付</a></p>
                                    <p>　　一个人所迸发出的力量，是不能够从体型、言语上断定的，这力量的迸发来源于一种自我节奏，这种自我的节奏在..[<a href="http://www.cnsunway.com/html/chenggonganli/blh/8.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>

                    </ul>
                </div><!--6-->

                <div class="icycon left">
                    <ul id="icycongd6">
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/nx/879.html" target="_blank"><img src="/frontend/images/1-1G201131154291.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/nx/879.html" target="_blank" class="ye14">她，年过半百，收获创业成功</a></p>
                                    <p>　　年过半百的她，是什么原因让她又充满创业的激情？走遍大江南北的她，又为何偏偏选择了洗衣行业？是她发现了..[<a href="http://www.cnsunway.com/html/chenggonganli/nx/879.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/nx/874.html" target="_blank"><img src="/frontend/images/1-1G12Q53511530.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/nx/874.html" target="_blank" class="ye14">感谢赛维干洗加盟， 我找到了人</a></p>
                                    <p>　　李婷，一个温柔的女人，但是在自己人生的舞台上，她是主宰者。但是在赛维洗衣的世界里，她是胜利者。..[<a href="http://www.cnsunway.com/html/chenggonganli/nx/874.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/nx/871.html" target="_blank"><img src="/frontend/images/1-1G12G33344126.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/nx/871.html" target="_blank" class="ye14">加盟赛维干洗，让我人生收获很多</a></p>
                                    <p>　　　我是在赛维干洗加盟总部与老公相识的，当时都还在学校还没有正式毕业，两人都在赛维干洗加盟总部实习，下..[<a href="http://www.cnsunway.com/html/chenggonganli/nx/871.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/nx/867.html" target="_blank"><img src="/frontend/images/1-1G1231255222I.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/nx/867.html" target="_blank" class="ye14">加盟赛维干洗只是偶然，迅速赚钱</a></p>
                                    <p>　　新产品应运新时代，品牌干洗市场上占得先机。来自浙江金华的刘女士正是因为有这样的先见之明，才会在创业路..[<a href="http://www.cnsunway.com/html/chenggonganli/nx/867.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/nx/859.html" target="_blank"><img src="/frontend/images/1-1G1161320062a.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/nx/859.html" target="_blank" class="ye14">加盟赛维干洗：家庭主妇的创业致</a></p>
                                    <p>　　挫折越多选择越正确，失败越多取得的成功越经得起考验。创业之路艰难而困苦，河南郑州的李女士的人生阅历相..[<a href="http://www.cnsunway.com/html/chenggonganli/nx/859.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/nx/854.html" target="_blank"><img src="/frontend/images/1-1G114142153Q1.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/nx/854.html" target="_blank" class="ye14">加盟不一样的赛维干洗，获得不一</a></p>
                                    <p>　　来自河北石家庄的钱女士在去年从所在的企业辞职后，没有再选择继续择业，而是选择加盟赛维干洗，通过开赛维..[<a href="http://www.cnsunway.com/html/chenggonganli/nx/854.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/nx/853.html" target="_blank"><img src="/frontend/images/1-1G113110TI60.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/nx/853.html" target="_blank" class="ye14">不甘平庸加盟赛维干洗，初尝甜头</a></p>
                                    <p>　　北京的蒋女士与丈夫离异后，多年来一直过着平淡的生活。“那时候我自己一个人在家，孩子在外地上大学，每天..[<a href="http://www.cnsunway.com/html/chenggonganli/nx/853.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/nx/851.html" target="_blank"><img src="/frontend/images/1-1G11009511LH.jpg" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/nx/851.html" target="_blank" class="ye14">开赛维洗衣加盟店，是她正确的选</a></p>
                                    <p>　　“加盟赛维洗衣，开成了赛维洗衣加盟店是我更近几年做的更正确的选择！”，说道加盟赛维洗衣的事情，王女士..[<a href="http://www.cnsunway.com/html/chenggonganli/nx/851.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/nx/418.html" target="_blank"><img src="/frontend/images/1-1F609163G6260.png" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/nx/418.html" target="_blank" class="ye14">赛维洗衣NSW3963 香樟水岸店</a></p>
                                    <p>　　店铺编号：NSW3963 香樟水岸店 店铺地址：重庆市永川新区金剑门口旁 店主：代玉秀..[<a href="http://www.cnsunway.com/html/chenggonganli/nx/418.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt><a href="http://www.cnsunway.com/html/chenggonganli/nx/419.html" target="_blank"><img src="/frontend/images/1-1F609163AJ34.png" width="260" height="271"/></a></dt>
                                <dd>
                                    <p style="text-align: center"><a href="http://www.cnsunway.com/html/chenggonganli/nx/419.html" target="_blank" class="ye14">赛维洗衣NSW1498 南湖游路店</a></p>
                                    <p>　　店铺编号：NSW1498 南湖游路店 店铺地址：湖南省岳阳市岳阳楼南湖油路岳州帝苑小区 店主：方朝霞..[<a href="http://www.cnsunway.com/html/chenggonganli/nx/419.html" target="_blank">详情</a>]</p>
                                </dd>
                            </dl>
                        </li>

                    </ul>
                </div>
                <script type="text/javascript">
                    $(function(){
                        new Marquee(
                            {
                                MSClass	  : {MSClassID :  "icycongd1"  },
                                Direction : "left",
                                Step : 0.1,
                                Width : 790,
                                Height : 371,
                                Timer : 50,
                                DelayTime : 5000,
                                WaitTime : 3000,
                                ScrollStep: 263,
                                AutoStart : 1
                            });
                        new Marquee(
                            {
                                MSClass	  : {MSClassID :  "icycongd2"  },
                                Direction : "left",
                                Step : 0.1,
                                Width : 790,
                                Height : 371,
                                Timer : 50,
                                DelayTime : 5000,
                                WaitTime : 3000,
                                ScrollStep: 263,
                                AutoStart : 1
                            });
                        new Marquee(
                            {
                                MSClass	  : {MSClassID :  "icycongd3"  },
                                Direction : "left",
                                Step : 0.1,
                                Width : 790,
                                Height : 371,
                                Timer : 50,
                                DelayTime : 5000,
                                WaitTime : 3000,
                                ScrollStep: 263,
                                AutoStart : 1
                            });

                        new Marquee(
                            {
                                MSClass	  : {MSClassID :  "icycongd4"  },
                                Direction : "left",
                                Step : 0.1,
                                Width : 790,
                                Height : 371,
                                Timer : 50,
                                DelayTime : 5000,
                                WaitTime : 3000,
                                ScrollStep: 263,
                                AutoStart : 1
                            });

                        new Marquee(
                            {
                                MSClass	  : {MSClassID :  "icycongd5"  },
                                Direction : "left",
                                Step : 0.1,
                                Width : 790,
                                Height : 371,
                                Timer : 50,
                                DelayTime : 5000,
                                WaitTime : 3000,
                                ScrollStep: 263,
                                AutoStart : 1
                            });

                        new Marquee(
                            {
                                MSClass	  : {MSClassID :  "icycongd6"  },
                                Direction : "left",
                                Step : 0.1,
                                Width : 790,
                                Height : 371,
                                Timer : 50,
                                DelayTime : 5000,
                                WaitTime : 3000,
                                ScrollStep: 263,
                                AutoStart : 1
                            });
                    });

                </script>
                <script type="text/javascript">
                    $(function(){
                        $(".icycon").hide().eq(0).show();
                        $(".icychannel ul li").hover(function(){
                            $(this).addClass("icychannelhover").siblings().removeClass("icychannelhover");
                            $(".icycon").hide().eq($(this).index()).show();
                        });
                    });

                </script>
                <div class="icycp left">
                    <div style="height:120px;overflow:hidden"><img src="/frontend/images/icycopy.jpg" width="239"/></div>
                    <div class="icyxdz" style="height:40px; line-height:40px;"><a href="http://www.cnsunway.com/html/chenggonganli/">新店开业展示栏&gt;&gt;</a></div>
                    <div class="icyxd">
                        <ul id="icyxd1">
                            <li><a href="http://www.cnsunway.com/html/chenggonganli/eccy/880.html" title="她复制大品牌的成功，赚钱就是这么简单" target="_blank" style="color:#E7650A; width:230px; overflow:hidden; display:inline-block; height:25px; line-height:25px; margin-top:0">她复制大品牌的成功，赚钱就是这么</a><!--<span class="right">[2017-12-01]</span>--></li>
                            <li><a href="http://www.cnsunway.com/html/chenggonganli/nx/879.html" title="她，年过半百，收获创业成功" target="_blank" style="color:#E7650A; width:230px; overflow:hidden; display:inline-block; height:25px; line-height:25px; margin-top:0">她，年过半百，收获创业成功</a><!--<span class="right">[2017-12-01]</span>--></li>
                            <li><a href="http://www.cnsunway.com/html/chenggonganli/eccy/878.html" title="她不做全职太太，选择加盟赛维干洗实现轻创业" target="_blank" style="color:#E7650A; width:230px; overflow:hidden; display:inline-block; height:25px; line-height:25px; margin-top:0">她不做全职太太，选择加盟赛维干洗</a><!--<span class="right">[2017-11-30]</span>--></li>
                            <li><a href="http://www.cnsunway.com/html/chenggonganli/blh/877.html" title="加盟赛维干洗店，事业爱情双丰收" target="_blank" style="color:#E7650A; width:230px; overflow:hidden; display:inline-block; height:25px; line-height:25px; margin-top:0">加盟赛维干洗店，事业爱情双丰收</a><!--<span class="right">[2017-11-30]</span>--></li>
                            <li><a href="http://www.cnsunway.com/html/chenggonganli/eccy/876.html" title="有了赛维干洗大品牌支撑，我加盟开店更有信心" target="_blank" style="color:#E7650A; width:230px; overflow:hidden; display:inline-block; height:25px; line-height:25px; margin-top:0">有了赛维干洗大品牌支撑，我加盟开</a><!--<span class="right">[2017-11-29]</span>--></li>
                            <li><a href="http://www.cnsunway.com/html/chenggonganli/blh/875.html" title="我们当地很需要赛维干洗加盟店，我成功了" target="_blank" style="color:#E7650A; width:230px; overflow:hidden; display:inline-block; height:25px; line-height:25px; margin-top:0">我们当地很需要赛维干洗加盟店，我</a><!--<span class="right">[2017-11-29]</span>--></li>
                            <li><a href="http://www.cnsunway.com/html/chenggonganli/nx/874.html" title="感谢赛维干洗加盟， 我找到了人生大舞台" target="_blank" style="color:#E7650A; width:230px; overflow:hidden; display:inline-block; height:25px; line-height:25px; margin-top:0">感谢赛维干洗加盟， 我找到了人生</a><!--<span class="right">[2017-11-28]</span>--></li>
                            <li><a href="http://www.cnsunway.com/html/chenggonganli/eccy/873.html" title="开赛维干洗加盟店，坚持就会有成功" target="_blank" style="color:#E7650A; width:230px; overflow:hidden; display:inline-block; height:25px; line-height:25px; margin-top:0">开赛维干洗加盟店，坚持就会有成功</a><!--<span class="right">[2017-11-28]</span>--></li>
                            <li><a href="http://www.cnsunway.com/html/chenggonganli/blh/872.html" title="加盟赛维干洗，投资成本回收快" target="_blank" style="color:#E7650A; width:230px; overflow:hidden; display:inline-block; height:25px; line-height:25px; margin-top:0">加盟赛维干洗，投资成本回收快</a><!--<span class="right">[2017-11-27]</span>--></li>
                            <li><a href="http://www.cnsunway.com/html/chenggonganli/nx/871.html" title="加盟赛维干洗，让我人生收获很多" target="_blank" style="color:#E7650A; width:230px; overflow:hidden; display:inline-block; height:25px; line-height:25px; margin-top:0">加盟赛维干洗，让我人生收获很多</a><!--<span class="right">[2017-11-27]</span>--></li>
                            <li><a href="http://www.cnsunway.com/html/chenggonganli/eccy/870.html" title="干洗行业前景市场良好，加盟赛维创业快速盈利" target="_blank" style="color:#E7650A; width:230px; overflow:hidden; display:inline-block; height:25px; line-height:25px; margin-top:0">干洗行业前景市场良好，加盟赛维创</a><!--<span class="right">[2017-11-24]</span>--></li>

                        </ul>
                        <script type="text/javascript">
                            var Marquee1 = new Marquee("icyxd1");
                            Marquee1.Direction = "top";
                            Marquee1.Step = 1;
                            Marquee1.Width = 239;
                            Marquee1.Height = 206;
                            Marquee1.Timer = 50;
                            Marquee1.DelayTime = 1000;
                            Marquee1.WaitTime = 3000;
                            Marquee1.ScrollStep = 26;
                            Marquee1.Start();
                        </script>
                    </div>
                </div>
            </div>
            <div class="heightX"></div>
            <div class="box"><a href="http://www.cnsunway.com/zt/dream/" target="_blank"><img src="/frontend/images/t2.jpg" width="1150" border="0"/></a> </div>
        </div>

        <!--常见问答-->

        <div class="iask box">
            <div><img src="/frontend/images/c1.jpg"/></div>
            <div class="iaskcon" style="background:#FFF">
                <div class="iaskleft left">
                    <div><img src="/frontend/images/c2.jpg" width="260"/></div>
                    <div>
                        <dl>
                            <dt>携手央视打造梦想大片</dt>
                            <dd>
                                <ul style="text-align:center">
                                    <li style="background:#FFF;">大力宣传</li>
                                    <li style="background:#FFF">加盟有保障</li>
                                    <li style="background:#FFF">强大售后</li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="iaskcenter left">
                    <div style="text-align:center"><img src="/frontend/images/c3.jpg" width="670"/></div>
                    <div>
                        <ul>
                            <li><a href="http://www.cnsunway.com/html/changjianwenti/shebeiwenda/172.html">·投资干洗加盟洗衣设备要多少钱？</a></li>
                            <li><a href="http://www.cnsunway.com/html/changjianwenti/jingyingwenda/18.html">·淡季魔咒看赛维如何突破</a></li>
                            <li><a href="http://www.cnsunway.com/html/changjianwenti/shebeiwenda/157.html">·开干洗店该如何选洗衣设备？</a></li>
                            <li><a href="http://www.cnsunway.com/html/changjianwenti/fuwuzhichi/185.html">·洗衣店加盟初期总部会提供哪帮助</a></li>
                            <li><a href="http://www.cnsunway.com/html/changjianwenti/jingyingwenda/61.html">·干洗加盟如何做好淡旺季不同的促</a></li>
                            <li><a href="http://www.cnsunway.com/html/changjianwenti/jingyingwenda/194.html">·干洗店利润分析与回报</a></li>
                            <li><a href="http://www.cnsunway.com/html/changjianwenti/jingyingwenda/65.html">·干洗加盟店赚钱的秘诀</a></li>
                            <li><a href="http://www.cnsunway.com/html/changjianwenti/shebeiwenda/197.html">·开个干洗店一套干洗设备要多少钱</a></li>
                            <li><a href="http://www.cnsunway.com/html/changjianwenti/kaidianwenda/199.html">·干洗加盟店前景如何？</a></li>
                            <li><a href="http://www.cnsunway.com/html/changjianwenti/jingyingwenda/200.html">·干洗旺季马上来临，旺季注意事项</a></li>
                            <li><a href="http://www.cnsunway.com/html/changjianwenti/kaidianwenda/201.html">·赛维洗衣加盟费是多少</a></li>
                            <li><a href="http://www.cnsunway.com/html/changjianwenti/jingyingwenda/196.html">·干洗店想和酒店谈合作？</a></li>
                            <li><a href="http://www.cnsunway.com/html/changjianwenti/jingyingwenda/208.html">·她的干洗店，为什么能日进万元？</a></li>
                            <li><a href="http://www.cnsunway.com/html/changjianwenti/kaidianwenda/198.html">·干洗加盟店前景怎么样？</a></li>
                            <li><a href="http://www.cnsunway.com/html/changjianwenti/kaidianwenda/268.html">·干洗品牌是干洗加盟店利润的保证</a></li>

                        </ul>
                    </div>
                </div>
                <div class="iasright left">
                    <div class="icricle">
                        <!--<p><font size="+5" color="#EAFF00">21</font><br />
                          年稳定社区盈利<br />
                          全国众多品牌连锁加盟店</p>-->
                        <img src="/frontend/images/c4.jpg" width="192"/> </div>
                    <div class="iln">
                        <dl>
                            <dt>赛维服务理念</dt>
                            <dd>
                                <ul>
                                    <li><span>质量</span>呵护肌肤呵护衣物</li>
                                    <li><span>健康</span>环保设备，环保洗涤</li>
                                    <li><span>服务</span>服务从心开始</li>
                                    <li><span>价值</span>客户的价值即我们的价值</li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <!--设备-->
        <div class="heightX"></div>
        <div style="/*background:url(/frontend/images/icdn4bg.gif);margin-top:10px; height:106px;*/" align="center">
            <div class="box"><img src="/frontend/images/t3.jpg" width="1150" usemap="#Map2" border="0"/>
                <map name="Map2" id="Map2">
                    <area shape="rect" coords="860,22,960,53" href="http://www.cnsunway.com/swt/" target="_blank"/>
                    <area shape="rect" coords="965,20,1062,52" href="http://www.cnsunway.com/html/chanpinshebei/" target="_blank"/>
                </map>
            </div>
        </div>
        <div class="box isb">
            <div class="isbcon">
                <div class="isbconleft left">
                    <div><img src="/frontend/images/igs.jpg" width="260"/></div>
                    <div>
                        <p>赛维集团<br/>
                            设备工厂</p>
                    </div>
                    <div><img src="/frontend/images/sbhome.jpg" width="260"/></div>
                </div>
                <div class="isbconright left">
                    <div class="isbchannel"> <li class="isbhover"><a href="http://www.cnsunway.com/html/chanpinshebei/ganxishebei/" target="_blank">干洗设备</a></li><li><a href="http://www.cnsunway.com/html/chanpinshebei/fuzhushebei/" target="_blank">辅助设备</a></li><li><a href="http://www.cnsunway.com/html/chanpinshebei/shuixishebei/" target="_blank">水洗设备</a></li><li><a href="http://www.cnsunway.com/html/chanpinshebei/hongganshebei/" target="_blank">烘干设备</a></li> </div>
                    <div class="isbpic"> <div id="isb1">
                            <ul id="isb11">
                                <li><a href="http://www.cnsunway.com/html/chanpinshebei/ganxishebei/55.html" target="_blank" title="衣物健康消毒机"><img src="/frontend/images/1-16120Q55943C0.jpg" width="200" height="255"/></a></li>
                                <li><a href="http://www.cnsunway.com/html/chanpinshebei/ganxishebei/43.html" target="_blank" title="全自动环保四氯乙烯干洗机"><img src="/frontend/images/1-16120Q61Z2J2.jpg" width="200" height="255"/></a></li>
                                <li><a href="http://www.cnsunway.com/html/chanpinshebei/ganxishebei/44.html" target="_blank" title="自动石油环保干洗机"><img src="/frontend/images/1-16120Q62115b0.jpg" width="200" height="255"/></a></li>

                            </ul>
                        </div><div id="isb2">
                            <ul id="isb22">
                                <li><a href="http://www.cnsunway.com/html/chanpinshebei/fuzhushebei/49.html" target="_blank" title="pos机"><img src="/frontend/images/1-1F329110521S8-lp.jpg" width="200" height="255"/></a></li>
                                <li><a href="http://www.cnsunway.com/html/chanpinshebei/fuzhushebei/52.html" target="_blank" title="去渍台"><img src="/frontend/images/1-16120Q6351S95.jpg" width="200" height="255"/></a></li>
                                <li><a href="http://www.cnsunway.com/html/chanpinshebei/fuzhushebei/46.html" target="_blank" title="万用熨烫台"><img src="/frontend/images/1-16120Q62625553.jpg" width="200" height="255"/></a></li>
                                <li><a href="http://www.cnsunway.com/html/chanpinshebei/fuzhushebei/54.html" target="_blank" title="蒸汽发生器"><img src="/frontend/images/1-16120Q55F9633.jpg" width="200" height="255"/></a></li>
                                <li><a href="http://www.cnsunway.com/html/chanpinshebei/fuzhushebei/51.html" target="_blank" title="衣物输送线"><img src="/frontend/images/1-16120Q54K6246.jpg" width="200" height="255"/></a></li>

                            </ul>
                        </div><div id="isb3">
                            <ul id="isb33">
                                <li><a href="http://www.cnsunway.com/html/chanpinshebei/shuixishebei/47.html" target="_blank" title="水洗机"><img src="/frontend/images/1-16120Q62Jb47.jpg" width="200" height="255"/></a></li>

                            </ul>
                        </div><div id="isb4">
                            <ul id="isb44">
                                <li><a href="http://www.cnsunway.com/html/chanpinshebei/hongganshebei/50.html" target="_blank" title="全自动烘鞋机"><img src="/frontend/images/1-16120Q62953B1.jpg" width="200" height="255"/></a></li>
                                <li><a href="http://www.cnsunway.com/html/chanpinshebei/hongganshebei/45.html" target="_blank" title="节能烘干机"><img src="/frontend/images/1-16120Q625054A.jpg" width="200" height="255"/></a></li>

                            </ul>
                        </div> </div>
                    <script type="text/javascript">
                        $(function(){
                            new Marquee(
                                {
                                    MSClass	  : {MSClassID :  "isb1" , ContentID :  "isb11" },
                                    Direction : "left",
                                    Step : 0.1,
                                    Width : 877,
                                    Height : 255,
                                    Timer : 50,
                                    DelayTime : 5000,
                                    WaitTime : 3000,
                                    ScrollStep: 218,
                                    AutoStart : 1
                                });
                            new Marquee(
                                {
                                    MSClass	  : {MSClassID :  "isb2" , ContentID :  "isb22" },
                                    Direction : "left",
                                    Step : 0.1,
                                    Width : 877,
                                    Height : 255,
                                    Timer : 50,
                                    DelayTime : 5000,
                                    WaitTime : 3000,
                                    ScrollStep: 218,
                                    AutoStart : 1
                                });
                            new Marquee(
                                {
                                    MSClass	  : {MSClassID :  "isb3" , ContentID :  "isb33" },
                                    Direction : "left",
                                    Step : 0.1,
                                    Width : 877,
                                    Height : 255,
                                    Timer : 50,
                                    DelayTime : 5000,
                                    WaitTime : 3000,
                                    ScrollStep: 218,
                                    AutoStart : 1
                                });
                            new Marquee(
                                {
                                    MSClass	  : {MSClassID :  "isb4" , ContentID :  "isb44" },
                                    Direction : "left",
                                    Step : 0.1,
                                    Width : 877,
                                    Height : 255,
                                    Timer : 50,
                                    DelayTime : 5000,
                                    WaitTime : 3000,
                                    ScrollStep: 218,
                                    AutoStart : 1
                                });
                            //$("#isb11").css("width","877px");
                            //$("#isb2").attr("fixnum","2");
                            //$("#isb11").css("width","877px");
                            //$("#isb33").css("width","877px");
                            //$("#isb44").css("width","877px");
                        });
                        $(function(){
                            $(".isbpic div").hide().eq(0).show();
                            $(".isbchannel li").hover(function(){
                                $(this).addClass("isbhover").siblings().removeClass("isbhover");
                                $(".isbpic div").hide().eq($(this).index()).show();
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="heightX"></div>
        <div class="b2" style=" height:492px;">
            <div class="box"><!--<img src="/Public/images/qbz.jpg" />--><img src="/frontend/images/step.png" width="1150"/></div>
            <div class="box ishg">

                <!--<div><img src="http://www.cnsunway.com/Public/images/shg.png" width="1150" /></div>-->

                <div style="background:url(/frontend/images/t4.jpg) no-repeat center center; height:79px;"></div>
                <div class="ishgcon" style="background:#FFF">
                    <div class="ishgconleft left">
                        <li class="ishghover"><a href="http://www.cnsunway.com/html/zoujinsaiwei/saiweihuanjing/" target="_blank">赛维环境</a></li>
                        <li><a href="http://www.cnsunway.com/html/zoujinsaiwei/saiweirongyu/" target="_blank">赛维荣誉</a></li>
                    </div>
                    <div class="ishgconright left">
                        <div id="ishg1" style="width:966px;">
                            <ul id="ishg11">
                                <li><a href="http://www.cnsunway.com/html/zoujinsaiwei/saiweihuanjing/97.html" target="_blank"><img src="/frontend/images/1-150625103P4209.jpg" width="230" height="140" alt="赛维团队风采"/></a></li>
                                <li><a href="http://www.cnsunway.com/html/zoujinsaiwei/saiweihuanjing/103.html" target="_blank"><img src="/frontend/images/1-150626094421E4.jpg" width="230" height="140" alt="赛维干洗分公司风采"/></a></li>
                                <li><a href="http://www.cnsunway.com/html/zoujinsaiwei/saiweihuanjing/105.html" target="_blank"><img src="/frontend/images/1-150626094KO64.jpg" width="230" height="140" alt="赛维干洗集团济南分公司"/></a></li>
                                <li><a href="http://www.cnsunway.com/html/zoujinsaiwei/saiweihuanjing/107.html" target="_blank"><img src="/frontend/images/1-150626093U5948.jpg" width="230" height="140" alt="员工办公环境"/></a></li>
                                <li><a href="http://www.cnsunway.com/html/zoujinsaiwei/saiweihuanjing/101.html" target="_blank"><img src="/frontend/images/1-150626094152520.jpg" width="230" height="140" alt="赛维干洗集团员工办公环境"/></a></li>
                                <li><a href="http://www.cnsunway.com/html/zoujinsaiwei/saiweihuanjing/104.html" target="_blank"><img src="/frontend/images/1-150625133U5Q6.jpg" width="230" height="140" alt="赛维干洗集团前台环境"/></a></li>
                                <li><a href="http://www.cnsunway.com/html/zoujinsaiwei/saiweihuanjing/102.html" target="_blank"><img src="/frontend/images/1-15062513341S02.jpg" width="230" height="140" alt="赛维干洗集团内部环境"/></a></li>
                                <li><a href="http://www.cnsunway.com/html/zoujinsaiwei/saiweihuanjing/100.html" target="_blank"><img src="/frontend/images/1-150625133110152.jpg" width="230" height="140" alt="赛维干洗集团员工工作环境"/></a></li>

                            </ul>
                        </div>
                        <div id="ishg2" style="width:966px;">
                            <ul id="ishg22">
                                <li><a href="http://www.cnsunway.com/html/zoujinsaiwei/saiweirongyu/633.html" target="_blank"><img src="/frontend/images/8-1FQ6153611318-lp.jpg" width="230" height="140" alt="中国轻工机械协会"/></a></li>
                                <li><a href="http://www.cnsunway.com/html/zoujinsaiwei/saiweirongyu/632.html" target="_blank"><img src="/frontend/images/8-1FQ61526135M-lp.jpg" width="230" height="140" alt="赛维荣誉"/></a></li>
                                <li><a href="http://www.cnsunway.com/html/zoujinsaiwei/saiweirongyu/435.html" target="_blank"><img src="/frontend/images/1-1F6161I500925-lp.jpg" width="230" height="140" alt="CCTV《创业之星》栏目联合运营伙"/></a></li>
                                <li><a href="http://www.cnsunway.com/html/zoujinsaiwei/saiweirongyu/438.html" target="_blank"><img src="/frontend/images/1-1F6161IG3X5-lp.jpg" width="230" height="140" alt="中国具投资价值直达竞争力洗衣连"/></a></li>
                                <li><a href="http://www.cnsunway.com/html/zoujinsaiwei/saiweirongyu/437.html" target="_blank"><img src="/frontend/images/1-1F6161I6354a-lp.jpg" width="230" height="140" alt="中国干洗连锁十大诚信品牌"/></a></li>
                                <li><a href="http://www.cnsunway.com/html/zoujinsaiwei/saiweirongyu/436.html" target="_blank"><img src="/frontend/images/1-1F6161I55W38-lp.jpg" width="230" height="140" alt="全国消费者放心品牌"/></a></li>

                            </ul>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function(){
                            new Marquee(
                                {
                                    MSClass	  : {MSClassID :  "ishg1" , ContentID :  "ishg11" },
                                    Direction : "left",
                                    Step : 0.1,
                                    Width : 966,
                                    Height : 140,
                                    Timer : 50,
                                    DelayTime : 5000,
                                    WaitTime : 3000,
                                    ScrollStep: 238,
                                    AutoStart : 1
                                });
                            new Marquee(
                                {
                                    MSClass	  : {MSClassID :  "ishg2" , ContentID :  "ishg22" },
                                    Direction : "left",
                                    Step : 0.1,
                                    Width : 966,
                                    Height : 140,
                                    Timer : 50,
                                    DelayTime : 5000,
                                    WaitTime : 3000,
                                    ScrollStep: 238,
                                    AutoStart : 1
                                });
                            $("#ishg11 li").css({"clear":"none"}).parent().css("height",parseInt($("#ishg11").css("height"))/4+"px");
                            $("#ishg22 li").css("clear","none").parent().css("height",parseInt($("#ishg22").css("height"))/4+"px");
                            /*
                        var ishg1 = new Marquee("ishg1");
                        ishg1.Direction = "top";
                        ishg1.Step = 1;
                        ishg1.Width = 966;
                        ishg1.Height = 140;
                        ishg1.Timer = 50;
                        ishg1.DelayTime = 1000;
                        ishg1.WaitTime = 3000;
                        ishg1.ScrollStep = 140;
                        ishg1.SwitchType = 0 ;
                        ishg1.HiddenID = "ishg2" ;
                        ishg1.Start();*/
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="clear"></div>
    <div style="padding-top:30px; padding-bottom:30px; width:1000px; margin:auto"><span>友情链接：</span> <a href="http://www.yichao.cn/" target="_blank">眼镜网</a>   <a href="http://www.qj.com.cn/c_ganxi/" target="_blank">干洗加盟</a>   <a href="http://www.lyy99.com/" target="_blank">三亚婚纱摄影</a>   <a href="http://ganxi.jiameng.com/" target="_blank">洗衣店加盟</a>   <a href="http://www.bbyy.com/" target="_blank">婴儿游泳馆加盟</a>   <a href="http://www.taicnc.com/" target="_blank">数控加工中心</a>   <a href="http://www.yumiejing.com/" target="_blank">郁美净</a>   <a href="http://www.88189.cn/" target="_blank">酸辣粉培训官网</a>   <a href="http://www.shkdschool.com/" target="_blank">西点培训学校</a>   <a href="http://www.diyimeishiw.cn/" target="_blank">餐饮技术</a>   <a href="http://www.scalesh.com/" target="_blank">上海地磅</a>  </div>
    <div align="center"><img src="/frontend/images/gov.jpg"/></div>
@stop