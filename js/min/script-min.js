$(function(){function e(){!Modernizr.objectfit&&$(".img-fit").length&&$(".img-fit").each(function(){var e=$(this),t=e.find("img").prop("src");t&&e.css("backgroundImage","url("+t+")").addClass("compat-object-fit")})}function t(){s=$(document).scrollTop(),requestAnimFrame(t)}function a(){function e(){if(l.is(":checked")&&n.find(".active").length){if(void 0!==n.find(".active").attr("data-adjacent")){var e=n.find(".active").attr("data-adjacent").split(","),t=e.length,a=0;for(a;t>a;a++)n.find('[data-department="'+e[a]+'"]').attr("class","department adjacent")}}else if(!l.is(":checked")&&n.find(".adjacent").length){var i;n.find(".active").length&&(i=n.find(".active").attr("data-department")),o.attr("class","department"),i.length&&n.find('[data-department="'+i+'"]').attr("class","department active")}}var t=$("#mapForm"),a=t.find(".map-form"),n=$("#mapFormMetropole"),i=t.find(".map-form-extra"),o=t.find(".department"),s=$("#departement"),l=$("#departement-etendre"),c=t.find("a"),d=t.find(".map-btn"),h=t.find(".btn-metropole");o.on("click",function(t){o.attr("class","department"),$(this).attr("class","department active"),s.val($(this).attr("data-department")),e(l)}),s.on("change",function(a){o.attr("class","department"),t.find('[data-department="'+s.val()+'"]').length?t.find('[data-department="'+s.val()+'"]').attr("class","department active"):("92"===s.val()||"93"===s.val()||"94"===s.val())&&t.find('[data-department="75"]').attr("class","department active").siblings().attr("class","department"),e(l)}),l.on("change",function(t){e(l)}),c.on("click",function(e){e.preventDefault(),$(this).parents(".map-btn").length?(d.removeClass("active"),h.addClass("active"),TweenMax.to($($(this).attr("href")),.2,{x:"0%",opacity:1,zIndex:1}),TweenMax.to(n,.2,{x:"-100%",opacity:0,zIndex:0})):(d.addClass("active"),h.removeClass("active"),TweenMax.to(n,.2,{x:"0%",opacity:1,zIndex:1}),TweenMax.to(i,.2,{x:"100%",opacity:0,zIndex:0}))}),r=!0}function n(){if($(".nav-tabs").length){var e=$(".nav-tabs");e.hasClass("nav-tabs-indicator")||(768>d?e.height(0).find(".active").on("click",function(t){var a=0,n=0,i=e.find("li"),o=i.length;for(n;o>n;n++)i.eq(n).hasClass("active")||(a+=i.eq(n).outerHeight());e.height(e.height()>0?0:a),e.toggleClass("on")}):e.css("height","auto"))}}function i(){$(".news").length&&(TweenMax.set($(".news > li article"),{clearProps:"height"}),$(".news > li article").each(function(e){TweenMax.set($(this),{height:$(this).closest("li").height()+"px"})}))}function o(){$("#header nav").length&&$("#header nav").removeClass("no-transition"),$("#sidebar-account").length&&$("#sidebar-account").removeClass("no-transition"),$("#sidebar-tools").length&&$("#sidebar-tools").removeClass("no-transition")}var s,l=600,c=$(window).height(),d=$(window).width(),r=!1,h,p=$("body");if(window.requestAnimFrame=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)}}(),jQuery.fn.toggleAttr=function(e){return this.each(function(){var t=$(this);t.attr(e)?t.removeAttr(e):t.attr(e,e)})},e(),i(),$(".social-footer").length&&$(".social-footer").addClass("closed").hover(function(){$(this).hasClass("closed")&&TweenMax.set($(this),{className:"-=closed"})},function(){var e=$(document).scrollTop();s+$(window).height()!=$(document).height()&&TweenMax.set($(this),{className:"+=closed"})}),$(".choices").length){var f=$(".choices"),v=f.find(".btn-choice"),m=f.find(".visuel"),g=f.find("li").length,u=0,b=4,C=5,w=200,k=200,x=new SteppedEase(b-1),T=[];for(u;g>u;u++){var M=0,D=m.eq(u);for(T[u]=new TimelineMax({paused:!0}),M;C>M;M++)T[u].add(TweenMax.fromTo(D,.15,{backgroundPosition:"0 -"+w*M+"px"},{backgroundPosition:"-"+k*(b-1)+"px -"+w*M+"px",ease:x}));TweenMax.set(D,{backgroundPosition:"0 0"})}v.on("mouseenter",function(){var e=$(this).parents("li").index();T[e].play()}).on("mouseout",function(){var e=$(this).parents("li").index();T[e].reverse()})}if(v.click(function(e){if(d>767)if(e.preventDefault(),$(this).closest(".choices").addClass("choice-"+($(this).closest("li").index()+1)+"-active choice-"+($(this).closest("li").index()+1)+"-animating"),1280>=d){var t=$(this).closest("li");$(".zone-content",t).slideToggle(300)}else{var a=$(this).parents("li").index();T[a].reverse()}}),$(".btn-close-choice").click(function(e){e.preventDefault();var t=$(this).closest(".choices");if(t.removeClass("choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active"),setTimeout(function(){t.removeClass("choice-1-animating choice-2-animating choice-3-animating choice-4-animating choice-5-animating")},l),1150>=d){var a=$(this).closest("li");$(".zone-content",a).slideToggle(300)}}),$("#logo").on("click",function(e){e.preventDefault(),d>1280?p.toggleClass("sidebar-links-open"):p.hasClass("sidebar-links-open")||p.hasClass("nav-header-open")?p.hasClass("sidebar-links-open")?p.removeClass("sidebar-links-open").addClass("nav-header-open"):p.removeClass("nav-header-open").addClass("sidebar-links-open"):p.addClass("nav-header-open")}),$("#mask").on("click",function(e){e.preventDefault(),p.removeClass("nav-header-open sidebar-links-open sidebar-account-open sidebar-tools-open")}),$("#btn-close-sidebar-links").click(function(e){e.preventDefault(),d>1280?p.removeClass("sidebar-links-open"):p.removeClass("sidebar-links-open").addClass("nav-header-open")}),$("#btn-close-nav-header").click(function(e){e.preventDefault(),p.removeClass("nav-header-open")}),$("#btn-close-header-responsive").click(function(e){e.preventDefault(),p.hasClass("nav-header-open")?p.removeClass("nav-header-open"):p.hasClass("sidebar-links-open")?p.removeClass("sidebar-links-open").addClass("nav-header-open"):p.hasClass("sidebar-account-open")?p.removeClass("sidebar-account-open").addClass("nav-header-open"):p.hasClass("sidebar-tools-open")&&p.removeClass("sidebar-tools-open").addClass("nav-header-open")}),$("#btn-account").on("click",function(e){e.preventDefault(),p.toggleClass("sidebar-account-open"),1280>=d&&p.removeClass("nav-header-open")}),$("#btn-close-sidebar-account").click(function(e){e.preventDefault(),p.removeClass("sidebar-account-open"),1280>=d&&p.addClass("nav-header-open")}),$("#btn-tools").on("click",function(e){e.preventDefault(),p.toggleClass("sidebar-tools-open"),1280>=d&&p.removeClass("nav-header-open")}),$("#btn-close-sidebar-tools").click(function(e){e.preventDefault(),p.removeClass("sidebar-tools-open"),1280>=d&&p.addClass("nav-header-open")}),n(),$("#mapForm").length&&d>767&&(r||a()),$(".block-optionnal").length){var M=0,A=$(".block-optionnal"),F=A.length;for(M;F>M;M++){var q=A.eq(M),z=$("#"+q.attr("data-name"));z.on("change",function(e){$(this).prop("checked")?q.addClass("hidden"):q.removeClass("hidden")})}}$("#editForm").on("click",function(e){var t=$("#formToEdit"),a,n=$(this);e.preventDefault(),t.length&&(t.toggleClass("form-disabled").find("input").toggleAttr("disabled"),t.find("button[type=submit]").toggleClass("hidden"),n.html(t.hasClass("form-disabled")?n.attr("data-edit"):n.attr("data-cancel")),n.toggleClass("btn-pen").toggleClass("btn-cancel").blur(),t.find(".not-filled").length&&t.find(".not-filled").toggleClass("hidden"),t.find(".block-pwd").length&&(a=t.find(".block-pwd"),a.toggleClass("hidden").find("input").toggleAttr("disabled"),a.find("button").toggleClass("hidden"),t.find(".block-pwd2").length&&t.find(".block-pwd2").toggleClass("hidden")),t.siblings(".content-footer").length&&t.siblings(".content-footer").toggleClass("hidden"))}),$("#editPwd").on("click",function(e){e.preventDefault();var t,a=$(this);a.parents(".block-pwd").length&&(t=$(this).parents(".block-pwd"),t.find("input").toggleAttr("disabled"),a.html(t.find("input").attr("disabled")?a.attr("data-edit"):a.attr("data-cancel")),a.toggleClass("btn-pen").toggleClass("btn-cancel").blur(),t.find(".block-pwd2").length&&t.find(".block-pwd2").toggleClass("hidden"))}),isBlocked&&$(".wrapper-pub").addClass("hidden"),t(),$(document).scroll(function(){s=$(document).scrollTop(),$(window).width()>979?s+$(window).height()==$(document).height()?$(".social-footer").hasClass("closed")&&TweenMax.set($(".social-footer"),{className:"-=closed"}):$(".social-footer").hasClass("closed")||TweenMax.set($(".social-footer"),{className:"+=closed"}):TweenMax.set($(".social-footer"),{className:"-=closed"})}),$(window).resize(function(){var e=$(window).height(),t=$(window).width();t!=d&&(p.removeClass("sidebar-links-open sidebar-account-open nav-header-open sidebar-tools-open"),f.length&&f.removeClass("choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active choice-1-animating choice-2-animating choice-4-animating choice-5-animating").find(".zone-content").attr("style",""),$("#header nav").length&&$("#header nav").addClass("no-transition"),$("#sidebar-account").length&&$("#sidebar-account").addClass("no-transition"),$("#sidebar-tools").length&&$("#sidebar-tools").addClass("no-transition"),clearTimeout(h),h=setTimeout(o,100)),c=e,d=t,n(),$("#mapForm").length&&d>767&&(r||a()),i()}),$(window).load(function(){i()})});