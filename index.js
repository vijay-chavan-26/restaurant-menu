// ############## For adding class in menu and toggle ##############

const mobile_nav = document.querySelector(".hamburger-lines");
const nav_header = document.querySelector(".navbar");

const toggleNavbar = () => {
  nav_header.classList.toggle("active");
};

mobile_nav.addEventListener("click", () => toggleNavbar());

window.addEventListener('click', function(e){
  if(!nav_header.contains(e.target)){
    nav_header.classList.remove("active");
  }
});


// ############## For Changing Color of Active Menu ##############

const currentLocation = location.href;
const menuItem = document.querySelectorAll('ul > li > a');
const menuLength = menuItem.length;
const firsTime = document.querySelector(".menu-item1");
// firsTime.classList.remove("active-menu")

for(let i=0;i<menuLength;i++){
  if(menuItem[i].href === currentLocation){
    menuItem[i].className = "active-menu";
    }
}


// ################## For Navbar Hidden While Scrolling up And Visible while Scrolling Down ###############

let lastScrollTop = 0;
const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", function(){
  var scrollTop = window.scrollY;
  // console.log(scrollTop)
  if(scrollTop > lastScrollTop){
    navbar.classList.add("nav--hidden");
  }
  else{
    navbar.classList.remove("nav--hidden")
  }
  lastScrollTop = scrollTop;
  
  
  const backToScroll =  document.querySelector("#back-to-top");
  if(scrollTop > 200){
    backToScroll.style.visibility = "visible";
  }
  else{
    backToScroll.style.visibility = "hidden";
  }

  backToScroll.addEventListener("click", function(){
    window.scrollTo(0,0);
  });
  
});


// ################### Adding SMTP to Send Form Data on our Mail Id ##################

// function sendEmail(){
//   Email.send({
//     Host : "smtp.gmail.com",
//     Username : "sadysore@gmail.com",
//     Password : "S@dy10Sore",
//     To : 'madysore10@gmail.com',
//     From : document.getElementById("email").value,
//     Subject : "New Contact Form Enquiry",
//     Body : "And this is the body"
//   }).then(
//   message => alert(message)
// );
// }
