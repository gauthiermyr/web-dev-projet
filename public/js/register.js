// Global script

function register() {
    const email = document.querySelector("#email-input").value.trim();
    const password = document.querySelector("#password-input").value.trim();
    const confPassword = document.querySelector("#conf-password-input").value.trim();
    console.log(email, password, confPassword);

    if (email !== "" || password !== ""){
        let formData = new FormData();
        formData.append('email', email);
        formData.append('password', password);

        fetch("./src/api/register.php", {
            method: 'POST',
            body: formData
        }).then((response) => {
            //console.log(JSON.stringify(response.json()));
        })
    }
}

+
(() => {
    //conde to execute on load
})();