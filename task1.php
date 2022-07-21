<!-- Write a program to check student grade based on marks
    Description:
    Write a program to check student grade based on the marks using if-else statement.
    Conditions:
        • If marks are 60% or more, grade will be First Division.
        • If marks between 45% to 59%, grade will be Second Division.
        • If marks between 33% to 44%, grade will be Third Division.
        • If marks are less than 33%, student will be Fail. -->

<?
    $marks = 41;
    // echo $Marks;

    if($marks > 60){
        echo("First Division");
    }
    elseif ($marks > 45){
        echo("Second Division");
    }
    elseif ($marks > 33){
        echo("Third Division");
    }
    else{
        echo("FAIL");
    }
?>
