document.addEventListener("DOMContentLoaded", function () {
    let links = document.querySelectorAll(".delete");
    for(let i = 0; i < links.length; i++){
        links[i].addEventListener("click", function(){
            if(confirm("Are you sure?")){
                return true;
            }else{
                event.preventDefault();
                return false;
            }
        });
    }
});