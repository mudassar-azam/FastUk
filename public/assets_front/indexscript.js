

window.onscroll = function() {scrollFunction()};
let ch = document.getElementById("navbar");

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        ch.classList.add("headone");
    } else {
        ch.classList.remove("headone");
    }
}

$(document).ready(function(){

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);


    $(".next2").click(function(event){

        var numberOfChecked = $('input:radio:checked').length;


        if(numberOfChecked < 1){
            alert('choose Vehicle');
        }
        else{


            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

//Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
            next_fs.show();
//hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function(now) {
// for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({'opacity': opacity});
                },
                duration: 500
            });
            setProgressBar(++current);


        }


    });






    $(".next").click(function(){



        var from=$('#locationTextField').val();
        var to=$('#locationTextField2').val();
        var b_date=$('#b_date').val();
        var p_time=$('#p_time').val();
// alert(b_date);
        if (from == '' || b_date=='' || p_time=='') {

            alert('Information missing');
            exit();

        }else{}

        if(to==''){

            $('.est_cost').each(function() {


                $(this).html('Min:$7');
            });
            $('.distance_place').html('No-');

        }
        else{
            $('.distance_place').html('calc..');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url:'{{route("get.distance")}}',
                data: {from:from,to:to,submit:'submit'},
                cache: false,
                success: function(dist){
                    // alert(dist);
                    if (dist!=''){

                        let distance=parseInt(dist);

                        $('.est_cost').each(function() {

                            let each_cost =$(this).data('price');
                            let cost=parseInt(each_cost) ;
                            let total=distance*cost;
                            $(this).html(total);
                        });

                        $('.distance_place').html(distance);
                    }
                    else{
                        exit();
                    }
                }
            });
        }




        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
        // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            },
            duration: 500
        });
        setProgressBar(++current);
    });





    $(".previous").click(function(){

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();

        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
        // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            },
            duration: 500
        });
        setProgressBar(--current);
    });

    function setProgressBar(curStep){
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width",percent+"%")
    }




    $(".submit").click(function(){
        return false;
    })

});

function init() {
    var input = document.getElementById('locationTextField');
    var autocomplete = new google.maps.places.Autocomplete(input);
    var input2 = document.getElementById('locationTextField2');
    var autocomplete = new google.maps.places.Autocomplete(input2);
}

google.maps.event.addDomListener(window, 'load', init);

// Get the modal
var modal = document.getElementById("myModal");

var guestModal = document.getElementById("guestModal");


// Get the button that opens the modal stripe payment
var btn = document.getElementById("myBtn");

// Get the button that opens the modal paypal
var btn1 = document.getElementById("myBtn1");


var btn2 = document.getElementById("myBtn2");


// login model
var loginmodel = document.getElementById("loginmodel");

var btn3 = document.getElementById("myBtn3");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close2")[0];
var span3 = document.getElementsByClassName("close3")[0];

// When the user clicks the button, open the modal
btn.onclick = function(e) {
    e.preventDefault();
    modal.style.display = "block";
}
btn1.onclick = function(e) {
    e.preventDefault();
    // modal.style.display = "block";
    swal("Paypal Method!");
}
btn2.onclick = function(e) {
    e.preventDefault();
    guestModal.style.display = "block";

}
btn3.onclick = function(e) {
    e.preventDefault();
    loginmodel.style.display = "block";

}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";

}
span2.onclick = function() {

    guestModal.style.display = "none";
}
span3.onclick = function() {

    loginmodel.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        guestModal.style.display = "none";
    }
}



function login(e) {

    e.preventDefault();
    var txt ='';
    var  email= $('#email').val();
    var password =$('#password').val();
    var remember =$('#remember').val();
    var loginmodel = document.getElementById("loginmodel");
    var btn3 = document.getElementById("myBtn3");
    var btn2 = document.getElementById("myBtn2");
    var firstnext = document.getElementById("firstnext");
    var usrdashboard = document.getElementById("usrdashboard");
    var usrregister = document.getElementById("usrregister");

    $('.loginerror').html('<img src="https://i.pinimg.com/originals/78/e8/26/78e826ca1b9351214dfdd5e47f7e2024.gif" style="width:150px;height:150px;">');

    $.ajax({
        type: "POST",
        url:'{{route("login")}}',
        data: {
            "_token": "{{ csrf_token() }}",
            email:email,password:password,remember:remember},
        cache: false,
        success: function(data){

            loginmodel.style.display = "none";
            btn2.style.display = "none";
            btn3.style.display = "none";
            firstnext.style.display = "block";
            usrdashboard.style.display = "block";
            usrregister.style.display = "none";

            swal("Successfully Login!","","success");


        },
        error: function (data) {

            $('.loginerror').html('Email or Password Not Match');

            console.log('b');

        }
    });
}
function guestcreate(){

    var form='formguest';
    let name = document.forms[form]["guestname"].value;
    let fname = document.forms[form]["guestfname"].value;
    let phone = document.forms[form]["guestpnumber"].value;
    let address = document.forms[form]["guestaddress"].value;
    var guestModal = document.getElementById("guestModal");
    // console.log(name,fname,phone,address);
    if (name==''|| fname==''|| phone==''|| address==''){
        swal("Please Fill All Fields!","","error");
        return false;
    }
    $.ajax({
        type: "POST",
        url:'{{route("create.guest")}}',
        data: {
            "_token": "{{ csrf_token() }}",
            name:name,fname:fname,phone:phone,address:address},
        cache: false,
        success: function(data){

            if (data.status=='done'){
                guestModal.style.display = "none";
                swal("Guest created!","please copy Track ID in safe place -> "+data.track_id,"success");
            }else{
                swal("Number already in use!","","error");
            }



        },
        error: function (data) {

            // $('.loginerror').html('Email or Password Not Match');

            // console.log('b');
            swal("error !","","error");


        }
    });


}

$(".already-guest").click(function(){
    document.getElementById("enter_guest").style.display="none";
    document.getElementById("confirm_guest").style.display="block";
    document.getElementById("guestform").style.display="none";
});
$(".create-guest").click(function(){
    document.getElementById("enter_guest").style.display="block";
    document.getElementById("confirm_guest").style.display="none";
    document.getElementById("guestform").style.display="block";
});
$(".checkguest").click(function(){
    let form='formguest';
    let trackid = document.forms[form]["trackid"].value;
    // alert(trackid);

    $.ajax({
        type: "POST",
        url:'{{route("login.guest")}}',
        data: {
            "_token": "{{ csrf_token() }}",
            trackid:trackid},
        cache: false,
        success: function(data){

            if (data.status==0){

                swal("Wrong Track ID!","please Enter Correct Track ID","error");
            }else if(data.status==1){

                $.ajax({
                    type: "GET",
                    url:'{{route("home.guest")}}',
                    data: {
                        trackid:trackid},
                    cache: false,
                    success: function(data){

                        if (data.status==0){

                            swal("Error Occur!","Something Went Wrong Please Retry","error");
                        }else if(data.status==1){
                            swal("Redirecting..!","","success");
                            window.location.href = "{{url('/guest-home-page')}}";
                        }

                    },

                });
            }

        },
        error: function (data) {

            swal("error !","","error");

        }
    });

})

