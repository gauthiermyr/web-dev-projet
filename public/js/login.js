// Global script

function login() {
    const email = document.querySelector("#email-input").value.trim();
    const password = document.querySelector("#password-input").value.trim();
    console.log(email, password);

    if (email !== "" || password !== ""){
        fetch("/src/api/login.php", )
    }
}

(() => {
    //conde to execute on load
})();