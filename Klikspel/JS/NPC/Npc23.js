var Npcname = "Hotel Owner Anna";

$(function() {
    document.getElementById('Bio').innerHTML = "BIO: Hi there i am Anna <br> " +
        " I strted this hotel 18 years ago and it growed to the biggest one in the city  <br> " +
        " I refuse to leave my city <br>" +
        "So you can leave unless you have something to ask";

    $( "#dialog-2" ).dialog({
        autoOpen: false,
        buttons: {
            Well_any_need_of_help: function() {
                $( "#Story" ).replaceWith(Npcname + "<p id='Story'> WEll excatly let me think about that </p>");
                $('#dialog-2').dialog({
                    autoOpen: true,
                    buttons: {
                        Okey: function () {
                            $( "#Story" ).replaceWith("<p id='Story'> Well no . i cant think anything for you <br>" +
                                "even if its about the hotel </p>");
                            $('#dialog-2').dialog({
                                autoOpen: true,
                                buttons: {
                                 Okey: function () {
                                     $( "#Story" ).replaceWith("<p id='Story'> So good luck </p>")
                                     $('#dialog-2').dialog({
                                         autoOpen: true,
                                         buttons: {
                                             thank_you: function () {$(this).dialog('close')}
                                         }
                                     })
                                 },
                                },
                            })},
                    }
                })},
            How_is_youre_job: function () {
                $( "#Story" ).replaceWith(Npcname + "<p id='Story'> Well it is quite a hacktick job<br>" +
                    " even in the night hours   <br>" +
                    " So think about it before you want to apply </p>");
                $('#dialog-2').dialog({
                    autoOpen: true,
                    buttons: {
                        Well_Is_it_hecktik: function () {
                            $( "#Story" ).replaceWith("<p id='Story'> Well What do you think  </p>");
                            $('#dialog-2').dialog({
                                autoOpen: true,
                                buttons: {
                                    yes: function () {
                                        $( "#Story" ).replaceWith("<p id='Story'> So you`re smart </p>");
                                        $('#dialog-2').dialog({
                                            autoOpen: true,
                                            buttons: {
                                                Okey: function () {$(this).dialog('close');},
                                            },
                                        })},
                                    Nope: function () {$(this).dialog('close');}
                                }
                            })},
                        Well_goodBye: function () {$(this).dialog('close');}
                    }
                })},
            Goodbye: function () {$(this).dialog('close');}
        },
        title: "Conversation",
        position: {
            my: "left center",
            at: "left center"
        }
    });
    $( "#opener-2" ).click(function() {
        $( "#dialog-2" ).dialog( "open" );
    });
});