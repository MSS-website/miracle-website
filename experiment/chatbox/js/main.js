!function(t,$) {
    $(function() {

        var body = $("body");
        var sidebar = $(".sidebar");
        var sidebarMenuBox = sidebar.find("> div");
        var languageSelect = $(".language select");
        var languageTitle = $(".language .title");
        var jqwindow = $(window);
        var sectionChatbotsAreTheNew = $("section.chatbots-are-the-new");
        var popup = $("body > .popup");
        var popup2 = $("body > .popup2");
        var popupFb = $("body > .popup-fb");
        var popupWhoops = $("body > .popup-whoops");

        var showSidebarClass = "show-sidebar";
        var showPopupClass = "show-popup";
        var showPopup2Class = "show-popup2";
        var showPopupFbClass = "show-popup-fb";
        var showPopupWhoopsClass = "show-popup-whoops";

        var eventsList = {
                click:"click",
                mousedown:"mousedown",
                touchmove:"touchmove",
                touchstart:"touchstart",
                touchend:"touchend",
                input:"change input",
                scroll:"scroll",
                resize:"resize",
                submit:"submit",
                submitStat:"submitstat",
                sizeMode:"sizemode"
            };

        var scrollLock = false;

        

/*
        var offsetYSectionChatbotsAreTheNew = 0;
        var heightSectionChatbotsAreTheNew = 0;
        var viewportDownSectionChatbotsAreTheNew = 0;
        var deltaOffsetYSectionChatbotsAreTheNew = 0;
        var deltaBackgroundSectionChatbotsAreTheNew = 0;
        var currentResBackgroundSectionChatbotsAreTheNew = 0;
*/


        //dev type
        var is_native = false;
        var mobileSizeMode = false;

        (function(){
            var nativeOnDevice = ["Android", "BlackBerry", "iPhone", "iPad", "iPod", "Opera Mini", "IEMobile", "Silk"];

            for (var e = navigator.userAgent || navigator.vendor || window.opera, t = 0; t < nativeOnDevice.length; t++) {
                if (e.toString().toLowerCase().indexOf(nativeOnDevice[t].toLowerCase()) > 0) {
                    is_native = true;
                    break;
                }
            }

            if(!is_native){
                $(".intro .video-background").append($("#video-template").html());
            }

            if(navigator.userAgent.toString().toLowerCase().indexOf("messenger")!=-1) {
                body.addClass("fb-messenger");
            }


            jqwindow.on(eventsList.resize,function(){
                var msm = (jqwindow.width()<705);
                if(mobileSizeMode != msm){
                    mobileSizeMode = msm;
                    jqwindow.trigger(eventsList.sizeMode);
                }
            });

        })();


//stat

        (function(){

            $(".intro .button.facebook").on(eventsList.mousedown, function(){
                ga('send', 'event', 'createfacebookchatbot', 'click', 'top');
                yaCounter38620685.reachGoal('createfacebookchatbot');
            });

            $(".l-buttons .button.facebook").on(eventsList.mousedown, function(){
                ga('send', 'event', 'createfacebookchatbot', 'click', 'bottom');
                yaCounter38620685.reachGoal('createfacebookchatbot');
            });

            $(".l-buttons .button.telegram").on(eventsList.mousedown, function(){
                ga('send', 'event', 'createtelegramchatbot', 'click', 'bottom');
                yaCounter38620685.reachGoal('createtelegramchatbot');
            });

            $(".intro .button.big-orange").on(eventsList.mousedown, function(){
                ga('send', 'event', 'createforfree', 'click', 'top');
             //   yaCounter38620685.reachGoal('createforfree');
            });

            $(".you-are-in-a-great .button.big-orange").on(eventsList.mousedown, function(){
                ga('send', 'event', 'createforfree', 'click', 'bottom');
             //   yaCounter38620685.reachGoal('createforfree');
            });

            $(".popup .button.blue").on(eventsList.mousedown, function(){
                ga('send', 'event', 'createnow', 'click', '');
                yaCounter38620685.reachGoal('createnow');
            });

            $(".popup .link a").on(eventsList.mousedown, function(){
                ga('send', 'event', 'othermessengerslink', 'click', '');
                yaCounter38620685.reachGoal('othermessengerslink');
            });



            var formFb = $(".popup-fb form");

            formFb.on(eventsList.submitStat, function(){
                var form = $(this);
                ga('send', 'event', 'facebookmessengersemail', 'email', form.find("input[type='email']").val());
            });


            var form = $(".popup form");

            form.on(eventsList.submitStat, function(){
                var form = $(this);
                ga('send', 'event', 'othermessengersemail', 'email', form.find("input[type='email']").val());

                form.find("input[type='checkbox']:checked").each(function(){
                    ga('send', 'event', 'othermessengersradio', 'select', $(this).attr('value'));
                });
            });


            var form2 = $(".popup2 form");

            form2.on(eventsList.submitStat, function(){

                var email = $.trim(form2.find("input[name='whont2[email]']").val());
                var website = $.trim(form2.find("input[name='whont2[site]']").val());

                ga('send', 'event', 'keepmeposted', 'click', 'frompopup');
                ga('send', 'event', 'keepmeposted', 'email', email);

                if(website != ""){
                    ga('send', 'event', 'keepmeposted', 'website', website);
                }

                yaCounter38620685.reachGoal('keepmeposted', {email: email, website: website});
            });

            form2.find("a").on(eventsList.mousedown, function(){
                if(body.hasClass("for-publishers")){
                    ga('send', 'event', 'getstarted_frompopup', 'click', 'frompopup');
                }else
                if(body.hasClass("techcrunch")){
                    ga('send', 'event', 'techcrunch', 'click', 'frompopup');
                }else{
                    ga('send', 'event', 'forbesbot', 'click', 'frompopup');
                }

                yaCounter38620685.reachGoal('getstarted_frompopup', body.hasClass("techcrunch")?'techcrunch':'forbesbot');
            });

        })();

//popup
//popup 1

        var validateEmail = function(email) {
            return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
        };

        (function(){

            var scrollLock = false;

            var formSendRedy = false;

            var link = popup.find(".link");
            var add = popup.find(".add");
            var button = popup.find("button");
            var done = popup.find(".done");
            var sdiv = popup.find("> div");

            var hidePopup = function(){
                body.removeClass(showPopupClass);

                setTimeout(function(){
                    add.slideUp(0);
                    link.slideDown(0);
                    done.fadeOut(0);
                    scrollLock = false;
                },500);
            };

            $(".button.big-orange:not(.continue-reading,.blog,.nop)").on(eventsList.mousedown, function(){
                body.addClass(showPopupClass);
                scrollLock = true;
            });

            $(".button.telegram").on(eventsList.mousedown, function(){
                if(!body.hasClass("facebook") && !body.hasClass("platforms")){
                    body.addClass(showPopupClass);
                    scrollLock = true;
                }
            });

            popup.find(".close").on(eventsList.mousedown,hidePopup);

            popup.on(eventsList.mousedown, hidePopup );

            popup.find(".window").on(eventsList.mousedown, function (e) {
                e.stopPropagation();
            });

            $(document).on(eventsList.touchmove,function(e){
                if(scrollLock){
                    if(popup.find(".window").height() > popup.height()){
                        popup.find(".window").trigger(e);
                    }
                    return false;
                }
            });

            link.find("a").on(eventsList.mousedown,function(){
                add.slideDown(200);
                link.slideUp(200);

                setTimeout(function(){
                    sdiv.scrollTop(99999);
                },200);

            });

            popup.find("input").on(eventsList.input,function(){
                var email = $.trim(popup.find("input[type='email']").val());

               //if(popup.find("input[type='checkbox']:checked").length > 0 && email.length>5 && validateEmail(email)){
                if(email.length>5 && validateEmail(email)){
                    button.removeClass("disabled").prop("disabled",false);
                    formSendRedy = true;
                }else{
                    button.addClass("disabled").prop("disabled",true);
                    formSendRedy = false;
                }
            });

            popup.find("form").on(eventsList.submit,function(){
                if(formSendRedy){
                    $.post("/", $(this).serialize());
                    $(this).trigger(eventsList.submitStat);
                    done.fadeIn(200, function(){
                        setTimeout(function(){
                            hidePopup();
                        },3000)
                    });
                }

                return false;
            });
        })();

//popup2
        (function() {

            var formSendRedy = false;
            var popup = popup2;

            var button = popup.find("button");
            var done = popup.find(".done");

            var scrollLock = false;

            var hidePopup = function () {
                body.removeClass(showPopup2Class);
                history.pushState(null, null, window.location.href.split("?")[0]);
                setTimeout(function () {
                    done.fadeOut(0);
                    body.removeClass("for-publishers techcrunch");
                    scrollLock = false;
                }, 500);
            };

            setTimeout(function(){
                if(config.showPublisherForbes){
                    body.addClass(showPopup2Class);
                    scrollLock = true;
                }
            },100);



            popup.find(".footer a, .done a, .close").on(eventsList.mousedown, hidePopup);

            popup.on(eventsList.mousedown, hidePopup);

            popup.find(".window").on(eventsList.mousedown, function (e) {
                e.stopPropagation();
            });

            popup.find("input[name='whont2[email]']").on(eventsList.input,function(){
                var email = $.trim($(this).val());

                if(email.length>5 && validateEmail(email)){
                    button.removeClass("disabled").prop("disabled",false);
                    formSendRedy = true;
                }else{
                    button.addClass("disabled").prop("disabled",true);
                    formSendRedy = false;
                }
            });

            popup.find("form").on(eventsList.submit,function(){
                if(formSendRedy){
                    $.post("/", $(this).serialize());
                    $(this).trigger(eventsList.submitStat);
                    done.fadeIn(200, function(){
                        setTimeout(function(){
                            hidePopup();
                        },3000)
                    });
                }

                return false;
            });


            $(document).on(eventsList.touchmove,function(e){
                if(scrollLock){
                    if(popup2.find(".window").height() > popup2.height()){
                        popup2.find(".window").trigger(e);
                    }
                    return false;
                }
            });

            $("a[href='/?publisher=any']").on(eventsList.mousedown, function(){
                body.addClass(showPopup2Class + " for-publishers");
                history.pushState(null, null, $(this).attr('href'));
                scrollLock = true;
                return false;
            });

            if(config.showPublisherAny){
                setTimeout(function(){
                    body.addClass(showPopup2Class + " for-publishers");
                    scrollLock = true;
                },100);
            }

            if(config.showPublisherTechCrunch){
                setTimeout(function(){
                    body.addClass(showPopup2Class + " techcrunch");
                    scrollLock = true;
                },100);
            }



            popup.find(".swap li").on(eventsList.click,function(e){

                var act = popup.find(".swap .dots span.act").index();
                var maxd = popup.find(".swap .dots span").length - 1;
                var cur = act + ((e.offsetX>120)?1:-1);

                if(cur < 0){
                    cur = maxd;
                }else
                if(cur > maxd){
                    cur = 0;
                }

                cur++;

                popup.find(".swap .dots span:nth-child("+cur+")").trigger(eventsList.mousedown);
            })


        })();


//popup-fb
        (function() {

            var formSendRedy = false;
            var popup = popupFb;
            var done = popup.find(".done");
            var button = popup.find("button");

            var scrollLock = false;

            var hidePopup = function () {
                body.removeClass(showPopupFbClass);
                history.pushState(null, null, window.location.href.split("?")[0]);
                setTimeout(function () {
                    scrollLock = false;
                    done.fadeOut(0);
                }, 500);

            };

            var show = function () {
//                if(navigator.userAgent.indexOf("Messenger")==-1) {
                    body.addClass(showPopupFbClass);
                    scrollLock = true;
//                }
            };


        //    $(".button.facebook").on(eventsList.mousedown,show);


            popup.find(".footer a, .done a, .close").on(eventsList.mousedown, hidePopup);

            popup.on(eventsList.mousedown, hidePopup);

            popup.find(".window").on(eventsList.mousedown, function (e) {
                e.stopPropagation();
            });


            popup.find("input").on(eventsList.input,function(){
                var email = $.trim(popup.find("input[type='email']").val());

                if(email.length>5 && validateEmail(email)){
                    button.removeClass("disabled").prop("disabled",false);
                    formSendRedy = true;
                }else{
                    button.addClass("disabled").prop("disabled",true);
                    formSendRedy = false;
                }
            });

            popup.find("form").on(eventsList.submit,function(){
                if(formSendRedy){
                    $.post("/", $(this).serialize());
                    $(this).trigger(eventsList.submitStat);
                    done.fadeIn(200, function(){
                        setTimeout(function(){
                            hidePopup();
                        },3000)
                    });
                }

                return false;
            });


            $(document).on(eventsList.touchmove,function(e){
                if(scrollLock){
                    if(popupFb.find(".window").height() > popupFb.height()){
                        popupFb.find(".window").trigger(e);
                    }
                    return false;
                }
            });





        })();

//popup-whoops
        (function() {

            var popup = popupWhoops;

            var scrollLock = false;

            var hidePopup = function () {
                body.removeClass(showPopupWhoopsClass);
                history.pushState(null, null, window.location.href.split("?")[0]);
                $('title').text('It is a pity that you didnâ€™t give us a try :(');

                setTimeout(function () {
                    scrollLock = false;
                }, 500);

            };


            popup.find(".close").on(eventsList.mousedown, hidePopup);

            popup.on(eventsList.mousedown, hidePopup);

            popup.find(".window").on(eventsList.mousedown, function (e) {
                e.stopPropagation();
            });

            $(document).on(eventsList.touchmove,function(e){
                if(scrollLock){
                    if(popup.find(".window").height() > popup.height()){
                        popup.find(".window").trigger(e);
                    }
                    return false;
                }
            });


            setTimeout(function(){
                if(config.showWhoops){
                    body.addClass(showPopupWhoopsClass);
                    scrollLock = true;
                }
            },100);

        })();


//sidebar


        (function(){

            var header = $("header");

            var oldTouchScreenY = 0;
            var currentTouchScreenY = 0;

            var facebookMode = false;



            if(is_native && body.hasClass("facebook")){
                facebookMode = true;
            }else{
                header.addClass("show");
            }

            $(document).on(eventsList.touchstart, function(e){
                    oldTouchScreenY = e.originalEvent.touches[0].screenY;
                    currentTouchScreenY = oldTouchScreenY;
                });

            $(document).on(eventsList.touchend, function(e){
                if(!scrollLock && Math.abs(oldTouchScreenY - currentTouchScreenY)>10){
                        if (oldTouchScreenY < currentTouchScreenY) {
                            header.addClass("show");
                        } else
                        if(oldTouchScreenY > currentTouchScreenY){
                            header.removeClass("show");
                        }


                }

                if(facebookMode && window.pageYOffset<50){
                    header.removeClass("show");
                }
            });

            $(document).on(eventsList.touchmove, function(e){
                    currentTouchScreenY = e.originalEvent.touches[0].screenY;
                    return !scrollLock;
                });

            $(".mobile-menu").on(eventsList.mousedown, function(){
                    body.addClass(showSidebarClass);
                    scrollLock = true;
                });

            var sidebarHide = function(){
                    body.removeClass(showSidebarClass);
                    scrollLock = false;
                }

            sidebar.on(eventsList.mousedown,sidebarHide);

            sidebarMenuBox.on(eventsList.mousedown, function(e){
                    e.stopPropagation();
                });

            sidebarMenuBox.find(".close").on(eventsList.mousedown, sidebarHide);

            languageSelect.on(eventsList.input, function(){
                    var value = $(this).val();
                    if(config.currentLanguage != value) {
                        config.currentLanguage = value;
                        var sel = $(this).find(":selected");
                        languageTitle.text(sel.text());
                        window.location.href = "/" + value;
                    }
                })
        })();

//fixedblocks
/**/
        var fixedTopMenu, fixedBigButton;

    //    var buttonBigOrangeBiger = $("section .button.big-orange.biger");

        (function() {
            fixedTopMenu = $("<div class=\"fixedtopmenu\"></div>");
            var fixedTopMenuInner = $("<div></div>");
            fixedTopMenu.append(fixedTopMenuInner);

            $("header .logo-mini").clone().appendTo(fixedTopMenuInner);
            $("header nav").clone().appendTo(fixedTopMenuInner);
            $("header .language-selector").clone().appendTo(fixedTopMenuInner);

            body.append(fixedTopMenu);

         //   fixedBigButton = $("<div class=\"fixedbigbutton\"></div>");
        //    var fixedBigButtonInner = $("<div></div>");
        //    fixedBigButton.append(fixedBigButtonInner);
        //    buttonBigOrangeBiger.clone().appendTo(fixedBigButtonInner);

       //     body.append(fixedBigButton);
        })();

//scroll

        (function(){

            var rapitScrollDone = true;
            var lastPageYOffset = window.pageYOffset;
            var noShow = body.hasClass("blog");


            var showFixedTopMenu = false;
 /*           var showFixedBigButton = false;
            var topButtonBigOrangeBiger = 0;
 */

            jqwindow.on(eventsList.scroll, function() {
                    var w = window.pageYOffset;
                    var show = "show";
                    // if(w>32 && !rapitScrollDone && mobileSizeMode && lastPageYOffset < w){
                    //     $(body).animate({
                    //         scrollTop: $(".intro .box").offset().top
                    //     }, 500);
                    //     rapitScrollDone = true;
                    // }
                    lastPageYOffset = w;

                if(!showFixedTopMenu && w > 270 && !noShow){
                    showFixedTopMenu = true;
                    fixedTopMenu.addClass(show);
                }else
                if(showFixedTopMenu && w <= 270){
                    showFixedTopMenu = false;
                    fixedTopMenu.removeClass(show);
                }

            });

             /*
            setTimeout(function(){
                lastPageYOffset = window.pageYOffset;
                if(window.pageYOffset<100){
                    rapitScrollDone = false;
                }
            },2000);
*/

/**/

/*
                if(!showFixedBigButton && w > 640 && w < topButtonBigOrangeBiger){
                    showFixedBigButton = true;
                    fixedBigButton.addClass(show);
                }else
                if(showFixedBigButton && (w <= 640 || w >= topButtonBigOrangeBiger)){
                    showFixedBigButton = false;
                    fixedBigButton.removeClass(show);
                }
*/

/*
            jqwindow.on(eventsList.resize, function(){
                var wH = $(this).height();
                topButtonBigOrangeBiger = buttonBigOrangeBiger.offset().top - wH + 82;
            }).trigger(eventsList.resize);
*/
        })();

/*
        jqwindow.on(eventsList.resize, function(){
                var wH = $(this).height();
                heightSectionChatbotsAreTheNew = sectionChatbotsAreTheNew.height();
                offsetYSectionChatbotsAreTheNew = sectionChatbotsAreTheNew.offset().top - wH + 26;
                viewportDownSectionChatbotsAreTheNew = (offsetYSectionChatbotsAreTheNew + heightSectionChatbotsAreTheNew + wH);
                deltaOffsetYSectionChatbotsAreTheNew = viewportDownSectionChatbotsAreTheNew - offsetYSectionChatbotsAreTheNew;
                deltaBackgroundSectionChatbotsAreTheNew = heightSectionChatbotsAreTheNew *0.4;
            }).trigger(eventsList.resize);

        jqwindow.on(eventsList.scroll, function(){
                var w = window.pageYOffset;
                if(w > offsetYSectionChatbotsAreTheNew && w < viewportDownSectionChatbotsAreTheNew){
                    var bgPos = Math.round((viewportDownSectionChatbotsAreTheNew - w) / deltaOffsetYSectionChatbotsAreTheNew * deltaBackgroundSectionChatbotsAreTheNew) - deltaBackgroundSectionChatbotsAreTheNew ;
                    if(bgPos != currentResBackgroundSectionChatbotsAreTheNew){
                        currentResBackgroundSectionChatbotsAreTheNew = bgPos;
                        sectionChatbotsAreTheNew.css("background-position","0 0, 50% "+ bgPos +"px");
                    }
                }
            });
*/
 //swipe
        (function() {
            var curWWidth = 0;

            jqwindow.on(eventsList.resize, function () {
                var act = "act";
                var w = jqwindow.width();
                if (Math.abs(curWWidth - w) > 10) {
                    $(".swap").each(function () {
                        $(this).find("ul").attr("style", "").data("currentPos", 0);
                        $($(this).find(".dots span").removeClass(act)[0]).addClass(act);
                    });
                    curWWidth = w;
                }

            }).trigger(eventsList.resize);

            var swipeStatus = function (event, phase, direction, distance) {
                var speed = 200;
                var obj = $(this);
                var dots = obj.parent().find(".dots");
                var objWidth = obj.width() / obj.find("li").length;
                var duration = 0;
                var maxPos = obj.find("li").length - Math.round($(this).parent().width() / objWidth);
                var currentPos = parseInt(obj.data("currentPos"));

                if (maxPos == 0) {
                    return;
                }

                if (phase == "move" && (direction == "left" || direction == "right")) {

                    if (direction == "left") {
                        scrollGo((objWidth * currentPos) + distance, duration);
                    } else if (direction == "right") {
                        scrollGo((objWidth * currentPos) - distance, duration);
                    }

                } else if (phase == "cancel") {
                    scrollGo(objWidth * currentPos, speed);
                } else if (phase == "end") {
                    if (direction == "right") {
                        previousPos();
                    } else if (direction == "left") {
                        nextPos();
                    }
                }

                function previousPos() {
                    currentPos = Math.max(currentPos - 1, 0);
                    scrollGo(objWidth * currentPos, speed);
                    obj.data("currentPos", currentPos);
                    setDot();
                }

                function nextPos() {
                    currentPos = Math.min(currentPos + 1, maxPos);
                    scrollGo(objWidth * currentPos, speed);
                    obj.data("currentPos", currentPos);
                    setDot();
                }

                function scrollGo(distance, duration) {
                    var style = "transform:translate(" + ((distance < 0 ? "" : "-") + Math.abs(distance).toString()) + "px,0);-webkit-transform:translate(" + ((distance < 0 ? "" : "-") + Math.abs(distance).toString()) + "px,0);";
                    if (duration > 0) {
                        style += "transition:transform " + (duration / 1000).toFixed(1) + "s ease-out;-webkit-transition:-webkit-transform " + (duration / 1000).toFixed(1) + "s ease-out;";
                    }
                    obj.attr("style", style);
                }

                function setDot() {
                    var act = "act";
                    $(dots.find("span").removeClass(act)[currentPos]).addClass(act);
                }

            };

            $(".pressa.swap ul").swipe({
                triggerOnTouchEnd: true,
                swipeStatus: swipeStatus,
                allowPageScroll: "auto",
                threshold: 20,
                excludedElements:'',
                fallbackToMouseEvents:false
            });

            $(".pressa.swap .dots span").on(eventsList.mousedown, function () {
                var obj = $(".pressa.swap ul");
                var cur = parseInt(obj.data("currentPos"));
                var i = $(this).index();
                obj.data("currentPos", i - ((i - cur) / Math.abs(i - cur)));
                if (i != cur) {
                    swipeStatus.call(obj, null, "end", (i < cur) ? "right" : "left", 0);
                }
            })

            $(".you-are-in-a-great .swap ul").swipe({
                triggerOnTouchEnd: true,
                swipeStatus: swipeStatus,
                allowPageScroll: "auto",
                threshold: 20,
                excludedElements:''
            });

            $(".you-are-in-a-great .swap .dots span").on(eventsList.mousedown, function () {
                var obj = $(".you-are-in-a-great .swap ul");
                var cur = parseInt(obj.data("currentPos"));
                var i = $(this).index();
                obj.data("currentPos", i - ((i - cur) / Math.abs(i - cur)));
                if (i != cur) {
                    swipeStatus.call(obj, null, "end", (i < cur) ? "right" : "left", 0);
                }
            })

            $(".popup2 .swap ul").swipe({
                triggerOnTouchEnd: true,
                swipeStatus: swipeStatus,
                allowPageScroll: "none",
                threshold: 20,
                excludedElements:'',
                fallbackToMouseEvents:false
            });

            $(".popup2 .swap .dots span").on(eventsList.mousedown, function () {
                var obj = $(".popup2 .swap ul");
                var cur = parseInt(obj.data("currentPos"));
                var i = $(this).index();
                obj.data("currentPos", i - ((i - cur) / Math.abs(i - cur)));
                if (i != cur) {
                    swipeStatus.call(obj, null, "end", (i < cur) ? "right" : "left", 0);
                }
            })
        })();

//animate chat

        (function(){
            var intro = $(".intro");
            var messenger = $(".messenger");
            var chatBox = $(".messenger .box");
            var chatPage = $(".messenger .page");
            var chatTabs = $(".messenger .tabs");
            var maxChatId = chatTabs.find("> *").length-1;
            var currentChatId = -1;
            var currentPos = 0;
            var currentMessageId = 0;
            var timeoutId = 0;

            var printedAnim = $("<span class=\"printed-anim\"></span>");
            var easeOutQuart = "cubic-bezier(0.17, 0.84, 0.44, 1) 0ms";

            var animateStart = function(chatId){
                clearTimeout(timeoutId);
                currentChatId = chatId;
                currentMessageId = 0;
                chatPage.html($("#chat-n" + currentChatId + "-template").html());

                if(mobileSizeMode){
                    chatPage.attr("style","");
/*
                    setTimeout(function(){
                        var d = chatBox.height() - chatPage.height()-10;

                        if(d<0){
                            d = -d;

                            chatBox.height(chatBox.height() + d);
                            messenger.height(messenger.height() + d);
                            intro.height(intro.height() + d);


                        }else{
                            chatBox.attr("style","");
                            messenger.attr("style","");
                            intro.attr("style","");
                        }

                    },200)
*/

                }else{
                    currentPos = 420;
                    chatPage.attr("style","transform:translateY(" + currentPos + "px);-webkit-transform:translateY(" + currentPos + "px);");
                }

                goMessageAnimation();


                $(".printed-anim").each(function(){
                    $(this).remove();
                });
            };

            var showPrintedAnim = function(message){
                var backgroundImage = "background-image";
                var newPrintedAnim = printedAnim.clone();
                newPrintedAnim.css(backgroundImage, message.css(backgroundImage));


                if(mobileSizeMode){
                    chatPage.append(newPrintedAnim);
                    newPrintedAnim.css("top",message.position().top+25);
                    newPrintedAnim.css("right",6);
                }else{
                    chatBox.append(newPrintedAnim);
                }

                setTimeout(function(){
                    newPrintedAnim.addClass("show");
                }, 10);

                setTimeout(function(){
                    newPrintedAnim.removeClass("show");
                }, 2250);

                setTimeout(function(){
                    newPrintedAnim.remove();
                }, 3000);
            }

            var goMessageAnimation = function(){

                var message = chatPage.find("> div:nth-child(" + (currentMessageId+1) + ")");
                var isUser = message.hasClass("right");

                if(message.length){
                    var timeout = 0;

                    if(isUser){
                        if(currentMessageId != 0){
                            timeout = 3500;
                            setTimeout(function() {
                                showPrintedAnim(message);
                            }, 1000);
                        }else{
                            timeout = 2500;
                            setTimeout(function() {
                                showPrintedAnim(message);
                            }, 1);
                        }
                    }

                    clearTimeout(timeoutId);
                    timeoutId = setTimeout(function(){

                        if(mobileSizeMode){
                            message.addClass("show");
                        }else{
                            currentPos -= (message.height()+16);
                            chatPage.attr("style", "transform:translateY(" + currentPos + "px); transition: transform 500ms " + easeOutQuart + "; -webkit-transform:translateY(" + currentPos + "px); -webkit-transition: -webkit-transform 500ms " + easeOutQuart);
                        }

                        currentMessageId ++;

                        clearTimeout(timeoutId);
                        timeoutId = setTimeout(function() {
                            goMessageAnimation();
                        }, (isUser?1000:750));

                    },timeout);
                }else{
                    clearTimeout(timeoutId);
                    timeoutId = setTimeout(function() {
                        if(currentChatId >= maxChatId){
                            currentChatId = -1;
                        }
                        chatTabs.find("li:nth-child("+(currentChatId+2)+")").trigger(eventsList.mousedown);
                    },3500);
                }
            };



            var play = function(n){
                if(currentChatId > -1 && currentMessageId>0){

                    if(mobileSizeMode){
                        chatPage.attr("style", "opacity:0;transform:translateY(-55%); transition: transform 400ms " + easeOutQuart + ", opacity 500ms " + easeOutQuart + ";-webkit-transform:translateY(-55%); -webkit-transition: -webkit-transform 400ms " + easeOutQuart + ", opacity 500ms " + easeOutQuart);
                    }else{
                        currentPos -= 48;
                        chatPage.attr("style", "opacity:0;transform:translateY(" + currentPos + "px); transition: transform 400ms " + easeOutQuart + ", opacity 500ms " + easeOutQuart + "-webkit-transform:translateY(" + currentPos + "px); -webkit-transition: -webkit-transform 400ms " + easeOutQuart + ", opacity 500ms " + easeOutQuart);
                    }

                    clearTimeout(timeoutId);
                    timeoutId = setTimeout(function(){
                        animateStart(n);
                    }, 500);
                }else{
                    animateStart(n);
                }
            };

            chatTabs.find("li").on(eventsList.mousedown, function(){

                var obj = $(this);
                var newIndex = obj.index();
                var act = "act";

                if(currentChatId == newIndex){
                    return;
                }

                obj.addClass(act).siblings().removeClass(act);

                play(newIndex);

                return false;
            });

            jqwindow.on(eventsList.sizeMode,function(){
                clearTimeout(timeoutId);
                chatPage.html('');
                currentChatId = -1;
                currentMessageId = 0;
                currentPos = 0;
                chatTabs.find(":first-child").trigger(eventsList.mousedown);
            });

            setTimeout(function(){
                chatTabs.find(":first-child").trigger(eventsList.mousedown);
            },2000);

        })();


    });
}(this,this.$);