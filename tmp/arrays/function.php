<?php
    function redline() {
?>
<hr style="
    background-color: #f00;
    height: 5px;
    "/>
<?php
}    

    function footer() 
    {
        echo "PHP Test Page &copy 2022";
    }

    echo "First Text";
    redline();

    echo "Second Text";
    redline();

    footer();

?>