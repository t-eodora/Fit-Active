let mainContent = document.getElementById('main-content');
let membershipContent = document.getElementById('membership-content');
let navLinks = document.getElementsByClassName('nav-link');
let membershipButton = document.getElementById('to-membership');

function goToMembership() {
    if (mainContent.style.display === "block" && membershipContent.style.display === "none") {
        mainContent.style.display = "none";
        sessionStorage.setItem('showMain', 'false');
        membershipContent.style.display = "block";
        sessionStorage.setItem('showMember', 'true');
    }
}

function goToMain() {
    if (mainContent.style.display === "none" && membershipContent.style.display === "block") {
        mainContent.style.display = "block";
        sessionStorage.setItem('showMain', 'true');
        membershipContent.style.display = "none";
        sessionStorage.setItem('showMember', 'false');
    }
}

let activeLink = document.getElementsByClassName('active')[0];

for (link of navLinks) {
    link.addEventListener('click', (event) => {
        event.preventDefault();
        if(event.target.getAttribute('value') === 'membership') {
            goToMembership();
            window.scrollTo(0, 0);
        } else if(event.target.getAttribute('value') === 'contact') {
            window.scrollTo({ top: document.getElementById('contact').offsetTop, behavior: 'smooth'});
        } else {
            goToMain();
            window.scrollTo({ top: document.getElementById(`${event.target.getAttribute('value')}`).offsetTop, behavior: 'smooth'});
        }
        if (activeLink !== event.target) {
            activeLink.classList.remove('active');
            event.target.classList.add('active');
            activeLink = event.target;
        }
    });
}

membershipButton.addEventListener('click', (event) => {
    event.preventDefault();
    goToMembership();
    window.scrollTo(0, 0);
});

window.onload = function() {
    if(sessionStorage.getItem("showMain")) {
        let showMain = sessionStorage.getItem('showMain');
        let showMember = sessionStorage.getItem('showMember');
        if(showMain === 'true' && showMember === 'false'){
             mainContent.style.display = "block";
             membershipContent.style.display = "none";
        } else {
            mainContent.style.display = "none";
            membershipContent.style.display = "block";
        }
    }
}

