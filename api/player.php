<?php

function deletePlayer($id)
{
    include '../connection.php';

    // mengecek id player
    $sql = 'SELECT * FROM `players` WHERE `id` = ' . $id;
    $result = mysqli_query($conn, $sql);

    // Jika tidak ada id player
    if (mysqli_num_rows($result) == 0) {
        return json_encode(['status' => false, 'msg' => 'Tidak dapat menghapus.']);
    } else { // Jika id player ada, makan dilakukan penghapusan 

        $sql = 'DELETE FROM `players` WHERE `id` = ' . $id;

        if (mysqli_query($conn, $sql)) {
            return json_encode(['status' => true, 'msg' => "Records were deleted successfully."]);
        } else {
            return "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
}

function storePlayer()
{
    include '../connection.php';

    $sql = 'SELECT * FROM `teams` WHERE `registration_number` = "' . $_POST['registration_number'] . '"';
    $team_id = $conn->query($sql)->fetch_assoc()['id'];

    $test = "test/file.png";

    $sql = 'INSERT INTO `players` (`full_name`, `birth_date`, `birth_place`, `address`, `identity_number`, `height`, `weight`, `position`, `back_number`, `back_name`, `image_path`, `files`, `religion`, `team_id`, `gender_id`, `created_at`, `updated_at`) VALUES (' .
        '"' . $_POST['full_name'] . '",' .
        '"' . $_POST['birth_date'] . '",' .
        '"' . $_POST['birth_place'] . '",' .
        '"' . $_POST['address'] . '",' .
        '"' . $_POST['identity_number'] . '",' .
        '"' . $_POST['height'] . '",' .
        '"' . $_POST['weight'] . '",' .
        '"' . $_POST['position'] . '",' .
        '"' . $_POST['back_number'] . '",' .
        '"' . $_POST['back_name'] . '",' .
        '"' . $test .  '",' .
        '"' . $test .  '",' .
        '"' . $_POST['religion'] . '",' .
        '"' . $team_id . '",' .
        '"' . $_POST['gender_id'] . '",' .
        'NOW(), NOW());';

    $result = $conn->query($sql);

    if ($result) {
        return json_encode([
            'status' => true,
            'msg' => 'Pemain dengan nama ' . $_POST['full_name'] . ' berhasil dibuat!',
        ]);
    } else {
        return json_encode([
            'status' => false,
            'msg' => 'Gagal membuat pemain.'
        ]);
    }
}

if (isset($_POST['tipe'])) {
    if ($_POST['tipe'] == 'callFuncDelete')
        echo deletePlayer($_POST['id']);
    else if ($_POST['tipe'] == 'callFuncStore')
        echo storePlayer();
}
