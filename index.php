<?php
    if(isset($_POST['next'])){
        $y = $_POST['next']+1;
    }
    elseif(isset($_POST['prev'])){
        $y = $_POST['prev']-1;
    }
    elseif(isset($_POST['now'])){
        $page = $_SERVER['PHP_SELF'];
        $y = date('Y');
    }else{
        $y = date('Y');
    }

    $today =  date('j');
    $month =  date('M');    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calender</title>
    <meta http-equiv="refresh" content="">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <style>
        .aaa{padding: 0 15px !important; vertical-align: middle !important;}
    </style>
</head>
<body class="container my-4 text-center">
    <div class="row">
        <?php
            $days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            foreach($days as $day){
                $$day = array();
            }
    
            for($i=1; $i<=12; $i++){
                $m = date('M', strtotime($y.'-'.$i.'-01'));
                $d = date('D', strtotime($y.'-'.$i.'-01'));

                foreach($days as $day){
                    if($day == $d){
                        $$day[] = array($d=>$m);
                    }
                }                
            }
        ?>
        <div class="row" style="display: none;">
            <?php
                foreach($days as $day){ ?>
                    <div class="col">
                        <?= var_export($$day); ?>
                    </div>         
                <?php } ?>
        </div>
    </div>

    <table class="table table-bordered">
        <?php
            for($j=1; $j<=3; $j++){ ?>
                <tr>
                    <?php if($j == 1){ ?>
                        <td colspan="5" rowspan="3" >
                            <form action="" method="post">
                                <button type="submit" name="prev" value="<?= $y; ?>" class="btn btn-sm btn-outline-primary">&#9756 Previous year</button>
                                <button type="submit" name="now" value="<?= $y; ?>" class="btn btn-sm btn-outline-success">Default</button>
                                <button type="submit" name="next" value="<?= $y; ?>" class="btn btn-sm btn-outline-primary">Next year &#9758</button>
                            </form>
                            <span class="fs-5">One page calender <?= $y; ?></span>
                        </td>
                    <?php }
                        $cl = 1;
                        foreach($days as $day){ ?>
                            <td class="<?= ($month == $$day[$j-1][$day] ? 'bg-info' : '') ?>">
                                <?= $$day[$j-1][$day]?>
                                <?php ($month == $$day[$j-1][$day] ? $c = $cl : ''); ?>
                            </td>
                        <?php $cl++; } ?>
                </tr>
        <?php } ?>

        <?php
            for($j=1; $j<=7; $j++){ ?>
                <tr>
                    <?php
                        for($k=1; $k<=5; $k++){ ?>
                            <!-- date (1-31) -->
                            <?php $d = ($k==1 ? $j : (($j>3 && $k==5) ? '' : $j+($k-1)*7)); ?>
                            <td class="<?= ($today == $d ? 'bg-info' : '') ?>">
                                <?=$d?>
                                <?php ($today == $d ? $r = $j : '') ?>
                            </td>
                    <?php } ?>
                    <?php
                        $loop = 1;
                        for($l=$j; $l<=7; $l++){ ?>
                            <!-- day (Sat to Fri) -->
                            <td class="<?= ($l==6 || $l==7 ? 'text-danger fw-bold ' : ''); ?><?= ($r.$c == $j.$loop ? ' bg-info' : ''); ?>">
                                <?= $days[$l-1];?>
                            </td>
                            <?php
                                ($l==7 ? $l=0 : '');
                                $loop++;                      
                                if($loop==8){
                                    break;
                                }
                        } 
                    ?>                        
                </tr>
        <?php } ?>
    </table>

    <script src="assets/jquery-3.7.1.min.js"></script>
    <script src="assets/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            var d = new Date();
            var date = d.getDate();
        });        
    </script>
</body>
</html>