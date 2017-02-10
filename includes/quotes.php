<div id="quote">
    
    <h2>Random Quote</h2>
    
        <?php
    
            $quotes = array("\"Two things are infinite: the universe and human stupidity; and I'm not sure about the universe.\" - Albert Einstein", "\"Better to remain silent and be thought a fool than to speak out and remove all doubt.\" - Abraham Lincoln", "\"Next time someone complains that you have made a mistake, tell him that may be a good thing. Because without imperfection, neither you nor I would exist.\" - Stephen Hawking", "\"Always borrow money from a pessimist. He won’t expect it back.\" - Oscar Wilde" ,"\"Being successful means sleeping when your tired, eating when your hungry, drinking when your thirsty, and getting up when your rested\" - My grandfather, Claude Lagenour","\"We few, we happy few, we band of brothers, for he today that sheds his blood with me shall be my brother\" - William Shakespeare from Henry V");
    
            echo "<p>".$quotes[rand(0,sizeof($quotes))]."</p>" ;
                       
        ?>
    
</div>