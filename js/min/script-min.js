$(function(){function e(e,t,a){var i=$(document).scrollTop();i>=t&&a>i?($(e).css("position","fixed"),$(e).addClass("scrollFixed"),$(e).css("top","0px")):($(e).css("position","absolute"),$(e).removeClass("scrollFixed"),t>i?$(e).css("top",t+"px"):i>=a&&$(e).css("top",a+"px"))}function t(){!Modernizr.objectfit&&$(".img-fit").length&&$(".img-fit").each(function(){var e=$(this),t=e.find("img").prop("src");t&&e.css("backgroundImage","url("+t+")").addClass("compat-object-fit")})}function a(){var e=window.navigator.userAgent,t=e.indexOf("MSIE ");if(t>0)return parseInt(e.substring(t+5,e.indexOf(".",t)),10);var a=e.indexOf("Trident/");if(a>0){var i=e.indexOf("rv:");return parseInt(e.substring(i+3,e.indexOf(".",i)),10)}var n=e.indexOf("Edge/");return n>0?parseInt(e.substring(n+5,e.indexOf(".",n)),10):!1}function i(){f=$(document).scrollTop(),$(".little-squares").length>0&&(TweenMax.set($(".little-squares li:nth-child(even)"),{y:f/8}),TweenMax.set($(".little-squares li:nth-child(odd)"),{y:f/4})),$(".floating-pub").length&&($("body").hasClass("home")?b>1500?e("body.home .floating-pub",300,$(document).height()-k-$(".floating-pub").css("marginTop").replace("px","")-$("footer").height(),!0):$("body.home .floating-pub").css({top:"auto",position:"static"}):b>1350?(e("body:not(.home):not(.cercle) .floating-pub",150,$(document).height()-k-$(".floating-pub").css("marginTop").replace("px","")-$("footer").height(),!0),e("body.cercle:not(.home) .floating-pub",184,$(document).height()-k-$(".floating-pub").css("marginTop").replace("px","")-$("footer").height(),!0)):$(".floating-pub").css({top:"auto",position:"static"})),requestAnimFrame(i)}function n(){function e(){if(l.is(":checked")&&i.find(".active").length){if(void 0!==i.find(".active").attr("data-adjacent")){var e=i.find(".active").attr("data-adjacent").split(","),t=e.length,a=0;for(a;t>a;a++)i.find('[data-department="'+e[a]+'"]').attr("class","department adjacent")}}else if(!l.is(":checked")&&i.find(".adjacent").length){var n;i.find(".active").length&&(n=i.find(".active").attr("data-department")),s.attr("class","department"),n.length&&i.find('[data-department="'+n+'"]').attr("class","department active")}}var t=$("#mapForm"),a=t.find(".map-form"),i=$("#mapFormMetropole"),n=t.find(".map-form-extra"),s=t.find(".department"),o=$("#departement"),l=$("#departement-etendre"),c=t.find("a"),d=t.find(".map-btn"),r=t.find(".btn-metropole");s.on("click",function(t){s.attr("class","department"),$(this).attr("class","department active");var a=$(this).attr("data-department"),i=o.find("option[data-value='"+a+"']");o.val(i.val()),e(l)}),o.on("change",function(a){s.attr("class","department");var i=o.find(":selected").data("value"),n=t.find('[data-department="'+i+'"]');n.length?n.attr("class","department active"):("92"==i||"93"==i||"94"==i)&&t.find('[data-department="75"]').attr("class","department active").siblings().attr("class","department"),e(l)}),l.on("change",function(t){e(l)}),c.on("click",function(e){e.preventDefault(),$(this).parents(".map-btn").length?(d.removeClass("active"),r.addClass("active"),TweenMax.to($($(this).attr("href")),.2,{x:"0%",opacity:1,zIndex:1}),TweenMax.to(i,.2,{x:"-100%",opacity:0,zIndex:0})):(d.addClass("active"),r.removeClass("active"),TweenMax.to(i,.2,{x:"0%",opacity:1,zIndex:1}),TweenMax.to(n,.2,{x:"100%",opacity:0,zIndex:0}))}),C=!0}function s(){if($(".nav-tabs").length){var e=$(".nav-tabs");e.hasClass("nav-tabs-indicator")||(768>b?e.height(0).find(".active").on("click",function(t){var a=0,i=0,n=e.find("li"),s=n.length;for(i;s>i;i++)n.eq(i).hasClass("active")||(a+=n.eq(i).outerHeight());e.height(e.height()>0?0:a),e.toggleClass("on")}):e.css("height","auto"))}}function o(){$(".news").length&&(TweenMax.set($(".news > li article"),{clearProps:"height"}),$(".news > li article").each(function(e){TweenMax.set($(this),{height:$(this).closest("li").height()+"px"})}))}function l(){$(".popup").addClass("hidden"),$(".bg-popup").addClass("hidden"),$("body").removeClass("wrapper-blured")}function c(){$("#header nav").length&&$("#header nav").removeClass("no-transition"),$("#sidebar-account").length&&$("#sidebar-account").removeClass("no-transition"),$("#sidebar-tools").length&&$("#sidebar-tools").removeClass("no-transition"),$("#sidebar-links").length&&$("#sidebar-links").removeClass("no-transition"),$(".bg-sidebar").length&&$(".bg-sidebar").removeClass("no-transition")}function d(){0==T?$(".prev-slide").hide():$(".prev-slide").show(),T==$("#toSlide li").length-1?$(".next-slide").hide():$(".next-slide").show()}function r(){var e=-$("#toSlide li").eq(0).width()*T;TweenMax.to($("#toSlide li"),.2,{x:e});var t=-$(".lightbox-content ul li").eq(0).width()*T;TweenMax.to($(".lightbox-content ul li"),.2,{x:t})}function h(e,t,a){if($("body,html").css("overflow","hidden"),0==$("#lb").length)if($("main").append('<div id="lb"><div class="black-mask"><button class="close-btn icon-cross"></button></div><button class="prev-slide"></button><button class="next-slide"></button><div class="lightbox-content"></div></div>'),t&&""==a&&$(".lightbox-content").html("<ul><li><img src='"+e+"' /></li></ul>"),t&&""!=a){if(""!=a&&$(a+" li").length>0){$(".lightbox-content").html("<ul></ul>"),$(a+" a").each(function(e,t){$(".lightbox-content ul").append("<li><img src='"+$(this).attr("href")+"' /></li>")}),$(".lightbox-content ul li").each(function(e,t){$(this).css("left",e*$(this).width()-1)});var i=-$(".lightbox-content ul li").eq(0).width()*T;TweenMax.set($(".lightbox-content ul li"),{x:i}),d(),$("#lb .prev-slide").click(function(e){T--,d(),r()}),$("#lb .next-slide").click(function(e){T++,d(),r()})}var n=new Hammer(document.getElementById("lb"));n.on("swipeleft",function(e){T<$("#toSlide li").length-1&&(T++,d(),r())}),n.on("swiperight",function(e){T>0&&(T--,d(),r())})}else $(".lightbox-content").load(e+" .lightbox-content");$("#lb").addClass("on")}function p(e){$("#lb").remove(),$("body,html").css("overflow","auto")}function v(e){"undefined"!=typeof Q&&Q.setMap(null);var t=!1,a;"edit"==$("#map-canvas").attr("data-mode")?t=!0:a={url:"layoutImg/pin@2x.png",scaledSize:new google.maps.Size(45,39),origin:new google.maps.Point(0,0),anchor:new google.maps.Point(12,38)},Q=new google.maps.Marker({map:K,position:e,icon:a,draggable:t,raiseOnDrag:t}),Q.addListener("dragend",function(e){var t=e.latLng.lat(),a=e.latLng.lng(),i=new google.maps.LatLng(t,a);G.val(t),U.val(a),g(i)})}function g(e){W.geocode({latLng:e},function(e,t){if(t!=google.maps.GeocoderStatus.OK)return void console.log("Geocoder failed due to: "+t);if(!e[0])return void console.log("No results found");var a=e[0];$("#geolocalisation").val(a.formatted_address)})}var f,m=600,u=$(window).height(),b=$(window).width(),C=!1,w,x=$("body"),k=630,T=0,y;if(window.requestAnimFrame=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)}}(),jQuery.fn.toggleAttr=function(e){return this.each(function(){var t=$(this);t.attr(e)?t.removeAttr(e):t.attr(e,e)})},t(),o(),$(".social-footer").length&&$(".social-footer").addClass("closed").hover(function(){$(this).hasClass("closed")&&TweenMax.set($(this),{className:"-=closed"})},function(){var e=$(document).scrollTop();f+$(window).height()!=$(document).height()&&TweenMax.set($(this),{className:"+=closed"})}),$(".choices").length){var q=$(".choices"),M=q.find(".btn-choice"),D=$(".btn-choice-title"),L;for(visualsChoices=q.find(".visuel"),nbChoices=q.find("li").length,j=0,numCols=4,numRows=6,frameHeight=200,frameWidth=200,steppedEase=new SteppedEase(numCols-1),spritesTl=[],j;j<nbChoices;j++){var S=0,I=visualsChoices.eq(j);for(spritesTl[j]=new TimelineMax({paused:!0}),S;S<numRows;S++)spritesTl[j].add(TweenMax.fromTo(I,.15,{backgroundPosition:"0 -"+frameHeight*S+"px"},{backgroundPosition:"-"+frameWidth*(numCols-1)+"px -"+frameHeight*S+"px",ease:steppedEase}));TweenMax.set(I,{backgroundPosition:"0 0"})}D.on("click",function(e){var t;if(b>767){if(e.preventDefault(),L=$(".btn-choice-title").index(this),t=!1,$(".choices").hasClass("choice-"+(L+1)+"-active")){var a=$(".choices");a.removeClass("choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active"),setTimeout(function(){a.removeClass("choice-1-animating choice-2-animating choice-3-animating choice-4-animating choice-5-animating")},m)}else{var a=$(".choices");if(t=!0,a.hasClass("choice-1-active")||a.hasClass("choice-2-active")||a.hasClass("choice-3-active")||a.hasClass("choice-4-active")||a.hasClass("choice-5-active"))a.removeClass("choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active choice-1-animating choice-2-animating choice-3-animating choice-4-animating choice-5-animating"),setTimeout(function(){if($(".choices").addClass("choice-"+(L+1)+"-active choice-"+(L+1)+"-animating"),1150>=b){var e=$(".choices > li").eq(L);$("html, body").animate({scrollTop:e.offset().top},200)}},m);else if(a.removeClass("choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active"),$(".choices").addClass("choice-"+(L+1)+"-active choice-"+(L+1)+"-animating"),1150>=b){var i=$(".choices > li").eq(L);$("html, body").animate({scrollTop:i.offset().top},200)}}if(1150>=b){var i=$(".choices > li").eq(L);$(".choices li").each(function(e,t){$(".zone-content").slideUp(300)}),t&&$(".zone-content",i).slideToggle(300)}else{var n=$(".choices > li").eq(L).index();spritesTl[n].reverse()}}}),M.on("mouseenter",function(){if(!(q.hasClass("choice-1-active")||q.hasClass("choice-2-active")||q.hasClass("choice-3-active")||q.hasClass("choice-4-active")||q.hasClass("choice-5-active"))){var e=$(this).parents("li").index();spritesTl[e].play()}}).on("mouseout",function(){var e=$(this).parents("li").index();spritesTl[e].reverse()}).on("click",function(e){var t;if(b>767){if(e.preventDefault(),t=!1,$(this).closest(".choices").hasClass("choice-"+($(this).closest("li").index()+1)+"-active")){var a=$(this).closest(".choices");a.removeClass("choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active"),setTimeout(function(){a.removeClass("choice-1-animating choice-2-animating choice-3-animating choice-4-animating choice-5-animating")},m)}else{t=!0;var a=$(this).closest(".choices");a.removeClass("choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active"),$(this).closest(".choices").addClass("choice-"+($(this).closest("li").index()+1)+"-active choice-"+($(this).closest("li").index()+1)+"-animating")}if(1150>=b){$(".choices li").each(function(e,t){$(".zone-content",i).slideUp(300)});var i=$(this).closest("li");t&&$(".zone-content",i).slideToggle(300)}else{var n=$(this).parents("li").index();spritesTl[n].reverse()}}})}if($(".btn-close-choice").on("click",function(e){e.preventDefault();var t=$(this).closest(".choices");if(t.removeClass("choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active"),setTimeout(function(){t.removeClass("choice-1-animating choice-2-animating choice-3-animating choice-4-animating choice-5-animating")},m),1150>=b){var a=$(this).closest("li");$(".zone-content",a).slideToggle(300)}}),$("#logo").on("click",function(e){e.preventDefault(),b>1280?x.toggleClass("sidebar-links-open"):x.hasClass("sidebar-links-open")||x.hasClass("nav-header-open")?x.hasClass("sidebar-links-open")?x.removeClass("sidebar-links-open").addClass("nav-header-open"):x.removeClass("nav-header-open").addClass("sidebar-links-open"):x.addClass("nav-header-open")}),$("#mask").on("click",function(e){e.preventDefault(),x.removeClass("nav-header-open sidebar-links-open sidebar-account-open sidebar-tools-open")}),$("#btn-close-sidebar-links").click(function(e){e.preventDefault(),b>1280?x.removeClass("sidebar-links-open"):x.removeClass("sidebar-links-open").addClass("nav-header-open")}),$("#btn-close-nav-header").click(function(e){e.preventDefault(),x.removeClass("nav-header-open")}),$("#btn-close-header-responsive").click(function(e){e.preventDefault(),x.hasClass("nav-header-open")?x.removeClass("nav-header-open"):x.hasClass("sidebar-links-open")?x.removeClass("sidebar-links-open").addClass("nav-header-open"):x.hasClass("sidebar-account-open")?x.removeClass("sidebar-account-open").addClass("nav-header-open"):x.hasClass("sidebar-tools-open")&&x.removeClass("sidebar-tools-open").addClass("nav-header-open")}),$("#btn-account").on("click",function(e){e.preventDefault(),x.toggleClass("sidebar-account-open"),1280>=b&&x.removeClass("nav-header-open")}),$("#btn-close-sidebar-account").click(function(e){e.preventDefault(),x.removeClass("sidebar-account-open"),1280>=b&&x.addClass("nav-header-open")}),$("#btn-tools").on("click",function(e){e.preventDefault(),x.toggleClass("sidebar-tools-open"),1280>=b&&x.removeClass("nav-header-open")}),$("#btn-close-sidebar-tools").click(function(e){e.preventDefault(),x.removeClass("sidebar-tools-open"),1280>=b&&x.addClass("nav-header-open")}),$(".btn-heart").on("click",function(e){e.preventDefault(),$(this).hasClass("on")?$(this).removeClass("on"):$(this).addClass("on")}),s(),$("#mapForm").length&&b>767&&(C||n()),$(".menu-popup a.btn-cancel").on("click",function(e){e.preventDefault(),l()}),$(".bg-popup").on("click",function(e){e.preventDefault(),l()}),$(".block-optionnal").length){var S=0,z=$(".block-optionnal"),A=z.length;for(S;A>S;S++){var F=z.eq(S),E=$("#"+F.attr("data-name"));E.on("change",function(e){$(this).prop("checked")?F.addClass("hidden"):F.removeClass("hidden")})}}$("#editForm").on("click",function(e){var t=$("#formToEdit"),a,i=$(this);e.preventDefault(),t.length&&(t.toggleClass("form-disabled").find("input").toggleAttr("disabled"),t.find("button[type=submit]").toggleClass("hidden"),i.html(t.hasClass("form-disabled")?i.attr("data-edit"):i.attr("data-cancel")),i.toggleClass("btn-pen").toggleClass("btn-cancel").blur(),t.find(".not-filled").length&&t.find(".not-filled").toggleClass("hidden"),t.find(".block-pwd").length&&(a=t.find(".block-pwd"),a.toggleClass("hidden").find("input").toggleAttr("disabled"),a.find("button").toggleClass("hidden"),t.find(".block-pwd2").length&&t.find(".block-pwd2").toggleClass("hidden")),t.siblings(".content-footer").length&&t.siblings(".content-footer").toggleClass("hidden"),t.find("textarea")&&t.find("textarea").toggleAttr("disabled"))}),$("#editPwd").on("click",function(e){e.preventDefault();var t,a=$(this);a.parents(".block-pwd").length&&(t=$(this).parents(".block-pwd"),t.find("input").toggleAttr("disabled"),a.html(t.find("input").attr("disabled")?a.attr("data-edit"):a.attr("data-cancel")),a.toggleClass("btn-pen").toggleClass("btn-cancel").blur(),t.find(".block-pwd2").length&&t.find(".block-pwd2").toggleClass("hidden"))}),$(".search").on("click",function(e){e.preventDefault(),y=$(this).siblings(".search"),$(this).hasClass("is-selected")?($(this).removeClass("is-selected"),y.removeClass("is-inactive")):$(this).hasClass("is-inactive")?($(this).removeClass("is-inactive").addClass("is-selected"),y.removeClass("is-selected").addClass("is-inactive")):($(this).addClass("is-selected"),y.addClass("is-inactive"))}),$(".wrapper-btn-q-a .btn-q-a.action").on("click",function(e){if(e.preventDefault(),$(this).hasClass("valid")||$(this).hasClass("invalid")){if($(this).hasClass("invalid")){var t=$(this),a=$(this).parents(".wrapper-btn-q-a").find(".btn-q-a.action:not(.invalid)");t.removeClass("invalid").addClass("valid"),a.removeClass("valid").addClass("invalid")}}else $(this).addClass("valid"),$(this).parents(".wrapper-btn-q-a").find(".btn-q-a.action:not(.valid)").addClass("invalid");var i=$(this).parents("li").index();if($(this).parents(".wrapper-q-a").hasClass("opened")){var n=$(this).parents(".wrapper-q-a").next(".wrapper-q-a"),s=new TimelineMax;s.to($(".wrapper-btn-q-a",n).not(":eq("+i+")"),.2,{opacity:0}),s.set($(".wrapper-btn-q-a",n).not(":eq("+i+")"),{display:"none"}),s.set($(".wrapper-btn-q-a:eq("+i+")",n),{display:"block"}),s.to($(".wrapper-btn-q-a:eq("+i+")",n),.2,{opacity:1})}else{var n=$(this).parents(".wrapper-q-a").next(".wrapper-q-a");TweenMax.set($(".wrapper-btn-q-a:eq("+i+")",n),{display:"block"})}$(this).parents(".wrapper-q-a").hasClass("visible")&&TweenMax.to($(this).parents(".wrapper-q-a"),.2,{y:"0"}),TweenMax.to($(this).parents(".wrapper-q-a").next(".wrapper-q-a"),.2,{display:"block",opacity:1}),$(this).parents(".wrapper-q-a").addClass("opened")}),isBlocked&&$(".wrapper-pub").addClass("hidden");var O=a();if(0!=O&&($("html").addClass("is-ie"),$(".field-content-detail .blurred").length)){console.log($(".field-content-detail .blurred").text());var H=$(".field-content-detail .blurred").text(),P=H.split("X").join('<span class="blurred-char"><span>X</span></span>');$(".field-content-detail .blurred").html(P)}i(),$(document).scroll(function(){f=$(document).scrollTop(),$(window).width()>979?f+$(window).height()==$(document).height()?$(".social-footer").hasClass("closed")&&TweenMax.set($(".social-footer"),{className:"-=closed"}):$(".social-footer").hasClass("closed")||TweenMax.set($(".social-footer"),{className:"+=closed"}):TweenMax.set($(".social-footer"),{className:"-=closed"})});var B=new Hammer(document.getElementById("sidebar-links"));B.on("swipeleft",function(e){1280>=b&&(x.hasClass("sidebar-links-open")||x.hasClass("nav-header-open")?x.hasClass("sidebar-links-open")?x.removeClass("sidebar-links-open").addClass("nav-header-open"):x.removeClass("nav-header-open").addClass("sidebar-links-open"):x.addClass("nav-header-open"))});var N=new Hammer(document.getElementById("nav-header"));if(N.on("swiperight",function(e){1280>=b&&(x.hasClass("sidebar-links-open")||x.hasClass("nav-header-open")?x.hasClass("sidebar-links-open")?x.removeClass("sidebar-links-open").addClass("nav-header-open"):x.removeClass("nav-header-open").addClass("sidebar-links-open"):x.addClass("nav-header-open"))}),$(window).resize(function(){var e=$(window).height(),t=$(window).width();t!=b&&(x.removeClass("sidebar-links-open sidebar-account-open nav-header-open sidebar-tools-open"),$(".choices").length&&q.removeClass("choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active choice-1-animating choice-2-animating choice-4-animating choice-5-animating").find(".zone-content").attr("style",""),$("#header nav").length&&$("#header nav").addClass("no-transition"),$("#sidebar-account").length&&$("#sidebar-account").addClass("no-transition"),$("#sidebar-tools").length&&$("#sidebar-tools").addClass("no-transition"),$("#sidebar-links").length&&$("#sidebar-links").addClass("no-transition"),$(".bg-sidebar").length&&$(".bg-sidebar").addClass("no-transition"),clearTimeout(w),w=setTimeout(c,100)),u=e,b=t,s(),$("#mapForm").length&&b>767&&(C||n()),$("#toSlide").length>0&&($("#toSlide li").each(function(e,t){$(this).css("left",e*$(this).width())}),r()),$("#lb").length>0&&($(".lightbox-content ul li").each(function(e,t){$(this).css("left",e*$(this).width()-1)}),r()),o()}),$(window).load(function(){o(),$(".dashboard-block").length&&$(".dashboard-block").each(function(){$(this).addClass(0==$(this).position().left?"align-left":"align-right")})}),$("#toSlide").length>0){$("#toSlide").prepend('<button class="prev-slide small" />'),$("#toSlide").append('<button class="next-slide small" />'),$("#toSlide li").each(function(e,t){$(this).css("left",e*$(this).width()-1)}),d(),$(".prev-slide").click(function(e){T--,d(),r()}),$(".next-slide").click(function(e){T++,d(),r()});var R=new Hammer(document.getElementById("toSlide"));R.on("swipeleft",function(e){T<$("#toSlide li").length-1&&(T++,d(),r())}),R.on("swiperight",function(e){T>0&&(T--,d(),r())}),$("#toSlide li a").on("click",function(e){e.preventDefault(),h($(this).attr("href"),!0,"#toSlide")})}if($(".open-lighbox").on("click",function(e){e.preventDefault(),h($(this).attr("href"),!1,"")}),$("body").on("click","#lb .black-mask",p),$("body").on("click","#lb .close-btn",p),$(".select-circle").length>0&&($(".select-circle .circle-step > li").each(function(e,t){$("input[type=checkbox]",this).prop("checked")||($(this).addClass("closed"),$(".content-circle-step",this).slideToggle(0))}),$(".select-circle .circle-step > li header").on("click",function(e){$("#formToEdit").hasClass("form-disabled")||(e.preventDefault(),$("input[type=checkbox]",this).prop("checked")?($("input[type=checkbox]",this).prop("checked",!1),$(this).parent().addClass("closed")):($("input[type=checkbox]",this).prop("checked",!0),$(this).parent().removeClass("closed")),$(this).next(".content-circle-step").slideToggle(400))})),"undefined"!=typeof google&&$("body").hasClass("hasMaps")&&window.matchMedia("screen").matches){var G=$("#latitude"),U=$("#longitude"),W=new google.maps.Geocoder,X=new google.maps.LatLng($("#map-canvas").attr("data-latIni"),$("#map-canvas").attr("data-longIni")),_={zoom:9,center:X},K=new google.maps.Map(document.getElementById("map-canvas"),_),Q,J=document.getElementById("geolocalisation"),V=new google.maps.places.Autocomplete(J);if(V.bindTo("bounds",K),google.maps.event.addListener(V,"place_changed",function(){var e=V.getPlace();if(e.geometry){var t=e.geometry.location.lat(),a=e.geometry.location.lng(),i=new google.maps.LatLng(t,a);G.val(t),U.val(a),v(i),K.setCenter(i)}}),"edit"==$("#map-canvas").attr("data-mode")&&google.maps.event.addListener(K,"click",function(e){var t=e.latLng.lat(),a=e.latLng.lng(),i=new google.maps.LatLng(t,a);G.val(t),U.val(a),v(i),g(i)}),void 0!=$("#map-canvas").attr("data-pinLat")&&void 0!=$("#map-canvas").attr("data-pinLong")){var Y=new google.maps.LatLng($("#map-canvas").attr("data-pinLat"),$("#map-canvas").attr("data-pinLong"));v(Y)}}});