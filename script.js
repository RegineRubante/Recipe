let sections = document.querySelectorAll('section');
let navlinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top => offset && top < offset + height){
            navlinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a [href*=' + id + ']').classList.add('active');

            });
        };

    });
};


//sign in sign out
const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signIn=document.getElementById('signIn');
const signUp=document.getElementById('signup');