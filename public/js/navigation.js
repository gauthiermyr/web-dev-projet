// Global script

function search() {

    if (document.querySelector("#input-nav-bar")?.value.trim() != "") {
        window.location = window.location.pathname + "?search=" + escape(document.querySelector("#input-nav-bar")?.value.trim());
    }
    else {
        // alert("please enter a search query");
    }
}

(() => {
    //conde to execute on load
})();