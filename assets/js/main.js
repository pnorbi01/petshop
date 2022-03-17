document.getElementById('button').addEventListener('click', function() {
    document.querySelector('.bg-modal').style.display = 'flex';
})

document.getElementById('close1').addEventListener('click', function() {
    document.querySelector('.bg-modal').style.display = 'none';
})


var btnvar1 = document.getElementById('heartButton');

function Toggle1() {
    if (btnvar1.style.color == "red") {
        btnvar1.style.color = "grey"
    } else {
        btnvar1.style.color = "red"
    }
}