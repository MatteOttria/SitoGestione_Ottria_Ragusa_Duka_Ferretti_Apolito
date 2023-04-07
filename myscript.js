var door = document.querySelector(".door");
var knob = document.querySelector(".knob");
var silhouettes = document.querySelectorAll(".silhouette");
var top_silhouettes = document.querySelectorAll(".top_silhouette")
var bool = false;
door.addEventListener("click", toggleDoor);

function toggleDoor() {
  door.classList.toggle("doorOpen");
  knob.classList.toggle("knobOpen");

  if (!bool) {

    silhouettes.forEach(silhouette =>{
        silhouette.style.backgroundColor = "brown"; 
        silhouette.style.boxShadow = "none";
    });

    top_silhouettes.forEach(top_silhouette =>{
      top_silhouette.style.backgroundColor = "brown"; 
      top_silhouette.style.boxShadow = "none";
    });

    bool = true;

  }else{

    silhouettes.forEach(silhouette =>{
        silhouette.style.backgroundColor = "peru";
    });

    top_silhouettes.forEach(top_silhouette =>{
      top_silhouette.style.backgroundColor = "chocolate";
      top_silhouette.style.boxShadow= "0 0 1.5px black";
  });

    bool = false;
  }
}