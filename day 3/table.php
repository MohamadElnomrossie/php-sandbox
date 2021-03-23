
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  </head>
  <body>
  <?php 
  $users = [
      (object)[
          'id'=>1,
          'name'=>'ahmed',
          "gender"=>(object)[
              'gender'=>'m'
          ],
          'hobbies'=>[
              'football','swimming','running'
          ],
          'activities'=>[
              "school"=>'drawing',
              'home'=>'painting'
          ]
      ]
      ,
      (object)[
          'id'=>2,
          'name'=>'mohamed',
          "gender"=>(object)[
              'gender'=>'m'
          ],
          'hobbies'=>[
              'swimming','running',
          ],
          'activities'=>[
              "school"=>'painting',
              'home'=>'drawing'
          ]
      ]
      ,
      (object)[
          'id'=>3,
          'name'=>'mena',
          "gender"=>(object)[
              'gender'=>'f'
          ],
          'hobbies'=>[
              'running',
          ],
          'activities'=>[
              "school"=>'painting',
              'home'=>'drawing'
          ]  
      ]
  ];
  $table='<table class="table"><thead><tr>';
  
  foreach($users[0] as $k=>$v){
    $table.='<th scope="col">'.$k.'</th>';
  }
  $table.='</tr></thead><tbody>';
  echo $table;
$row="";
for ($i=0;$i<count($users);$i++)
{$row.="<tr>";
    $gender=($users[$i]->gender->gender=="m")?"male":"female";
    $row.='<th>'.$name=$users[$i]->id.'</th>';
    $row.='<td>'.$users[$i]->name.'</td>';
    $row.='<td>'.$gender.'</td>';
    $row.='<td>'.join(", ",$users[$i]->hobbies).'</td>';
    $row.='<td>'.join(", ",$users[$i]->activities).'</td></tr>';
}
echo $row;
$table.='</tbody></table>';
?>
  </body>
</html>