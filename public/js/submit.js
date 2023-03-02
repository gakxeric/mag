
$("#form").submit
(function() { alert("hi");
    var url = "ajax.php";
    $.ajax({
           type: "POST",
           url: url,
           data:
$("#form").serialize(),
           success:
function(data) {
               alert(data);
           }
