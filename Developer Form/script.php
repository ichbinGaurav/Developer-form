<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<script>

function showPass() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function showRepeatPass() {
    var x = document.getElementById("re-enter_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

var cities = [['Ahmedabad', 'Surat', 'Vadodara'], ['Mumbai', 'Pune', 'Nagpur'], ['Lucknow', 'Kanpur', 'Gorakhpur'], ['Jaipur', 'Jaiselmer', 'Chhitorgadh']];
var Name, Age, Gender, Email, Contact, LinkedIn, Username, Languages, State, City, flag = 0;

$(function () {
    var lang = new Set(), gen;
    $("#name").on("blur", function () {

        if (!(/^([a-zA-Z\s]{3,})$/.test($("#name").val()))) {
            $("#nameErr").html("   Please enter valid name").css("color", "red");
            Name = undefined;
        }
        else {
            Name = $("#name").val();
            $("#nameErr").html("");
        }
    });

    $("#age").on("blur", function () {

        if ($("#age").val() < 20 || $("#age").val() > 50 || !(/^([0-9]{2})$/)) {
            $("#ageErr").html("   Please enter valid age(between 20 and 50)").css("color", "red");
            Age = undefined;
        }
        else {
            $("#ageErr").html("");
            Age = $("#age").val();
        }
    });

    $(".gender").on("change", function () {
        if ($(this).is(":checked")) {
            gen = $(this).val();
            Gender = $(this).val();
        }

    });


    $("#email").on("blur", function () {

        if (!(/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/).test($("#email").val())) {
            $("#emailErr").html("   Please enter valid email").css("color", "red");
            Email = undefined;
        }
        else {
            Email = $("#email").val();
            $("#emailErr").html("");
        }
    });

    $("#contact").on("blur", function () {

        if (!(/^([6789]{1}[0-9]{9})$/).test($("#contact").val())) {
            $("#contactErr").html("   Please enter valid contact").css("color", "red");
            Contact = undefined;
        }
        else {
            Contact = $("#contact").val();
            $("#contactErr").html("");
        }
    });

    $("#linkedIn_URL").on("blur", function () {

        if (!(/[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/).test($("#linkedIn_URL").val())) {
            $("#urlErr").html("   Please enter valid url").css("color", "red");
            LinkedIn = undefined;
        }
        else {
            LinkedIn = $("#linkedIn_URL").val();
            $("#urlErr").html("");
        }
    });

    $("#username").on("blur", function () {

        if (!(/^([A-Za-z0-9]{5,})$/).test($("#username").val())) {
            $("#usernameErr").html("   Please enter valid username(5 or more characters)").css("color", "red");
            Username = undefined;
        }
        else {
            Username = $("#username").val();
            $("#usernameErr").html("");
        }
    });

    $("#password").on("blur", function () {

        if (!(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/).test($("#password").val())) {
            $("#passwordErr").html("   Please enter valid password").css("color", "red");
            $("#re-enter_password").attr('disabled', 'true');
        } else {
            $("#passwordErr").html("");

            $("#re-enter_password").removeAttr('disabled');
        }
    });

    $("#re-enter_password").on("blur", function () {
        if ($("#password").val() !== $("#re-enter_password").val()) {
            $("#re-enterErr").html("   Password not Matched").css("color", "red");
        }
        else {
            $("#re-enterErr").html("");
        }
    });

    $(".languages").click(function () {
        if ($(this).is(":checked")) {
            lang.add($(this).val());

        } else {

            lang.delete($(this).val());
        }
    });

    $("#state").on("change", function () {
        $("#city").html("");
        if ($("#state option:selected").index() > 0) {
            for (var i = 0; i < cities[$("#state option:selected").index() - 1].length; i++) {

                $("#city").append(new Option(cities[$("#state option:selected").index() - 1][i]));
            }
            State = $("#state option:selected").val();
        }
    });


});
</script>
</body>
</html>
