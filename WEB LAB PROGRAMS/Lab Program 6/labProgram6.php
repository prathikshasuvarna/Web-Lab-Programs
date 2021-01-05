<!--USN:4MT17IS039 NAME: PRATHIKSHA SUVARNA
6. Write a PHP program to keep track of the number of visitors visiting the web page and to
display this count of visitors, with proper headings. -->




<strong style="color:green;background:lightpink;">
<?php
    $handle = fopen("counter.txt","r");
    if(!$handle)
    {
        echo "Could not open the file";
    }
    else{
        $counter =(int)fread($handle,20);
        fclose($handle);
        $counter++;
        echo "<h1 align=center>Welcome To the Page</h1>
              <h1 align=center><strong>You are visitor Number ". $counter . "</strong></h1>";
        $handle = fopen("counter.txt","w");
        fwrite($handle,$counter);
        fclose($handle);
    }
?>