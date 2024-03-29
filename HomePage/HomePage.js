
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
function resizeIframe() {
  const iframe = document.getElementById('myFrame');
  if (iframe.contentDocument) {
      iframe.style.height = iframe.contentDocument.documentElement.scrollHeight + 'px';
  }
}

// Call the resize function when the iframe content is loaded
document.getElementById('myFrame').addEventListener('load', resizeIframe);

// Optionally, call the resize function when the window is resized
window.addEventListener('resize', resizeIframe);