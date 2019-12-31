const btnViewMore = document.getElementById('btn-viewMore');
const numEnd = document.getElementById('numEnd').textContent;
let num = 1;

btnViewMore.addEventListener('click', showView);

function showView() {
    num++;
    if(num == numEnd) {
        btnViewMore.style.display = 'none';
    }

    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('content').innerHTML = this.responseText;
        }
    }
    xhttp.open("GET", "/mvc-news/Ajax/viewMore/" +num, true);
    xhttp.send();
}