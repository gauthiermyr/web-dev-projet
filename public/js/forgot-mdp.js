function forgot1() {
    const email = document.querySelector(".identification-write-input").value.trim();
    console.log(email);

    if (email !== ""){
        let formData = new FormData();
        formData.append('email', email);

        fetch("./src/api/forgot-mdp.php", {
            method: 'POST',
            body: formData
        }).then((response) => {
            //console.log(JSON.stringify(response.json()));
        })
    }
}

+
(() => {
    //code to execute on load
})();

function forgot2() {
    const email = document.querySelector(".identification-write-input").value.trim();
    const password = document.querySelector(".identification-valider-button clickable").value.trim();
    console.log(email, password);

    if (email !== "" || password !== ""){
        let formData = new FormData();
        formData.append('email', email);
        formData.append('password', password);

        fetch("./src/api/forgot-mdp.php", {
            method: 'POST',
            body: formData
        }).then((response) => {
            //console.log(JSON.stringify(response.json()));
        })
    }
}

+
(() => {
    //code to execute on load
})();