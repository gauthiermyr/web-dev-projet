
const postHTML = (postDic) => {
    return (
        "<div class='post-container'>" +
            "<div class='post-navigation'>" +
                "<div class='post-navigation-date'>" +
                    "<p>" + postDic.DatePublication + "</p>" +
                "</div>" +
                "<div class='post-navigation-profile'>" +
                    "<img src='" + 'test' + "'></img>" +
                    "<div class='post-navigation-profile-info'>" +
                        "<h4>" + postDic.Prenom + ' ' + postDic.Nom + "</h4>" +
                        "<h5>" + postDic.Titre + "</h5>" +
                    "</div>" +
                "</div>" +
            "</div>" +
            "<div class='post-body'>" +
                "<p>" + postDic.Commentaire + "</p>" +
            "</div>" +
            "<div class='post-footer'>" +
                "<div>" +
                    "<span>" + '69' + " pouces</span>" +
                    "<span>" + '42' + " commentaires</span>" +
                "</div>" +
                "<span>share</span>" +
            "</div>" +
        "</div>"
    )
}

const loadPosts = () => {
    fetch("./src/api/actus.php", {
        method: 'GET'
    }).then((response) => {
        return response.json();
    }).then((data) =>{
        data.forEach((postDic) => {
            document.querySelector("#post-feed").insertAdjacentHTML("afterend", postHTML(postDic));
        });
    });
}

const publish = () => {
    if (document.querySelector("#post-creation-textarea").value.trim() != "") {
        let formData = new FormData();
        formData.append('post', document.querySelector("#post-creation-textarea").value);
        fetch("./src/api/publishPost.php", {
            method: 'POST',
            body: formData
        }).then((response) => {

        });
    }
    else {
        alert("please write a post");
    }
}

(() => {
    loadPosts();
})();