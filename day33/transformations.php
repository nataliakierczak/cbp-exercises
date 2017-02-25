<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSS transformations</title>
</head>
<style>
#wrapper {
    position:relative;
}
#box{
    border: 1px solid green;
    padding:1em;
    width:200px;
    background-color:yellow;
    color:grey;
}

#box {
    position: absolute;
    top:50%;
    left:50%;
    transform: translateY(-50%) translateX(-50%) rotate (139deg);
}

</style>
<body>
<div id="wrapper">
<div id="box">
This is the box.
</div>
bla <br>bla<br>
</div>


<script>
document.getElementById('start')
</script>
</body>
</html>