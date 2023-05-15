
original = document.getElementById("musica");
traducao = document.getElementById("esconder")
btn = document.getElementById("traducao");
btn2 = document.getElementById("hide")



function aparecereEsconder() {
    original.removeAttribute("id")
    original.setAttribute("id", "esconder")
    traducao.removeAttribute("id")
    traducao.setAttribute("id", "musica")
    if (btn === document.getElementById("traducao")) {
        btn.removeAttribute("id")
        btn.setAttribute("id", "hide")
        btn2.removeAttribute("id")
        btn2.setAttribute("id", "original")
    }
}

function voltarOriginal() {
    traducao.removeAttribute("id")
    traducao.setAttribute("id", "esconder")
    original.removeAttribute("id")
    original.setAttribute("id", "musica")
    if (btn2 === document.getElementById("original")) {
        btn2.removeAttribute("id")
        btn2.setAttribute("id", "hide")
        btn.removeAttribute("id")
        btn.setAttribute("id", "traducao")
    }
}

const list = document.querySelectorAll('.list');
function activeLink() {
    list.forEach((item) =>
        item.classList.remove('active'));
    this.classList.add('active');
}
list.forEach((item) =>
    item.addEventListener('click', activeLink));
