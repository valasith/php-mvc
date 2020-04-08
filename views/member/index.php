<?php require_once "views/header.php"; ?>
    <div style="text-align: right; margin: 20px 0px 10px;">
        <a id="btnAddAction" class="btn btn-primary" href="index.php?action=member-add">Add Member</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="bg-primary">
            <tr class="text-light">
                <th><strong>First Name</strong></th>
                <th><strong>Last Name</strong></th>
                <th><strong>Action</strong></th>
            </tr>
            </thead>
            <tbody>
            <?php if (! empty($result)): ?>
            <?php foreach ($result as $k => $v): ?>
                <tr>
                    <td>
                        <?php echo $result[$k]["firstname"]; ?>
                    </td>
                    <td>
                        <?php echo $result[$k]["lastname"]; ?>
                    </td>
                    <td>
                        <a class="btn btn-warning btnEditAction" href="index.php?action=member-edit&id=<?php echo $result[$k]["id"]; ?>">
                            <img src="assets/image/icon-edit.png" />
                        </a>
                        <a class="btn btn-danger btnDeleteAction" href="index.php?action=member-delete&id=<?php echo $result[$k]["id"]; ?>">
                            <img src="assets/image/icon-delete.png" />
                        </a>
                    </td>
                </tr>
            <?php endforeach;?>
            <?php endif;?>
            <tbody>
        </table>
    </div>
</body>
</html>