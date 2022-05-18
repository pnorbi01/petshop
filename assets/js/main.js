/*document.getElementById('button').addEventListener('click', function() {
    document.querySelector('.bg-modal').style.display = 'flex';
})*/

function openModal(id) {
    document.querySelector('.bg-modal-' + id).style.display = 'flex';
}

function closeModal(event) {
    event.target.parentElement.parentElement.style.display = "none";
}

function toggleHeart(event) {
    if (event.target.parentElement.style.color == "red") {
        event.target.parentElement.style.color = "black"
    } else {
        event.target.parentElement.style.color = "red"
    }
}