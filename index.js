//nav bar set active onClick
var btn_container = document.getElementById('topnav');
var btns = btn_container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        if (current.length > 0) {
            current[0].className = current[0].className.replace(" active", "");
        }
        this.className += " active";
    });
}

//function adding and removing navbar (responsive)
function loadIcon() {
    var load = document.getElementById('topnav');
    if (load.className === 'topnav') {
        load.className += " responsive";
    } else {
        load.className = "topnav";
    }
}

//add variable for open weather API
var input = document.querySelector('.input_text');
var main = document.querySelector('#name');
var temp = document.querySelector('.temp');
var desc = document.querySelector('.desc');
var clouds = document.querySelector('.clouds');
var button = document.querySelector('.submit');

//ajax test
function doc(url, cFunction) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            cFunction(this);
        }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}

function myFunction(xhttp) {
    document.getElementById("demo").innerHTML =
        xhttp.responseText;
}

//openweatherApi
button.addEventListener('click', function(name) {
    fetch('https://api.openweathermap.org/data/2.5/weather?q=' + input.value + '&appid=50a7aa80fa492fa92e874d23ad061374')
        .then(response => response.json())
        .then(data => {
            var tempValue = data['main']['temp'];
            var nameValue = data['name'];
            var descValue = data['weather'][0]['description'];

            main.innerHTML = nameValue;
            desc.innerHTML = "Desc - " + descValue;
            temp.innerHTML = "Temp - " + tempValue;
            input.value = "";

        })

    .catch(err => alert("Wrong city name!"));
})