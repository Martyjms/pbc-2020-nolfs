const loader = document.querySelector('.loader');
const main = document.querySelector('.main');

function init() {
    setTimeout(() => {
        loader.style.opacity = 0;
        loader.style.display = 'none';

        main.style.display = 'block';
        setTimeout(() => (main.style.opacity = 1), 50);
    }, 5000);
}

init();

function fade() {
    setTimeout(() => {

    })
}



setTimeout(function(){
    document.getElementById("video_background").play();
}, 5000);

$(document).ready(function () {
    // Hide the div
    $("#pre-load").hide();
    // Show the div after 5s
    $("#pre-load").delay(5000).fadeIn(100);
});
