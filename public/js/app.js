var elems = document.getElementsByClassName('affAccueil');
for (var i = 0; i < elems.length; i += 1) {
    elems[i].style.display = 'block';
}
var elems = document.getElementsByClassName('affAnimaux');
for (var i = 0; i < elems.length; i += 1) {
    elems[i].style.display = 'none';
}
var elems = document.getElementsByClassName('affDiffAccueil');
for (var i = 0; i < elems.length; i += 1) {
    elems[i].style.display = 'none';
}
var elems = document.getElementsByClassName('affSpectacle');
for (var i = 0; i < elems.length; i += 1) {
    elems[i].style.display = 'none';
}
var elems = document.getElementsByClassName('affTarif');
for (var i = 0; i < elems.length; i += 1) {
    elems[i].style.display = 'none';
}
var elems = document.getElementsByClassName('affLocalisation');
for (var i = 0; i < elems.length; i += 1) {
    elems[i].style.display = 'none';
}
document.getElementById('article_lienmap').style.display = "none";
document.getElementById('lienGoogle').style.display = "none";

$(function() {

    $("#article_pageName").change(function() {
        var page = $(this).val();

        if (page == 152) {
            var elems = document.getElementsByClassName('affAccueil');
            for (var i = 0; i < elems.length; i += 1) {
                elems[i].style.display = 'block';
            }
        } else {
            var elems = document.getElementsByClassName('affAccueil');
            for (var i = 0; i < elems.length; i += 1) {
                elems[i].style.display = 'none';
            }
        }

        if (page == 153) {
            var elems = document.getElementsByClassName('affAnimaux');
            for (var i = 0; i < elems.length; i += 1) {
                elems[i].style.display = 'block';
            }

        } else {
            var elems = document.getElementsByClassName('affAnimaux');
            for (var i = 0; i < elems.length; i += 1) {
                elems[i].style.display = 'none';
            }
        }
        if (page == 154) {

            var elems = document.getElementsByClassName('affDiffAccueil');
            for (var i = 0; i < elems.length; i += 1) {
                elems[i].style.display = 'block';
            }

        } else {
            var elems = document.getElementsByClassName('affDiffAccueil');
            for (var i = 0; i < elems.length; i += 1) {
                elems[i].style.display = 'none';
            }

        }
        if (page == 155) {

            var elems = document.getElementsByClassName('affSpectacle');
            for (var i = 0; i < elems.length; i += 1) {
                elems[i].style.display = 'block';
            }

        } else {

            var elems = document.getElementsByClassName('affSpectacle');
            for (var i = 0; i < elems.length; i += 1) {
                elems[i].style.display = 'none';
            }
        }
        if (page == 156) {

            var elems = document.getElementsByClassName('affTarif');
            for (var i = 0; i < elems.length; i += 1) {
                elems[i].style.display = 'block';
            }

        } else {
            var elems = document.getElementsByClassName('affTarif');
            for (var i = 0; i < elems.length; i += 1) {
                elems[i].style.display = 'none';
            }

        }
        if (page == 157) {
            var elems = document.getElementsByClassName('affLocalisation');
            for (var i = 0; i < elems.length; i += 1) {
                elems[i].style.display = 'block';
            }
            document.getElementById('article_lienmap').style.display = "block";
            document.getElementById('lienGoogle').style.display = "block";




        } else {

            var elems = document.getElementsByClassName('affLocalisation');
            for (var i = 0; i < elems.length; i += 1) {
                elems[i].style.display = 'none';
            }
            document.getElementById('article_lienmap').style.display = "none";
            document.getElementById('lienGoogle').style.display = "none";


        }


    });
});