<?php 
//1
for($i=1;$i<=13;$i++)
{
    for($j=1;$j<=7;$j++)
    {   
        if(($i==1)||($i==13))
        {
            if($j==4)
            {
                echo "*";
            }
            else
            {
                echo str_repeat("&nbsp;",2);
            }
        }
        else if(($i==2)||($i==4)||($i==6)||($i==8)||($i==10)||($i==12))
        {
            echo str_repeat("&nbsp;",2);
        }
        else if($i==3)
        {
            if(($j==3)||($j==4)||($j==5))
            {
                echo "*";
            }
            else
            {
                echo str_repeat("&nbsp;",2);
            }
        }
        else if($i==5)
        {
            if(($j==2)||($j==3)||($j==4)||($j==5)||($j==6))
            {
                echo "*";
            }
            else
            {
                echo str_repeat("&nbsp;",2);
            }
        }
        else if($i==7)
        {
            echo "*";
        }
        else if($i==9)
        {
            if(($j==2)||($j==3)||($j==4)||($j==5)||($j==6))
            {
                echo "*";
            }
            else
            {
                echo str_repeat("&nbsp;",2);
            }
        }
        else if($i==11)
        {
            if(($j==3)||($j==4)||($j==5))
            {
                echo "*";
            }
            else
            {
                echo str_repeat("&nbsp;",2);
            }
        }
    }
    echo "<br/>";
}



/*      *
       ***
      *****
     *******
      *****
       ***
        *
*/
echo "<br/>";
echo "<br/>";
//2
for($i=1;$i<=13;$i++)
{
    for($j=1;$j<=12;$j++)
    {
        if($i==1 || $i==13)
        {
            echo "#";
        }
        else if($i==2)
        {   
            if($j==1)
            { 
                echo "#";
                break;
            }
            else{
                echo str_repeat("&nbsp;",2);
            }
        }
        else if($i==3)
        {
            if($j==2)
            {
                echo str_repeat("&nbsp;",2);
            }
            else
            {
                echo "#";
            }
        }
        else if($i==4)
        {
            if(($j==1)||($j==3)||($j==12))
            {
                echo "#";
            }
            else
            {
                echo str_repeat("&nbsp;",2);
            }
        }
        else if($i==5)
        {
            if(($j==2)||($j==4)||($j==11))
            {
                echo str_repeat("&nbsp;",2);
            }
            else
            {
                echo "#";
            }
        }
        else if($i==6)
        {
            if(($j==1)||($j==3)||($j==5)||($j==10)||($j==12))
            {
                echo "#";
            }
            else
            {
                echo str_repeat("&nbsp;",2);
            }
        }
        else if($i==7)
        {
            if(($j==1)||($j==3)||($j==5)||($j==8)||($j==10)||($j==12))
            {
                echo "#";
            }
            else
            {
                echo str_repeat("&nbsp;",2);
            }
        }
        else if($i==8)
        {
            if(($j==1)||($j==3)||($j==5)||($j==8)||($j==10)||($j==12))
            {
                echo "#";
            }
            else
            {
                echo str_repeat("&nbsp;",2);
            }
        }
        else if($i==9)
        {
            if(($j==2)||($j==4)||($j==9)||($j==11))
            {
                echo str_repeat("&nbsp;",2);
            }
            else
            {
                echo "#";
            }
        }
        else if($i==10)
        {
            if(($j==1)||($j==3)||($j==10)||($j==12))
            {
                echo "#";
            }
            else
            {
                echo str_repeat("&nbsp;",2);
            }
        }
        else if($i==11)
        {
            if(($j==2) || ($j==11))
            {
                echo str_repeat("&nbsp;",2);
            }
            else 
            {
                echo "#";
            }
        }
        else if($i==12)
        {
            if($j==1 || $j==12)
            {
                echo "#";
            }
            else
            {
                echo str_repeat("&nbsp;",2);
            }
        }
    }
    echo "<br/>";
}

/*For input 12
############
#
# ##########
# #        #   
# # ###### #
# # #    # #
# # #  # # #
# # #  # # #
# # #### # #
# #      # #
# ######## #
#          #
############*/