        <div class="footer"></div>
    </div><!-- close class="wrapper" -->
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

        // Input leeren
        $(this).closest( ".startoranoUserComponentTypeSearchListElement" ).find("input").val('');
        // Icon ändern
        $(this).attr("src", "/searchIcon.svg");
        // Class="filled" entfernen
        $(this).closest( ".startoranoUserComponentTypeSearch" ).removeClass( "filled" );
      } else {
        // wenn NEIN

        // Input fokusieren
        $(this).closest( ".startoranoUserComponentTypeSearchListElement" ).find("input").focus();
      }
    });

    // Bei einer Eingabe in das Input feld
    $( ".startoranoUserComponentTypeSearch input" ).keypress(function() {
      // Class="filled" hinzufügen
      $(this).closest( ".startoranoUserComponentTypeSearch" ).addClass( "filled" );
      // Icon ändern
      $(this).closest( ".startoranoUserComponentTypeSearchListElement" ).find( "img" ).attr("src", "/closeIcon.svg");
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
        $(this).closest( ".startoranoUserComponentTypeDropDown" ).find( "img" ).attr("src", "/arrowDownIcon.svg");
        // Class="opend" entfernen
        $(this).closest( ".startoranoUserComponentTypeDropDown" ).removeClass( "opend" );
        // untere Elemente ausblenden
        $(this).closest( ".startoranoUserComponentTypeDropDown" ).find( ".startoranoUserComponentTypeDropDownListElementLoaded" ).hide();
        // dem ersten Element Class="closed" hinzufügen
        $(this).addClass( "closed" );
      } else {
        // wenn NEIN

        // Icon ändern
        $(this).find( "img" ).attr("src", "/arrowUpIcon.svg");
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
      $(this).closest( ".startoranoUserComponentTypeDropDown" ).find( "img" ).attr("src", "/arrowDownIcon.svg");
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
        $(this).find( "img" ).attr("src", "/bookmarkOff.svg");
        $(this).removeClass( "bookmarkChecked" );
      } else {
        $(this).find( "img" ).attr("src", "/bookmarkOn.svg");
        $(this).addClass( "bookmarkChecked" );
      }
    });
    
    // Job Element end #################################################################

    
  </script>   
</body>
</html>