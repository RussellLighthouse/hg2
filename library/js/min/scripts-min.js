!function($){$(document).on("ready",function(){$("#menu-item-35, .destinations-menu .close-menu").click(function(n){n.preventDefault(),$(".destinations-menu").toggleClass("showing")}),$(".destinations-menu > ul > li").hover(function(){$(".destinations-menu > ul > li").removeClass("showing"),$(this).addClass("showing")},function(){})})}(jQuery);var container=document.querySelector(".posts-feed"),msnry=new Masonry(container,{columnWidth:200,itemSelector:".col"});