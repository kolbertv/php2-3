function jsonPOST(url, json, callback) {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', url, true);
    xhr.setRequestHeader("Content-Type", 'application/x-www-form-urlencoded; charset=UTF-8');
    xhr.onreadystatechange = function () {
        if ((xhr.readyState == 4) && (xhr.status == 200)) {
            callback(xhr.responseText);
        } else {
            // console.log(xhr.status+' : '+xhr.statusText);
        }
    };
    xhr.send(json);
}


function moreButton() {

    console.log('нажата кнопка еще');

    let moreButton = document.getElementById('moreButton');
    moreButton.dataset.m = parseInt(moreButton.dataset.m) + 2;
    let datasetM = moreButton.dataset.m;
    let datasetN = moreButton.dataset.n;

    let json = JSON.stringify({
        method: 'ajax',
        m: datasetM,
        n: datasetN
    });


    jsonPOST('index.php', json, function (response) {
        let galleryWrap = document.getElementById('gallery__wrapper');
        console.log(response);
        galleryWrap.innerHTML = galleryWrap.innerHTML + response;

    })




}
