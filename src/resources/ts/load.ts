window.addEventListener("DOMContentLoaded", function () {
    completeLoad();
});

function completeLoad() {
    const loader = document.getElementById("loading");
    if (loader) {
        loader.classList.add("completed");
    }

    const foreverLoading = document.getElementById("forever-loading");
    if (!foreverLoading) {
        document.body.style.overflowY = "scroll";
    }
}
