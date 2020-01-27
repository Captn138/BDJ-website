const namefield = document.querySelector('#nom');
const emailfield = document.querySelector('#email');
const textfield = document.querySelector('#demande');
const table = document.querySelector('#a_toi_de_jouer');
namefield.focus();

function clearfields(){
    namefield.value = '';
    emailfield.value = '';
    textfield.value = '';
    
}

function submitform(){
    if(namefield.value != "" && emailfield.value != "" && textfield.value != ""){
        let newtr = document.createElement("tr");
        let newname = document.createElement("td");
        let newemail = document.createElement("td");
        let newdemande = document.createElement("td");
        newname.classList.add("col3");
        newemail.classList.add("col3");
        newdemande.classList.add("col4");
        newname.textContent = namefield.value;
        newemail.textContent = emailfield.value;
        newdemande.textContent = textfield.value;
        newtr.appendChild(newname);
        newtr.appendChild(newemail);
        newtr.appendChild(newdemande);
        table.appendChild(newtr);
        clearfields()
        alert("Votre demande a bien été prise en compte et sera traitée dans les plus brefs délais.")
    }
}