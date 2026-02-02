//set loader
jQuery(window).on("load",function(){
    jQuery(".js-loader").addClass("u-display-none");
    jQuery("header.c-slide-left").addClass("c-slide-left--on");
    jQuery("nav .c-slide-right").addClass("c-slide-right--on");
});
$(function () {
    //PLUGINS
    //copy base template for right pane
    $.fn.copyContent = function(contentClass){
        $(this).on("click",function(event) {
            event.preventDefault();
            if ($('[data-block-class="' + $(event.currentTarget).attr('href') + '"]').length == 0) {
                $('[role="main"]').append($(contentClass).clone());
            }
        });
        return this;
    };
    //set pane content from data-attribute
    $.fn.setPaneContent = function(){
        $(this).on('click',function(event) {
            //get current type and element name
            var target = $(event.currentTarget),
                currentDataContent = target.data().class == undefined ? $('.c-list__item[href="'+target.attr('href')+'"]').data() : target.data();
            //check if same content is defined
            var paneFromCurrentClass = $('[data-block-class="' + target.attr('href') +'"]');
            if (paneFromCurrentClass.length == 0) {
                var pane = $($('.js-block-content[data-block-class=""]')[0]);
                //loop through data object and replace content
                $.each(currentDataContent, function(key,entry){
                    if (key == 'class') {
                        pane.attr('data-block-'+key, entry);
                    } else if (key == 'blockhref' || key == 'button1href' || key == 'button2href' || key == 'button3href' || key == 'contactphonehref' || key == 'contactmailhref' || key == 'contactlinkedinhref') {
                        pane.find('[data-'+key+']').attr('href',entry);
                    } else if (key == 'idcontact') {
                        pane.find('[data-'+key+']').attr('id','id-'+target.attr('href')).next('label').attr('for','id-'+target.attr('href'));
                    } else {
                        pane.find('[data-'+key+']').attr('data-'+key,entry);
                    }
                });
            }
        });
        return this;
    };
    //set menu from href
    $.fn.setSlideMenu = function (suffix) {
        $.each(this, function (index, triggerElement) {
            $(triggerElement).on('click', function (event) {
                event.preventDefault();
                var currentTrigger = $(triggerElement);
                //1. add on/active

                //2. switch on/active > last/active-last
                //   add on/active

                //3. remove last/active-last
                //   switch on/active > last/active-last
                //   add on/active
                var slideTarget = $('[data-block-class="' + currentTrigger.attr('href') +'"]');
                //desktop
                if (!slideTarget.is('[class*="--on"]')) {
                    //reset scroll position for right elements
                    if(suffix == '-right') {
                        slideTarget.find(">:first-child").scrollTop(0);
                    }
                    var slideLast = $('[class*="--last"]');
                    var slideOn = $('.c-slide' + suffix + '--on');
                    slideLast.removeClass('c-slide-left--last c-slide-right--last');
                    slideOn.removeClass('c-slide-left--on c-slide-right--on').addClass('c-slide' + suffix + '--last');
                    slideTarget.addClass('c-slide' + suffix + '--on');
                }
                //mobile
                if (!slideTarget.hasClass('c-slide--active')) {
                    $('[class*="--active-last"]').removeClass('c-slide--active-last');
                    $('[class*="--active"]').removeClass('c-slide--active').addClass('c-slide--active-last');
                    slideTarget.addClass('c-slide--active');
                }
            });
        });
        return this;
    };
    //display/hide scrollto
    $.fn.displayFromHeight = function(targetBlock,contentBlock) {
        var target = $(this);
        target.on("click",function(event){
            var targetClass = $(event.currentTarget).attr('href');
            //get container height
            var targetHeight = $('[data-block-class="' + targetClass + '"] ' + targetBlock).outerHeight();
            //get content height
            var contentHeight = $('[data-block-class="' + targetClass + '"] ' + contentBlock).outerHeight();
            //display information for scroll if content is too big
            contentHeight > targetHeight ? $('[data-block-class="' + targetClass + '"]').addClass('c-scroll-information') : $('[data-block-class="' + targetClass + '"]').removeClass('c-scroll-information');
        });
        return this;
    };
    //REFERENCE
    //navigation left/right side
    $('.js-slide--left').setSlideMenu('-left');
    $('.js-body').on('focus','.js-slide--right',function(event){
        $(this).copyContent('.js-block-content[data-block-class=""]').setPaneContent().setSlideMenu('-right').on('click touchstart',function(){
            //reset all open button
            $('[data-idcontact]').prop( "checked", false );
        });
    });
    //display information if content height is higher than window height
    $('.js-display-from-height').displayFromHeight(" > .o-row"," > .o-row > .o-column");
    //reduce nav
    $('.js-reduce-nav').on('click touchstart',function(){$('.c-nav-container').addClass('c-nav--reduced')});
});