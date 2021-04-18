const createPage = (data) => {
  let list = data.results;
  //list of pokemon objects
  let root = document.getElementById("root");
  root.innerHTML = "";
  for (let index = 0; index < list.length; index++) {
    const element = list[index];
    let item = document.createElement("li");
    let anchor = document.createElement("a");
    anchor.setAttribute("pokeDetailUrl", element.url); //setting poke detail
   
    // Create the text node for anchor element.
    var link = document.createTextNode(element.name);

    // Append the text node to anchor element.
    anchor.appendChild(link);

    // Set the title.
    anchor.title = "This is Link";

    // Set the href property.

    anchor.href = "#";
    item.appendChild(anchor);
    root.appendChild(item);
  }
  let button = document.createElement("button");
  button.innerHTML = "Previous";
  data.previous!='null' ?  root.appendChild(button) : (button.disabled = true);
 
  let button1 = document.createElement("button");
  button1.innerHTML = "Next";
  root.appendChild(button1);
  button.addEventListener("click", function () {
    listPokemon(1);
  });
  button1.addEventListener("click", function () {
    listPokemon(2);
  });
};
/*********Function for API call**********/

const listPokemon = (pageNumber = 0) => {
  //setting value of pageNumber parameter,so that eventlistner also call the function
  //API call for pokemon list
  fetch(
    "http://localhost/React21K-PHP-Projects/pokemonlist-fullstack/formatted_pokemon.php?page=" +
      pageNumber
  )
    .then((response) => response.json())
    .then((data) => {
      createPage(data);
    });
};
const loadPokemonList = () => {
  //setting value of pageNumber parameter,so that eventlistner also call the function
  //API call for pokemon list
  fetch(
    "http://localhost/React21K-PHP-Projects/pokemonlist-fullstack/formatted_pokemon.php"
  )
    .then((response) => response.json())
    .then((data) => {
      createPage(data);
    });
};
window.addEventListener("DOMContentLoaded", loadPokemonList);
