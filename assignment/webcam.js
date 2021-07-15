// 
function configure() {
    Webcam.set({
        image_format: 'jpg',
        jpeg_quality: 90
    });
    Webcam.attach('#cam');

    const cam = $('#cam video');
    cam.on('play', () => {
        cam.attr('width', cam[0].videoWidth / 10);
        cam.attr('height', cam[0].videoHeight / 10);
        $('#cam').css({
            'width': cam[0].videoWidth / 4,
            'height': cam[0].videoHeight / 4
        })
        cam.css({
            'width': cam[0].videoWidth / 4,
            'height': cam[0].videoHeight / 4
        })
    })
}

var shutter = new Audio();
shutter.autoplay = false;
shutter.src = navigator.userAgent.match(/Firefox/) ? 'https://raw.githubusercontent.com/jhuckaby/webcamjs/master/demos/shutter.ogg' : 'https://raw.githubusercontent.com/jhuckaby/webcamjs/master/demos/shutter.mp3';

function take_snapshot() {

    shutter.play();

    const cam = $('#cam video');

    Webcam.snap(function (data_uri) {
        // display results in page
        document.getElementById('results').innerHTML =
            '<img id="imageprev" src="' + data_uri + '"/>';
        $('#imageprev').css({
            'width': cam[0].videoWidth / 4,
            'height': cam[0].videoHeight / 4
        })
    });
    Webcam.reset();
}

function saveSnap() {
    var base64image = document.getElementById("imageprev").src;

    var a = document.createElement("a");
    a.href = "data:application/octet-stream;base64," + base64image.replace(/^data\:image\/\w+\;base64\,/, '');
    a.download = "pic_" + new Date().getTime() + ".png";
    a.click();

}
