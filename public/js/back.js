$(document).ready(function () {
    $('.sidebar-toggler').click(function (e) {
        e.preventDefault();

        $('.sidebar').toggleClass('show');

    });
});
