$("document").ready(function(){function n(n){$(n).clone().show().appendTo("#overlay").parent().fadeIn("fast")}function e(n){$(n).parents("#overlay").fadeOut("fast",function(){$(this).find(".dialog").remove()})}$(document).bind("em_maps_location_hook",function(n,e,o,t){e.set("scrollwheel",!1),e.setOptions({scrollwheel:!1})}),$("div.breadcrumbs").append($("div.projectGateWay")),$(".blog #content, .blog .widget-area").wrapAll($("<div>").addClass("blogWrap")),$("#back-top").hide(),$(function(){$(window).scroll(function(){$(this).scrollTop()>100?$("#back-top").fadeIn():$("#back-top").fadeOut()}),$("#back-top a").click(function(){return $("body,html").animate({scrollTop:0},600),!1}),$(".anchorNav li a").click(function(n){n.preventDefault(),$("html,body").animate({scrollTop:$(this.hash).offset().top},500)})}),$("li.new_staffs, li.new_partners, li.foundation_member").click(function(){var e=$(this).find(".staffBiog").html(),o=$(this).find(".imgWrapper").html(),t=$(this).find(".staffName").html(),i=$(this).find(".staffTitle").html();return n("#descrDialog"),$("#staffDescr h1.staffName").html(t),$("#staffDescr p.staffTitle").html(i),$("#staffDescr p.staffBio").html(e),$("#staffDescr .imgWrapper").html(o),!1}),$("#descrDialog").find(".ok, .cancel").live("click",function(n){n.stopPropagation(),e(this)}),$("#blanket").click(function(){e("#descrDialog")}),$("#partnershipGroup ul").append($("li.partnerships")),$("#communicationGroup ul").append($("li.communication-pr")),$("#contractorsGroup ul").append($("li.contractors")),$("#engineeringGroup ul").append($("li.design-engineering")),$("#partnershipGroup ul.staff").find("li.newStaff").appendTo("#partnershipGroup ul.staff"),$("#communicationGroup ul.staff").find("li.newStaff").appendTo("#communicationGroup ul.staff"),$("#engineeringGroup .staff").find("li.newStaff").appendTo("#engineeringGroup ul.staff"),$("#govGroup ul").append($("li.governments")),$("#compsGroup ul").append($("li.companies")),$("#founGroup ul").append($("li.foundations")),$("#intGovGroup ul").append($("li.inter-governmental")),$("#ngoGroup ul").append($("li.ngos")),$("#knowledgeGroup ul").append($("li.knowledge-institutes"))});var KEYCODE_ESC=27;$(document).keyup(function(n){n.keyCode===KEYCODE_ESC&&$(".cancel").click()});