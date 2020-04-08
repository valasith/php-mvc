<?php require_once "views/header.php"; ?>

<form name="frmAdd" method="post" action="" id="frmAdd" onSubmit="return validate();">
    <div>
        <label>First Name</label> 
        <span id="firstname-info" class="info"></span>
        <br/> 
        <input type="text" name="firstname" id="firstname" class="form-control demoInputBox">
    </div>
    <div>
        <label>Last Name</label> 
        <span id="lastname-info" class="info"></span>
        <br/> 
        <input type="text" name="lastname" id="lastname" class="form-control demoInputBox">
    </div>
    <br/> 
    <div>
        <input type="submit" class="btn btn-primary" name="add" id="btnSubmit" value="Save" />
    </div>
</form>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function validate() {
    var valid = true;   
    $(".demoInputBox").css('background-color','');
    $(".info").html('');
    
    if(!$("#firstname").val()) {
        $("#firstname-info").html("(required)");
        $("#firstname").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#lastname").val()) {
        $("#lastname-info").html("(required)");
        $("#lastname").css('background-color','#FFFFDF');
        valid = false;
    }
    return valid;
}
</script>
</body>
</html>