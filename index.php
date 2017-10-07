<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">

    <title>Благотворительный фонд</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

</head>

<body>
<script src="https://vk.com/js/api/xd_connection.js?2"  type="text/javascript"></script>

<script type="text/javascript">
    VK.init(function() {
        VK.callMethod("showSettingsBox", 8214);

        VK.api("wall.post", {"message": "Hello!"}, function (data) {
            alert("Post ID:" + data.response.post_id);
        });
    }, function() {
        // API initialization failed
        // Can reload page here
    }, '5.68');
</script>



<!--<link rel="stylesheet" href="css/inner.min.css">-->
<!--<script src="js/scripts.min.js"></script>-->
<!--<script src="js/common-inner.js"></script>-->

</body>
</html>
