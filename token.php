<?php   
    include_once '../PokerIrelandSystem/core/init.inc.php';
    $page_title = " PokerIreland | Home";
    include_once 'header.php';
?>

<div id="token-content"></div>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="http://www.kholdem.net/livescore/scripts/kholdem.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // Change this variable with your event token
        var forWhich = window.location.search.split('?forwhich=')[1];
        // var map = {
        //     ipo_bray_side_event_1:          'pmzyeZRRVY',
        //     ipo_bray_side_event_2:          'yCGcHmmzGu',
        //     ipo_side_event_3:               'NXbbDCZyuw',
        //     default_token:                  'FTXCmcofME',
        //     ipo_bray_main_event_day_2:      'wCpEfXsdtF',
        //     ipo_bray_main_event_day_1b:     'QhDZUhFTgq',
        //     ipo_bray_main_event_day_1a:     'gQyzHqaBXy',
        // };

        var map = {
            default_token:       'FTXCmcofME',
            IPO_Cork_Day_1A:   'whdEsGAmTs',
            IPO_Cork_Day_1B:   'whdEsGAmTs',
            IPO_Cork_Day_2:    'tVxpRPyQGE',
        };




        

        $("#token-content").players({
            eventToken: map[ forWhich ] || map[ default_token ],
            progressLabel: "Loading in progress...",
            skin: "dark"
        });
    });
</script>

<?php include_once 'footer.php'; ?>

