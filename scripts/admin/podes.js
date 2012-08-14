$(document).ready(function(){
    /* Show and hide the three major sections of the statistics page */
    /* The location filters */
    $('#hidelfilter').click( function(){
        $('#podeslocationfilters').hide(1000);
    });
    $('#showlfilter').click( function(){
        $('#podeslocationfilters').show(1000);
    });
    /* The actual podes results */
    $('#hiderfilter').click( function(){
        $('#podesoutput').hide(1000);
    });
    $('#showrfilter').click( function(){
        $('#podesoutput').show(1000);
    });
    /* Select all checkbox */
    $('.checkall').click(function () {
        $(this).parents('fieldset:eq(0)').find(':checkbox').attr('checked', this.checked);
    });
    
});
    
