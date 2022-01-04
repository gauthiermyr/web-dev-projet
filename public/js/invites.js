const invitations = [
    {
        name: "NOM Prénom",
        src_profile: "./public/img/profil.png",
        bio: "Titre",
        nbr_cmn_con: 10,
        msg: "message",
    },
    {
        name: "NOM Prénom",
        src_profile: "./public/img/profil.png",
        bio: "Titre",
        nbr_cmn_con: 10,
        msg: "message",
    },
    {
        name: "NOM Prénom",
        src_profile: "./public/img/profil.png",
        bio: "Titre", 
        nbr_cmn_con: 10,
        msg: "message",
    },
]

const recent_connexions = [
    {
        name: "NOM Prénom", 
        src_profile: "./public/img/profil.png",
        bio: "Titre"
    },
    {
        name: "NOM Prénom", 
        src_profile: "./public/img/profil.png",
        bio: "Titre"
    },
    {
        name: "NOM Prénom", 
        src_profile: "./public/img/profil.png",
        bio: "Titre"
    },
    {
        name: "NOM Prénom", 
        src_profile: "./public/img/profil.png",
        bio: "Titre"
    },
]

const new_contacts = [
    {
        name: "NOM Prénom", 
        bio: "Titre",
        nbr_cmn_con: 10
    },
    {
        name: "NOM Prénom", 
        bio: "Titre",
        nbr_cmn_con: 10
    },
    {
        name: "NOM Prénom", 
        bio: "Titre",
        nbr_cmn_con: 10
    },
    {
        name: "NOM Prénom", 
        bio: "Titre",
        nbr_cmn_con: 10
    },
]

let invitation_container;
let connexion_container;
let new_contact_container;

function invitationHTML(invitation) {
    return (
        "<div class='invitations-attente-liste'>" +
            "<div class='invitations-attente-profil'>" +
                "<img src='" + invitation.src_profile + "'></img>" +
                "<div class='invitations-attente-profil-detail'>" +
                    "<a class='clickable'>" + invitation.name + "</a>" +
                    "<h5>" + invitation.bio + "</h5>" +
                    "<h6>" + invitation.nbr_cmn_con + " connections en commun</h6>" +
                "</div>" +
            "</div>" +
            "<div class='invitations-attente-message'>" +
                "<p>" + invitation.msg + "</p>" +
            "</div>" +
            "<div class='invitations-attente-choix'>" +
                "<button class='invitations-attente-accepter clickable'>Accepter</button>" +
                "<button class='invitations-attente-refuser clickable'>Refuser</button>" +
            "</div>" +
        "</div>"
    )
}

function connexionHTML(connexion) {
    return (
        "<div class='invitations-recent-profil'>" +
            "<img src='" + connexion.src_profile + "'></img>" +
            "<a class='clickable'>" + connexion.name + "</a> <!-- Lien qui renvoi vers le profil du mec -->" +
            "<h5>" + connexion.bio + "</h5>" +
        "</div>"
    )
}

function contactHTML(contact) {
    return (
        "<div class='invitations-nouveau-profil'>" +
            "<img src='./public/img/profil.png'></img>" +
            "<a class='clickable'>NOM Prénom</a> <!-- Lien qui renvoi vers le profil du mec -->" +
            "<h5>Titre</h5>" +
            "<h6>X Connexions</h6>" +
            "<button class='invitations-nouveau-connecter clickable'>Se connecter</button>" +
        "</div>"
    )
}

const load_content = (invitations, recent_connexions, new_contacts) => {
    invitations.forEach((invitation) => {
        invitation_container.insertAdjacentHTML("beforeEnd", invitationHTML(invitation));
    });

    recent_connexions.forEach((connexion) => {
        connexion_container.insertAdjacentHTML("beforeEnd", connexionHTML(connexion));
    });

    new_contacts.forEach((contact) => {
        new_contact_container.insertAdjacentHTML("beforeEnd", contactHTML(contact));
    });
}

(() => {

    // fetch("./src/api/invites.php", {
    //     method: 'GET'
    // }).then((response) => {
    //     return response.json();
    // }).then((data) => {
    //     invitations = data;
    // });

    // fetch("./src/api/recent_connexions.php", {
    //     method: 'GET'
    // }).then((response) => {
    //     return response.json();
    // }).then((data) => {
    //     recent_connexions = data;
    // });

    // fetch("./src/api/new_contacts.php", {
    //     method: 'GET'
    // }).then((response) => {
    //     return response.json();
    // }).then((data) => {
    //     new_contacts = data;
    // });

    invitation_container = document.querySelector("#invitation_container");
    connexion_container = document.querySelector("#recent_connexionx_container")
    new_contact_container = document.querySelector("#contacts_container")

    if (recent_connexions.length > 4){
        recent_connexions = recent_connexions.slice(0, 4);
    }
    if (new_contacts.length > 4) {
        new_contacts = new_contacts.slice(0, 4);
    }
    load_content(invitations, recent_connexions, new_contacts);
})();