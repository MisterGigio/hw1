const REVIEWS_ARTICLES = [
  {
    img: "../reviews/reviews_img/henry.webp",
    category: "POP/R&B",
    title: "Henry, come on",
    subtitle: "Lana Del Rey",
    author: "By Walden Green",
    date: "April 11, 2025",
  },
  {
    img: "../reviews/reviews_img/enough.webp",
    category: "ROCK",
    title: "Never Enough",
    subtitle: "Turnstile",
    author: "By Nina Corcoran",
    date: "April 8, 2025",
  },
  {
    img: "../reviews/reviews_img/julia.webp",
    category: "ROCK",
    title: "Julia's War",
    subtitle: "Hotline TNT",
    author: "By Walden Green",
    date: "April 8, 2025",
  },
  {
    img: "../reviews/reviews_img/fists.webp",
    category: "ROCK",
    title: "catch these fists",
    subtitle: "Wet Leg",
    author: "By Nina Corcoran",
    date: "April 1, 2025",
  },
  {
    img: "../reviews/reviews_img/unlimited.webp",
    category: "RAP",
    title: "Unlimited [ft. Playboi Carti]",
    subtitle: "NAV",
    author: "By Mano Sundaresan",
    date: "March 28, 2025",
  },
  {
    img: "../reviews/reviews_img/giver.webp",
    category: "POP/R&B",
    title: "The Giver",
    subtitle: "Chappell Roan",
    author: "By Walden Green",
    date: "March 14, 2025",
  },
  {
    img: "../reviews/reviews_img/henry.webp",
    category: "POP/R&B",
    title: "Henry, come on",
    subtitle: "Lana Del Rey",
    author: "By Walden Green",
    date: "April 11, 2025",
  },
  {
    img: "../reviews/reviews_img/enough.webp",
    category: "ROCK",
    title: "Never Enough",
    subtitle: "Turnstile",
    author: "By Nina Corcoran",
    date: "April 8, 2025",
  },
  {
    img: "../reviews/reviews_img/julia.webp",
    category: "ROCK",
    title: "Julia's War",
    subtitle: "Hotline TNT",
    author: "By Walden Green",
    date: "April 8, 2025",
  },
  {
    img: "../reviews/reviews_img/fists.webp",
    category: "ROCK",
    title: "catch these fists",
    subtitle: "Wet Leg",
    author: "By Nina Corcoran",
    date: "April 1, 2025",
  },
  {
    img: "../reviews/reviews_img/unlimited.webp",
    category: "RAP",
    title: "Unlimited [ft. Playboi Carti]",
    subtitle: "NAV",
    author: "By Mano Sundaresan",
    date: "March 28, 2025",
  },
  {
    img: "../reviews/reviews_img/giver.webp",
    category: "POP/R&B",
    title: "The Giver",
    subtitle: "Chappell Roan",
    author: "By Walden Green",
    date: "March 14, 2025",
  },
];

const imgContainer = document.querySelector(".img-full-container");

for (const article of REVIEWS_ARTICLES) {
  const card = createNavBarCard(article);
  imgContainer.appendChild(card);
}
