<?php




if(!empty($_POST)){
    $array['status'] = 'OK';
    $array['result'] = 250;
    $array['msg'] = "Es una petición POST";    

    echo json_encode($array);
    return;
}

if(!empty($_GET)){
    $array['status'] = 'KO';
    $array['result'] = 0;
    $array['msg'] = "no deberías estar aquí";    

    echo json_encode($array);
    return;
}

