jQuery.noConflict();
jQuery( document ).ready(function($) {


    $( ".sortable" ).sortable({
      revert: true
    });
    $( ".draggable" ).draggable({
      connectToSortable: ".sortable",
      revert: "invalid"
    });
    $( "ul, li" ).disableSelection();

});
