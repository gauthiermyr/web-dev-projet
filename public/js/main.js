// Global script

function search() {
    if (document.querySelector("#input-nav-bar")?.value.trim() != "") {
        alert("searching for " + document.querySelector("#input-nav-bar")?.value + "...");
    }
    else {
        alert("please enter a search query");
    }
}
(() => {
    //conde to execute on load
})();