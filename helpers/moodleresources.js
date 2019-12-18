// Load the JS or CSS file in the page head
function loadjscssfile(filename, filetype){
    if (filetype == "js"){ //if filename is a external JavaScript file
        var fileref = document.createElement('script')
        fileref.setAttribute("type","text/javascript")
        fileref.setAttribute("src", filename)
    }
    else if (filetype == "css"){ //if filename is an external CSS file
        var fileref = document.createElement("link")
        fileref.setAttribute("rel", "stylesheet")
        fileref.setAttribute("type", "text/css")
        fileref.setAttribute("href", filename)
    }
    if (typeof fileref != "undefined")
        document.getElementsByTagName("head")[0].appendChild(fileref)
}

var storedCSS = localStorage.getItem('css');

if (storedCSS) {
    loadjscssfile(storedCSS, "css");
}

var moodlephp = document.getElementById('moodlephp').href;
var xhr = new XMLHttpRequest();
xhr.open('GET', moodlephp);
xhr.send(null);
xhr.onreadystatechange = function () {
  var DONE = 4; // readyState 4 means the request is done.
  var OK = 200; // status 200 is a successful return.
  if (xhr.readyState === DONE) {
    if (xhr.status === OK) {
      if (xhr.responseText !== storedCSS) {
        loadjscssfile(xhr.responseText, "css");
        localStorage.setItem('css', xhr.responseText);
      }
    } else {
      console.log('Error: ' + xhr.status); // An error occurred during the request.
    }
  }
};