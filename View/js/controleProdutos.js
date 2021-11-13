$(document).ready(function(){
    var itens = document.querySelectorAll(".item");
    var edits = document.getElementsByClassName("btn btn-default btn-lg changeItem"),
        removes = document.getElementsByClassName("btn btn-default btn-lg removeItem");

    for (i = 0; i < itens.length; i++) {
            
        var item = itens[i];

        var btnEdit = document.createElement("button"),
            btnRemove = document.createElement("button");
            
        btnEdit.type = "button";
        btnEdit.classList.add("btn", "btn-default", "btn-lg", "changeItem");
        btnEdit.textContent = "Editar ";
        btnEdit.style = "margin: 5px;";
        
        btnRemove.type = "button";
        btnRemove.classList.add("btn", "btn-default", "btn-lg", "removeItem");
        btnRemove.textContent = "Remover ";
        
        item.appendChild(btnEdit);
        item.appendChild(btnRemove);
    }

    for (i = 0; i < edits.length; i++) {
        
        var edit = edits[i];

        var iconEdit = document.createElement("i");
        iconEdit.classList.add("fas", "fa-cog");
        edit.appendChild(iconEdit);
    }

    for (i = 0; i < removes.length; i++) {

        var remove = removes[i];

        var iconRemove = document.createElement("i");
        iconRemove.classList.add("fas", "fa-trash");
        remove.appendChild(iconRemove);
    }
})


