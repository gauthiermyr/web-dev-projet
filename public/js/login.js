// Global script

function login() {
    const email = document.querySelector("#email-input").value.trim();
    const password = document.querySelector("#password-input").value.trim();
    console.log(email, password);

    if (email !== "" || password !== ""){
        let formData = new FormData();
        formData.append('email', email);
        formData.append('password', password);
        fetch("./src/api/login.php", {
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