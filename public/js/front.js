$(document).on('mouseover', '#showProfile', function (e) {
    e.preventDefault();
    showDiv('.profile');
});

$(document).on('mouseout', '#showProfile', function (e) {
    e.preventDefault();
    hideDiv('.profile');
});

$('.profile').on('mouseover', function (e) {
    e.preventDefault();
    $('.profile').removeClass('hide');
 
});
$('.profile').on('mouseout', function (e) {
    e.preventDefault();
    $('.profile').addClass('hide');
});


function showDiv(div) {
    $(document).find(div).removeClass('hide');
}

function hideDiv(div) {
    setTimeout(function () {
        $(document).find(div).addClass('hide');
    }, 2000);
}