    <!-- Menüband START -->

  <div class="startoranoUserComponentTypeMenu">
    <div>
      <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/><path d="M0 0h24v24H0z" fill="none"/></svg>      </a>
    </div>
    <div>
      <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/><path d="M0 0h24v24H0z" fill="none"/></svg>      </a>
    </div>
    <div>
      <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>      </a>
    </div>
    <div>
      <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 9h12v2H6V9zm8 5H6v-2h8v2zm4-6H6V6h12v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>      </a>
    </div>
    <div>
      <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>      </a>
    </div>
  </div>

  <!-- Menüband END -->
    
    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.js"
    integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
    crossorigin="anonymous"></script>
    
    <script>

    // Search start ########################################################################
    // EventListener für einen klick auf das Icon der Suche
    $( ".startoranoUserComponentTypeSearch img" ).click(function() {
      // check ob das Suche-Element die Class="filled" hat
      if ($(this).closest( ".startoranoUserComponentTypeSearch" ).hasClass( "filled" )) {
        // wenn JA
        $(this).closest( ".startoranoUserComponentTypeSearch" ).find( ".startoranoUserComponentTypeSearchListElement" ).hide();
        // Input leeren
        $(this).closest( ".startoranoUserComponentTypeSearchListElementMain" ).find("input").val('');
        // Icon ändern
        $(this).attr("src", "<?php echo Config::get('URL'); ?>images/svg/searchIcon.svg");
        // Class="filled" entfernen
        $(this).closest( ".startoranoUserComponentTypeSearch" ).removeClass( "filled" );
      } else {
        // wenn NEIN
        // Input fokusieren
        $(this).closest( ".startoranoUserComponentTypeSearchListElementMain" ).find("input").focus();
      }
    });
