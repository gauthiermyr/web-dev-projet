const postsDic = [
    {
        date: "01/12/2021 14h16",
        author: "Alpha 7",
        bio: "Full Stack",
        body: "Bonjour j'ai le plaisir de vous annoncer que je rejoins les équipes de LeankDingue !",
        likes: 189,
        nb_comments: 17
    },
    {
        date: "01/12/2021 14h16",
        author: "Alpha 7",
        srcPFP: "./public/img/profil.png",
        bio: "Full Stack",
        body: "Bonjour j'ai le plaisir de vous annoncer que je rejoins les équipes de LeankDingue !",
        likes: 189,
        nb_comments: 17
    },
    {
        date: "01/12/2021 14h16",
        author: "Alpha 7",
        srcPFP: "./public/img/profil.png",
        bio: "Full Stack",
        body: "Bonjour j'ai le plaisir de vous annoncer que je rejoins les équipes de LeankDingue !",
        likes: 189,
        nb_comments: 17
    },
]

const postHTML = (postDic) => {
    return (
        "<div class='post-container'>" +
            "<div class='post-navigation'>" +
                "<div class='post-navigation-date'>" +
                    "<p>" + postDic.DatePublication + "</p>" +
                "</div>" +
                "<div class='post-navigation-profile'>" +
                    "<img src='" + './public/img/profil.png' + "'></img>" +
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

(() => {
    loadPosts();
})();