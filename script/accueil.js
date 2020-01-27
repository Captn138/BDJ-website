function loadFile(filePath) {
    var result = null;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", filePath, false);
    xmlhttp.send();
    if (xmlhttp.status==200) {
      result = xmlhttp.responseText;
    }
    return result;
}

function addnews(url, title, text){
    let newtr = document.createElement('tr');
    newtr.classList.add('news_row');
    let newimagecol = document.createElement('td');
    newimagecol.classList.add('col5');
    let newimage = document.createElement('img');
    newimage.setAttribute("src", url);
    newimage.classList.add('newsimage');
    let newtextcol = document.createElement('td');
    newtextcol.classList.add('col6');
    let newtitle = document.createElement('h1');
    newtitle.innerHTML = "Dernier article : " + title;
    let newtext = document.createElement('p');
    newtext.innerHTML = text;
    newimagecol.appendChild(newimage);
    newtextcol.appendChild(newtitle);
    newtextcol.appendChild(newtext);
    newtr.appendChild(newimagecol);
    newtr.appendChild(newtextcol);
    table.appendChild(newtr);
}

const table = document.querySelector('#newstable');
str = loadFile("news.txt");
strings = str.split("\n");
nblines = parseInt(strings[0]);
var i;
addnews(strings[1], strings[2], strings[3]);