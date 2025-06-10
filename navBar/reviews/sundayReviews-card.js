const REVIEWS_ARTICLES = [
  {
    img: "../reviews/reviews_img/reviews-underground.webp",
    category: "RAP",
    title: "Underground Vol. 1: 1991-1994",
    subtitle: "Triple Six Mafia",
    author: "By Dash Lewis",
    date: "April 13, 2025",
  },
  {
    img: "../reviews/reviews_img/dolls.webp",
    category: "ROCK",
    title: "New York Dolls",
    subtitle: "New York Dolls",
    author: "By Madison Bloom",
    date: "April 6, 2025",
  },
  {
    img: "../reviews/reviews_img/beatles.webp",
    category: "ROCK",
    title: "Live! at the Star-Club in Hamburg, Germany; 1962",
    subtitle: "The Beatles",
    author: "By Daniel Bromfield",
    date: "March 30, 2025",
  },
  {
    img: "../reviews/reviews_img/blackFlag.webp",
    category: "ROCK",
    title: "My War",
    subtitle: "Black Flag",
    author: "By Stuart Berman",
    date: "March 23, 2025",
  },
  {
    img: "../reviews/reviews_img/question.webp",
    category: "POp/R&B",
    title: "La question",
    subtitle: "Francoise Hardy",
    author: "By Quinn Moreland",
    date: "March 16, 2025",
  },
  {
    img: "../reviews/reviews_img/fontanelle.webp",
    category: "ROCK",
    title: "Fontanelle",
    subtitle: "Babes in Toyland",
    author: "By Amy Philips",
    date: "February 16, 2025",
  },
  {
    img: "../reviews/reviews_img/reviews-underground.webp",
    category: "RAP",
    title: "Underground Vol. 1: 1991-1994",
    subtitle: "Triple Six Mafia",
    author: "By Dash Lewis",
    date: "April 13, 2025",
  },
  {
    img: "../reviews/reviews_img/dolls.webp",
    category: "ROCK",
    title: "New York Dolls",
    subtitle: "New York Dolls",
    author: "By Madison Bloom",
    date: "April 6, 2025",
  },
  {
    img: "../reviews/reviews_img/beatles.webp",
    category: "ROCK",
    title: "Live! at the Star-Club in Hamburg, Germany; 1962",
    subtitle: "The Beatles",
    author: "By Daniel Bromfield",
    date: "March 30, 2025",
  },
  {
    img: "../reviews/reviews_img/blackFlag.webp",
    category: "ROCK",
    title: "My War",
    subtitle: "Black Flag",
    author: "By Stuart Berman",
    date: "March 23, 2025",
  },
  {
    img: "../reviews/reviews_img/question.webp",
    category: "POp/R&B",
    title: "La question",
    subtitle: "Francoise Hardy",
    author: "By Quinn Moreland",
    date: "March 16, 2025",
  },
  {
    img: "../reviews/reviews_img/fontanelle.webp",
    category: "ROCK",
    title: "Fontanelle",
    subtitle: "Babes in Toyland",
    author: "By Amy Philips",
    date: "February 16, 2025",
  },
];

const imgContainer = document.querySelector(".img-full-container");

for (const article of REVIEWS_ARTICLES) {
  const card = createNavBarCard(article);
  imgContainer.appendChild(card);
}
