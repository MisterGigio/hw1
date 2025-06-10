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
    img: "../reviews/reviews_img/reviews-painted.webp",
    category: "EXPERIMENTAL",
    title: "On a Painted Ocean",
    subtitle: "Walt McClements",
    author: "By Grayson Haver Currin",
    date: "April 14, 2025",
  },
  {
    img: "../reviews/reviews_img/reviews-sacrificial.webp",
    category: "EXPERIMENTAL",
    title: "The Sacrifical Code",
    subtitle: "Kali Malone",
    author: "By Philip Sherburne",
    date: "April 12, 2025",
  },
  {
    img: "../reviews/reviews_img/sable.webp",
    category: "ROCK",
    title: "SABLE,fABLE",
    subtitle: "Bon Iver",
    author: "By Alex Robert Ross",
    date: "April 10, 2025",
  },
  {
    img: "../reviews/reviews_img/stochastic.webp",
    category: "ELECTRONIC",
    title: "Stochastic Drift",
    subtitle: "Barker",
    author: "By Harry Tafoya",
    date: "April 9, 2025",
  },
  {
    img: "../reviews/reviews_img/revengeseekerz.webp",
    category: "EXPERIMENTAL / POP/R&B",
    title: "Revengeseekerz",
    subtitle: "Jane Remover",
    author: "By Kieran Press-Reynolds",
    date: "April 7, 2025",
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
    img: "../reviews/reviews_img/reviews-painted.webp",
    category: "EXPERIMENTAL",
    title: "On a Painted Ocean",
    subtitle: "Walt McClements",
    author: "By Grayson Haver Currin",
    date: "April 14, 2025",
  },
  {
    img: "../reviews/reviews_img/reviews-sacrificial.webp",
    category: "EXPERIMENTAL",
    title: "The Sacrifical Code",
    subtitle: "Kali Malone",
    author: "By Philip Sherburne",
    date: "April 12, 2025",
  },
  {
    img: "../reviews/reviews_img/sable.webp",
    category: "ROCK",
    title: "SABLE,fABLE",
    subtitle: "Bon Iver",
    author: "By Alex Robert Ross",
    date: "April 10, 2025",
  },
  {
    img: "../reviews/reviews_img/stochastic.webp",
    category: "ELECTRONIC",
    title: "Stochastic Drift",
    subtitle: "Barker",
    author: "By Harry Tafoya",
    date: "April 9, 2025",
  },
  {
    img: "../reviews/reviews_img/revengeseekerz.webp",
    category: "EXPERIMENTAL / POP/R&B",
    title: "Revengeseekerz",
    subtitle: "Jane Remover",
    author: "By Kieran Press-Reynolds",
    date: "April 7, 2025",
  },
];

const imgContainer = document.querySelector(".img-full-container");

for (const article of REVIEWS_ARTICLES) {
  const card = createNavBarCard(article);
  imgContainer.appendChild(card);
}
