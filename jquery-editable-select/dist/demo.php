<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="jquery-editable-select.js"></script>
<link rel="stylesheet" href="jquery-editable-select.css" >
<div>
    <form action="" method="post">
        <select name="select" id="select">
            <option value="test">Alfa Romeo - &lt;small&gt;&lt;a href="http://www.alfaromeo.com/"&gt;www.alfaromeo.com&lt;/a&gt;&lt;/small&gt;</option>
            <option value="test2">2تست</option>
        </select>
        <input type="submit" />
    </form>
</div>

<script>
$('#select')
    .editableSelect()
    .on('select.editable-select', function (e, li) {
        $('#last-selected').html(
            li.val() + '. ' + li.text()
        );
    });
</script>

<?php
    var_dump($_POST);
?>