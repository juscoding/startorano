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