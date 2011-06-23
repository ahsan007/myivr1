<?php
say("hello this is my first tropo app");
    ask("What's your four or five digit pin? Press pound when finished", array(
        "choices"=>"[4-5 DIGITS]",
        "terminator" => "#",
        "timeout" => 15.0,
        "mode" => "dtmf",
        "onChoice" => "choiceFCN"
        )
    );
    function choiceFCN($event) {
        say("thank you and enjoy this music http://hosting.tropo.com/12345/www/audio/airtel tone.mp3"");
        }
?>
