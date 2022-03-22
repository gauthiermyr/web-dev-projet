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

    function getSearchParameters() {
        let prmstr = window.location.search.substr(1);
        return prmstr != null && prmstr != "" ? transformToAssocArray(prmstr) : {};
    }

    function transformToAssocArray( prmstr ) {
        let params = {};
        let prmarr = prmstr.split("&");
        for ( let i = 0; i < prmarr.length; i++) {
            let tmparr = prmarr[i].split("=");
            params[tmparr[0]] = tmparr[1];
        }
        return params;
    }

    let params = getSearchParameters();

    fetch("./src/api/actus.php" +( params.filter ? "?filter=" + params.filter : ""), {
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