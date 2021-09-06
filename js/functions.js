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





// function academicYear() {
//   var firstyear, secondyear, e;
//   firstyear = document.getElementById("year-select");
//   secondyear = document.getElementById("year-end");
//   e = firstyear.selectedIndex;

//   if(e == 0) {
//     secondyear.value = "";
//   } else if(e == 1) {
//     secondyear.value = parseInt(firstyear.options[e].text) + 1;
//   } else if(e == 2) {
//     secondyear.value = parseInt(firstyear.options[e].text) + 1;
//   }

// }


