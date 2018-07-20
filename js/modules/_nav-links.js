// Nav lnks module

const navLinks = () => {
  console.log('nav links');
  const navLinks = document.querySelectorAll('.js-nav a, .js-top');

  // Cycle through all navigation links and attach event listener for each
  navLinks.forEach((navLink) => {
    navLink.addEventListener('click', (event) => {
      // Block default link behavior
      event.preventDefault();

      // Smoothly scroll to the section related to clicked link
      $('html, body').animate({
        scrollTop: $($.attr(navLink, 'href')).offset().top
      }, 550);
    });
  });
};

export { navLinks };
