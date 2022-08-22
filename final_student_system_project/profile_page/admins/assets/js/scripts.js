function openTabs(evt,  name) {
      var tabcontent, tablinks;

      tabcontent = document.getElementsByClassName("tabcontent");

      for (var i = 0; i < tabcontent.length; i++)
          tabcontent[i].style.display = "none";

      tablinks = document.getElementsByClassName("tablinks");
      
      for (var i = 0; i < tablinks.length; i++)
          tablinks[i].className = tablinks[i].className.replace("tab-border", "");
      


      document.getElementById( name).style.display = "block";
      evt.currentTarget.className += " tab-border";
}
