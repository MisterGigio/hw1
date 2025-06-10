function createNavBarCard(article, options = {}) {
  const {
    containerClass = "navBar-side-container",
    imgWidth = 232,
    imgHeight = 232,
    h3Class = "nav-bar-h3",
    h1Class = "nav-bar-title",
    h2Class = "nav-bar-subtitle",
    authorClass = "nav-bar-author",
    dateClass = "nav-bar-date",
  } = options;

  const card = document.createElement("div");
  card.classList.add(containerClass);

  const img = document.createElement("img");
  img.src = article.img || "";
  img.alt = article.title || "";
  img.width = imgWidth;
  img.height = imgHeight;

  const h3 = document.createElement("h3");
  h3.className = h3Class;
  h3.textContent = article.category || "";

  const h1 = document.createElement("h1");
  h1.className = h1Class;
  h1.textContent = article.title || "";

  const h2 = document.createElement("h2");
  h2.className = h2Class;
  h2.textContent = article.subtitle || "";

  const author = document.createElement("span");
  author.className = authorClass;
  author.textContent = article.author || "";

  const date = document.createElement("span");
  date.className = dateClass;
  date.textContent = article.date || "";

  card.appendChild(img);
  card.appendChild(h3);
  card.appendChild(h1);
  card.appendChild(h2);
  card.appendChild(author);
  card.appendChild(date);

  return card;
}
