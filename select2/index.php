<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="select2.full.js"></script>
<!--<script type="text/javascript" src="bootstrap.min.js"></script>-->
<!--<script type="text/javascript" src="prettify.min.js"></script>-->
<!--<script type="text/javascript" src="anchor.min.js"></script>-->

<!--<link href="bootstrap.css" type="text/css" rel="stylesheet" />-->
<link href="select2.min.css" type="text/css" rel="stylesheet" />

<!--<link href="font-awesome.css" type="text/css" rel="stylesheet" />-->
<!--<link href="s2-docs.css" type="text/css" rel="stylesheet" >-->

<script type="text/javascript">
$(document).ready(function() {
  $(".js-example-basic-single").select2();
});
</script>

<form method="post" action="#">
    <select name="Test2" class="js-example-basic-single">
      <option value="AL">Alabama</option>
      <option value="WY">Wyoming</option>
    </select>
    <input type="submit">
</form>
<div>
    <?php var_dump($_POST); ?>
</div>