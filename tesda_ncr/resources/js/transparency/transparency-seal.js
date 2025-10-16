const collapsibles = document.querySelectorAll('.collapsible');

collapsibles.forEach(collapsible => {
    collapsible.addEventListener('click', function () {
        collapsibleDetails(collapsible);
    });
});

function collapsibleDetails(collapsible) {
    collapsible.classList.toggle("active");
    let content = collapsible.nextElementSibling;

    if (content.style.display === "block") {
        content.style.display = "none";
    }
    else {
        content.style.display = "block";
    }
}