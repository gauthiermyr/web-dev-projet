// Global script

function login() {
    const email = document.querySelector("#email-input").value.trim();
    const password = document.querySelector("#password-input").value.trim();
    console.log(email, password);

    if (email !== "" || password !== ""){
        fetch("./src/api/login.php", {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({email: email, password: password})
        }).then((response) => {
            //console.log(JSON.stringify(response.json()));
        })
    }
}

+
(() => {
    //conde to execute on load
})();