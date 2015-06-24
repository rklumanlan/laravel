function edit_mouseOver(id) {
    $('.'+id).show();
    $('.pointer').css("cursor", "pointer");
    $('.pointer').css("cursor", "hand");
    $('.pointer').mouseover(function() {
      $(this).css("background-color","skyblue");
      $(this).css("padding","5px");
    });


}


function edit_mouseOut(id){
    $('.'+id).hide();
    $('.pointer').mouseleave(function(){
        $('.pointer').css("background-color", "transparent");
        $(this).css("padding","0px");
    });


}


function open_container(id)
{
    if(id.match(/add_/)){
        var id3 = id;
        id3=id3.replace('add_',"");
        $('#'+id3+'_addform').show();
    }

    switch(id) {
        case 'lang':
            $('#'+id+'_opt').show();
            $('#edit_'+id).hide();
            break;
        case 'os':
            $('#'+id+'_opt').show();
            $('#edit_'+id).hide();
            break;
        case 'fwork':
            $('#'+id+'_opt').show();
            $('#edit_'+id).hide();
            break;

        case 'pinfo':
            $('#'+id+'_edit').show();
            $('#'+id+'_view').hide();
            break;
        default:
            $('#'+id+'_editform').show();
            $('#'+id+'_view').hide();
    }




}

function cancel(id)
{

    if(id.match(/cancel_add_/)){
        var id3 = id;
        id3=id3.replace('cancel_add_',"");
        $('#'+id3+'_addform').hide();
        $('#addform').hide();

    }


    var id2 = id;
    id2=id2.replace('cancel_',"");
    switch(id2) {
        case 'lang':

            $('#'+id2+'_opt').hide();
            $('#edit_'+id2).show();
            break;
        case 'os':

            $('#'+id2+'_opt').hide();
            $('#edit_'+id2).show();
            break;
        case 'fwork':

            $('#'+id2+'_opt').hide();
            $('#edit_'+id2).show();
            break;
        default:
            $('#'+id2+'_edit').hide();
            $('#editform').hide();
            $('#'+id2+'_view').show();
            history.pushState('', "Profile", "/user_profile");
    }


}
//hide edit button
$('.edit_educ').hide();


//scrolldown
if($('#editform').is(":visible")){
    $('#editform').css('outline',0).attr('tabindex',-1).focus();
}

if($('#addform').is(":visible")){
    $('#addform').css('outline',0).attr('tabindex',-1).focus();
}

if($('#result_view').is(":visible")){
    $("#search_view").toggle();
    $("#refine_view").toggle();
}
if($('#pinfo_edit').is(":visible")){
    $("#pinfo_view").toggle();
}

function refine(){
    $("#search_view").toggle();
    $("#refine_view").toggle();
    $("#result_view").toggle();
}
