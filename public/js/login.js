// Global script

function login() {
    const email = document.querySelector("#email-input").value;
    const password = document.querySelector("#password-input").value;
    console.log(email, password);
}

(() => {
    //conde to execute on load
})();