let searchBar = document.getElementById("search-bar");
let serachButton= document.getElementById("search-button");

serachButton.addEventListener("click", ()=>{
    window.location.href = "properties.php?keyword=" + searchBar.value;
})