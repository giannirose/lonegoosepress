// form.js
document.getElementById("contactForm").addEventListener("submit", function (e) {
  e.preventDefault(); // prevent default form submission

  const form = e.target;
  const honeypot = form.honeypot.value;

  // Honeypot check
  if (honeypot) {
    alert("Spam detected. Submission blocked.");
    return;
  }

  // Collect form data
  const formData = new FormData(form);

  // Example: log values (replace with AJAX/fetch to server)
  console.log("Form submitted:");
  for (let [key, value] of formData.entries()) {
    console.log(`${key}:`, value);
  }

  // Simulate success
  alert("Thank you! Your message has been submitted.");
  form.reset();
});
