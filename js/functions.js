var modal = document.getElementById("modalBG");
document.querySelector("#add-link").addEventListener('click', openModal);
//document.querySelector('#addHall').addEventListener('click', openModal);
//document.querySelector('.closeModal').addEventListener('click', closeModal);

function openModal() {
    modal.style.display = "block";
}
function closeModal() {
    modal.style.display = 'none';
}
function closeModal() {
    modal.style.display = 'none';
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}

