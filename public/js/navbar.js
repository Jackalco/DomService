function showNavBar() {
    var x = document.getElementById("navBar");
    console.log(x)
    if (x.className === "navButtonContainer") {
      x.className = "responsive";
      console.log(x.className + " marche")
    } else {
      x.className = "navButtonContainer";
      console.log(x.className + " marche pas")
    }
  }