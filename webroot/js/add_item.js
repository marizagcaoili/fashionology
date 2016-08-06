 $(function () {
    $("#example1").DataTable();

    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

    $( 'ul.nav.nav-tabs  a' ).click( function ( e ) {
      e.preventDefault();
      $( this ).tab( 'show' );
    } );


    $( '.js-alert-test' ).click( function () {
      alert( 'Button Clicked: Event was maintained' );
    } );
    fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );


  $('#summernote').summernote();


  $('#summernote').summernote({
    height: 1300,   
    width: 150,   // set editor height
    minHeight: 500,             // set minimum height of editor
    maxHeight: 300,             // set maximum height of editor
    focus: false,
    placeholder: 'Item Description',                // set focus to editable area after initializing summernote
  });


  $('#summernote2').summernote();


  $('#summernote2').summernote({
    height: 300,   
    width: 150,   
    minHeight: null,             // set minimum height of editor
    maxHeight: 300,             // set maximum height of editor
    focus: false,
    placeholder: 'Item Description',                // set focus to editable area after initializing summernote
  });

  $('#summernote3').summernote();


  $('#summernote3').summernote({
    height: 300,   
    width: 150,   // set editor height
    minHeight: null,             // set minimum height of editor
    maxHeight: 300,             // set maximum height of editor
    focus: false,
    placeholder: 'Item Description',                // set focus to editable area after initializing summernote
  });

});