// Bei einer Eingabe in das Input feld
    $( ".startoranoUserComponentTypeSearchListElementMain input" ).keypress(function() {
      // Class="filled" hinzufügen
      $(this).closest( ".startoranoUserComponentTypeSearch" ).addClass( "filled" );
      // Icon ändern
      $(this).closest( ".startoranoUserComponentTypeSearchListElementMain" ).find( "img" ).attr("src", "<?php echo Config::get('URL'); ?>images/svg/closeIcon.svg");
    });
    $(".startoranoUserComponentTypeSearchListElementMain input").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $(this).closest( ".startoranoUserComponentTypeSearch" ).find( ".startoranoUserComponentTypeSearchListElement" ).filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
      if ($(this).val() == "") {
        // Class="filled" entfernen
        $(this).closest( ".startoranoUserComponentTypeSearch" ).removeClass( "filled" );
        $(this).closest( ".startoranoUserComponentTypeSearch" ).find( ".startoranoUserComponentTypeSearchListElementMain img" ).attr("src", "<?php echo Config::get('URL'); ?>images/svg/searchIcon.svg");
        console.log("leer");
        $(this).closest( ".startoranoUserComponentTypeSearch" ).find( ".startoranoUserComponentTypeSearchListElement" ).hide();
      }
    });
    // klick auf eines der unteren DropDown-Elmenete
    $( ".startoranoUserComponentTypeSearchListElement" ).click(function() {
      // Class="selectedgrayedout" bei jedem Element mit der Class="startoranoUserComponentTypeDropDownListElementLoaded" entfernen
      $(this).closest( ".startoranoUserComponentTypeSearch" ).find( ".startoranoUserComponentTypeSearchListElement" ).children( "p" ).removeClass( "selectedgrayedout" );
      // Class="selected" bei jedem Element mit der Class="startoranoUserComponentTypeDropDownListElementLoaded" entfernen
      $(this).closest( ".startoranoUserComponentTypeSearch" ).find( ".startoranoUserComponentTypeSearchListElement" ).children( "p" ).removeClass( "selected" );
      // beim obersten DropDown-Element wird der Text des angeklickten Elements eingefügt
      $(this).closest( ".startoranoUserComponentTypeSearch" ).find( ".startoranoUserComponentTypeSearchListElementMain" ).children( "input" ).val($(this).children( "p" ).html());
      // dem obersten Element wird die Class="selected" hinzugefügt
      $(this).children( "p" ).addClass( "selected" );
      // dem angeklickten Element wird die Class="selectedgrayedout" hinzugefügt
      $(this).children( "p" ).addClass( "selectedgrayedout" );
      $(this).closest( ".startoranoUserComponentTypeSearch" ).find( ".startoranoUserComponentTypeSearchListElement" ).hide();
      
      // Class="filled" entfernen
      $(this).closest( ".startoranoUserComponentTypeSearch" ).removeClass( "filled" );
      $(this).closest( ".startoranoUserComponentTypeSearch" ).find( ".startoranoUserComponentTypeSearchListElementMain img" ).attr("src", "<?php echo Config::get('URL'); ?>images/svg/searchIcon.svg");
    });
    // Search end ########################################################################



    // DropDown start ####################################################################

    $( document ).ready(function() {
      console.log( "jQuery loaded!" );
      $( ".startoranoUserComponentTypeDropDownListElementLoaded" ).hide();
    });

    // klick auf das oberste Element (das erste Element das immer zu sehen ist)
    $( ".startoranoUserComponentTypeDropDownListElementFirst" ).click(function() {

      // check ob das DropDown-Element die Class="opend" hat
      if ($(this).closest( ".startoranoUserComponentTypeDropDown" ).hasClass( "opend" )) {
        // wenn JA

        // Icon ändern
        $(this).closest( ".startoranoUserComponentTypeDropDown" ).find( "img" ).attr("src", "<?php echo Config::get('URL'); ?>images/svg/arrowDownIcon.svg");
        // Class="opend" entfernen
        $(this).closest( ".startoranoUserComponentTypeDropDown" ).removeClass( "opend" );
        // untere Elemente ausblenden
        $(this).closest( ".startoranoUserComponentTypeDropDown" ).find( ".startoranoUserComponentTypeDropDownListElementLoaded" ).hide();
        // dem ersten Element Class="closed" hinzufügen
        $(this).addClass( "closed" );
      } else {
        // wenn NEIN

        // Icon ändern
        $(this).find( "img" ).attr("src", "<?php echo Config::get('URL'); ?>images/svg/arrowUpIcon.svg");
        // Class="opend" hinzufügen
        $(this).closest( ".startoranoUserComponentTypeDropDown" ).addClass( "opend" );
        // untere Elemente einblenden
        $(this).closest( ".startoranoUserComponentTypeDropDown" ).find( ".startoranoUserComponentTypeDropDownListElementLoaded" ).show();
        // Class="closed" entfernen
        $(this).removeClass( "closed" );
      }
    });

    // klick auf eines der unteren DropDown-Elmenete
    $( ".startoranoUserComponentTypeDropDownListElementLoaded" ).click(function() {
      // Class="selectedgrayedout" bei jedem Element mit der Class="startoranoUserComponentTypeDropDownListElementLoaded" entfernen
      $(this).children( "p" ).removeClass( "selectedgrayedout" );
      // beim obersten DropDown-Element wird der Text des angeklickten Elements eingefügt
      $(this).closest( ".startoranoUserComponentTypeDropDown" ).find( ".startoranoUserComponentTypeDropDownListElementFirst" ).children( "p" ).html($(this).children( "p" ).html());
      // dem obersten Element wird die Class="selected" hinzugefügt
      $(this).closest( ".startoranoUserComponentTypeDropDown" ).find( ".startoranoUserComponentTypeDropDownListElementFirst" ).children( "p" ).addClass( "selected" );
      // dem angeklickten Element wird die Class="selectedgrayedout" hinzugefügt
      $(this).children( "p" ).addClass( "selectedgrayedout" );
      // Icon ändern
      $(this).closest( ".startoranoUserComponentTypeDropDown" ).find( "img" ).attr("src", "<?php echo Config::get('URL'); ?>images/svg/arrowDownIcon.svg");
      // Class="opend" entfernen
      $(this).closest( ".startoranoUserComponentTypeDropDown" ).removeClass( "opend" );
      // untere Elemente ausblenden
      $(this).closest( ".startoranoUserComponentTypeDropDown" ).find( ".startoranoUserComponentTypeDropDownListElementLoaded" ).hide();
      // Class="closed" hinzufügen
      $(this).closest( ".startoranoUserComponentTypeDropDown" ).find( ".startoranoUserComponentTypeDropDownListElementFirst" ).addClass( "closed" );
    });

    // DropDown end ####################################################################
    
    
    // Job Element start ###############################################################
    
    $( ".startoranoUserComponentTypeJobElementRow1Bookmark" ).click(function() {

      if ($(this).hasClass( "bookmarkChecked" )) {
        $(this).find( "img" ).attr("src", "<?php echo Config::get('URL'); ?>images/svg/bookmarkOff.svg");
        $(this).removeClass( "bookmarkChecked" );
      } else {
        $(this).find( "img" ).attr("src", "<?php echo Config::get('URL'); ?>images/svg/bookmarkOn.svg");
        $(this).addClass( "bookmarkChecked" );
      }
    });
    
    // Job Element end #################################################################

    
  </script>   
</body>
</html>