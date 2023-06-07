<?php

$feedback = [
    [
        'id'    => '1',
        'name'  => 'Purity Irungu',
        'email'  => 'purity@gmail.com',
        'body'   => 'Purity is a Web Developer!'
    ],
    [
        'id'    => '2',
        'name'  => 'Maggie Irungu',
        'email'  => 'maggie@gmail.com',
        'body'   => 'Maggie is a Game Developer!'
    ],
    [
        'id'    => '3',
        'name'  => 'Boniface Irungu',
        'email'  => 'boniface@gmail.com',
        'body'   => 'Boniface is a Android Developer!'
    ],
    [
        'id'    => '4',
        'name'  => 'Ignatius Irungu',
        'email'  => 'ignatius@gmail.com',
        'body'   => 'Ignatius is a Cyber Developer!'
    ]
    ];
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2>Family Feedback</h2>

        <?php if(empty($feedback)): ?>
            <h2>There is no feedback!</h2>
        <?php endif; ?>    

        <?php foreach($feedback as $details): ?>
        <div class="card">
            <div class="card-body">
            <?php echo $details['body']; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </body>
</html>