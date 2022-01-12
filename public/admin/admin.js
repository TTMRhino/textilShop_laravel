$(document).ready(function() {

    $(".nav-link").click(function() {

        var location = window.location.href;
        var link = this.href;
        if (location == link) {
            $(this).addClass('active');
        }

    });

    $('.delete-btn').click(function() {
        const res = confirm('Подтведите действие');

        if (!yes) {
            return false;
        }
    });

});