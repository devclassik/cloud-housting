$(document).ready(function(){$("[data-href]").on("click",function(t){t.preventDefault(),document.location.href=$(this).data("href")}),$("[submit-form]").on("click",function(){$(this).closest("form").submit()}),$("#subaccountActivate input").on("ifToggled",function(t){$("#subacct-container").collapse("toggle")}),$("#inputAllowSso").on("change",function(){var t=$(this).closest(".panel-switch").find(".loader");t.fadeIn(400),WHMCS.http.jqClient.post("clientarea.php",jQuery("#frmSingleSignOn").serialize()).promise().done(function(){t.fadeOut(400)})}),$(document).on("click","[data-trigger-click]",function(t){t.preventDefault;var e=$(this).data("target");$("body").find(e).trigger("click")}),$("[data-form]").on("click",function(t){t.preventDefault;var e=$(this).data("form");$("body").find(e).submit()});var t=$(".list-group-tab-nav, .page-clientareadomaindetails #Overview"),e=$.extend({getHashCallback:function(t){return t}});if($("a",t).on("click",function(){if("tab"===$(this).data("toggle")){var a=this.hash,i=a?'a[href*="'+a+'"]':"li:first-child > a",n=a.replace("tab","");$(t).find(".active").removeClass("active"),$("body").find(i).addClass("active"),$("body").find(n).addClass("active").siblings(".tab-pane").removeClass("active"),window.location.hash=e.getHashCallback(a)}}),window.location.hash&&t.length>0){var a=window.location.hash,i=a?'a[href*="'+a+'"]':"li:first-child > a";$("body").find(i).addClass("active");var n=a.replace("tab","");$("body").find(n).addClass("active").siblings(".tab-pane").removeClass("active")}if($(document).on("click","[data-btn-loader]",function(){$(this).find("span").not(".loader").addClass("invisible"),$(this).find(".loader").removeClass("hidden")}),$(document).on("click",".btn-checkout",function(){"submit"==$(this).attr("type")&&$(this).closest("form").submit(),$(".btn-checkout").addClass("disabled").prop("disabled",!0)}),$("[data-cc-popover-show]").on("mouseenter",function(){$(this).siblings("[data-cc-popover]").addClass("fade in").show()}),$("[data-cc-popover-show]").on("mouseout",function(){$(this).siblings("[data-cc-popover]").removeClass("fade in").hide()}),$("[data-radio-tab]").on("click",function(){if("undefined"!=$(this).data("radio-target")){let t=$(this).data("radio-target");$(t).iCheck("check")}else $(this).find('input[type="radio"]').iCheck("update")}),$(".payment-form").length>0){var o=$(".payment-form").find("iframe");o.length>0?($(".modal").on("show.bs.modal",function(){$(".main-content, .main-content .sidebar, .main-content .panel-payment, .main-content .sticky-sidebar-inner").css("position","static")}),$(".modal").on("hide.bs.modal",function(){$(".main-content, .main-content .sidebar, .main-content .panel-payment, .main-content .sticky-sidebar-inner").removeAttr("style")})):$(".page-viewinvoice .main-body .modal").each(function(){$("body").append(this),$(this).remove});var s=$(".payment-form").data("btntext"),c=$(".payment-form").data("btnsubscribetext");$(".payment-form").find('input[type="image"]').attr("type","submit").attr("value",s),$("#paynow").html(s).attr("style","color: #fff").addClass("btn");var l=$(".payment-form").find("form").length;2==l&&$(".payment-form").find("form:first").find('input[type="submit"]').attr("value",c)}var d=$(".btn-check-all"),r=$('.check-all-container input[type="checkbox"]').not(":disabled");if(d.on("click",function(t){t.preventDefault();var e=$(this).data("checkalltext"),a=$(this).data("uncheckalltext");$(this).hasClass("checked")?(r.iCheck("uncheck"),$(this).removeClass("checked"),$(this).text(e)):(r.iCheck("check"),$(this).addClass("checked"),$(this).text(a))}),$('input[name="canchangepin"]').closest("div").addClass("checkbox").css("margin-top","-5px"),$('input[name="canchangepin"]').iCheck({checkboxClass:"checkbox-styled",radioClass:"radio-styled",increaseArea:"40%"}),jQuery(".ssl-status.ssl-sync").each(function(){var t=jQuery(this);WHMCS.http.jqClient.post(WHMCS.utils.getRouteUrl("/domain/ssl-check"),{type:t.closest(".ssl-info").data("type"),domain:t.closest(".ssl-info").data("domain"),token:csrfToken},function(e){if(e.invalid)t.hide();else{var a=t.data("maintemplate");"undefined"==a&&(a="lagom");var i=e.image.replace("assets/img/ssl/","templates/"+a+"/assets/img/ssl/12x12/");i=i.replace(".png",".svg"),t.replaceWith('<img src="'+i+'" data-toggle="tooltip" title="'+e.tooltip+'" class="'+e.class+'">')}})}),$(".alert-dismissible").on("close.bs.alert",function(){$('[data-toggle="tooltip"]').tooltip("hide")}),$("#openTicketSubmit").on("click",function(){$(this).prop("disabled",!0),$(this).closest("form").submit()}),$('#frmDomainHomepage input[type="submit"]').on("click",function(t){t.preventDefault();var e=$('#frmDomainHomepage [name="domain"]').val();e=e.replace(/\s/g,""),$('#frmDomainHomepage [name="domain"]').val(e),$("#frmDomainHomepage").submit()}),$("#modalAjax, #modalGeneratePassword").removeAttr("style"),$("[data-fixed-actions]").luScrollTo({onScreen:function(t,e){$(t).stop().removeClass("is-fixed")},outScreen:function(t,e){$(t).stop().addClass("is-fixed")}}),$("#domain-filter").length&&$("#tableDomainPricing").length){let t=$("#domain-filter")[0].selectize,e=jQuery("#tableDomainPricing").DataTable();t.refreshOptions(!1),t.on("change",function(a){let i=t.getValue();var n=!1,o=!1,s=Object.keys(i)[Object.keys(i).length-1],c=Object.keys(i).length;if(c>0){for(const[t,e]of Object.entries(i))"All"==e&&(n=!0),s==t&&0!=t&&"All"==e&&(o=!0);!0===o?t.setValue("All",1):!0===n&&(delete i[0],t.setValue(i))}else t.setValue("All",1);var l=i.toString(),d=l.replace(/,/g,"|");"|"===d.charAt(0)&&(d=d.substring(1)),e.column(1).search(d,!0,!1).draw()})}});