
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}


// Plus/Minus Toggle
function toggle_plus(id) {
    var f = document.getElementById(id);
    if (f.classList.contains("showplus")) {
            f.classList.remove("showplus");
            f.classList.add("showminus");
        } else {
            f.classList.remove("showminus");
            f.classList.add("showplus");
        }
}
// Toggle to show and hide content below the link
function toggle_visibility(id) {
   var e = document.getElementById(id);
   if(e.style.display == 'block') {
      e.style.display = 'none';
   } else {
      e.style.display = 'block';
   }
}

//loading page
var myVar;

function loader() {
    myVar = setTimeout(showPage, 2000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";}

/*function toggle_ph(id){
    var g = document.getElementById(id);
}*/

//scroll reveal

window.scrollReveal = new scrollReveal();



//dashboard
function shrink(){
var side= document.getElementById('dside');


if(window.fullscreen==false ){
side.style.display="none";
}
}


var registerform=document.getElementById('dash1')
var datapage=document.getElementById('dash2')
var timetable=document.getElementById('dash3')
var certification=document.getElementById('dash4')


function reducedash(id) {


var registerform=document.getElementById('dash1')
var datapage=document.getElementById('dash2')
var timetable=document.getElementById('dash3')
var certification=document.getElementById('dash4')
var das = document.getElementById(id);

    if(id == "dash1" ) {
       das.style.display = 'block';
       datapage.style.display="none";
        timetable.style.display="none";
        certification.style.display="none";

    }
    if (id=="dash2") {
       das.style.display = 'block';
       registerform.style.display="none";
       timetable.style.display="none";
       certification.style.display="none";
       
       
    }
     if(id == "dash3"){
        das.style.display = 'block';
        registerform.style.display="none";
        datapage.style.display="none"
        certification.style.display="none";
        
    }
    
    if(id == "dash4"){
        das.style.display = 'block';
        registerform.style.display="none";
        datapage.style.display="none"
        timetable.style.display="none";

    }
    
 }

 //jquery service page
 $(document).ready(function(){
    $('service').load(function(){
       var capture=$("capture")
       capture.animate({fontSize:'20px', opacity: '0.4'}, "slow");
       capture.animate({fontSize: '30px', opacity: '0.8'}, "slow");
       capture.animate({fontSize: '40px', opacity: '0.4'}, "slow");
       capture.animate({fontSize: '20px', opacity: '0.8'}, "slow");
    });
});
window.scrollReveal = new scrollReveal();


//Footer    

function foota(id) {
var about = document.getElementById('about');
var vision = document.getElementById('vision');
var mission = document.getElementById('mission');
var policy = document.getElementById('policy');
var contact = document.getElementById('contact');
var address = document.getElementById('address');
var footshow= document.getElementById(id);

if(id=="1"){
    about.style.display="block";
    vision.style.display="none";
    mission.style.display="none";
    policy.style.display="none";
    contact.style.display="none";  
    address.style.display="none";    
}else if(id=="2"){
    about.style.display="none";
    vision.style.display="block";
    mission.style.display="none";
    policy.style.display="none";
    contact.style.display="none";
    address.style.display="none";      
}else if(id=="3"){
    about.style.display="none";
    vision.style.display="none";
    mission.style.display="block";
    policy.style.display="none";
    contact.style.display="none";    
}else if(id=="4"){
    about.style.display="none";
    vision.style.display="none";
    mission.style.display="none";
    policy.style.display="block";
    contact.style.display="none";
    address.style.display="none";  
}else if(id=="5"){
    about.style.display="none";
    vision.style.display="none";
    mission.style.display="none";
    policy.style.display="none";
    contact.style.display="block";
    address.style.display="none";  

}else{address.style.display="block"}
}



