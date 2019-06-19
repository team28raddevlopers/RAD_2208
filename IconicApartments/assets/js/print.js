

  function displayDate() {
  document.getElementById("demo").innerHTML = Date();
  }

  function printContent(el){
      var restorepage = document.body.innerHTML;
      var printcontent = document.getElementById(el).innerHTML;
      document.body.innerHTML = printcontent;
      window.print();
      document.body.innerHtml = restorepage;
  }
