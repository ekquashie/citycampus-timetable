// Hall and Courses Modal Box
var modal = document.getElementById("modalBG");
var link = document.querySelector("#add-link");

if(link) {
    link.addEventListener('click', openModal);

    function openModal() {
    modal.style.display = "block";
    }

    function closeModal() {
    modal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = 'none';
        }
    }
}

// Settings Page
function openContent(evt, content) {
  var i, tabcontent, tablinks;

  tabcontent = document.getElementsByClassName("tabcontent");

  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  tablinks = document.getElementsByClassName("tablinks");

  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  document.getElementById(content).style.display = "block";
  evt.currentTarget.className += " active";
}


