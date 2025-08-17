
const contactForm = document.getElementById("contactForm");

if (contactForm) {
  contactForm.addEventListener("submit", function (e) {
    e.preventDefault();

    const button = e.target.querySelector(".send-button");
    const statusMessage = document.getElementById("statusMessage");
    const originalText = button.textContent;

    button.textContent = "Sending...";
    button.disabled = true;

   
    emailjs
      .sendForm("service_w5sjox2", "template_q3x1e7h", this)
      .then(
        () => {
          statusMessage.textContent = "✅ Message sent successfully!";
          statusMessage.className = "success show";
          button.textContent = originalText;
          button.disabled = false;
          contactForm.reset();
        },
        (error) => {
          statusMessage.textContent = "❌ Failed to send: " + error.text;
          statusMessage.className = "error show";
          button.textContent = originalText;
          button.disabled = false;
        }
      );
  });
}
