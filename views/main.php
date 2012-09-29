<script>
    var dont_follow = [
        <?php
        foreach( $dont_follows as $dont )
            echo "'{$dont}',";
        ?>
    ];

    function read_random_link()
    {
        var links = document.links,
            key = Math.floor( Math.random() * links.length ),
            link = String( links[key] ),
            last_char = link.charAt( link.length - 1 ),
            hash_pos = link.indexOf( '#' );

        // Is the selected link in the dont follow array
        for( var i = 0; i < dont_follow.length; ++i )
            if( link.indexOf( dont_follow[i] ) != -1 )
                return read_random_link();

        // If linker stops this will show you what link it stopped on
        // add a piece of that link like "mailto:" to the dont_follow config
        l( link );

        return link;
    }

    // Run when the page is loaded
    window.onload = function(){
        window.setTimeout( function(){
            link = read_random_link();
            window.location = link;
        }, <?php echo $refresh_interval ?> );
    }

</script>