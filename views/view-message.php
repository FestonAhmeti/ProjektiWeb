<?php 
    include '../components/header.php';
    require_once '../programLogic/MessageMapper.php';

    if(!empty($_SESSION['is_logged_in']) && isset($_SESSION['is_logged_in']) 
        && $_SESSION['is_logged_in'] == 1 && $_SESSION['role'] == 1){

            $mapper = new MessageMapper();
            $msg = $mapper->getMessageById($_GET['msg_id']);
?>  
<!DOCTYPE html>
    <html>
    <head>
    <link rel="stylesheet" href="../css/view-message.css">
        
    </head>
    <body>
    <div class="view-message-main">
        <div class="message-card">
            <p><b>Message from:</b> <?= $msg['emri'].' '.$msg['mbiemri']?></p>
            <p><b>Email: </b><?= $msg['email']?></p>
            <textarea disabled><?= $msg['msg']?></textarea>
            <p><a href="
                <?php if($msg['is_read'] == 0) 
                    echo "../programLogic/modifikimet.php?action=set-read&msg-id=".$msg['id'];
                else if($msg['is_read'] == 1)
                    echo "../programLogic/modifikimet.php?action=set-unread&msg-id=".$msg['id'];?>">
                <?php if($msg['is_read'] == 1) echo "Mark as unread"; else echo "Mark as read"?>
            </a></p>
        </div>
    </div>
<?php } else {
    header("Location: ../views/index.php");
}
?>

<?php include '../components/footer.php'?>