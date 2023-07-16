window.addEventListener("DOMContentLoaded", function () {
    completeLoad();
});

function completeLoad() {
    const loader = document.getElementById("loading");
    if (loader) {
        loader.classList.add("completed");
    }
}
