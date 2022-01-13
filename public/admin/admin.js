$(document).ready(function() {

    $(".nav-link").each(function() {

        var location2 = window.protocol + '//' + window.location.host + window.location.href;
        var link = this.href;
        if (location2 == link) {
            $(this).addClass('active');
        }

    });

    $('.delete-btn').click(function() {
        const res = confirm('Подтведите действие');

        if (!res) {
            return false;
        }
    });

});