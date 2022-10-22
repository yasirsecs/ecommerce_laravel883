function myFunction() {
    document.getElementById("demo").innerHTML = "Hello World";
  }

  document.getElementById("myBtn").addEventListener("click", displayDate);
  
  function displayDate() {
    document.getElementById("demo").innerHTML = Date();
  }