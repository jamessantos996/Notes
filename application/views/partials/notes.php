<?php
    foreach($notes as $note){
?>  
    <div class="wrapper">
        <div class="notes">
            <h4><?=$note['title']?></h4>
            <form class="delete_form" action="notes/delete" method="post">
                <input type="hidden" name="id" value=<?=$note['id']?>>
                <input class="delete" type="submit" value="Delete">
            </form>
        </div>
        <form class="edit" action="notes/edit" method="post">
            <input type="hidden" name="id" value=<?=$note['id']?>>
            <textarea class="edit_description" name="description" cols="30" rows="10"><?=$note['description']?></textarea>
            <input class="update_submit" type="hidden" value="Update">
        </form>
    </div>
<?php
    }
?>