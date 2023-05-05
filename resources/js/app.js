import 'flowbite';

import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
/*
const input = document.querySelector("#distribucionGeografica");
const addBtn = document.querySelector("#btn-add");
const ul = document.querySelector("ul");
var count = 0;

addBtn.addEventListener("click", (e) => {
    e.preventDefault();

    let n = count++;
    const text = input.value;

    if (text !== "") {
        const li = document.createElement("li");
        const p = document.createElement("input");
        //p.textContent = text;
        p.value = text;
        p.name = "click"+n;

        li.appendChild(p);
        li.appendChild(addDeleteBtn());
        ul.appendChild(li);

        input.value = "";
        empty.style.display = "none";
    }
});

function addDeleteBtn() {
    const deleteBtn = document.createElement("button");

    deleteBtn.textContent = "X";
    deleteBtn.className = "btn-delete";

    deleteBtn.addEventListener("click", (e) => {
        const item = e.target.parentElement;
        ul.removeChild(item);

        const items = document.querySelectorAll("li");

        if (items.length === 0) {
            empty.style.display = "block";
        }
    });

    return deleteBtn;
}
*/
