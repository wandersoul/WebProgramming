<?php
    //Set the page title
    $page_title = "Marc's Trading Card";
    // Insert the page header
    require_once('header.php');
?>
<!--Trading Card Section-->
<section>
    <!--Card Face, on top of border-->
    <div id="face">
        <!--Header division of card-->
        <div id="head">
            <!--Header for the title of the card-->
            <h1>Marc Anderson</h1>
            <!--Icons for card costing-->
            <img src="http://webdesign4.georgianc.on.ca/~200235076/AdvWebPro/trading_card/image/White.png" alt="White Mana Symbol" />
            <img src="http://webdesign4.georgianc.on.ca/~200235076/AdvWebPro/trading_card/image/White.png" alt="White Mana Symbol" />
            <img src="http://webdesign4.georgianc.on.ca/~200235076/AdvWebPro/trading_card/image/Black.png" alt="Black Mana Symbol"/>
            <img src="http://webdesign4.georgianc.on.ca/~200235076/AdvWebPro/trading_card/image/Black.png" alt="Black Mana Symbol"/>
        </div>
        
        <!--Image Container-->
        <div id="art">
            <!--Card Art, Picture of Marc-->
            <img src="http://webdesign4.georgianc.on.ca/~200235076/AdvWebPro/trading_card/image/card_art2.png" alt="Image of Marc Anderson"/>
        </div>
        
        <!--Types Container-->
        <div id="type">
            <!--headers for card types-->
            <h2>Legendary Creature - Human Wizard</h2>
            <!--Icon for card edition-->
            <p id="icon">M</p>
        </div>
        
        <!--Rules Container-->
        <div id="rules">
            <!--Container for rules-->
            <p class="rule">Lifelink</p>
            <p class="rule">Reach</p>
            <p class="rule">When Marc Anderson enters the battlefield, sacrifice another creature you control. You gain X life and draw X cards, where X is that creature's power.</p>
            <!--Container for flavor text-->
            <p class="flavor">"Let us tip the scales and see how your 'balance' serves you."<p>
        </div>
        
        <!--tiny footer indicating power-->
        <div id="foot">
            <!--Creature Power and Toughness-->
            <p id="power_tough">3/4</p>
        </div>
    </div>
    
</section>

<script type="text/javascript">

</script>
<?php
?>