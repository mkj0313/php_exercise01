<?php

function self_introduction($skills, $likes)
{
    // コードを追記
    $skills_quantities = count($skills);
    $likes_quantities = count($likes);
    $all_skills = '';
    $all_likes = '';

    $all_skills = implode('、', $skills);
    $all_likes = implode('、', $likes);


    return <<<EOM
    私の特技は{$skills_quantities}個あり、{$all_skills}です｡<br>
    また、趣味は{$likes_quantities}個あり、{$all_likes}です｡
    EOM;
}

$skills = ['書道', '料理', '英会話', '作文'];
$likes = ['ランニング', '釣り', '運転'];

echo self_introduction($skills, $likes);
