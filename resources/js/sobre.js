//thumbnail

document.addEventListener("DOMContentLoaded", function () {

    var thumb = document.getElementById('thumb');

    thumb.addEventListener('click', function () {
        thumb.style.display = 'none';
        var player = document.getElementById('player');
        player.style.display = 'block';
        var iframe = document.getElementById('youtube-video');
        iframe.src += "&autoplay=1&mute=1";
    });
});
