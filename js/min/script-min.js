$(function(){function e(){!Modernizr.objectfit&&$(".img-fit").length&&$(".img-fit").each(function(){var e=$(this),t=e.find("img").prop("src");t&&e.css("backgroundImage","url("+t+")").addClass("compat-object-fit")})}function t(){o=$(document).scrollTop(),requestAnimFrame(t)}function a(){function e(){if(c.is(":checked")&&n.find(".active").length){if(void 0!==n.find(".active").attr("data-adjacent")){var e=n.find(".active").attr("data-adjacent").split(","),t=e.length,a=0;for(a;t>a;a++)n.find('[data-department="'+e[a]+'"]').attr("class","department adjacent")}}else if(!c.is(":checked")&&n.find(".adjacent").length){var i;n.find(".active").length&&(i=n.find(".active").attr("data-department")),o.attr("class","department"),i.length&&n.find('[data-department="'+i+'"]').attr("class","department active")}}var t=$("#mapForm"),a=t.find(".map-form"),n=$("#mapFormMetropole"),i=t.find(".map-form-extra"),o=t.find(".department"),s=$("#departement"),c=$("#departement-etendre"),d=t.find("a"),r=t.find(".map-btn"),h=t.find(".btn-metropole");o.on("click",function(t){o.attr("class","department"),$(this).attr("class","department active"),s.val($(this).attr("data-department")),e(c)}),s.on("change",function(a){o.attr("class","department"),t.find('[data-department="'+s.val()+'"]').length?t.find('[data-department="'+s.val()+'"]').attr("class","department active"):"92"!==s.val()&&"93"!==s.val()&&"94"!==s.val()||t.find('[data-department="75"]').attr("class","department active").siblings().attr("class","department"),e(c)}),c.on("change",function(t){e(c)}),d.on("click",function(e){e.preventDefault(),$(this).parents(".map-btn").length?(r.removeClass("active"),h.addClass("active"),TweenMax.to($($(this).attr("href")),.2,{x:"0%",opacity:1,zIndex:1}),TweenMax.to(n,.2,{x:"-100%",opacity:0,zIndex:0})):(r.addClass("active"),h.removeClass("active"),TweenMax.to(n,.2,{x:"0%",opacity:1,zIndex:1}),TweenMax.to(i,.2,{x:"100%",opacity:0,zIndex:0}))}),l=!0}function n(){if($(".nav-tabs").length){var e=$(".nav-tabs");e.hasClass("nav-tabs-indicator")||(768>d?e.height(0).find(".active").on("click",function(t){var a=0,n=0,i=e.find("li"),o=i.length;for(n;o>n;n++)i.eq(n).hasClass("active")||(a+=i.eq(n).outerHeight());e.height()>0?e.height(0):e.height(a),e.toggleClass("on")}):e.css("height","auto"))}}function i(){$("#header nav").removeClass("no-transition")}var o,s=600,c=$(window).height(),d=$(window).width(),l=!1;if(window.requestAnimFrame=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)}}(),jQuery.fn.toggleAttr=function(e){return this.each(function(){var t=$(this);t.attr(e)?t.removeAttr(e):t.attr(e,e)})},e(),$(".social-footer").length&&$(".social-footer").addClass("closed").hover(function(){$(this).hasClass("closed")&&TweenMax.set($(this),{className:"-=closed"})},function(){var e=$(document).scrollTop();o+$(window).height()!=$(document).height()&&TweenMax.set($(this),{className:"+=closed"})}),$(".btn-choice").click(function(e){if(e.preventDefault(),$(this).closest(".choices").addClass("choice-"+($(this).closest("li").index()+1)+"-active choice-"+($(this).closest("li").index()+1)+"-animating"),1150>=d){var t=$(this).closest("li");$(".zone-content",t).slideToggle(300)}}),$(".btn-close-choice").click(function(e){e.preventDefault();var t=$(this).closest(".choices");if(t.removeClass("choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active"),setTimeout(function(){t.removeClass("choice-1-animating choice-2-animating choice-3-animating choice-4-animating choice-5-animating")},s),1150>=d){var a=$(this).closest("li");$(".zone-content",a).slideToggle(300)}}),$("#logo").on("click",function(e){e.preventDefault(),d>1150?$("body").toggleClass("sidebar-links-open"):$("body").hasClass("sidebar-links-open")||$("body").hasClass("nav-header-open")?$("body").hasClass("nav-header-open")?($("body").removeClass("nav-header-open"),$("body").addClass("sidebar-links-open")):($("body").removeClass("sidebar-links-open"),$("body").addClass("nav-header-open")):$("body").addClass("sidebar-links-open")}),$("#mask").on("click",function(e){e.preventDefault(),$("body").removeClass("nav-header-open sidebar-links-open sidebar-account-open")}),$("#btn-close-sidebar-links").click(function(e){e.preventDefault(),d>1150?$("body").removeClass("sidebar-links-open"):$("body").hasClass("nav-header-open")?$("body").removeClass("nav-header-open"):$("body").removeClass("sidebar-links-open")}),$("#btn-close-nav-header").click(function(e){e.preventDefault(),$("body").removeClass("nav-header-open"),$("body").addClass("sidebar-links-open")}),$("#btn-close-header-responsive").click(function(e){e.preventDefault(),$("body").hasClass("nav-header-open")?$("body").removeClass("nav-header-open"):$("body").removeClass("sidebar-links-open")}),$("#btn-account").on("click",function(e){e.preventDefault(),$("body").toggleClass("sidebar-account-open")}),$("#btn-close-sidebar-account").click(function(e){e.preventDefault(),$("body").removeClass("sidebar-account-open")}),n(),$("#mapForm").length&&d>767&&(l||a()),$(".block-optionnal").length){var r=0,h=$(".block-optionnal"),f=h.length;for(r;f>r;r++){var m=h.eq(r),p=$("#"+m.attr("data-name"));p.on("change",function(e){$(this).prop("checked")?m.addClass("hidden"):m.removeClass("hidden")})}}$("#editForm").on("click",function(e){var t=$("#formToEdit"),a,n=$(this);e.preventDefault(),t.length&&!t.find(".p-error").length&&(t.toggleClass("form-disabled").find("input").toggleAttr("disabled"),t.find("button[type=submit]").toggleClass("hidden"),t.hasClass("form-disabled")?n.html(n.attr("data-edit")):n.html(n.attr("data-cancel")),n.toggleClass("btn-pen").toggleClass("btn-cancel").blur(),t.find(".not-filled").length&&t.find(".not-filled").toggleClass("hidden"),t.find(".block-pwd").length&&(a=t.find(".block-pwd"),a.toggleClass("hidden").find("input").toggleAttr("disabled"),a.find("button").toggleClass("hidden"),t.find(".block-pwd2").length&&t.find(".block-pwd2").toggleClass("hidden")),t.siblings(".content-footer").length&&t.siblings(".content-footer").toggleClass("hidden"))}),$("#editPwd").on("click",function(e){e.preventDefault();var t,a=$(this);a.parents(".block-pwd").length&&(t=$(this).parents(".block-pwd"),t.find("input").toggleAttr("disabled"),t.find("input").attr("disabled")?a.html(a.attr("data-edit")):a.html(a.attr("data-cancel")),a.toggleClass("btn-pen").toggleClass("btn-cancel").blur(),t.find(".block-pwd2").length&&t.find(".block-pwd2").toggleClass("hidden"))}),isBlocked&&$(".wrapper-pub").addClass("hidden"),t(),$(document).scroll(function(){o=$(document).scrollTop(),$(window).width()>979?o+$(window).height()==$(document).height()?$(".social-footer").hasClass("closed")&&TweenMax.set($(".social-footer"),{className:"-=closed"}):$(".social-footer").hasClass("closed")||TweenMax.set($(".social-footer"),{className:"+=closed"}):TweenMax.set($(".social-footer"),{className:"-=closed"})});var v;$(window).resize(function(){var e=$(window).height(),t=$(window).width();t!=d&&($("body").removeClass("sidebar-links-open sidebar-account-open nav-header-open"),$(".choices").removeClass("choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active choice-1-animating choice-2-animating choice-4-animating choice-5-animating"),$(".choices .zone-content").attr("style",""),$("#header nav").addClass("no-transition"),clearTimeout(v),v=setTimeout(i,100)),c=e,d=t,n(),$("#mapForm").length&&d>767&&(l||a())}),$(window).load(function(){})});