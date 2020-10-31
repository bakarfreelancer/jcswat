window.addEventListener('load', (event) => {
    let currentYear = new Date().getFullYear();
    document.querySelector('.currentYear').innerHTML = currentYear;
});

// Contact form validation
(function () {
    "use strict";
    window.addEventListener(
        "load",
        function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName("needs-validation");
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener(
                    "submit",
                    function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add("was-validated");
                    },
                    false
                );
            });
        },
        false
    );
})();

//Alert auto close
// window.setTimeout(function () {
//     $(".alert").fadeTo(500, 0).slideUp(500, function () {
//         $(this).remove();
//     });
// }, 2000);

window.addEventListener('load', function () {
    setTimeout(() => {
        document.querySelector('.successDeleteMember').classList.add('hide');
    }, 3000);
})

// password show
$(document).ready(function () {
    $("#show_hide_password a").on('click', function (event) {
        event.preventDefault();
        if ($('#show_hide_password input').attr("type") == "text") {
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass("fa-eye-slash");
            $('#show_hide_password i').removeClass("fa-eye");
        } else if ($('#show_hide_password input').attr("type") == "password") {
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass("fa-eye-slash");
            $('#show_hide_password i').addClass("fa-eye");
        }
    });
});

// ANNIMATIONS
$(document).ready(function () {
    // Annimations on scroll

    // NAV BAR
    $('.secondSec').waypoint(function (direction) {
        $('.logo').attr('src', 'assets/images/logo.png');
        $('.logo').addClass('smallLogo');
    }, {
        offset: '-40%'
    });

    $('.firstSec').waypoint(function (direction) {
        $('.logo').attr('src', 'assets/images/logo_300.png');
        $('.logo').removeClass('smallLogo');
    }, {
        offset: '-30%'
    });

    $('.fewWordsLogo').waypoint(function (direction) {
        $('.fewWordsLogo').addClass('animated fadeInUp');
    }, {
        offset: '60%'
    });

    // EXPLORE BUTTON ANNIMATON
    $('.exploreBtn').waypoint(function (direction) {
        $('.exploreBtn').addClass('animated fadeInRight');
    }, {
        offset: '70%'
    });

    // SINGLE POST
    $('.singlePostOne').waypoint(function (direction) {
        $('.singlePostOne').addClass('animated fadeInUp');
        setTimeout(() => {
            $('.singlePostTwo').addClass('animated fadeInUp');
        }, 800);
        setTimeout(() => {
            $('.singlePostThree').addClass('animated fadeInUp');
        }, 1600);
    }, {
        offset: '75%'
    });

    // --------------------------
    // About Page 
    // --------------------------

    // Video section

    $('.historyMainDiv').waypoint(function (direction) {
        $('.historyMainDiv').addClass('animated fadeIn');
    }, {
        offset: '50%'
    });

    // WALI OF SWAT
    $('.waliSwatParaDiv').waypoint(function (direction) {
        $('.waliSwatParaDiv').addClass('animated fadeInRight');
    }, {
        offset: '60%'
    });

});
