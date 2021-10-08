<div class="workspace__items">
    <div class="col-s3 workspace__item-ctn">
        <div class="workspace__item">
            <h1><?php echo $data["numof_users"]; ?></h1>
            <p>user</p>
        </div>
    </div>
    <div class="col-s3 workspace__item-ctn">
        <div class="workspace__item">
            <h1><?php echo $data["numof_users"]; ?></h1>
            <p>user</p>
        </div>
    </div>
    <div class="col-s3 workspace__item-ctn">
        <div class="workspace__item">
            <h1><?php echo $data["numof_users"]; ?></h1>
            <p>user</p>
        </div>
    </div>
    <div class="col-s3 workspace__item-ctn">
        <div class="workspace__item">
            <h1><?php echo $data["numof_users"]; ?></h1>
            <p>user</p>
        </div>
    </div>
</div>
<table>
    <tr>
        <th colspan="3">
            Num of user: <?php echo $data["numof_users"] ?>
        </th>
    </tr>
    <tr>
        <th>id</th>
        <th>user_name</th>
        <th>email</th>
    </tr>
    <?php foreach ($data["users"] as $user) : ?>
        <tr>
            <td><?php echo $user[0] ?></td>
            <td><?php echo $user[1] ?></td>
            <td><?php echo $user[2] ?></td>
        </tr>
    <?php endforeach; ?>

</table>