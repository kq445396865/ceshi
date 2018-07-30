(function(d){"function"===typeof define&&define.amd?define(["jquery"],d):"object"===typeof exports?module.exports=d:d(jQuery)})(function(d){function m(a){var c=a||window.event,k=r.call(arguments,1),f=0,e=0,b=0,g=0;a=d.event.fix(c);a.type="mousewheel";"detail"in c&&(b=-1*c.detail);"wheelDelta"in c&&(b=c.wheelDelta);"wheelDeltaY"in c&&(b=c.wheelDeltaY);"wheelDeltaX"in c&&(e=-1*c.wheelDeltaX);"axis"in c&&c.axis===c.HORIZONTAL_AXIS&&(e=-1*b,b=0);f=0===b?e:b;"deltaY"in c&&(f=b=-1*c.deltaY);"deltaX"in c&&
(e=c.deltaX,0===b&&(f=-1*e));if(0!==b||0!==e){1===c.deltaMode?(g=d.data(this,"mousewheel-line-height"),f*=g,b*=g,e*=g):2===c.deltaMode&&(g=d.data(this,"mousewheel-page-height"),f*=g,b*=g,e*=g);g=Math.max(Math.abs(b),Math.abs(e));if(!h||g<h)h=g,l.settings.adjustOldDeltas&&"mousewheel"===c.type&&0===g%120&&(h/=40);l.settings.adjustOldDeltas&&"mousewheel"===c.type&&0===g%120&&(f/=40,e/=40,b/=40);f=Math[1<=f?"floor":"ceil"](f/h);e=Math[1<=e?"floor":"ceil"](e/h);b=Math[1<=b?"floor":"ceil"](b/h);a.deltaX=
e;a.deltaY=b;a.deltaFactor=h;a.deltaMode=0;k.unshift(a,f,e,b);n&&clearTimeout(n);n=setTimeout(t,200);return(d.event.dispatch||d.event.handle).apply(this,k)}}function t(){h=null}var p=["wheel","mousewheel","DOMMouseScroll","MozMousePixelScroll"],k="onwheel"in document||9<=document.documentMode?["wheel"]:["mousewheel","DomMouseScroll","MozMousePixelScroll"],r=Array.prototype.slice,n,h;if(d.event.fixHooks)for(var q=p.length;q;)d.event.fixHooks[p[--q]]=d.event.mouseHooks;var l=d.event.special.mousewheel=
{version:"3.1.9",setup:function(){if(this.addEventListener)for(var a=k.length;a;)this.addEventListener(k[--a],m,!1);else this.onmousewheel=m;d.data(this,"mousewheel-line-height",l.getLineHeight(this));d.data(this,"mousewheel-page-height",l.getPageHeight(this))},teardown:function(){if(this.removeEventListener)for(var a=k.length;a;)this.removeEventListener(k[--a],m,!1);else this.onmousewheel=null},getLineHeight:function(a){return parseInt(d(a)["offsetParent"in d.fn?"offsetParent":"parent"]().css("fontSize"),
10)},getPageHeight:function(a){return d(a).height()},settings:{adjustOldDeltas:!0}};d.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})});
(function(b){var e=[],f=0,h="",g=0,d={onComplete:function(){},backgroundColor:"#000",barColor:"#fff",barHeight:1,percentage:!1,deepSearch:!0,completeAnimation:"fade",onLoadComplete:function(){"grow"==d.completeAnimation?b("").stop().css("width","100%").animate({top:"0%",height:"100%"},500,function(){b("").fadeOut(500,function(){b(this).remove();d.onComplete()})}):b("").fadeOut(500,function(){b("").remove();d.onComplete()})}},m=function(){h=b("<div></div>").appendTo("body").css({display:"none",width:0,
height:0,overflow:"hidden"});for(var a=0;e.length>a;a++)b.ajax({url:e[a],type:"HEAD",success:function(a){g++;l(this.url)}})},l=function(a){b("<img />").attr("src",a).bind("load",function(){n(a)}).appendTo(h)},n=function(a){f++;a=f/g*100;1==d.percentage&&b("#num").text(Math.ceil(a)+"%");f==g&&b("#loader").animate({opacity:0},"slow",function(){b(this).remove()})},k=function(a){if(b(a).hasClass("wk_noql"))return!1;var c="";"none"!=b(a).css("background-image")?c=b(a).css("background-image"):"undefined"!=
typeof b(a).attr("src")&&"img"==a.nodeName.toLowerCase()&&(c=b(a).attr("src"));if(-1==c.indexOf("gradient"))for(c=c.replace(/url\(\"/g,""),c=c.replace(/url\(/g,""),c=c.replace(/\"\)/g,""),c=c.replace(/\)/g,""),a=c.split(", "),c=0;c<a.length;c++)if(0<a[c].length){var d="",d="?"+Math.floor(3E3*Math.random());e.push(a[c]+d)}};b.fn.queryLoader2=function(a){a&&b.extend(d,a);this.each(function(){k(this);1==d.deepSearch&&b(this).find("*:not(script)").each(function(){k(this)})});m();return this}})(jQuery);
IND(document).ready(function(){IND("body").queryLoader2({barColor:"#111111",backgroundColor:"#202020",percentage:!0,barHeight:30,completeAnimation:"grow"})});IND(function(){IND(".wk_slide-wrap #wk_s1 video").get(0).play();_slideAutoChange=setInterval("IND.slideAutoChange()",15E3)});	
IND(function(){function b(){IND(".wk_slide-wrap video").get(0).pause();IND(".wk_slide-wrap li.wk_selected video").get(0).play()}IND(".slider .inner").bind("swipeleft",function(){});IND(".slider .inner").bind("swiperight",function(){});IND(".wk_page2 li").hover(function(){IND(this).addClass("wk_selected")},function(){IND(this).removeClass("wk_selected")});IND(".wk_gh").click(function(){IND(this).hasClass("wk_selected")?(IND(this).removeClass("wk_selected"),
IND("#wk_nav").addClass("wk_hide")):(IND(this).addClass("wk_selected"),IND("#wk_nav").removeClass("wk_hide"))});IND(".wk_page-wrap").fullpage({anchors:"hero services cases news about contact".split(" "),verticalCentered:!1,navigation:!0,afterLoad:function(b,a){1==a&&(IND("#fp-nav").addClass("selected"),IND(".wk_gb-nav").removeClass("wk_show"),IND(".wk_gb-header").addClass("wk_show"));2==a&&(IND(".wk_gb-nav").addClass("wk_show"),IND(".wk_gb-header").removeClass("wk_show"),IND("#fp-nav").addClass("selected"));
3==a&&(IND("#fp-nav").removeClass("selected"),IND(".wk_gb-nav").addClass("wk_show"),IND(".wk_gb-header").removeClass("wk_show"),IND("#fp-nav").addClass("selected"));4==a&&(IND("#fp-nav").addClass("selected"),IND(".wk_gb-nav").addClass("wk_show"),IND(".wk_gb-header").removeClass("wk_show"));5==a&&(IND("#fp-nav").removeClass("selected"),IND(".wk_gb-nav").addClass("wk_show"),IND(".wk_gb-header").removeClass("wk_show"));6==a&&(IND("#fp-nav").addClass("selected"),IND(".wk_gb-nav").addClass("wk_show"),
IND(".wk_gb-header").removeClass("wk_show"))},onLeave:function(b,a,d){}});IND("#wk_slide-nav li.wk_nav-bullet-container").click(function(){IND("#wk_slide-nav li.wk_nav-bullet-container").removeClass("wk_active").eq(IND(this).index()).addClass("wk_active");IND(".wk_slide-wrap li").removeClass("wk_selected").eq(IND(this).data("index")).addClass("wk_selected");b()});IND.extend({slideAutoChange:function(){curr=IND(".wk_slide-wrap li.wk_selected");next=0<curr.next().size()?curr.next():IND(".wk_slide-wrap li:first");
curr.removeClass("wk_selected");next.addClass("wk_selected");IND("#wk_slide-nav li.wk_nav-bullet-container").removeClass("wk_active").eq(next.index()).addClass("wk_active");b()}});IND(".wk_page1").mousewheel(function(c,a){curr=IND(".wk_slide-wrap li.wk_selected");if(0<a)return prev=0<curr.prev().size()?curr.prev():IND(".wk_slide-wrap li:last"),curr.removeClass("wk_selected"),prev.addClass("wk_selected"),IND("#wk_slide-nav li.wk_nav-bullet-container").removeClass("wk_active").eq(prev.index()).addClass("wk_active"),
b(),!1;next=0<curr.next().size()?curr.next():IND(".wk_slide-wrap li:first");if(0<curr.next().size())return curr.removeClass("wk_selected"),next.addClass("wk_selected"),IND("#wk_slide-nav li.wk_nav-bullet-container").removeClass("wk_active").eq(next.index()).addClass("wk_active"),b(),!1});IND("#nav, #loader").mousewheel(function(b,a){return!1});});