var modal = document.getElementById("addStudentModal");
var btn = document.getElementById("btnAddStudent");
var span = document.getElementsByClassName("add-student-modal-close")[0];

function addBtn() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}