const REVIEWS_ARTICLES = [
  {
    img: "../reviews/reviews_img/reviews-painted.webp",
    category: "EXPERIMENTAL",
    title: "On a Painted Ocean",
    subtitle: "Walt McClements",
    author: "By Grayson Haver Currin",
    date: "April 14, 2025",
  },
  {
    img: "../reviews/reviews_img/reviews-uhlmann.webp",
    category: "JAZZ",
    title: "Uhlmann Johnson Wilkes",
    subtitle: "Gregory Uhlmann / Josh Jonshon / Sam Wilkes",
    author: "By Matthew Blackwell",
    date: "April 14, 2025",
  },
  {
    img: "../reviews/reviews_img/reviews-strong-desire.webp",
    category: "POP / R&B",
    title: "a strong desire to survive",
    subtitle: "duendita",
    author: "By Linnie Greene",
    date: "April 14, 2025",
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
    img: "../reviews/reviews_img/reviews-sacrificial.webp",
    category: "EXPERIMENTAL",
    title: "The Sacrificial Code",
    subtitle: "Kali Malone",
    author: "By Philip Sherburne",
    date: "April 12, 2025",
  },
  {
    img: "../reviews/reviews_img/reviews-earth.webp",
    category: "ROCK / EXPERIMENTAL / JAZZ",
    title: "Song of the Earth",
    subtitle: "Dirty Projectors / David Longstreth / stargaze",
    author: "Brian Howe",
    date: "April 11, 2025",
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
    img: "../reviews/reviews_img/reviews-uhlmann.webp",
    category: "JAZZ",
    title: "Uhlmann Johnson Wilkes",
    subtitle: "Gregory Uhlmann / Josh Jonshon / Sam Wilkes",
    author: "By Matthew Blackwell",
    date: "April 14, 2025",
  },
  {
    img: "../reviews/reviews_img/reviews-strong-desire.webp",
    category: "POP / R&B",
    title: "a strong desire to survive",
    subtitle: "duendita",
    author: "By Linnie Greene",
    date: "April 14, 2025",
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
    img: "../reviews/reviews_img/reviews-sacrificial.webp",
    category: "EXPERIMENTAL",
    title: "The Sacrificial Code",
    subtitle: "Kali Malone",
    author: "By Philip Sherburne",
    date: "April 12, 2025",
  },
  {
    img: "../reviews/reviews_img/reviews-earth.webp",
    category: "ROCK / EXPERIMENTAL / JAZZ",
    title: "Song of the Earth",
    subtitle: "Dirty Projectors / David Longstreth / stargaze",
    author: "Brian Howe",
    date: "April 11, 2025",
  },
];

const imgContainer = document.querySelector(".img-full-container");

for (const article of REVIEWS_ARTICLES) {
  const card = createNavBarCard(article);
  imgContainer.appendChild(card);
}
