$(document).ready(function(){
    $(".login-form").submit(function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: './php/login.php',
            data: new FormData(this),
            cache: false,
            processData: false,
            contentType: false,
            beforeSend: function () {
                $(".form-bg").css("opacity", "0.5");
                $(".loading").removeClass("d-none");
            },
            success: function (response) {
                $(".loading").addClass("d-none");
                $(".form-bg").css("opacity", "1");
                if (response.trim() == "success") {
                    $(".notification").html("<div class='row animate__animated animate__slideInRight'><div class='col-3 text-center pt-2 pl-4' style='background-color: rgb(33, 194, 33);'><i class='fa fa-check-circle text-light fa-2x'></i></div><div class='col-9 text-light' style='background-color: #32CD32'><h5 class='m-0'>Success</h5><p>Login successfully done.</p></div></div>");
                    setTimeout(function () {
                        window.location = "./profile/Dashboard.php";
                    }, 2000);
                } else {
                    $(".notification").html("<div class='row animate__animated animate__slideInRight'><div class='col-3 text-center pt-2 pl-4' style='background-color: #F8210F'><i class='fa fa-times-circle-o text-light fa-2x'></i></div><div class='col-9 text-light' style='background-color: #FF392F;'><div><h5 class='m-0'>Error</h5><p class='text-nowrap'>Username and password invalid !</p></div></div></div>");
                }

            }

        })
    })
})