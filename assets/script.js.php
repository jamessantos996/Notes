$(document).ready(function(){
    $.get('Notes/index_html', function(res){
        $('#note').html(res);
        clickEvent();
        deleteSubmit();
        
    });

    $('#add').submit(function(){
        $.post($(this).attr('action'), $(this).serialize(), function(res) {
            $('#note').html(res);
            clickEvent();
            formSubmit();
            deleteSubmit();
        });
        return false;
    });
});


function clickEvent(){
    $('.edit_description').click(function(){
        $(this).siblings('.update_submit').attr('type','submit');
    });
}

function formSubmit(){
    $('.edit').submit(function(){
        
        $.post($(this).attr('action'), $(this).serialize(), function(res) {
            
            $('#note').html(res); 
            clickEvent();
            formSubmit();
            deleteSubmit();
        });
        return false;
    });
}

function deleteSubmit(){
    $('.delete_form').submit(function(){
        $.post('notes/delete', $(this).serialize(), function(res) {
            $('#note').html(res);
            deleteSubmit();
            clickEvent();
            formSubmit();
        });
        return false;
    });
}

function hello(){
    console.log('hello')
}