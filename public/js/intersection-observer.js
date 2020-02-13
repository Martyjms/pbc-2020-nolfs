const faders = document.querySelectorAll('.fade-in');

// const sections = document.querySelectorAll('section');


// const options = {
//     root: null,
//     threshold: 0,
//     rootMargin: "-150px"
// };

// const observer = new IntersectionObserver(function(entries, observer) {
//     entries.forEach(entry => {
//         if (!entry.isIntersecting) {
//             return;
//         }
//         console.log(entry.target);
//         entry.target.classList.toggle("inverse");
//         observer.unobserve(entry.target);
//     });
// }, options);

// sections.forEach(section => {
//     observer.observe(section)
// })

const appearOptions = {
    threshold: 1,
    rootMargin: "0px 0px -100px 0px"
};

const appearOnScroll = new IntersectionObserver (function(entries, appearOnScroll) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;

        } else {
            entry.target.classList.add("appear");
            appearOnScroll.unobserve(entry.target);
        }
});
},
appearOptions);

faders.forEach(fader => {
    appearOnScroll.observe(fader);
});
