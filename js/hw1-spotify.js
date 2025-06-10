document.addEventListener("DOMContentLoaded", function () {
  function onResponse(response) {
    console.log("Risposta ricevuta");
    if (!response.ok) {
      throw new Error("Errore nella risposta: " + response.status);
    }
    return response.json();
  }

  function onJson(json) {
    console.log("JSON ricevuto", json);

    const library = document.querySelector("#album-viewAPI");
    library.innerHTML = "";

    const results = json.albums?.items || [];
    let num_results = results.length > 10 ? 10 : results.length;

    if (num_results === 0) {
      library.textContent = "Nessun album trovato.";
      return;
    }

    for (let i = 0; i < num_results; i++) {
      const album_data = results[i];

      const title = album_data.name;
      const selected_image = album_data.images[0]?.url || "";

      const album = document.createElement("div");
      album.classList.add("albumAPI");

      const img = document.createElement("img");
      img.src = selected_image;
      img.alt = title;

      const caption = document.createElement("span");
      caption.textContent = title;

      album.appendChild(img);
      album.appendChild(caption);
      library.appendChild(album);
    }
  }

  const form = document.querySelector("#search-formAPI");

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    const album_input = document.querySelector("#albumAPI");
    const album_value = encodeURIComponent(album_input.value.trim());

    if (!album_value) {
      alert("Inserisci un termine di ricerca");
      return;
    }

    fetch("php/spotify_api.php?q=" + album_value)
      .then(onResponse)
      .then(onJson)
      .catch((error) => {
        console.error("Errore nella chiamata all'API PHP:", error);
        const library = document.querySelector("#album-viewAPI");
        library.textContent = "Si è verificato un errore durante la ricerca.";
      });
  });
});
