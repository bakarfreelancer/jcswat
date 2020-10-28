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