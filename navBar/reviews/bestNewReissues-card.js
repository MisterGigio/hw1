const REVIEWS_ARTICLES = [
  {
    img: "../reviews/reviews_img/reviews-sacrificial.webp",
    category: "EXPERIMENTAL",
    title: "The Sacrifical Code",
    subtitle: "Kali Malone",
    author: "By Philip Sherburne",
    date: "April 12, 2025",
  },
  {
    img: "../reviews/reviews_img/flora.webp",
    category: "ELECTRONIC",
    title: "Flora",
    subtitle: "Hiroshi Yoshimura",
    author: "By Daniel Bromfield",
    date: "March 22, 2025",
  },
  {
    img: "../reviews/reviews_img/lucas.webp",
    category: "FOLK / COUNTRY / ROCK",
    title: "Ted Lucas (Extended)",
    subtitle: "Ted Lucas",
    author: "By Grayson Haver Currin",
    date: "March 8, 2025",
  },
  {
    img: "../reviews/reviews_img/ghost.webp",
    category: "ROCK",
    title: "A Ghost Is Born (Deluxe Edition)",
    subtitle: "Wilco",
    author: "By Steven Arroyo",
    date: "February 8, 2025",
  },
  {
    img: "../reviews/reviews_img/westCoast.webp",
    category: "ELECTRONIC / POP/R&B",
    title: "West Coast",
    subtitle: "Studio",
    author: "By Matthew Schnipper",
    date: "January 25, 2025",
  },
  {
    img: "../reviews/reviews_img/musik.webp",
    category: "ELECTRONIC",
    title: "Musik (2024 Remastered)",
    subtitle: "Plastikman",
    author: "By Philip Sherburne",
    date: "January 4, 2025",
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
    img: "../reviews/reviews_img/flora.webp",
    category: "ELECTRONIC",
    title: "Flora",
    subtitle: "Hiroshi Yoshimura",
    author: "By Daniel Bromfield",
    date: "March 22, 2025",
  },
  {
    img: "../reviews/reviews_img/lucas.webp",
    category: "FOLK / COUNTRY / ROCK",
    title: "Ted Lucas (Extended)",
    subtitle: "Ted Lucas",
    author: "By Grayson Haver Currin",
    date: "March 8, 2025",
  },
  {
    img: "../reviews/reviews_img/ghost.webp",
    category: "ROCK",
    title: "A Ghost Is Born (Deluxe Edition)",
    subtitle: "Wilco",
    author: "By Steven Arroyo",
    date: "February 8, 2025",
  },
  {
    img: "../reviews/reviews_img/westCoast.webp",
    category: "ELECTRONIC / POP/R&B",
    title: "West Coast",
    subtitle: "Studio",
    author: "By Matthew Schnipper",
    date: "January 25, 2025",
  },
  {
    img: "../reviews/reviews_img/musik.webp",
    category: "ELECTRONIC",
    title: "Musik (2024 Remastered)",
    subtitle: "Plastikman",
    author: "By Philip Sherburne",
    date: "January 4, 2025",
  },
];

const imgContainer = document.querySelector(".img-full-container");

for (const article of REVIEWS_ARTICLES) {
  const card = createNavBarCard(article);
  imgContainer.appendChild(card);
}
