var door = document.querySelector(".door");
var knob = document.querySelector(".knob");
var silhouettes = document.querySelectorAll(".silhouette");
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
    bool = true;
  }else{
    silhouettes.forEach(silhouette =>{
        silhouette.style.backgroundColor = "peru";
    });
    bool = false;
  }
}