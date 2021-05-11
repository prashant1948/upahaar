<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Upahaar Solutions - ecommerce</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Upahaar Solutions" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.min.css">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/owl-carousel/owl.carousel.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="css/demo1.min.css">

    </head>
        
    <body>

    @include('eazymart.partials.navbar')

    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    @include('eazymart.partials.footer')

    @yield('javascript')


    <!-- Plugins JS File -->
    <script src="vendor/parallax/parallax.min.js"></script>
    <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/owl-carousel/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="js/main.min.js"></script>

    <!-- js-files -->
    <!--add to cart-->
    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery-1.10.2.min.js"></script>
    <script src="/assets/js/jquery-migrate-1.2.1.js"></script>
    <script src="/assets/js/gmap3.min.js"></script>
    <script src="/assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/css_browser_selector.min.js"></script>
    <script src="/assets/js/echo.min.js"></script>
    <script src="/assets/js/jquery.easing-1.3.min.js"></script>
    <script src="/assets/js/bootstrap-slider.min.js"></script>
    <script src="/assets/js/jquery.raty.min.js"></script>
    <script src="/assets/js/jquery.prettyPhoto.min.js"></script>
    <script src="/assets/js/jquery.customSelect.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/buttons.js"></script>
    <script src="/assets/js/scripts.js"></script>

    <!-- jquery -->
    <script src="{{asset('eazy/js/jquery-2.1.4.min.js')}}"></script>

    <script src="{{asset('js/popper.min.js')}}"></script>

    <!-- //jquery -->

    <!-- popup modal (for signin & signup)-->
    <script src="{{asset('eazy/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('eazy/js/magnify.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
    <!-- Large modal -->
    <!-- <script>
        $('#').modal('show');
    </script> -->
    <!-- //popup modal (for signin & signup)-->

    <!-- cart-js -->
    <script src="{{asset('eazy/js/minicart.js')}}"></script>
    <script>
        paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

        paypalm.minicartk.cart.on('checkout', function (evt) {
            var items = this.items(),
                len = items.length,
                total = 0,
                i;

            // Count the number of each item in the cart
            for (i = 0; i < len; i++) {
                total += items[i].get('quantity');
            }

            if (total < 3) {
                alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
                evt.preventDefault();

            }

        });
    </script>
    <!-- //cart-js -->

    <!-- price range (top products) -->
    <script src="{{asset('eazy/js/jquery-ui.js')}}"></script>
    <script>
        //<![CDATA[
        $(window).load(function () {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 9000,
                values: [50, 6000],
                slide: function (event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

        }); //]]>
    </script>
    <!-- //price range (top products) -->

    <!-- flexisel (for special offers) -->
    <script src="{{asset('eazy/js/jquery.flexisel.js')}}"></script>
        <!-- password-script -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->

    <!-- smoothscroll -->
    <script src="{{asset('eazy/js/SmoothScroll.min.js')}}"></script>
    <!-- //smoothscroll -->

    <!-- start-smooth-scrolling -->
    <script src="{{asset('eazy/js/move-top.js')}}"></script>
    <script src="{{asset('eazy/js/easing.js')}}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->

    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //smooth-scrolling-of-move-up -->

    <!-- for bootstrap working -->
    <script src="{{asset('eazy/js/bootstrap.js')}}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            $( "#searchProduct" ).autocomplete({

                source: function(request, response) {
                    $.ajax({
                        url: "{{url('livesearch')}}",
                        data: {
                            term : request.term
                        },
                        dataType: "json",
                        success: function(data){
                            var resp = $.map(data,function(obj){

                                return obj.name;

                            });

                            response($.ui.autocomplete.filter(resp.slice(0,500), request.term));
                        }
                    });
                },
                minLength: 3
            });
        });

    </script>
    <script src="{{asset('assets/js/cart.js')}}"></script>
    <script src="{{asset('assets/js/navbar.js')}}"></script>

    <!-- //for bootstrap working -->
    <!-- //js-files -->
    <script>
        if (sessionStorage.getItem('productIdToAdd')){
            addToCart(sessionStorage.getItem('productIdToAdd'), '<?php echo csrf_token() ?>');
            sessionStorage.removeItem("productIdToAdd");
        }
    </script>

</body>

</html>