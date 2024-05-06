document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault();
    const formData = new FormData(this);
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "contact.php");
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onload = function() {
      const response = JSON.parse(xhr.responseText);
      document.getElementById("response").innerText = response.message;
      document.getElementById("contact-form").reset();
    };
    xhr.send(JSON.stringify(Object.fromEntries(formData.entries())));
  });