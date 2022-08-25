(function($) {
    "use strict";
    /*-------------------------------------
      Sidebar Toggle Menu
    -------------------------------------*/
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);

    /*-------------------------------------
    MeanMenu activation code
    --------------------------------------*/
    if ($.fn.meanmenu) {
        $('nav#dropdown').meanmenu({
            siteLogo: "<div class='mobile-menu-nav-back'><a class='logo-mobile' href='index.html'><img src='../../../media/mobile-logo.png' alt='logo' class='img-fluid'/></a></div>",
            meanMenuOpen:"<span></span><span></span><span></span>",
            meanScreenWidth: "767"
        });
    }

    /*-------------------------------------
      Sidebar Toggle Menu
    -------------------------------------*/
    $('.sidebar-toggle-view').on('click', '.sidebar-nav-item .dsy-menu-link', function(e) {
        if ($(this).parents('#main-wrapper')) {
            var animationSpeed = 300,
                subMenuSelector = '.sub-group-menu',
                $this = $(this),
                checkElement = $this.next();
            if (checkElement.is(subMenuSelector) && checkElement.is(':visible')) {
                checkElement.slideUp(animationSpeed, function() {
                    checkElement.removeClass('menu-open');
                });
                checkElement.parent(".sidebar-nav-item").removeClass("active");
            } else if ((checkElement.is(subMenuSelector)) && (!checkElement.is(':visible'))) {
                var parent = $this.parents('ul').first();
                var ul = parent.find('ul:visible').slideUp(animationSpeed);
                ul.removeClass('menu-open');
                var parent_li = $this.parent("li");
                checkElement.slideDown(animationSpeed, function() {
                    checkElement.addClass('menu-open');
                    parent.find('.sidebar-nav-item.active').removeClass('active');
                    parent_li.addClass('active');
                });
            }
            if (checkElement.is(subMenuSelector)) {
                e.preventDefault();
            }
        } else {
            if ($(this).attr('href') === "#") {
                e.preventDefault();
            }
        }
    });

    /*-------------------------------------
        Sidebar Menu Control
      -------------------------------------*/
    $("#dsy-aside-toggler").on("click", function() {
        $("#main-wrapper").toggleClass("sidebar-collapsed");
    });

    /*-------------------------------------
      Sidebar Menu Control Mobile
    -------------------------------------*/
   $(".sidebar-toggle-mobile").on("click", function() {
        $("#main-wrapper").toggleClass("sidebar-collapsed-mobile");
    });

    function mobile_nav_class() {
        var mq = window.matchMedia("(max-width: 991px)");
        if (mq.matches) {
            $("#main-wrapper").removeClass("sidebar-collapsed");
        } else {
            $("#main-wrapper").removeClass("sidebar-collapsed-mobile");
        }
    }

    $(window).resize(function() {
        mobile_nav_class();
    });

    /*-------------------------------------
    On Load
    -------------------------------------*/
    $(window).on('load resize', function () {

            //Section background image
            //Section background image
        $("[data-bg-image]").each(function () {
            var img = $(this).data("bg-image");
            $(this).css({
                backgroundImage: "url(" + img + ")"
            });
        });
    });

    /*---------------------------------------
       On Scroll
    -------------------------------------*/
    $(window).on('scroll', function() {

        // Back Top Button
        if ($(window).scrollTop() > 500) {
            $('.scrollup').addClass('back-top');
        } else {
            $('.scrollup').removeClass('back-top');
        }
    });

    /*-------------------------------------
        Select2 activation code
    -------------------------------------*/
    if ($('select.select2').length) {
        $('select.select2').select2({
            theme: 'classic',
            dropdownAutoWidth: true,
            width: '100%'
        });
    }





})(jQuery);