<hr style="width: 100%;">


<div class="container" style="   width: 100%;  ">

    <!-- Comment-box section -->

    <strong class=" text-decoration-underline">Comment</strong>
    <div><input type="text" class=" my-3" placeholder=" Comment.." style=" width:100%; border:solid 1px;  "></div>
    <div style="display:flex;">
        <a href="" style=" width:fit-content" class=" margin0 replyancor">Send</a>
        <div id="hidecomment" style=" height:10px" class=" mx-3 replyancor"><i class="fa-solid fa-arrow-down"></i></div>
        <p>3</p>
    </div>
    <hr style=" width:100%;">


    <!-- comment looping section -->
    <div id="hiddencomment" style=" display:none;">

        <!-- Commented section -->

        <div id=" onlycomment" class=" mt-2" style=" display:flex; flex-direction:column; padding:3px;">
            <p class="margin0"> <strong>Rabin Aryal</strong> </p>
            <p class="margin0">2022.12.2</p>
            <p class="" style=" text-align:justify"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis quod ut vero corporis in quam aperiam necessitatibus, quos, ipsa illum magni suscipit at iure, nam ad! Repellendus nobis repudiandae placeat!</p>
            <div style="display:flex;">
                <div id="reply" style=" width:fit-content" class=" margin0 replyancor">Reply</div>
                <div id="replyhide" href="" style=" height:10px" class=" mx-3 replyancor"><i class="fa-solid fa-arrow-down"></i></div>
                <p>3</p>
            </div>

            <div id="replyinput" style=" display:none;">
                <input type="text" class=" my-3" placeholder=" Reply.." style=" width:100%; border:solid 1px;  ">
                <div style="display:flex;">
                    <a href="" style=" width:fit-content" class=" margin0 replyancor">Send</a>
                   
                </div>
                
            </div>

            <hr style=" width:100%;">
        </div>

        <!-- Reply section -->

        <div id="onlyreply" style=" display:none; padding-left: 8%; padding-top:7px ">
            <div style=" display:flex; flex-direction:column">
                <p class="margin0"> <strong>Rabin Aryal</strong> </p>
                <p class="margin0">2022.12.2</p>
                <p class="" style=" text-align:justify"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis quod ut vero corporis in quam aperiam necessitatibus, quos, ipsa illum magni suscipit at iure, nam ad! Repellendus nobis repudiandae placeat!</p>
                <div style="display:flex;">
                    <div id="replyinputshown" style=" width:fit-content" class=" margin0 replyancor">Reply</div>
                    <!-- <div style=" height:10px" class=" mx-3 replyancor"><i class="fa-solid fa-arrow-down"></i></div> -->
                </div>
            </div>

            <div id="replyinputsection" style="display: none;"><input type="text" class=" my-3" placeholder=" Reply.." style=" width:100%; border:solid 1px;  ">
            <div style="display:flex;">
                <a href="" style=" width:fit-content" class=" margin0 replyancor">Send</a>
            </div>
            </div>
            <hr style=" width:100%;">
        </div>
    </div>


</div>
<style>
    .margin0 {
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .replyancor {
        text-decoration: none;
        color: green;
        text-decoration-color: green;
        width: fit-content
    }

    .replyancor:hover,
    .replyancor:active {
        color: orangered;
        text-decoration-color: orangered;
    }
</style>

<script>
    var hidecomment = document.getElementById('hidecomment');
    var hiddencomment = document.getElementById('hiddencomment');


    var replyhide = document.getElementById('replyhide');

    var onlyreply = document.getElementById('onlyreply');

    // full comment hide toggle

    hidecomment.addEventListener('click', function() {

        if (hiddencomment.style.display == 'none') {

            hiddencomment.style.display = 'block';
        } else {
            hiddencomment.style.display = 'none';
        }
    })


    // full reply hide
    replyhide.addEventListener('click', function() {

        if (onlyreply.style.display == 'none') {

            onlyreply.style.display = 'block';
        } else {
            onlyreply.style.display = 'none';
        }
    })

    //  reply replyinput section

    var reply = document.getElementById('reply');

    var replyinput = document.getElementById('replyinput');

    reply.addEventListener('click', function() {

        if (replyinput.style.display == 'none') {

            replyinput.style.display = 'block';
        } else {
            replyinput.style.display = 'none';
        }
    })
    // repy input shown && reply input section
    var replyinputshown = document.getElementById('replyinputshown');

    var replyinputsection = document.getElementById('replyinputsection');

    replyinputshown.addEventListener('click', function() {

        if (replyinputsection.style.display == 'none') {

            replyinputsection.style.display = 'block';
        } else {
            replyinputsection.style.display = 'none';
        }
    })
</script>