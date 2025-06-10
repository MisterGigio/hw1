const REVIEWS_ARTICLES = [
  {
    img: "../reviews/reviews_img/stochastic.webp",
    category: "ELECTRONIC",
    title: "Stochastic Drift",
    subtitle: "Barker",
    author: "By Harry Tafoya",
    date: "April 9, 2025",
  },
  {
    img: "../reviews/reviews_img/thuthanaka.webp",
    category: "EXPERIMENTAL",
    title: "Los Thuthanaka",
    subtitle: "Los Thuthanaka",
    author: "By Joshua Minsoo Kim",
    date: "April 4, 2025",
  },
  {
    img: "../reviews/reviews_img/musicHear.webp",
    category: "ELECTRONIC",
    title: "Music Can Hear Us",
    subtitle: "DJ Koze",
    author: "By Walden Green",
    date: "April 3, 2025",
  },
  {
    img: "../reviews/reviews_img/giftSongs.webp",
    category: "EXPERIMENTAL",
    title: "Gift Songs",
    subtitle: "Jefre Cantu-Ledesma",
    author: "By Philip Sherburne",
    date: "March 31, 2025",
  },
  {
    img: "../reviews/reviews_img/45Pounds.webp",
    category: "ROCK",
    title: "45 Pounds",
    subtitle: "YHWN Nailgun",
    author: "By Jeremy D. Larson",
    date: "March 26, 2025",
  },
  {
    img: "../reviews/reviews_img/ddr.webp",
    category: "ROCK",
    title: "Radio DDR",
    subtitle: "Sharp Pins",
    author: "By Shaad D'Souza",
    date: "March 24, 2025",
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
    img: "../reviews/reviews_img/thuthanaka.webp",
    category: "EXPERIMENTAL",
    title: "Los Thuthanaka",
    subtitle: "Los Thuthanaka",
    author: "By Joshua Minsoo Kim",
    date: "April 4, 2025",
  },
  {
    img: "../reviews/reviews_img/musicHear.webp",
    category: "ELECTRONIC",
    title: "Music Can Hear Us",
    subtitle: "DJ Koze",
    author: "By Walden Green",
    date: "April 3, 2025",
  },
  {
    img: "../reviews/reviews_img/giftSongs.webp",
    category: "EXPERIMENTAL",
    title: "Gift Songs",
    subtitle: "Jefre Cantu-Ledesma",
    author: "By Philip Sherburne",
    date: "March 31, 2025",
  },
  {
    img: "../reviews/reviews_img/45Pounds.webp",
    category: "ROCK",
    title: "45 Pounds",
    subtitle: "YHWN Nailgun",
    author: "By Jeremy D. Larson",
    date: "March 26, 2025",
  },
  {
    img: "../reviews/reviews_img/ddr.webp",
    category: "ROCK",
    title: "Radio DDR",
    subtitle: "Sharp Pins",
    author: "By Shaad D'Souza",
    date: "March 24, 2025",
  },
];

const imgContainer = document.querySelector(".img-full-container");

for (const article of REVIEWS_ARTICLES) {
  const card = createNavBarCard(article);
  imgContainer.appendChild(card);
}
