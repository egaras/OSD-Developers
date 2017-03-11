<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="#" method="post" id="sectionform">
    <input id="action" type="hidden" name="action" value="addSection">
    <p>
        Thread Id<input name="threadid" type="text" id="sectionid">
    </p>
    <p>
        Reply Id<input name="replyid" type="text" id="sectionid">
    </p>
    <p>
        content<input name="replycontent" type="text" id="sectionname">
    </p>
    <button id="insert">Insert</button>
    <button id="update">Update</button>
    <button id="delete">Delete</button>
</form>
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script>
    $('#insert').on('click',function () {
        $('#action').val('addReply');
        submitAjax();
    });
    $('#update').on('click',function () {
        $('#action').val('updateReply');
        submitAjax();
    });
    $('#delete').on('click',function () {
        $('#action').val('deleteReply');
        submitAjax();
    });
    function submitAjax(){
        $.ajax({
            type: 'POST',
            cache: false,
            url: '../controllers/osdapi.php',
            data:$('#sectionform').serialize(),
            success: function(data){
                console.log(data);
            }
        });
    }
    $("#sectionform").submit(function(e){
        e.preventDefault();
    });
    function insertSection(){
        $('#action').val('addSection');
        $.ajax({
            type: 'POST',
            cache: false,
            url: '../controllers/login.php',
            data:$('#sectionform').serialize(),
            success: function(data){
                var res = JSON.parse(data);
                console.log(res);
            }
        });
    }
</script>
</body>
</html>