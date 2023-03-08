function randomColor() {
    var c = "#";
    for (var i = 0; i < 6; i++) {
        c += (Math.random() * 16 | 0).toString(16);
    }
    return c;
}

var a = document.getElementById("effect_element3").style;
a.color = randomColor();