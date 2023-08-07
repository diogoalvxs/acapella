    document.addEventListener("DOMContentLoaded", function() {
    var searchInput = document.getElementById("search-input");
    var searchResults = document.getElementById("search-results");
    var listItems = searchResults.getElementsByTagName("li");

    searchInput.addEventListener("input", function(event) {
      event.stopPropagation();
      searchResults.style.display = "block";
      filterResults();
    });
    
    document.addEventListener("click", function() {
      searchResults.style.display = "none";
    });

    function filterResults() {
      var input = searchInput.value.toUpperCase();

      for (var i = 0; i < listItems.length; i++) {
        var item = listItems[i];
        var text = item.getElementsByTagName("span")[0].textContent.toUpperCase();

        if (text.includes(input)) {
          item.style.display = "";
        } else {
          item.style.display = "none";
        }
      }
    }

    // Adicionar redirecionamento para as URLs dos links com [artist name]
    let links = searchResults.getElementsByTagName("li");
    for (let i = 0; i < links.length; i++) {
      links[i].addEventListener("click", function(event) {
        event.stopPropagation();
        let link = this.getElementsByTagName("span")[0];
        if (link && link.textContent) {
          let url;
          let optionText = link.textContent.toLowerCase();
          let textToRemove = ' - Perfil';
          let nomeArtista = link.textContent.replace(textToRemove,'');

          if (optionText === nomeArtista, " - perfil") {
            url = nomeArtista + '_perfil.php';
          } 
          window.location.href = url;
        }
      });
    }
  });

