  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
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
      if ($(this).val() == "") {
        // Class="filled" entfernen
        $(this).closest( ".startoranoUserComponentTypeSearch" ).removeClass( "filled" );
        $(this).closest( ".startoranoUserComponentTypeSearch" ).find( ".startoranoUserComponentTypeSearchListElementMain img" ).attr("src", "<?php echo Config::get('URL'); ?>images/svg/searchIcon.svg");
        console.log("leer");
        $(this).closest( ".startoranoUserComponentTypeSearch" ).find( ".startoranoUserComponentTypeSearchListElement" ).hide();
      }
      var inputVal = $(this).val();
        var resultDropdown = $(this).closest( ".startoranoUserComponentTypeSearch" ).find( ".startoranoUserComponentTypeSearchListElementWrapper" );
        if(inputVal.length){
            $.get("<?php echo Config::get('URL'); ?>" +$(this).attr('controller') + "/" + $(this).attr('name') + "", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
                console.log("suche");
            });
        } else{
            resultDropdown.empty();
        }

    });

    $(document).on("click", ".startoranoUserComponentTypeSearchListElementWrapper .startoranoUserComponentTypeSearchListElement", function(){
      // Class="selectedgrayedout" bei jedem Element mit der Class="startoranoUserComponentTypeDropDownListElementLoaded" entfernen
      $(this).find( ".startoranoUserComponentTypeSearchListElement" ).children( "p" ).removeClass( "selectedgrayedout" );
      // Class="selected" bei jedem Element mit der Class="startoranoUserComponentTypeDropDownListElementLoaded" entfernen
      $(this).closest( ".startoranoUserComponentTypeSearch" ).find( ".startoranoUserComponentTypeSearchListElement" ).children( "p" ).removeClass( "selected" );
      // beim obersten DropDown-Element wird der Text des angeklickten Elements eingefügt
      $(this).closest( ".startoranoUserComponentTypeSearch" ).find( ".startoranoUserComponentTypeSearchListElementMain" ).children( "input" ).val($(this).children( "p" ).html());

      $(this).closest( ".startoranoUserComponentTypeSearch" ).find( ".startoranoUserComponentTypeSearchListElementMain" ).children( "input[type=hidden]" ).val($(this).children( "p" ).attr("key"));

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
      $( ".startoranoComponentHeaderProfileInfoTextCompanyExperienceRow2Progressbar2" ).css("width", "<?= (isset($this->userInfo[0]->Erfahrung) ? $this->userInfo[0]->Erfahrung : 0); ?>%");
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

      $(this).closest( ".startoranoUserComponentTypeDropDown" ).find( ".startoranoUserComponentTypeDropDownListElementFirst" ).children( "input[type=hidden]" ).val($(this).children( "p" ).html());

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

    // Chat Element start ##############################################################
    function limitMessages(){
    		$(".limited").each(function(){
            var text = $(this).text();
            $(this).text(text.substr(0, 60) + "..." );
        });
    }

    $(document).ready(function(){
        limitMessages();
    });
    // Chat Element end ################################################################


    // Project Element start ##############################################################
    function biglimitMessages(){
    		$(".biglimited").each(function(){
            var text = $(this).text();
            $(this).text(text.substr(0, 500) + "..." );
        });
    }

    $(document).ready(function(){
        biglimitMessages();
    });

    // Project Element end ################################################################

    // EditProject start   ################################################################

    function deleteProject(){
      $status_value = 3;
      
    }

    function isDoneProject(){
      $status_value = 2;
    }

    // EditProject end    ################################################################

    // Profile Tabs start ####################################################################

    $( ".startoranoComponentHeaderProfileTabsPoints" ).click(function() {
      $(this).closest( ".startoranoComponentHeaderProfileTabs" ).find( ".startoranoComponentHeaderProfileTabsPointsUnderline" ).removeClass( "selectedTabLeft" );
      $(this).closest( ".startoranoComponentHeaderProfileTabs" ).find( ".startoranoComponentHeaderProfileTabsPointsUnderline" ).removeClass( "selectedTabCenter" );
      $(this).closest( ".startoranoComponentHeaderProfileTabs" ).find( ".startoranoComponentHeaderProfileTabsPointsUnderline" ).removeClass( "selectedTabRight" );

      switch ($(this).children().html()) {
        case "Details":
            $(this).closest( ".startoranoComponentHeaderProfileTabs" ).find( ".startoranoComponentHeaderProfileTabsPointsUnderline" ).addClass("selectedTabLeft");
            $( ".startoranoProfileTabWrapperUnderflow" ).css("margin-left", "0");
          break;

        case "Anzeigen":
            $(this).closest( ".startoranoComponentHeaderProfileTabs" ).find( ".startoranoComponentHeaderProfileTabsPointsUnderline" ).addClass("selectedTabCenter");
            $( ".startoranoProfileTabWrapperUnderflow" ).css("margin-left", "-100%");
          break;

        case "Projekte":
            $(this).closest( ".startoranoComponentHeaderProfileTabs" ).find( ".startoranoComponentHeaderProfileTabsPointsUnderline" ).addClass("selectedTabRight");
            $( ".startoranoProfileTabWrapperUnderflow" ).css("margin-left", "-200%");
          break;
      
        default:
          break;
      }
    });

    // Profile Tabs end ####################################################################


    // Profile Menu start ###################################################################

    $( ".startoranoComponentHeaderProfileMenu" ).css("right", "-60%");
    $( ".startoranoComponentHeaderProfileMenuWrapper" ).css("background-color", "rgba(0, 0, 0, 0)");
    $( ".startoranoComponentHeaderProfileMenuWrapper" ).hide();

    $( ".startoranoComponentHeaderProfieLogo img" ).click(function() {
      $( ".startoranoComponentHeaderProfileMenuWrapper" ).show();
      $( ".startoranoComponentHeaderProfileMenu" ).css("right", "0%");
      $( ".startoranoComponentHeaderProfileMenuWrapper" ).css("background-color", "rgba(0, 0, 0, 0.4)");
    });

    $( ".startoranoComponentHeaderProfileMenu img" ).click(function() {
      $( ".startoranoComponentHeaderProfileMenu" ).css("right", "-60%");
      $( ".startoranoComponentHeaderProfileMenuWrapper" ).css("background-color", "rgba(0, 0, 0, 0)");
      setTimeout(() => {
        $( ".startoranoComponentHeaderProfileMenuWrapper" ).hide();
      }, 300);
    });

    $( ".startoranoComponentHeaderProfileMenuCloseTrigger" ).click(function() {
      $( ".startoranoComponentHeaderProfileMenu" ).css("right", "-60%");
      $( ".startoranoComponentHeaderProfileMenuWrapper" ).css("background-color", "rgba(0, 0, 0, 0)");
      setTimeout(() => {
        $( ".startoranoComponentHeaderProfileMenuWrapper" ).hide();
      }, 300);
    });

    // Profile Menu end ####################################################################

  </script>   
</body>
</html>