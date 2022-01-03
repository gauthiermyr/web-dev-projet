const postsDic = [
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
                    "<p>" + postDic.date + "</p>" +
                "</div>" +
                "<div class='post-navigation-profile'>" +
                    "<img src='" + postDic.srcPFP + "'></img>" +
                    "<div class='post-navigation-profile-info'>" +
                        "<h4>" + postDic.author + "</h4>" +
                        "<h5>" + postDic.bio + "</h5>" +
                    "</div>" +
                "</div>" +
            "</div>" +
            "<div class='post-body'>" +
                "<p>" + postDic.bio + "</p>" +
            "</div>" +
            "<div class='post-footer'>" +
                "<div>" +
                    "<span>" + postDic.likes + " pouces</span>" +
                    "<span>" + postDic.nb_comments + " commentaires</span>" +
                "</div>" +
                "<span>share</span>" +
            "</div>" +
        "</div>"
    )
}

const loadPosts = () => {
    // fetch("./src/api/getPosts.php", {
    //     method: 'GET'
    // }).then((response) => {
    //     // get list of posts and load them like below
    // });

    postsDic.forEach((postDic) => {
        document.querySelector("#post-feed").insertAdjacentHTML("afterend", postHTML(postDic));
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