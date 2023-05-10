// Select the welcome button
const adoptButton = document.querySelector('button');

// Add a click event listener to the button
adoptButton.addEventListener('click', () => {
  // Show a confirmation message when the button is clicked
  const confirmation = confirm("Are you sure you want to adopt a pet?");
  if (confirmation) {
    alert("Thank you for adopting a pet!");
  }
});

// Select all the featured pet images
const petImages = document.querySelectorAll('#featured-pets img');

// Add a click event listener to each image
petImages.forEach(image => {
  image.addEventListener('click', () => {
    // Show a larger version of the image when clicked
    const largeImage = document.createElement('img');
    largeImage.src = image.src;
    largeImage.style.width = '500px';
    largeImage.style.height = 'auto';
    const overlay = document.createElement('div');
    overlay.style.position = 'fixed';
    overlay.style.top = '0';
    overlay.style.left = '0';
    overlay.style.width = '100%';
    overlay.style.height = '100%';
    overlay.style.backgroundColor = 'rgba(0,0,0,0.7)';
    overlay.style.display = 'flex';
    overlay.style.justifyContent = 'center';
    overlay.style.alignItems = 'center';
    overlay.appendChild(largeImage);
    document.body.appendChild(overlay);

    // Add a click event listener to the overlay
    overlay.addEventListener('click', () => {
      // Remove the overlay when clicked
      document.body.removeChild(overlay);
    });
  });
});
