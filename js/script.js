// this function gets executed when closing the down navbar
document.querySelector("#close-down-navbar").addEventListener("click", function () {
    var navbar = document.querySelector(".down-navbar");
    var map_sec = document.querySelector(".map-section");
    var close = document.querySelector("#close-down-navbar");
    var open_nav = document.querySelector("#open-down-navbar");
    var menu = document.getElementById("menu");
    navbar.style.height = "6%";
    map_sec.style.height = "94%";
    close.style.display = "none";
    open_nav.style.display = "block";
    menu.style.display = "none";

});

// this guction gets executed when down navbar is opened.
document.querySelector("#open-down-navbar").addEventListener("click", function () {
    var x = document.querySelector(".down-navbar");
    var map_sec = document.querySelector(".map-section");
    var z = document.querySelector("#close-down-navbar");
    var open_nav = document.querySelector("#open-down-navbar");
    var menu = document.getElementById("menu");
    map_sec.style.height = "75%";
    x.style.height = "25%";
    z.style.display = "block";
    open_nav.style.display = "none";
    menu.style.display = "block";
})

// this function gets executed when explore button is clicked.
function searchfunc() {
    var x = document.getElementById("menu");
    var searchBox = document.getElementById("search");
    x.style.display = "none";
    searchBox.style.display = "block";

}
// it closes the search feed.
function menuBack() {
    var menuBox = document.getElementById("menu");
    var searchBox = document.getElementById("search");
    menuBox.style.display = "block";
    searchBox.style.display = "none";
}

// this shows data contained by each zone while hovering.
function show(obj) {
    var show = document.querySelector(".zone-data");
    if (obj.id == "path7") {
        var me = document.getElementById("path7");
        me.style.fill = "#09265F";
        document.querySelector("g").addEventListener("mouseover", function (e) {
            var x = e.pageX / 2;
            var y = e.pageY - 30;
            show.style.left = x + "px";
            show.style.top = y + "px";
            show.innerHTML = me.getAttribute("data-detail");
            show.style.display = "block";

        });
    }

    else if (obj.id == "path10") {
        var me = document.getElementById("path10");
        me.style.fill = "#09265F";
        document.querySelector("g").addEventListener("mouseover", function (e) {
            var x = e.pageX / 2;
            var y = e.pageY - 30;
            show.style.left = x + "px";
            show.style.top = y + "px";
            show.innerHTML = me.getAttribute("data-detail");
            show.style.display = "block";

        });
    }

    else if (obj.id == "path31") {
        var me = document.getElementById("path31");
        me.style.fill = "#09265F";
        document.querySelector("g").addEventListener("mouseover", function (e) {
            var x = e.pageX / 2;
            var y = e.pageY - 30;
            show.style.left = x + "px";
            show.style.top = y + "px";
            show.innerHTML = me.getAttribute("data-detail");
            show.style.display = "block";

        });
    }

    else if (obj.id == "path15") {
        var me = document.getElementById("path15");
        me.style.fill = "#09265F";
        document.querySelector("g").addEventListener("mouseover", function (e) {
            var x = e.pageX / 2;
            var y = e.pageY - 30;
            show.style.left = x + "px";
            show.style.top = y + "px";
            show.innerHTML = me.getAttribute("data-detail");
            show.style.display = "block";

        });
    }

    else if (obj.id == "path25") {
        var me = document.getElementById("path25");
        me.style.fill = "#09265F";
        document.querySelector("g").addEventListener("mouseover", function (e) {
            var x = e.pageX / 2;
            var y = e.pageY - 30;
            show.style.left = x + "px";
            show.style.top = y + "px";
            show.innerHTML = me.getAttribute("data-detail");
            show.style.display = "block";

        });
    }

    else if (obj.id == "path26") {
        var me = document.getElementById("path26");
        me.style.fill = "#09265F";
        document.querySelector("g").addEventListener("mouseover", function (e) {
            var x = e.pageX / 2;
            var y = e.pageY - 30;
            show.style.left = x + "px";
            show.style.top = y + "px";
            show.innerHTML = me.getAttribute("data-detail");
            show.style.display = "block";

        });
    }

    else if (obj.id == "path28") {
        var me = document.getElementById("path28");
        me.style.fill = "#09265F";
        document.querySelector("g").addEventListener("mouseover", function (e) {
            var x = e.pageX / 2;
            var y = e.pageY - 30;
            show.style.left = x + "px";
            show.style.top = y + "px";
            show.innerHTML = me.getAttribute("data-detail");
            show.style.display = "block";

        });
    }
    else {
        show.style.display = "none";
    }
}
function remove(obj) {
    var show = document.querySelector(".zone-data");
    if (obj.id == "path7") {
        var me = document.getElementById("path7");
        me.style.fill = "#CA2126";
        show.style.display = "none";

    }

    else if (obj.id == "path10") {
        var me = document.getElementById("path10");
        me.style.fill = "#CA2126";
        show.style.display = "none";
    }

    else if (obj.id == "path15") {
        var me = document.getElementById("path15");
        me.style.fill = "#CA2126";
        show.style.display = "none";
    }

    else if (obj.id == "path25") {
        var me = document.getElementById("path25");
        me.style.fill = "#CA2126";
        show.style.display = "none";
    }

    else if (obj.id == "path26") {
        var me = document.getElementById("path26");
        me.style.fill = "#CA2126";
        show.style.display = "none";
    }

    else if (obj.id == "path28") {
        var me = document.getElementById("path28");
        me.style.fill = "#CA2126";
        show.style.display = "none";
    }

    else if (obj.id == "path31") {
        var me = document.getElementById("path31");
        me.style.fill = "#CA2126";
        show.style.display = "none";
    }
}


document.querySelector(".close-detail").addEventListener("click",function(){
      var panel = document.querySelector(".search-detail");
      panel.style.display = "none";
});

